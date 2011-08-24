<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Blogpost extends CI_Controller
{

    function __construct ()
    {
        parent::__construct();
    }

    function view ()
    {
        // Remember to keep your controller skinny. All it does is tell other
        // components what to do.
        
        // Get all params from the request
        $id = (int) $this->uri->segment('3');
        
        // fetch a blog post, based on the params
        $this->load->model('blog');
        $data['blogpost'] = $this->blog->get_post($id);
        
        // Send the blogpost data to the viewfile
        $this->load->view('blog_post', $data);
    }
}