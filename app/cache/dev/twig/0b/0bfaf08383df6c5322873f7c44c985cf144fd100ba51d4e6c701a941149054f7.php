<?php

/* AppBundle:Note:newNote.html.twig */
class __TwigTemplate_0328355b62a9698aa884d66590d18184f141352a0084ca608b420fd5c07ff347 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:newNote.html.twig", 1);
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
        $__internal_c1407101d44d48cb3c8bc045233ec768501526255551b5bc25c50f9b7b3ed39b = $this->env->getExtension("native_profiler");
        $__internal_c1407101d44d48cb3c8bc045233ec768501526255551b5bc25c50f9b7b3ed39b->enter($__internal_c1407101d44d48cb3c8bc045233ec768501526255551b5bc25c50f9b7b3ed39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:newNote.html.twig"));

        // line 21
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1407101d44d48cb3c8bc045233ec768501526255551b5bc25c50f9b7b3ed39b->leave($__internal_c1407101d44d48cb3c8bc045233ec768501526255551b5bc25c50f9b7b3ed39b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b94f19e7e32614094044039e7027a72a5c2547264e2d414cbdf49db9177ea7f = $this->env->getExtension("native_profiler");
        $__internal_9b94f19e7e32614094044039e7027a72a5c2547264e2d414cbdf49db9177ea7f->enter($__internal_9b94f19e7e32614094044039e7027a72a5c2547264e2d414cbdf49db9177ea7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_9b94f19e7e32614094044039e7027a72a5c2547264e2d414cbdf49db9177ea7f->leave($__internal_9b94f19e7e32614094044039e7027a72a5c2547264e2d414cbdf49db9177ea7f_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_a187ae3886bd04497585b3884023a863ac3db6924495bc0505ded998e8b8114a = $this->env->getExtension("native_profiler");
        $__internal_a187ae3886bd04497585b3884023a863ac3db6924495bc0505ded998e8b8114a->enter($__internal_a187ae3886bd04497585b3884023a863ac3db6924495bc0505ded998e8b8114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_a187ae3886bd04497585b3884023a863ac3db6924495bc0505ded998e8b8114a->leave($__internal_a187ae3886bd04497585b3884023a863ac3db6924495bc0505ded998e8b8114a_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e0ac2d3a06743f226bbf794050cd56904aac2a36ee5e1859a94e3125ce5bf4b = $this->env->getExtension("native_profiler");
        $__internal_0e0ac2d3a06743f226bbf794050cd56904aac2a36ee5e1859a94e3125ce5bf4b->enter($__internal_0e0ac2d3a06743f226bbf794050cd56904aac2a36ee5e1859a94e3125ce5bf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.new.headline", array(), "AppBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 10
        if (array_key_exists("form", $context)) {
            // line 11
            echo "    <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("post_notes");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

        ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

        <input type=\"submit\" value=\"";
            // line 15
            echo $this->env->getExtension('translator')->getTranslator()->trans("note.new.submit", array(), "AppBundle");
            echo "\">
    </form>
    ";
        }
        // line 18
        echo "
";
        
        $__internal_0e0ac2d3a06743f226bbf794050cd56904aac2a36ee5e1859a94e3125ce5bf4b->leave($__internal_0e0ac2d3a06743f226bbf794050cd56904aac2a36ee5e1859a94e3125ce5bf4b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:newNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  90 => 15,  85 => 13,  77 => 11,  75 => 10,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 21,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.new.headline'|trans({}, 'AppBundle') }}</h1>*/
/* */
/*     {%  if (form is defined) %}*/
/*     <form action="{{ url('post_notes') }}" method="POST" {{ form_enctype(form) }}>*/
/* */
/*         {{ form_widget(form) }}*/
/* */
/*         <input type="submit" value="{% trans from 'AppBundle' %}note.new.submit{% endtrans %}">*/
/*     </form>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
