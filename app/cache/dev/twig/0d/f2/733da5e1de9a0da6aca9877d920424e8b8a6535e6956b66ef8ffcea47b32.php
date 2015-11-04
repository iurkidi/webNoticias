<?php

/* uniWebNoticiasBundle::layout.html.twig */
class __TwigTemplate_0df2733da5e1de9a0da6aca9877d920424e8b8a6535e6956b66ef8ffcea47b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSup' => array($this, 'block_menuSup'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo " 
        <div id=\"menuSup\">
            ";
        // line 7
        $this->displayBlock('menuSup', $context, $blocks);
        // line 23
        echo "        </div>
 
        
        <div id=\"central\">
            ";
        // line 27
        $this->displayBlock('central', $context, $blocks);
        // line 30
        echo "        </div>
 
 
 ";
    }

    // line 7
    public function block_menuSup($context, array $blocks = array())
    {
        // line 8
        echo "                
             <ul id=\"menu-horizontal\">
                <li><a href=\"#\" title=\"Texto\">Texto1</a></li>
                <li><a href=\"#\" title=\"Texto\">Texto2</a></li>
                <li><a href=\"#\" title=\"Texto\">Texto3</a>
                    <ul>
                        <li><a href=\"#\" title=\"Texto\">Texto31</a></li>
                        <li><a href=\"#\" title=\"Texto\">Texto32</a></li>
                    </ul>
                </li>
                <li><a href=\"#\" title=\"Texto\">Texto4</a></li>
                <li><a href=\"#\" title=\"Texto\">Texto5</a></li>
             </ul>
             
            ";
    }

    // line 27
    public function block_central($context, array $blocks = array())
    {
        // line 28
        echo "            Central
            ";
    }

    public function getTemplateName()
    {
        return "uniWebNoticiasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  75 => 27,  57 => 8,  54 => 7,  47 => 30,  45 => 27,  39 => 23,  37 => 7,  33 => 5,  30 => 4,);
    }
}
