<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController{

    /**
     * @Route("/index")
     */
    public function hello(){
        #echo "Esnybb Magasin";
        return new Response("Bonjour bienvenu chez Esnybb Magasin");
    }




    /**
     * @Route("/index/{name}")
     */
    public function helloName ($name): Response{
        return new Response ("Hello ".$name);
    } 
}


