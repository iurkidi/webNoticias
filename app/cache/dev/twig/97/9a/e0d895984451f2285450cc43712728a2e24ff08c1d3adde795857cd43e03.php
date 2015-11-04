<?php

/* uniWebNoticiasBundle:contenidos:noticia.html.twig */
class __TwigTemplate_979ae0d895984451f2285450cc43712728a2e24ff08c1d3adde795857cd43e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniWebNoticiasBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniWebNoticiasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        // line 4
        echo "    
<h1>NOTICIA ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "</h1>

<h2>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "</h2>

<h3>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["autor"]) ? $context["autor"] : $this->getContext($context, "autor")), "html", null, true);
        echo "</h3>
    
           <br><br><br><br>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uni_web_noticias_inicio");
        // line 14
        echo "\"> Volver atras</a>

";
    }

    public function getTemplateName()
    {
        return "uniWebNoticiasBundle:contenidos:noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  50 => 12,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
