<?php
defined("BASEPATH") or exit("No direct script access allowed");

class User_model extends MY_Model
{
    protected $table = 'user';
    
    protected $primary_key = 'username';
}