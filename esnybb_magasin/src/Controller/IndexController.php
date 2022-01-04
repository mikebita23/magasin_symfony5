<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController{

    public function Hello(){
        #echo "Esnybb Magasin";
        return new Response("Bonjour bienvenu chez Esnybb Magasin");
    }
}


