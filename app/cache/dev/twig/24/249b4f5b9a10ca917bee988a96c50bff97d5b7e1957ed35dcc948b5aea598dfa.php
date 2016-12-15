<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_aea0d1adf3301bedb3dba0e4dd0338e91a8114262e8dde5e2f267b1b2883f386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ebb45d10765d57d9c51a10a7991633ff28e6e8ad07ca6adb5023298eac6a680 = $this->env->getExtension("native_profiler");
        $__internal_7ebb45d10765d57d9c51a10a7991633ff28e6e8ad07ca6adb5023298eac6a680->enter($__internal_7ebb45d10765d57d9c51a10a7991633ff28e6e8ad07ca6adb5023298eac6a680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7ebb45d10765d57d9c51a10a7991633ff28e6e8ad07ca6adb5023298eac6a680->leave($__internal_7ebb45d10765d57d9c51a10a7991633ff28e6e8ad07ca6adb5023298eac6a680_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6de07810e7cdb00eab32f3338f2c75650d2a5630bcbb8b59993e2b2499d39366 = $this->env->getExtension("native_profiler");
        $__internal_6de07810e7cdb00eab32f3338f2c75650d2a5630bcbb8b59993e2b2499d39366->enter($__internal_6de07810e7cdb00eab32f3338f2c75650d2a5630bcbb8b59993e2b2499d39366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6de07810e7cdb00eab32f3338f2c75650d2a5630bcbb8b59993e2b2499d39366->leave($__internal_6de07810e7cdb00eab32f3338f2c75650d2a5630bcbb8b59993e2b2499d39366_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
