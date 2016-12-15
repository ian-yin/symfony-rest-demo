<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4cb14ee2cb8e70b455168369e23803e8dee4318039abd4f30d0d2cd9f48e73cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_863e92111c39614bb9d5dd467138af6f3b0a34be88b95fe30a9d2cfe4b325675 = $this->env->getExtension("native_profiler");
        $__internal_863e92111c39614bb9d5dd467138af6f3b0a34be88b95fe30a9d2cfe4b325675->enter($__internal_863e92111c39614bb9d5dd467138af6f3b0a34be88b95fe30a9d2cfe4b325675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863e92111c39614bb9d5dd467138af6f3b0a34be88b95fe30a9d2cfe4b325675->leave($__internal_863e92111c39614bb9d5dd467138af6f3b0a34be88b95fe30a9d2cfe4b325675_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21ef60652cd67b8b76b9c8c71a582e5bdbaf99852bb8a99fafc2f7de1cd598b8 = $this->env->getExtension("native_profiler");
        $__internal_21ef60652cd67b8b76b9c8c71a582e5bdbaf99852bb8a99fafc2f7de1cd598b8->enter($__internal_21ef60652cd67b8b76b9c8c71a582e5bdbaf99852bb8a99fafc2f7de1cd598b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21ef60652cd67b8b76b9c8c71a582e5bdbaf99852bb8a99fafc2f7de1cd598b8->leave($__internal_21ef60652cd67b8b76b9c8c71a582e5bdbaf99852bb8a99fafc2f7de1cd598b8_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08ae0c7f5d83d2e11749b6b23564fe40feaf799c324c8e7640729554afde31cb = $this->env->getExtension("native_profiler");
        $__internal_08ae0c7f5d83d2e11749b6b23564fe40feaf799c324c8e7640729554afde31cb->enter($__internal_08ae0c7f5d83d2e11749b6b23564fe40feaf799c324c8e7640729554afde31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08ae0c7f5d83d2e11749b6b23564fe40feaf799c324c8e7640729554afde31cb->leave($__internal_08ae0c7f5d83d2e11749b6b23564fe40feaf799c324c8e7640729554afde31cb_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9947a4894ed942b66978cbd70a30990463d8a0ce00623648b5ecc23defce38cb = $this->env->getExtension("native_profiler");
        $__internal_9947a4894ed942b66978cbd70a30990463d8a0ce00623648b5ecc23defce38cb->enter($__internal_9947a4894ed942b66978cbd70a30990463d8a0ce00623648b5ecc23defce38cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9947a4894ed942b66978cbd70a30990463d8a0ce00623648b5ecc23defce38cb->leave($__internal_9947a4894ed942b66978cbd70a30990463d8a0ce00623648b5ecc23defce38cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><g><path fill="#3F3F3F" d="M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z"/><path fill="#3F3F3F" d="M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z"/><path fill="#3F3F3F" d="M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z"/><path fill="#3F3F3F" d="M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z"/></g></svg></span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', {'token': token})) }}*/
/* {% endblock %}*/
/* */
