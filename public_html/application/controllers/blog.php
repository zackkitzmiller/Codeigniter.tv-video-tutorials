<?php
class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('posts');
        $this->load->helper('general');
    }

    public function listing() {
        // $this->db->order_by('post_id');
        $posts = $this->posts->get_key_value('post_id', 'post_title');
        dump($posts);
    }
    
    public function post() {
    }
    
    public function getby() {
        $posts = $this->posts->get_by(array('post_slug' => 'first-post', 'post_id' => 2), NULL, TRUE);
        dump($posts);
    }
}