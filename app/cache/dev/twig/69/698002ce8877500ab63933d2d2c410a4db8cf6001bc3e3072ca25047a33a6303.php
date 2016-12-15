<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f62cceba7965d934602dc469f1122a0199ff55b59addef509399608ba3dba7d9 extends Twig_Template
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
        $__internal_efb066b88a14a5c6bf01bfaa5df20597e2f246f5ef576b26b1856a8cbc372671 = $this->env->getExtension("native_profiler");
        $__internal_efb066b88a14a5c6bf01bfaa5df20597e2f246f5ef576b26b1856a8cbc372671->enter($__internal_efb066b88a14a5c6bf01bfaa5df20597e2f246f5ef576b26b1856a8cbc372671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_efb066b88a14a5c6bf01bfaa5df20597e2f246f5ef576b26b1856a8cbc372671->leave($__internal_efb066b88a14a5c6bf01bfaa5df20597e2f246f5ef576b26b1856a8cbc372671_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
