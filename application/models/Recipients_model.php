<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Mail Model
*/
class Recipients_Model extends MY_Model
{
	protected $_table = 'recipient';
    protected $return_type = 'array';
    protected $_table1 = 'recipient';
	function __construct()
	{
		parent::__construct();
	}

}