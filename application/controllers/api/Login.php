<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Login
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            
 */
class Login extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('users_model');
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
    }

    function index_post()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()===FALSE)
        {
            $this->response([
                'status'=>'failure',
                'message'=> validatin_errors()
            ],REST_Controller::HTTP_OK);
        }
        else
        {
            $users = $this->users_model->get_by('email',$this->post('email'));
            if(!empty($users))
            {
                if(validate_pw($this->post('password'), $users['password']))
                {
                    unset($users['password']);
                    $this->response([
                        'status'=>'success',
                        'message'=>'Login Successfull',
                        'user'  => $users
                    ],REST_Controller::HTTP_OK);
                }else{
                    $this->response([
                        'status'=>'failure',
                        'message'=>'Invalid password'
                    ],REST_Controller::HTTP_OK);
                }
            }
            else{
                $this->response([
                    'status'=>'failure',
                    'message'=>'User not exists'
                ],REST_Controller::HTTP_OK);
            }
        }
    }
}