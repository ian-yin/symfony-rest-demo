<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_baa57aac4832357b5b47b46a6ba9755f8446d1aae0c0a6ba57950efb9963aa69 extends Twig_Template
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
        $__internal_e3f5b01cb237c3a2ac811081ac6809af2c3295965cb67e0ac8beae6f1dbe23bd = $this->env->getExtension("native_profiler");
        $__internal_e3f5b01cb237c3a2ac811081ac6809af2c3295965cb67e0ac8beae6f1dbe23bd->enter($__internal_e3f5b01cb237c3a2ac811081ac6809af2c3295965cb67e0ac8beae6f1dbe23bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e3f5b01cb237c3a2ac811081ac6809af2c3295965cb67e0ac8beae6f1dbe23bd->leave($__internal_e3f5b01cb237c3a2ac811081ac6809af2c3295965cb67e0ac8beae6f1dbe23bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
