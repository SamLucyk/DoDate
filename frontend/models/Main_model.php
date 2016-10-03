<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;


class Main_model extends CI_Model{

    function get( $args = array() ){
        $data_keys = ['first', 'last', 'email', 'who', 'what', 'date', 'time', 'price', 'location', 'dinner', 'other', 'resturant', 'important'];
        $what_vals = array(
            'none' => "-- Select one --",
            'drinks' => "Drink only",
            'dinner' => "Dinner, maybe some drinks after.",
            'rest' => "Try to find me something other than dinner + drinks"
        );
        foreach ($data_keys as $key){
            if (isset($_POST[$key])){
                $data[$key] = $_POST[$key];
            }   
        }
        $resturants = ["Restaurants with no reservations (I want time to talk)","Wine and Wine Bars", "Craft Beers", "Craft Cocktails", "Champagne", "Bars With a Speakeasy Feel", "Dive Bars"];
        $resturant_pairs = array();
        $ri = 0;
        foreach ($data['resturant'] as $val) {
            if (isset($val)){
                $resturant_pairs[$resturants[$ri]] = $val;
                $ri += 1;
            }
        }
        
        $data['what'] = $what_vals[$data['what']];
        $data['resturant'] = $resturant_pairs;
        $this->mail($data);
        return $data;
    }
    
    function mail( $data ){
        # Instantiate the client.
        $send = true;
        $mgClient = new Mailgun('key-489a37f2153d20b977b9d9c19dc5eb2d');
        $domain = "HowDoYouDate.com";
        $html = $this->load->view('email_templates/new_request', $data, true);
        $text = $this->load->view('email_templates/new_request', $data, true);

        # Make the call to the client.
        if ($send){
        $result = $mgClient->sendMessage("$domain",
                      array('from'    => 'Do Date, <noreply@HowDoYouDate.com>',
                            'to'      => 'Sam <sam@howdoyoudate.com>',
                            'subject' => $data['first'].' requested a DoDate!',
                            'text'    => $text,
                            'html'    => $html ));
        }
    }
}   
?>
