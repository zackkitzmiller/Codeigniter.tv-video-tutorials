<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Model
{

    function __construct ()
    {
        parent::__construct();
    }

    function get_post ($id)
    {
        // You model can be fat. It doe all calculations, database fetching and
        // other business logic. When it's done performing a task, it return the
        // data to the controller.
        
        // We'll fake fetching data from a database here :)
        $post->title = 'Hello, world!';
        $post->author = 'Joost van Veen';
        $post->post = '<p>This is my first blogpost.</p><p>Lorem ipsum dolor sit 
        amet, consectetur adipiscing elit. Integer blandit odio a magna facilisis 
        placerat. Sed imperdiet facilisis diam. Maecenas eu molestie dolor. In 
        laoreet pellentesque justo non pulvinar. Suspendisse potenti. Nunc id 
        accumsan augue. Proin ut suscipit velit. Proin eu odio sem. Sed non 
        imperdiet enim.</p>';
        
        // Return the 'fetched' data to the controller
        return $post;
    }
}