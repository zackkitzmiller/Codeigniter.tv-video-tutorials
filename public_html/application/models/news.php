<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Model
{
    function __construct ()
    {
        parent::__construct();
    }
    
    public function get_latest($limit = 1){
        return $this->db->order_by('pubdate DESC')
                        ->limit($limit)
                        ->get('news')
                        ->result_array();
    } 
}