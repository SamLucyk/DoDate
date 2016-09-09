<?php
putenv ("GOOGLE_APPLICATION_CREDENTIALS=../vendor/google/auth/src/Credentials/LocalAventura-7b38a63d7eb2.json");
require_once '../vendor/autoload.php';

class Main_model extends CI_Model{

    function get( $args = array() ){
        $data['first'] = $_POST['first'];
        $data['last'] = $_POST['last'];
        $data['email'] = $_POST['email'];
        $data['who'] = $_POST['who'];
        $data['what'] = $_POST['what'];
        $this->mail($_POST);
        return $data; 
    }
    
    function mail( $data ){
        $to = "lucyk.s@husky.neu.edu";
        $subject = "Someone requested a DoDate!";
        $string_data = $string_version = implode(' | ', $data);
        $message = "
        <html>
        <head>
        </head>
        <body>
        <p>
        <b>Name: </b>".$data['first']." ".$data['last']."<br>
        <b>Email: </b>".$data['email']."<br>
        <b>Who: </b>".$data['who']."<br>
        <b>What: </b>".$data['what']."<br>
        </p>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers

        mail($to,$subject,$string_data,$headers);
    }
    
    function get_result( ){
        if (!isset($_POST["question1"])){
            throw new Exception('No results');
        }
        $email = $_POST["email"];
        $first = $_POST["first"];
        $last = $_POST["last"];
        $types = $GLOBALS['types'];
        $pages = ["art-enthusiast", "nature-lover", "adrenaline-junkie", "wino", "foodie", "history-buff", "night-owl"];
        $questions = $GLOBALS['questions'];
        $csv_a = $csv_q = $results = [];
        $score = [0,0,0,0,0,0,0];
        $results['answers'] = [$_POST["question1"], $_POST["question2"], $_POST["question3"], $_POST["question4"], $_POST["question5"], $_POST["question6"], $_POST["question7"], $_POST["question8"]];

        for ($i = 0; $i < count($questions); $i++) {
            $a = $results['answers'][$i];
            $q = $questions[$i];
            $answer = $q->answers[$a];
            array_push($csv_q, $q->text);
            array_push($csv_a, $answer->text);
            $score = array_map(function () { return array_sum(func_get_args()); }, $score, $answer->score);
        };

        $result_index = array_keys($score, max($score))[0];
        $this->updateSpreadsheet($result_index, $csv_q, $csv_a, $score, $types, $email, $first, $last);
        
        return $pages[$result_index];
    }
    
