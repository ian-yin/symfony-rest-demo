<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_26a0a528bd7ea351ff87c4d72a0aa344bc3b601583ae32c49037d85ef7e1632a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a74f406122cdd0fe5fbdcba2af32815d9d580bb8a47608f95cd3cfa9164d7933 = $this->env->getExtension("native_profiler");
        $__internal_a74f406122cdd0fe5fbdcba2af32815d9d580bb8a47608f95cd3cfa9164d7933->enter($__internal_a74f406122cdd0fe5fbdcba2af32815d9d580bb8a47608f95cd3cfa9164d7933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a74f406122cdd0fe5fbdcba2af32815d9d580bb8a47608f95cd3cfa9164d7933->leave($__internal_a74f406122cdd0fe5fbdcba2af32815d9d580bb8a47608f95cd3cfa9164d7933_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_db11a575c87988d0440f9a4fd9cee536d535e517c84fdcddab6e3c02eba3c85c = $this->env->getExtension("native_profiler");
        $__internal_db11a575c87988d0440f9a4fd9cee536d535e517c84fdcddab6e3c02eba3c85c->enter($__internal_db11a575c87988d0440f9a4fd9cee536d535e517c84fdcddab6e3c02eba3c85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_db11a575c87988d0440f9a4fd9cee536d535e517c84fdcddab6e3c02eba3c85c->leave($__internal_db11a575c87988d0440f9a4fd9cee536d535e517c84fdcddab6e3c02eba3c85c_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
