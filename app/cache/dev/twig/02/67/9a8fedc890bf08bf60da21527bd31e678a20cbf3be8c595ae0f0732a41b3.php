<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_02679a8fedc890bf08bf60da21527bd31e678a20cbf3be8c595ae0f0732a41b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  87 => 20,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  68 => 14,  56 => 9,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  86 => 28,  69 => 25,  66 => 15,  51 => 12,  49 => 19,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  105 => 40,  102 => 29,  96 => 23,  91 => 31,  88 => 6,  64 => 12,  55 => 13,  53 => 23,  46 => 7,  44 => 10,  35 => 4,  24 => 3,  78 => 40,  75 => 17,  57 => 14,  54 => 21,  47 => 30,  39 => 6,  37 => 10,  33 => 5,  30 => 3,  81 => 8,  79 => 18,  72 => 16,  62 => 23,  58 => 20,  52 => 18,  50 => 8,  45 => 27,  41 => 9,  31 => 5,  28 => 3,);
    }
}
