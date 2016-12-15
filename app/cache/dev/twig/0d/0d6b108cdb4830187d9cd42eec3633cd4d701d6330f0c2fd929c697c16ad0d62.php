<?php

/* AppBundle:Note:editNote.html.twig */
class __TwigTemplate_fdc7da1e4085a1d8ed54af08bf757102aefbb37b0fce6597a6d26daf97fd50d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:editNote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf0a4005189e109ee9c5f9cbb39ab5e607b16a7262624d862803f691ce1c73ac = $this->env->getExtension("native_profiler");
        $__internal_cf0a4005189e109ee9c5f9cbb39ab5e607b16a7262624d862803f691ce1c73ac->enter($__internal_cf0a4005189e109ee9c5f9cbb39ab5e607b16a7262624d862803f691ce1c73ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:editNote.html.twig"));

        // line 19
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf0a4005189e109ee9c5f9cbb39ab5e607b16a7262624d862803f691ce1c73ac->leave($__internal_cf0a4005189e109ee9c5f9cbb39ab5e607b16a7262624d862803f691ce1c73ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05568502bb0cc896fc2f07c80adaacafa1eefbf476a277dd405c36f451fe3f54 = $this->env->getExtension("native_profiler");
        $__internal_05568502bb0cc896fc2f07c80adaacafa1eefbf476a277dd405c36f451fe3f54->enter($__internal_05568502bb0cc896fc2f07c80adaacafa1eefbf476a277dd405c36f451fe3f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_05568502bb0cc896fc2f07c80adaacafa1eefbf476a277dd405c36f451fe3f54->leave($__internal_05568502bb0cc896fc2f07c80adaacafa1eefbf476a277dd405c36f451fe3f54_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_acb90ef9ea927d71329efec7b61cb541360b16032826c059fab2034a58ef25bf = $this->env->getExtension("native_profiler");
        $__internal_acb90ef9ea927d71329efec7b61cb541360b16032826c059fab2034a58ef25bf->enter($__internal_acb90ef9ea927d71329efec7b61cb541360b16032826c059fab2034a58ef25bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_acb90ef9ea927d71329efec7b61cb541360b16032826c059fab2034a58ef25bf->leave($__internal_acb90ef9ea927d71329efec7b61cb541360b16032826c059fab2034a58ef25bf_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c9b4e8102705fdce88b45584e95ddbe39882140bf8665b5f4eb47bbbe32075a = $this->env->getExtension("native_profiler");
        $__internal_9c9b4e8102705fdce88b45584e95ddbe39882140bf8665b5f4eb47bbbe32075a->enter($__internal_9c9b4e8102705fdce88b45584e95ddbe39882140bf8665b5f4eb47bbbe32075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.edit.headline", array("%id%" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "AppBundle"), "html", null, true);
        echo "</h1>

    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("put_notes", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"put\" />

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" value=\"";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("note.edit.submit", array(), "AppBundle");
        echo "\">
    </form>
";
        
        $__internal_9c9b4e8102705fdce88b45584e95ddbe39882140bf8665b5f4eb47bbbe32075a->leave($__internal_9c9b4e8102705fdce88b45584e95ddbe39882140bf8665b5f4eb47bbbe32075a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:editNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  83 => 13,  75 => 10,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 19,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.edit.headline'|trans({'%id%': id}, 'AppBundle') }}</h1>*/
/* */
/*     <form action="{{ url('put_notes', {'id': id}) }}" method="POST" {{ form_enctype(form) }}>*/
/*         <input type="hidden" name="_method" value="put" />*/
/* */
/*         {{ form_widget(form) }}*/
/* */
/*         <input type="submit" value="{% trans from 'AppBundle' %}note.edit.submit{% endtrans %}">*/
/*     </form>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
