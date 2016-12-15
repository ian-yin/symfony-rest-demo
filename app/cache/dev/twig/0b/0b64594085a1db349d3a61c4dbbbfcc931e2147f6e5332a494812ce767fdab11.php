<?php

/* ::base.html.twig */
class __TwigTemplate_b77e81f0383957982ba01df6cf0aed7c5e408e24def113d26450545a1160630f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51ba417022eacfeab96845ad9c8146a86af88625b7514704948b00547e64cdfc = $this->env->getExtension("native_profiler");
        $__internal_51ba417022eacfeab96845ad9c8146a86af88625b7514704948b00547e64cdfc->enter($__internal_51ba417022eacfeab96845ad9c8146a86af88625b7514704948b00547e64cdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_51ba417022eacfeab96845ad9c8146a86af88625b7514704948b00547e64cdfc->leave($__internal_51ba417022eacfeab96845ad9c8146a86af88625b7514704948b00547e64cdfc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_586bb3aa33865778608f70f5d7ba2dd939b6d6418aa26afeba2daf6666cb6d7f = $this->env->getExtension("native_profiler");
        $__internal_586bb3aa33865778608f70f5d7ba2dd939b6d6418aa26afeba2daf6666cb6d7f->enter($__internal_586bb3aa33865778608f70f5d7ba2dd939b6d6418aa26afeba2daf6666cb6d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_586bb3aa33865778608f70f5d7ba2dd939b6d6418aa26afeba2daf6666cb6d7f->leave($__internal_586bb3aa33865778608f70f5d7ba2dd939b6d6418aa26afeba2daf6666cb6d7f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dcbf79ae3b66dd091876436e42122e09315b4e60484f50812e4a4b71b9d9257 = $this->env->getExtension("native_profiler");
        $__internal_3dcbf79ae3b66dd091876436e42122e09315b4e60484f50812e4a4b71b9d9257->enter($__internal_3dcbf79ae3b66dd091876436e42122e09315b4e60484f50812e4a4b71b9d9257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3dcbf79ae3b66dd091876436e42122e09315b4e60484f50812e4a4b71b9d9257->leave($__internal_3dcbf79ae3b66dd091876436e42122e09315b4e60484f50812e4a4b71b9d9257_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c53af776c457d05973a186a3afdc93c2d724b9b3530f16845ae9f9e413e451 = $this->env->getExtension("native_profiler");
        $__internal_f9c53af776c457d05973a186a3afdc93c2d724b9b3530f16845ae9f9e413e451->enter($__internal_f9c53af776c457d05973a186a3afdc93c2d724b9b3530f16845ae9f9e413e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9c53af776c457d05973a186a3afdc93c2d724b9b3530f16845ae9f9e413e451->leave($__internal_f9c53af776c457d05973a186a3afdc93c2d724b9b3530f16845ae9f9e413e451_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1d76c0ede19c091a738c0cab89f85618cc370800148f0d78177dacf3eecaa5e = $this->env->getExtension("native_profiler");
        $__internal_d1d76c0ede19c091a738c0cab89f85618cc370800148f0d78177dacf3eecaa5e->enter($__internal_d1d76c0ede19c091a738c0cab89f85618cc370800148f0d78177dacf3eecaa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d1d76c0ede19c091a738c0cab89f85618cc370800148f0d78177dacf3eecaa5e->leave($__internal_d1d76c0ede19c091a738c0cab89f85618cc370800148f0d78177dacf3eecaa5e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
