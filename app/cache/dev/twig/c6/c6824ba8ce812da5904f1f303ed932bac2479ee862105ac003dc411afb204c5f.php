<?php

/* IntrepidGroupApiBundle:Default:index.html.twig */
class __TwigTemplate_9d062ee0f1f9c8a438b43256df07d4fea32d411a507ab1ac6005d479c1de5982 extends Twig_Template
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
        $__internal_3b551af8981c8ff88a9b6c9dd8be9e209ee8b2d3dc890b0d92b91378a83e59ed = $this->env->getExtension("native_profiler");
        $__internal_3b551af8981c8ff88a9b6c9dd8be9e209ee8b2d3dc890b0d92b91378a83e59ed->enter($__internal_3b551af8981c8ff88a9b6c9dd8be9e209ee8b2d3dc890b0d92b91378a83e59ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntrepidGroupApiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_3b551af8981c8ff88a9b6c9dd8be9e209ee8b2d3dc890b0d92b91378a83e59ed->leave($__internal_3b551af8981c8ff88a9b6c9dd8be9e209ee8b2d3dc890b0d92b91378a83e59ed_prof);

    }

    public function getTemplateName()
    {
        return "IntrepidGroupApiBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
