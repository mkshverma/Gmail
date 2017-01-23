<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Users_Model extends MY_Model
{
	protected $_table = 'users';
    protected $return_type = 'array';
	function __construct()
	{
		parent::__construct();
	}

}