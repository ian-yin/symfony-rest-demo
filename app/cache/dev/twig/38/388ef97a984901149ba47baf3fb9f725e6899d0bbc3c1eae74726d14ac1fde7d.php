<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3b47c6312d27ee81130cc1296b6bfa9c4088fb67232a1d137dda526d63dfc8b8 extends Twig_Template
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
        $__internal_113c283b11d925b120c88e41f2b53161a80d0c74f2c62e711999259235fe669a = $this->env->getExtension("native_profiler");
        $__internal_113c283b11d925b120c88e41f2b53161a80d0c74f2c62e711999259235fe669a->enter($__internal_113c283b11d925b120c88e41f2b53161a80d0c74f2c62e711999259235fe669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_113c283b11d925b120c88e41f2b53161a80d0c74f2c62e711999259235fe669a->leave($__internal_113c283b11d925b120c88e41f2b53161a80d0c74f2c62e711999259235fe669a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
