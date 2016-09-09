<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Mailgun\Mailgun;
class Pages extends CI_Controller{

    function __construct(){
        parent::__construct();

    }

    function welcome(){
        $this->load->view('pages/welcome');
    }

    function signup(){
        $this->load->view('pages/signup');
    }
    
    function thankyou(){
        $this->load->model('Main_model');
        $result = $this->Main_model->get();
        $this->load->view('pages/thankyou', $result);
    }

}
?>
