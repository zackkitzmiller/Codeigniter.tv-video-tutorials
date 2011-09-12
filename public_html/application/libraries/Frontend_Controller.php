<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller
{
    function __construct ()
    {
        parent::__construct();
        $this->load->model('news');
        $this->data['latest_news'] = $this->news->get_latest();
    }
    
    
}