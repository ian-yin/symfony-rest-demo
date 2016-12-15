<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d5940996bac5a05d032bcdedd3bd6629ef29b8efece129cadb6c1fd31fac491b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90db684242e7e178a421947964d3fc4522b687ca9ccfbb45dc15f8b3d039a4aa = $this->env->getExtension("native_profiler");
        $__internal_90db684242e7e178a421947964d3fc4522b687ca9ccfbb45dc15f8b3d039a4aa->enter($__internal_90db684242e7e178a421947964d3fc4522b687ca9ccfbb45dc15f8b3d039a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90db684242e7e178a421947964d3fc4522b687ca9ccfbb45dc15f8b3d039a4aa->leave($__internal_90db684242e7e178a421947964d3fc4522b687ca9ccfbb45dc15f8b3d039a4aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_732457b9d50581a8e90d8001f7a2343515fddf231a9a366a12ae2864a5de248a = $this->env->getExtension("native_profiler");
        $__internal_732457b9d50581a8e90d8001f7a2343515fddf231a9a366a12ae2864a5de248a->enter($__internal_732457b9d50581a8e90d8001f7a2343515fddf231a9a366a12ae2864a5de248a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_732457b9d50581a8e90d8001f7a2343515fddf231a9a366a12ae2864a5de248a->leave($__internal_732457b9d50581a8e90d8001f7a2343515fddf231a9a366a12ae2864a5de248a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa1f9ce41c8c3ad9fb94523aed8d94eaa784b64f9370fce731a15a598242474 = $this->env->getExtension("native_profiler");
        $__internal_8aa1f9ce41c8c3ad9fb94523aed8d94eaa784b64f9370fce731a15a598242474->enter($__internal_8aa1f9ce41c8c3ad9fb94523aed8d94eaa784b64f9370fce731a15a598242474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8aa1f9ce41c8c3ad9fb94523aed8d94eaa784b64f9370fce731a15a598242474->leave($__internal_8aa1f9ce41c8c3ad9fb94523aed8d94eaa784b64f9370fce731a15a598242474_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
