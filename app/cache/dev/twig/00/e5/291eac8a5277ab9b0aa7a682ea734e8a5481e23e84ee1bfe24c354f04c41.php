<?php

/* uniWebNoticiasBundle:Default:noticiashome.html.twig */
class __TwigTemplate_00e5291eac8a5277ab9b0aa7a682ea734e8a5481e23e84ee1bfe24c354f04c41 extends Twig_Template
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
    <div id=\"LineaFormulario\">
        <h1>ESTA ES LA HOME DE LA WEB DE NOTICIAS</h1>
        <h2>ESTA EN EL BLOQUE CUERPO</h2>
        
        <br><br>
        <table>
    
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")));
        foreach ($context['_seq'] as $context["_key"] => $context["unafila"]) {
            // line 13
            echo "
                <tr>
                    <td>
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_web_noticias_not", array("titulo" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "texto" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "texto"), "autor" => $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "autor"))), "html", null, true);
            // line 18
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "titulo"), "html", null, true);
            echo "</a>
                    </td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "texto"), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unafila"]) ? $context["unafila"] : $this->getContext($context, "unafila")), "autor"), "html", null, true);
            echo "</td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unafila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
        </table>
        
        <br><br>
        
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
        return array (  72 => 25,  62 => 21,  58 => 20,  52 => 18,  50 => 16,  45 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
