<?php

/* uniWebNoticiasBundle:contenidos:noticia.html.twig */
class __TwigTemplate_7abcb44eff81264f11219f0d7a8234f1c2fd597236413042548d684daf7ebae8 extends Twig_Template
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

<h3>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
        echo "</h3>
    
<br><br><br><br>
    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uniwebnoticias/img/" . (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto"))) . "")), "html", null, true);
        echo "\" />
<br><br><br><br>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("uni_web_noticias_inicio");
        // line 18
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
        return array (  62 => 18,  60 => 16,  55 => 14,  49 => 11,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
