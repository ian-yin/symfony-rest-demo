<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_59f505dd613994536c6e3b9a6096309e43076dedddc0d44d1035baadbf6af858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d91272001e4460068f57c1f9559d4fdf0c9582b1e4917673be46158c5557e29 = $this->env->getExtension("native_profiler");
        $__internal_6d91272001e4460068f57c1f9559d4fdf0c9582b1e4917673be46158c5557e29->enter($__internal_6d91272001e4460068f57c1f9559d4fdf0c9582b1e4917673be46158c5557e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d91272001e4460068f57c1f9559d4fdf0c9582b1e4917673be46158c5557e29->leave($__internal_6d91272001e4460068f57c1f9559d4fdf0c9582b1e4917673be46158c5557e29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45301cbdc1f070f0fa33618b0db501bb1542da8cdef801959a268d9e458c93b1 = $this->env->getExtension("native_profiler");
        $__internal_45301cbdc1f070f0fa33618b0db501bb1542da8cdef801959a268d9e458c93b1->enter($__internal_45301cbdc1f070f0fa33618b0db501bb1542da8cdef801959a268d9e458c93b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_45301cbdc1f070f0fa33618b0db501bb1542da8cdef801959a268d9e458c93b1->leave($__internal_45301cbdc1f070f0fa33618b0db501bb1542da8cdef801959a268d9e458c93b1_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_045d873efdaa3e6d34d984c90d16c0f76446699d81b5e9a399b576cd264c6db5 = $this->env->getExtension("native_profiler");
        $__internal_045d873efdaa3e6d34d984c90d16c0f76446699d81b5e9a399b576cd264c6db5->enter($__internal_045d873efdaa3e6d34d984c90d16c0f76446699d81b5e9a399b576cd264c6db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_045d873efdaa3e6d34d984c90d16c0f76446699d81b5e9a399b576cd264c6db5->leave($__internal_045d873efdaa3e6d34d984c90d16c0f76446699d81b5e9a399b576cd264c6db5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf95a08cf86709020d383016c90f55405c82deb17db94b430200f3558b4a40fc = $this->env->getExtension("native_profiler");
        $__internal_bf95a08cf86709020d383016c90f55405c82deb17db94b430200f3558b4a40fc->enter($__internal_bf95a08cf86709020d383016c90f55405c82deb17db94b430200f3558b4a40fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 20
        echo "
    <div class=\"block\">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
        <p>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("nelmio_api_doc_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("api.doc.link", array(), "AppBundle"), "html", null, true);
        echo "</a>
        </p>
    </div>

    ";
        // line 29
        if (array_key_exists("code", $context)) {
            // line 30
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 32
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_bf95a08cf86709020d383016c90f55405c82deb17db94b430200f3558b4a40fc->leave($__internal_bf95a08cf86709020d383016c90f55405c82deb17db94b430200f3558b4a40fc_prof);

    }

    // line 11
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_3a4eb68ee19e1630032918e15099d43b710363bb48c8848fa3c22319bd752e33 = $this->env->getExtension("native_profiler");
        $__internal_3a4eb68ee19e1630032918e15099d43b710363bb48c8848fa3c22319bd752e33->enter($__internal_3a4eb68ee19e1630032918e15099d43b710363bb48c8848fa3c22319bd752e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 12
        echo "        <ul id=\"menu\">
            ";
        // line 13
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 16
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_3a4eb68ee19e1630032918e15099d43b710363bb48c8848fa3c22319bd752e33->leave($__internal_3a4eb68ee19e1630032918e15099d43b710363bb48c8848fa3c22319bd752e33_prof);

    }

    // line 13
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_5faedd79b9beed5815ae7d9b8842ba78962af91eb980d125c5f167c129b1d654 = $this->env->getExtension("native_profiler");
        $__internal_5faedd79b9beed5815ae7d9b8842ba78962af91eb980d125c5f167c129b1d654->enter($__internal_5faedd79b9beed5815ae7d9b8842ba78962af91eb980d125c5f167c129b1d654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 14
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_5faedd79b9beed5815ae7d9b8842ba78962af91eb980d125c5f167c129b1d654->leave($__internal_5faedd79b9beed5815ae7d9b8842ba78962af91eb980d125c5f167c129b1d654_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3c409c0d32ceef78e57e50ff455f3b5c0b391e6e1f9e3af6f146240c703ddcc = $this->env->getExtension("native_profiler");
        $__internal_a3c409c0d32ceef78e57e50ff455f3b5c0b391e6e1f9e3af6f146240c703ddcc->enter($__internal_a3c409c0d32ceef78e57e50ff455f3b5c0b391e6e1f9e3af6f146240c703ddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a3c409c0d32ceef78e57e50ff455f3b5c0b391e6e1f9e3af6f146240c703ddcc->leave($__internal_a3c409c0d32ceef78e57e50ff455f3b5c0b391e6e1f9e3af6f146240c703ddcc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 22,  143 => 14,  137 => 13,  127 => 16,  125 => 13,  122 => 12,  116 => 11,  105 => 32,  101 => 30,  99 => 29,  90 => 25,  86 => 23,  84 => 22,  80 => 20,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="icon" sizes="16x16" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/demo.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Demo Bundle' %}*/
/* */
/* {% block body %}*/
/*     {% block content_header %}*/
/*         <ul id="menu">*/
/*             {% block content_header_more %}*/
/*                 <li><a href="{{ path('_demo') }}">Demo Home</a></li>*/
/*             {% endblock %}*/
/*         </ul>*/
/* */
/*         <div style="clear: both"></div>*/
/*     {% endblock %}*/
/* */
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/* */
/*         <p>*/
/*             <a href="{{ path('nelmio_api_doc_index') }}">{{ 'api.doc.link'|trans({}, 'AppBundle') }}</a>*/
/*         </p>*/
/*     </div>*/
/* */
/*     {% if code is defined %}*/
/*         <h2>Code behind this page</h2>*/
/*         <div class="block">*/
/*             <div class="symfony-content">{{ code|raw }}</div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
