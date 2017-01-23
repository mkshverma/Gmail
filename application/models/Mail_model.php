<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Mail Model
*/
class Mail_Model extends MY_Model
{
	protected $_table = 'mails';
    protected $return_type = 'array';
    protected $_table1 = 'recipient';
	function __construct()
	{
		parent::__construct();
	}

}