<?php
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
}   
?>
