<?php

/* ::base.html.twig */
class __TwigTemplate_c7a4c3eb6e705178c1ad14ad5bb83936ec7faa902d3734389e2dbfeff76d3dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
    </head>
    <body>
        
        <div id=\"cabecera\">
            ";
        // line 15
        $this->displayBlock('cabecera', $context, $blocks);
        // line 18
        echo "        </div>
       
        <div id=\"contenFormularios\">
            
            <div id=\"cuerpo\">
            ";
        // line 23
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 24
        echo "            </div>
        
        </div>
        
         <div id=\"pie\">
            ";
        // line 29
        $this->displayBlock('pie', $context, $blocks);
        // line 32
        echo "        </div>
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Web de noticias";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uniwebnoticias/css/webnoticias.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 15
    public function block_cabecera($context, array $blocks = array())
    {
        // line 16
        echo "                <h1 class=\"letralogo textocentrado centrado\"> WEB NOTICIAS </h1>
            ";
    }

    // line 23
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "Cuerpo";
    }

    // line 29
    public function block_pie($context, array $blocks = array())
    {
        // line 30
        echo "                <p class=\"derecha separarDcha20\">2015/2016</p>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  102 => 29,  96 => 23,  91 => 16,  88 => 15,  81 => 8,  78 => 7,  72 => 5,  64 => 32,  62 => 29,  55 => 24,  53 => 23,  46 => 18,  44 => 15,  37 => 10,  35 => 7,  30 => 5,  24 => 1,);
    }
}
