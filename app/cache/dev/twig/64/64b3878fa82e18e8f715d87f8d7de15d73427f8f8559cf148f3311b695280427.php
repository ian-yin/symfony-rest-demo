<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_978ff03c09c65e1a42cfa5471ec17f16df828b06c4e5560d7c72dd30ef01501f extends Twig_Template
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
        $__internal_d7626a97bf3c28ebcf90a6f5618f60075565f4d1cba3045c78321903a44a19b5 = $this->env->getExtension("native_profiler");
        $__internal_d7626a97bf3c28ebcf90a6f5618f60075565f4d1cba3045c78321903a44a19b5->enter($__internal_d7626a97bf3c28ebcf90a6f5618f60075565f4d1cba3045c78321903a44a19b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d7626a97bf3c28ebcf90a6f5618f60075565f4d1cba3045c78321903a44a19b5->leave($__internal_d7626a97bf3c28ebcf90a6f5618f60075565f4d1cba3045c78321903a44a19b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
