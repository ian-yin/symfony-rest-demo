<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cb8392dbb0c0b4f2bcb28bc0f8c09e9fde94f09089bc24b6708a35d44944a6ef extends Twig_Template
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
        $__internal_6cb5517e658536c9f658c0caf2db8270c0af214aedc09d741de27b599db45609 = $this->env->getExtension("native_profiler");
        $__internal_6cb5517e658536c9f658c0caf2db8270c0af214aedc09d741de27b599db45609->enter($__internal_6cb5517e658536c9f658c0caf2db8270c0af214aedc09d741de27b599db45609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6cb5517e658536c9f658c0caf2db8270c0af214aedc09d741de27b599db45609->leave($__internal_6cb5517e658536c9f658c0caf2db8270c0af214aedc09d741de27b599db45609_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
