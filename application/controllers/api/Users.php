<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Users extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('users_model');
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
    }

    function index_get($userid = '')
    {
        if($userid  === '')
        {
            $users = $this->users_model->get_all();
            $this->response([
                'status'    =>  'Success',
                'data'      =>  $users
            ],REST_Controller::HTTP_OK);
        }
        else
        {
            $user = $this->users_model->get($userid);
            if(empty($user))
            {
                $this->response([
                    'status'    =>  'Faiure',
                    'message'   =>  'User not exists.'
                ],REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response([
                    'status'    =>  'Success',
                    'data'      =>  $user
                ],REST_Controller::HTTP_OK);
            }
        }
    }

    function index_post($userid = '')
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('email','Email address','required|valid_email');
        $this->form_validation->set_rules('mobile','Mobile No.','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()===FALSE)
        {
            $this->response([
                'status'    =>  'Failure',
                'error'     =>   json_encode(validation_errors())
            ],REST_Controller::HTTP_OK);
        }
        else
        {
            $data = array(
                'name'  =>  $this->post('name'),
                'email' =>  $this->post('email'),
                'mobile'=>  $this->post('mobile'),
                'password'=>  generate_hash($this->post('password'), 10)
            );
            if($userid === ''){
                $userid = $this->users_model->insert($data);

                $this->response([
                    'status'    =>  'Success',
                    'data'      =>  ['id'=>$userid]
                ],REST_Controller::HTTP_OK);
            }
            else
            {
                $status = $this->users_model->update($userid, $data);
                if($status){
                    $this->response([
                        'status'    =>  'Success',
                        'message'   =>  'Users updated successfully'
                    ],REST_Controller::HTTP_OK);
                }
                else{
                    $this->response([
                        'status'    =>  'Success',
                        'message'   =>  'Users does not exists.'
                    ],REST_Controller::HTTP_OK);
                }
            }
        }
    }

    function index_delete($userid)
    {
        if(null === $userid)
        {
            $this->response([
                'status'    =>  'Success',
                'message'   =>  'Userid required'
            ],REST_Controller::HTTP_OK);
        }
        else
        {
            $status = $this->users_model->delete($userid);
            if($status)
            {
                $this->response([
                    'status'    =>  'Success',
                    'message'   =>  'User deleted successfully'
                ],REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response([
                    'status'    =>  'Success',
                    'message'   =>  'User does not exit or error while delete.'
                ],REST_Controller::HTTP_OK);
            }
        }
    }
}