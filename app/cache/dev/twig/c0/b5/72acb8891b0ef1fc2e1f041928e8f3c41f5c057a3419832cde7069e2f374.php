<?php

/* uniWebNoticiasBundle:Default:noticiashome.html.twig */
class __TwigTemplate_c0b572acb8891b0ef1fc2e1f041928e8f3c41f5c057a3419832cde7069e2f374 extends Twig_Template
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
   <br><br>
        <h1>ESTA ES LA HOME DE LA WEB DE NOTICIAS</h1>
        <h2>ESTA EN EL BLOQUE CUERPO</h2>
        
        <br><br>
     <div id=\"LineaFormulario\">
        <table>
    
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")));
        foreach ($context['_seq'] as $context["_key"] => $context["unafila"]) {
            // line 14
            echo "
                <tr>
                    <td>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_web_noticias_not", array("titulo" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "texto" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "texto"), "autor" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "autor"), "foto" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "foto"))), "html", null, true);
            echo "\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "texto"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "autor"), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/uniwebnoticias/img/" . $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "foto")) . "")), "html", null, true);
            echo "\" /></td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unafila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
        </table>
    </div>   
    
    <br><br>
    <div id=\"LineaFormulario\">   
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("uni_web_noticias_about");
        echo "\">
            Pagina ABOUT
        </a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "uniWebNoticiasBundle:Default:noticiashome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  79 => 27,  69 => 23,  65 => 22,  61 => 21,  55 => 18,  51 => 17,  46 => 14,  42 => 13,  31 => 4,  28 => 3,);
    }
}
