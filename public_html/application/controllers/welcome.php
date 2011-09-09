<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index ()
    {
        // Create an array that holds the various image sizes
        $configs = array();
        $configs[] = array('source_image' => 'original.jpg', 'new_image' => 'thumbs/120/thumb.jpg', 'width' => 120, 'height' => 120);
        $configs[] = array('source_image' => 'original.jpg', 'new_image' => 'thumbs/120x120/thumb.jpg', 'width' => 120, 'height' => 120, 'maintain_ratio' => FALSE);
        $configs[] = array('source_image' => 'original.jpg', 'new_image' => 'thumbs/160x90/thumb.jpg', 'width' => 160, 'height' => 90, 'maintain_ratio' => FALSE);
        $configs[] = array('source_image' => 'original.jpg', 'new_image' => 'thumbs/240/thumb.jpg', 'width' => 240, 'height' => 240);
        $configs[] = array('source_image' => 'original.jpg', 'new_image' => 'thumbs/800/thumb.jpg', 'width' => 800, 'height' => 800);
        
        // Loop through the array to create thumbs
        $this->load->library('image_lib');
        foreach ($configs as $config) {
            $this->image_lib->thumb($config, FCPATH . 'gfx/');
        }

        // Pass the config array to the view
        $data = array('images' => $configs);
        $this->load->view('welcome_message', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */