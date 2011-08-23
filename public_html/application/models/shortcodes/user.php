<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{

    function __construct ()
    {
        parent::__construct();
    }

    public function run ($params = array())
    {
        $owners = array('Joost van Veen', 'Mike Schuurman', 'Piet Wittebol');
        
        $class = isset($params['class']) ? $params['class'] : 'default';
        $str = '<span class="' . $class . '">';
        $str .= isset($params['id']) && isset($owners[$params['id']]) ? $owners[$params['id']] : 'Unknown';
        $str .= '</span>';
        
        return $str;
    }
}