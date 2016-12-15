<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9a5485219dc02ae8c8498838ca66e6269aa047ddba53892e3bb910d7255ff6a extends Twig_Template
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
        $__internal_fc4a4451902c04f6bf83957e12da4b4d947ca6d5bdc596619fbf694c78d9af99 = $this->env->getExtension("native_profiler");
        $__internal_fc4a4451902c04f6bf83957e12da4b4d947ca6d5bdc596619fbf694c78d9af99->enter($__internal_fc4a4451902c04f6bf83957e12da4b4d947ca6d5bdc596619fbf694c78d9af99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fc4a4451902c04f6bf83957e12da4b4d947ca6d5bdc596619fbf694c78d9af99->leave($__internal_fc4a4451902c04f6bf83957e12da4b4d947ca6d5bdc596619fbf694c78d9af99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
