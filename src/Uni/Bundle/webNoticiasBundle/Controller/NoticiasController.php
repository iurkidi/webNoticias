<?php

namespace Uni\Bundle\webNoticiasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoticiasController extends Controller
{    
    public function mostrarNoticiaAction($titulo,$texto,$autor,$foto)
    {
        ////*****************************    
        //Simulacion el acceso a BBDD
        ////*****************************         
        return $this->render('uniWebNoticiasBundle:contenidos:noticia.html.twig'
                , array(
                    'titulo' => $titulo,
                    'texto' => $texto,
                    'autor' => $autor,
                    'foto' => $foto
                ));
    }
    
    public function mostrarAboutAction()
    {
        
        return $this->render('uniWebNoticiasBundle:contenidos:pagabout.html.twig');
    }
}
