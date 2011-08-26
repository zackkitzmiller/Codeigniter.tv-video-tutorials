<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
    function __construct ()
    {
        parent::__construct();
    }
    
    public function post(){
        
        // Remember to keep your controller skinny. All it does is tell other
        // components what to do.
        
        // Figure out which post the user requested
        $id = $this->uri->segment('3');
        
        // Tell the model which post to fetch from database
        $this->load->model('blog_m');
        $data['post'] = $this->blog_m->get_post($id);
        
        // Tell the view to display that post
        $this->load->view('blog_post', $data);
    }
}