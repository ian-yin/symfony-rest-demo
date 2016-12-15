<?php

/* AppBundle:Note:editNotes.html.twig */
class __TwigTemplate_11440cd14a870db076b7df5b5a6efb526590d93e1b893d76d83b8c8557bfbac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:editNotes.html.twig", 1);
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
        $__internal_554301e4e831c99481bb5732a10cfc6c46309254f9956c6bfab8350203e1a835 = $this->env->getExtension("native_profiler");
        $__internal_554301e4e831c99481bb5732a10cfc6c46309254f9956c6bfab8350203e1a835->enter($__internal_554301e4e831c99481bb5732a10cfc6c46309254f9956c6bfab8350203e1a835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:editNotes.html.twig"));

        // line 19
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554301e4e831c99481bb5732a10cfc6c46309254f9956c6bfab8350203e1a835->leave($__internal_554301e4e831c99481bb5732a10cfc6c46309254f9956c6bfab8350203e1a835_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6771f62f4b04822f7712659e1780c1c63293f5393206d17c811c8ac137c24baf = $this->env->getExtension("native_profiler");
        $__internal_6771f62f4b04822f7712659e1780c1c63293f5393206d17c811c8ac137c24baf->enter($__internal_6771f62f4b04822f7712659e1780c1c63293f5393206d17c811c8ac137c24baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_6771f62f4b04822f7712659e1780c1c63293f5393206d17c811c8ac137c24baf->leave($__internal_6771f62f4b04822f7712659e1780c1c63293f5393206d17c811c8ac137c24baf_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_84f8fd127c869736b1dc6fb0a2140d17b112076ce4638f6a76430e1f4f98ba56 = $this->env->getExtension("native_profiler");
        $__internal_84f8fd127c869736b1dc6fb0a2140d17b112076ce4638f6a76430e1f4f98ba56->enter($__internal_84f8fd127c869736b1dc6fb0a2140d17b112076ce4638f6a76430e1f4f98ba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_84f8fd127c869736b1dc6fb0a2140d17b112076ce4638f6a76430e1f4f98ba56->leave($__internal_84f8fd127c869736b1dc6fb0a2140d17b112076ce4638f6a76430e1f4f98ba56_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_be2acf0b3ab1c37ac3a132ffdacb9aa89579c5a9134809c42491c0733794a1bb = $this->env->getExtension("native_profiler");
        $__internal_be2acf0b3ab1c37ac3a132ffdacb9aa89579c5a9134809c42491c0733794a1bb->enter($__internal_be2acf0b3ab1c37ac3a132ffdacb9aa89579c5a9134809c42491c0733794a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_be2acf0b3ab1c37ac3a132ffdacb9aa89579c5a9134809c42491c0733794a1bb->leave($__internal_be2acf0b3ab1c37ac3a132ffdacb9aa89579c5a9134809c42491c0733794a1bb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:editNotes.html.twig";
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
