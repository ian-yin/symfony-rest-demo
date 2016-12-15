<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c4f287457d8d3cb471d252f40f7bb698019653d53133b980dd4b758e144e3021 extends Twig_Template
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
        $__internal_d66147e9a80a3b44c436c2f3474f8b59dfa55feb555c0fa92a013d0c1886fdb5 = $this->env->getExtension("native_profiler");
        $__internal_d66147e9a80a3b44c436c2f3474f8b59dfa55feb555c0fa92a013d0c1886fdb5->enter($__internal_d66147e9a80a3b44c436c2f3474f8b59dfa55feb555c0fa92a013d0c1886fdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d66147e9a80a3b44c436c2f3474f8b59dfa55feb555c0fa92a013d0c1886fdb5->leave($__internal_d66147e9a80a3b44c436c2f3474f8b59dfa55feb555c0fa92a013d0c1886fdb5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
