<?php

namespace Test\RandomBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController {
    
    public function indexAction($limit){
           $num = rand(1,$limit);
           return new Response('<html><body>Number: '. $num . '</body></html>');
    }
}