    function get_client_ip(){
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP')) $ipaddress = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR')) $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED')) $ipaddress = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR')) $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED')) $ipaddress = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR')) $ipaddress = getenv('REMOTE_ADDR');
            else $ipaddress = 'UNKNOWN';
            return $ipaddress;
    }
    
    function getLocation() {
        try{
            $clientIp = $this->get_client_ip();
            $urlTemplate = 'http://api.ip2location.com/?' . 'ip=%s&key=demo' .  '&package=WS10&format=json';
            $urlToCall = sprintf( $urlTemplate, $clientIp);
            $rawJson = file_get_contents( $urlToCall );
            $geoLocation = json_decode( $rawJson, true );
            $locKeys = ['country_name', 'region_name', 'city_name', 'zip_code'];
            foreach($locKeys as $k){
                if (!isset($geoLocation[$k])) $geoLocation[$k] = '-';
            } 
            $geoLocation["ip"] = $clientIp;
        }
        catch (Exception $e){
            $geoLocation = [];
        }
        return $geoLocation;
    }
    
    function getSpreadsheetService() {
        $client = new Google_Client();
        $client->useApplicationDefaultCredentials();
        $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
        $service = new Google_Service_Sheets($client);
        return $service;
    }
    
    function updateSpreadsheet($result_index, $csv_q, $csv_a, $score, $types, $email, $first, $last) {
        //https://docs.google.com/spreadsheets/d/1fZrsSGfxldlnReevJiO11vLVcCnr5_99ogMl8J_Y8uo/edit#gid=0
        $spreadsheetId = '1fZrsSGfxldlnReevJiO11vLVcCnr5_99ogMl8J_Y8uo';
        $loc = $this->getLocation();
        $range = 'A:A';
        $service = $this->getSpreadsheetService();
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        $row_num = count($values);
        // If there are no rows populate the top row
        if ($row_num == 0){
            $columns = ['Email', 'First', 'Last', 'IP', 'Country', 'Region', 'City', 'Zip Code', 'Date', 'Time', 'Timezone', 'Result', $types[0], $types[1], $types[2], $types[3], $types[4], $types[5], $types[6], $csv_q[0], $csv_q[1], $csv_q[2], $csv_q[3], $csv_q[4], $csv_q[5], $csv_q[6], $csv_q[7]];
            $topValueRange = new Google_Service_Sheets_ValueRange();
            $topValueRange->setValues(["values" => $columns]);
            $conf = ["valueInputOption" => "RAW"];
            $service->spreadsheets_values->update($spreadsheetId, 'A1', $topValueRange, $conf);
            $row_num += 1;
        };
        // Insert new data
        $row_num += 1;
        $range = 'A'.$row_num;
        $csvData = [$email, $first, $last, $loc['ip'], $loc['country_name'], $loc['region_name'], $loc['city_name'], $loc['zip_code'], date("d/m/y"), date("G:i:s"), date("T"),$types[$result_index], $score[0], $score[1], $score[2], $score[3], $score[4], $score[5], $score[6], $csv_a[0], $csv_a[1], $csv_a[2], $csv_a[3], $csv_a[4], $csv_a[5], $csv_a[6], $csv_a[7]];
        $valueRange = new Google_Service_Sheets_ValueRange();
        $valueRange->setValues(["values" => $csvData]);
        $conf = ["valueInputOption" => "RAW"];
        $service->spreadsheets_values->update($spreadsheetId, $range, $valueRange, $conf);
    }
    
    function get_result_display($category){
        $types = $GLOBALS['types'];
        $pages = ["art-enthusiast", "nature-lover", "adrenaline-junkie", "wino", "foodie", "history-buff", "night-owl"];
        $descriptions = [
            "You are an Art Enthusiast! You enjoy basking in the brilliance of masterpieces in museums, but also appreciate the uniqueness of street art. You are a true connoisseur of everything artistic and Latin America’s diverse and rich culture will leave you feeling enriched. Whether you’d like to stroll through the colorful art-lined streets of São Paulo or learn more about modernism in Buenos Aires, our local guides can take you to see some of the most expressive and important artworks in the region. You’ll learn about the artistic communities and immerse yourself in their way of life. Once you return home, you’ll have endless inspiration for your own artwork.", 
            "You are a Nature Lover! You think the Earth is perfect just the way it is and hope to one day see every pristine, untouched part of the world. From the Amazon Jungle, to the Atacama Desert and Andes Mountains, Latin America’s diverse geography has a lot to offer an outdoor adventurer like you. Our local guides will take you away from the bustling city and crowded beaches into some of the lushest and most biodiverse natural paradises. These off-the-beaten path getaways will leave you feeling one with nature.", 
            "You are an Adrenaline Junkie! You love to feel the hair on your arms rise as you take a deep breath, close your eyes, and take the plunge. Whatever your favorite extreme adventure may be, you’ll find somewhere in Latin America to do it. The region’s diverse and impressive landscape makes it the perfect backdrop to almost any extreme adventure. You can scuba dive in the coral reefs of Panama, zip-line through a tropical rainforest in Costa Rica, hit the slopes of the Valle Nevado, and even paraglide off a cliff in Maitencillo beach. No challenge is too big, and no mountain is too high for a thrill-seeker like you. Our local guides will lead you to their favorite destinations for a one-of-a-kind experience.", 
            "You are a Wino! You enjoy the finer things in life and, to you, that means a glass of your favorite wine straight from the vineyard where it all started. Latin America is home to world-renowned wineries and nothing beats experiencing them firsthand. Whether it’s white, rosé or red, you love them all. You dream of indulging in an Argentine Malbec or a Chilean Carmenere, as you overlook some of the region’s most breathtaking landscapes. Out vetted local guides are wine experts who can give you the local insight into the region’s unique winemaking history and natural resources, leaving you feeling like a sommelier.", 
            "You are a Foodie! Your stomach is the way to your heart and there is a lot to fall in love with in Latin America. You love bold and rich flavors and delight in trying something new every day. From street foods to upscale eateries, the unique foods of Latin America will indulge your taste buds. Let our local guides take you to colorful and bustling open-air markets or straight to the kitchen to learn directly from a local chef. You revel in learning new recipes and your trip to Latin America will give you plenty to impress your friends and family with back home.", 
            "You are a History Buff! You’re a pro at history trivia but you always want to learn more. Let Latin America be your portal to the past. As you explore the ruins of the Mayan, Incan, and Aztec empires, you’ll discover a historian’s paradise with some of the world’s most incredible artifacts. More of a fan of Spanish colonial history? There’s a place in Latin America for you, too. If learning new fun facts is your goal for any trip, let our local guides help you explore the region’s different time periods. You’ll go home an even bigger history lover than when you arrived.", 
            "You are a Night Owl! You are the life of any party you walk into and that won’t change in Latin America’s vibrant nightlife scene, where the streets are more crowded at 2 a.m. than at noon. You come alive when the sun goes down, as do the hip barrios you’ll frequent on your trip to the region. Your perfect night involves late night revelers sipping on colorful cocktails, salsa and reggaeton music spilling out of the surrounding bars, and a lively energy all around. From dancing to live samba music to enjoying a pisco sour at a rooftop bar, each city in the region is home to its own unique nighttime rituals. The only way to discover them is to join right in."];
        

        for ($i = 0; $i < count($pages); $i++) {
            if ($pages[$i]==$category){
                $results['title'] = $types[$i];
                $results['page'] = $pages[$i];
                $results['description'] = $descriptions[$i];
                $results['img_path'] = 'traveler_quiz';
                $results['quiz_path'] = 'traveler-quiz';
                $results['heading'] = 'How do you travel?';
                $results['path'] = 'category';
                $results['fb_name'] = "I'm a proud " . $results['title'] . "! What kind of traveler are you.";
                $results['fb_description'] = "I'm a proud' " . $results['title'] . "! Find out which Latin American country you belong in with LocalAventura's Country Quiz!";
                $results['fb_caption'] = "LocalAventura Traveler Quiz";
                return $results;
            };
        };
        return 'Not Valid';
    }
    
        

}   
?>
