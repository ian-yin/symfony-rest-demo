<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0dcd42838af2d2ac117c24d5c2b64d99e4280d3add7a86ba8e7a3891a983410a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91a90c5fa9e0c515d0a219e24b606678dab4f3830bccab33e22a7ad8004a7518 = $this->env->getExtension("native_profiler");
        $__internal_91a90c5fa9e0c515d0a219e24b606678dab4f3830bccab33e22a7ad8004a7518->enter($__internal_91a90c5fa9e0c515d0a219e24b606678dab4f3830bccab33e22a7ad8004a7518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a90c5fa9e0c515d0a219e24b606678dab4f3830bccab33e22a7ad8004a7518->leave($__internal_91a90c5fa9e0c515d0a219e24b606678dab4f3830bccab33e22a7ad8004a7518_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d6b3049e6782c57be7eb8ec1627a1287dc55f87d3b1aa79741e0d963d6cabf9 = $this->env->getExtension("native_profiler");
        $__internal_1d6b3049e6782c57be7eb8ec1627a1287dc55f87d3b1aa79741e0d963d6cabf9->enter($__internal_1d6b3049e6782c57be7eb8ec1627a1287dc55f87d3b1aa79741e0d963d6cabf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1d6b3049e6782c57be7eb8ec1627a1287dc55f87d3b1aa79741e0d963d6cabf9->leave($__internal_1d6b3049e6782c57be7eb8ec1627a1287dc55f87d3b1aa79741e0d963d6cabf9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94106eaefbff5e731fd86ea4ca63ab036b2efa0e42b2c58b5397f5ee32f41e56 = $this->env->getExtension("native_profiler");
        $__internal_94106eaefbff5e731fd86ea4ca63ab036b2efa0e42b2c58b5397f5ee32f41e56->enter($__internal_94106eaefbff5e731fd86ea4ca63ab036b2efa0e42b2c58b5397f5ee32f41e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_94106eaefbff5e731fd86ea4ca63ab036b2efa0e42b2c58b5397f5ee32f41e56->leave($__internal_94106eaefbff5e731fd86ea4ca63ab036b2efa0e42b2c58b5397f5ee32f41e56_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed070a88a99d80696bd99d6634833a1945c72f11098481babcd2ddea42942f3a = $this->env->getExtension("native_profiler");
        $__internal_ed070a88a99d80696bd99d6634833a1945c72f11098481babcd2ddea42942f3a->enter($__internal_ed070a88a99d80696bd99d6634833a1945c72f11098481babcd2ddea42942f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_ed070a88a99d80696bd99d6634833a1945c72f11098481babcd2ddea42942f3a->leave($__internal_ed070a88a99d80696bd99d6634833a1945c72f11098481babcd2ddea42942f3a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0ee75b85e54b1903226e6c8845a05de70f67c07d7eb1eed149168ebb81d7533 = $this->env->getExtension("native_profiler");
        $__internal_a0ee75b85e54b1903226e6c8845a05de70f67c07d7eb1eed149168ebb81d7533->enter($__internal_a0ee75b85e54b1903226e6c8845a05de70f67c07d7eb1eed149168ebb81d7533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a0ee75b85e54b1903226e6c8845a05de70f67c07d7eb1eed149168ebb81d7533->leave($__internal_a0ee75b85e54b1903226e6c8845a05de70f67c07d7eb1eed149168ebb81d7533_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
