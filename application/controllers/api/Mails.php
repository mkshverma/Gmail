<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Mail
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Mails extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('mail_model');
        $this->load->model('recipients_model');
        $this->load->model('attachment_model');
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
    }

    function index_get($msg_id='')
    {
        if($msg_id !== '')
        {
            $message = $this->mail_model->get($msg_id);
            if(empty($message)){
                $this->response([
                    'status'    =>  'failure',
                    'message'   =>  'mailid does not exists'
                ],REST_Controller::HTTP_OK);
            }
            $message['recievers'] = $this->recipients_model->get_by('msgid',$msg_id);
            $message['attachments'] = $this->attachment_model->get_by('msgid',$msg_id);
            $this->response([
                'status'    =>  'success',
                'data'      =>  $message
            ],REST_Controller::HTTP_OK);
        }
        else
        {
            $messages = $this->mail_model->get_all();
            $mails = [];
            foreach ($messages as $key => $message) {
                $mails[$key] = $message;
                $mails[$key]['recievers'] = $this->recipients_model->get_by('msgid',$msg_id);
                $mails[$key]['attachments'] = $this->attachment_model->get_by('msgid',$msg_id);
            }
            $this->response([
                'status'    =>  'success',
                'data'      =>  $mails
            ],REST_Controller::HTTP_OK);
        }
    }

    function inbox_get($id)
    {
        $messages = $this->mail_model->inbox($id);
        $this->response([
            'status'    =>  'success',
            'data'      =>  $messages
        ],REST_Controller::HTTP_OK);
        
    }

    function mail_post()
    {
        $emails = $this->post('emails');
        $subject = $this->post('subject');
        $body = $this->post('body');
        $this->response([
            'status'    =>  'success',
            'message'     =>  'Successfully logged out'
        ],REST_Controller::HTTP_OK);
    }
}