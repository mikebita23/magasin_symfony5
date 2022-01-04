<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController{

    public function hello(){
        #echo "Esnybb Magasin";
        return new Response("Bonjour bienvenu chez Esnybb Magasin");
    }

    public function helloName ($name): Response{
        return new Response ("Hello ".$name);
    } 
}


