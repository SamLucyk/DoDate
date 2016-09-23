<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;


class Main_model extends CI_Model{

    function get( $args = array() ){
        $data_keys = ['first', 'last', 'email', 'who', 'what', 'date', 'time', 'price', 'location', 'dinner'];
        $what_vals = array(
            'none' => "-- Select one --",
            'drink' => "Drink only",
            'dinner' => "Dinner, maybe some drinks after.",
            'rest' => "Try to find me something other than dinner + drinks"
        );
        foreach ($data_keys as $key){
            if (isset($_POST[$key])){
                $data[$key] = $_POST[$key];
            }   
        }
        $data['what'] = $what_vals[$data['what']];
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
                            'to'      => 'Sam <lucyk.s@husky.neu.edu>',
                            'subject' => $data['first'].' requested a DoDate!',
                            'text'    => $text,
                            'html'    => $html ));
        }
    }
}   
?>
