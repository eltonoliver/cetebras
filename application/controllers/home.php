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

    public function contato(){

        $this->template->load('index','templates/contato');

    }

    /*ACTIONS*/

    public function enviaContato( $dados = null){

        try{

            $this->form_validation->set_rules('name-id',  'Label:', 'required');
            $this->form_validation->set_rules('phone-id', 'Label:', 'required');
            $this->form_validation->set_rules('message', 'Label:', 'required');           
            $this->form_validation->set_rules('email-id', 'E-mail', 'valid_email');
            $this->form_validation->set_message('valid_email', 'E-mail inválido');  
            $this->form_validation->set_message('required', 'O campo %s, é obrigatório!');                   
            
            if ($this->form_validation->run() == FALSE){
                
                $this->contato();
        
            }else{
            
            //$this->session->set_flashdata('msg', 'Cadastrado com sucesso!');

                //redirect("caminho/");

                 $modeloMensagem = '
                 
                           <html>
                                <head>
                                    <title>Mensagem Automática Cetebras</title>
                                </head>
                                <body>
                                    <div style="text-align: center;">
                                        &nbsp;</div>
                                    <h3>
                                        <img alt="" src="http://localhost/cetebras/assets/images/logo.png" /></h3>
                                    <p>
                                        &nbsp;</p>
                                    <h3 style="text-align: center;">
                                        <span style="font-family:arial,helvetica,sans-serif;">MENSAGEM AUTOM&Aacute;TICA - SITE CETEBRAS</span></h3>
                                    <p>
                                        &nbsp;</p>
                                    <p>
                                        <span style="font-family:arial,helvetica,sans-serif;">NOME:&nbsp;'.$this->input->post('name-id').'</span>  </p>
                                    <p>
                                        <span style="font-family:arial,helvetica,sans-serif;">E-MAIL:'.$this->input->post('email').'</span></p>
                                    <p>
                                        <span style="font-family:arial,helvetica,sans-serif;">CONTATO:'.$this->input->post('phone-id').'</span></p>
                                    <p>
                                        <span style="font-family:arial,helvetica,sans-serif;">D&Uacute;VIDA: '.$this->input->post('message').'</span></p>
                                    <p>
                                        &nbsp;</p>
                                    <p style="text-align: center;">
                                        <strong><span style="color:#ff0000;"><span style="font-family:arial,helvetica,sans-serif;">Obs: N&atilde;o responder essa mensagem.&nbsp;</span></span></strong></p>
                                    <p>
                                        &nbsp;</p>
                                    <p>
                                        &nbsp;</p>
                                    <p>
                                        &nbsp;</p>
                                    <p>
                                        &nbsp;</p>
                                </body>
                            </html>
 



                 ';   
                 $this->load->library('email');
                 
                 $config['wordwrap'] = TRUE;
                 $config['mailtype'] = 'html';
                 $this->email->initialize($config);

                 $this->email->from('contato@cetebras.com.br', 'Contato Site');
                 $this->email->to('eltonoliveirape@gmail.com');
                 $this->email->cc('eltonoliveira@cetebras.com.br');
                 //$this->email->bcc('and@another.com');
                 
                 $this->email->subject('Contato Site Cetebras');
                 $this->email->message($modeloMensagem);
                 
                 $this->email->send();
                 
                 //echo $this->email->print_debugger();  
                $this->session->set_flashdata('msg', 'Mensagem Enviada, Aguarde nosso contato!');

                redirect("home/contato");
        
            }
            }catch(Exception $e){
                $this->session->set_flashdata('erro', $e->getMessage());
                redirect("caminho");
        
                
            }
        
    }



}