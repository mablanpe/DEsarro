<?php

namespace Test\RandomBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class Random2Controller {
    
    public function indexAction($limit1, $limit2){
           $num = rand($limit1,$limit2);
           return new Response('<html><body>Number: '. $num . '</body></html>');
    }
}
