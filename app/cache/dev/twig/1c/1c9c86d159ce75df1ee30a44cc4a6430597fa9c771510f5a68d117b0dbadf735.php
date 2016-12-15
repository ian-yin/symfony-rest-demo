<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1962f65b70ff61e7201ec6a581901625c2dba4c59807c5e099dc1e3d91b3d77f extends Twig_Template
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
        $__internal_58a33fa9721cdaf1628489903f99984cc6d7f1c1bc803ff06e271407bbb85ff3 = $this->env->getExtension("native_profiler");
        $__internal_58a33fa9721cdaf1628489903f99984cc6d7f1c1bc803ff06e271407bbb85ff3->enter($__internal_58a33fa9721cdaf1628489903f99984cc6d7f1c1bc803ff06e271407bbb85ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_58a33fa9721cdaf1628489903f99984cc6d7f1c1bc803ff06e271407bbb85ff3->leave($__internal_58a33fa9721cdaf1628489903f99984cc6d7f1c1bc803ff06e271407bbb85ff3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
