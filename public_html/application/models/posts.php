<?php
class Posts extends MY_Model
{

    function __construct ()
    {
        parent::__construct();
        $this->table_name = 'posts';
        $this->primary_key = 'post_id';
        $this->order_by = 'post_pubdate DESC';
    }
    
    public function get_recent($numrecords = 5){
        $numrecords = (int) $numrecords;
        $this->db->limit($numrecords);
        return $this->get();
    }
}