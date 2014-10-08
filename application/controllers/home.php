<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: eltonoliveira
 * Date: 06/10/14
 * Time: 21:28
 */

class Home extends CI_Controller{


    public function __construct(){

        parent::__construct();
    }

    public function index(){


        $this->template->load('index','templates/home');
    }

    public function contact(){

        $this->load->view('contato');

    }



}