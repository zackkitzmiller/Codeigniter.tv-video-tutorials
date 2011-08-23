<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Model
{
    function __construct ()
    {
        parent::__construct();
    }
    
    public function run($params = array()){
    
        $lat = isset($params['lat']) ? $params['lat'] : '0';
        $lon = isset($params['lon']) ? $params['lon'] : '0';
        
        $str = '<iframe src="http://ongopongo.com/maps/embed.php?z=15&la='.$lat.'&lo='.$lon.'&h=400&w=500&msid=&type=G_NORMAL_MAP&b=no" style="width: 504px; height: 424px;"></iframe>';
        return $str;
    }
}