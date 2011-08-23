<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Shortcode extends CI_Controller
{
    function __construct ()
    {
        parent::__construct();
    }
    
    function index(){
        
        $str = 'Hello user [ai:user id=1|class=admin], talk to [ai:user id=2|class=user]
        <p>[ai:maps lat=52.373056|lon=4.892222]</p>';
        
        // Parse the string using the shortcode lib
        $this->load->library('shortcodes');
        $str = $this->shortcodes->parse($str);
        
        echo $str;
    }
}