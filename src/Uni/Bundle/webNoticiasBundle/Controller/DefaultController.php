<?php

namespace Uni\Bundle\webNoticiasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
       
    public function indexAction()
    {
        
        //Simulacion el acceso a BBDD
        $datos=array(
            array("titulo"=>"Titulo 1", "texto"=>"Texto articulo 1", "autor"=>"autor 1", "foto"=>"vac1.jpeg")
            ,array("titulo"=>"Titulo 2", "texto"=>"Texto articulo 2", "autor"=>"autor 2", "foto"=>"vac2.jpeg")
            ,array("titulo"=>"Titulo 3", "texto"=>"Texto articulo 3", "autor"=>"autor 3", "foto"=>"vac2.jpeg")
            ,array("titulo"=>"Titulo 4", "texto"=>"Texto articulo 4", "autor"=>"autor 4", "foto"=>"vac1.jpeg")
        );
        
        return $this->render('uniWebNoticiasBundle:Default:noticiashome.html.twig'
                , array('tabla' => $datos));
    }      
        
}
