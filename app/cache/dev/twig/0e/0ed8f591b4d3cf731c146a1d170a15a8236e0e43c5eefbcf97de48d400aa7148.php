<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9236aaa3cd96631fe301043ff22850213c7ecb487e5da8f296fdc2388dbeb071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dc5d4215debec06654d42c1cda198bd2725a550e0066a73d9fb233b751276579 = $this->env->getExtension("native_profiler");
        $__internal_dc5d4215debec06654d42c1cda198bd2725a550e0066a73d9fb233b751276579->enter($__internal_dc5d4215debec06654d42c1cda198bd2725a550e0066a73d9fb233b751276579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5d4215debec06654d42c1cda198bd2725a550e0066a73d9fb233b751276579->leave($__internal_dc5d4215debec06654d42c1cda198bd2725a550e0066a73d9fb233b751276579_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c2e34f2b58dbd78c13539fb4a6c7d82d2ad7a3c6e42f98d67bfa61e3c3ff794 = $this->env->getExtension("native_profiler");
        $__internal_9c2e34f2b58dbd78c13539fb4a6c7d82d2ad7a3c6e42f98d67bfa61e3c3ff794->enter($__internal_9c2e34f2b58dbd78c13539fb4a6c7d82d2ad7a3c6e42f98d67bfa61e3c3ff794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c2e34f2b58dbd78c13539fb4a6c7d82d2ad7a3c6e42f98d67bfa61e3c3ff794->leave($__internal_9c2e34f2b58dbd78c13539fb4a6c7d82d2ad7a3c6e42f98d67bfa61e3c3ff794_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1941bcb43bec9750d17afed9f20aad6c63f46f3d37a445b965ae639ce0e9e18c = $this->env->getExtension("native_profiler");
        $__internal_1941bcb43bec9750d17afed9f20aad6c63f46f3d37a445b965ae639ce0e9e18c->enter($__internal_1941bcb43bec9750d17afed9f20aad6c63f46f3d37a445b965ae639ce0e9e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1941bcb43bec9750d17afed9f20aad6c63f46f3d37a445b965ae639ce0e9e18c->leave($__internal_1941bcb43bec9750d17afed9f20aad6c63f46f3d37a445b965ae639ce0e9e18c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f94cec334a82a483eb00d83017e66d5246e99dd99c5241cabc54227425a2b62 = $this->env->getExtension("native_profiler");
        $__internal_4f94cec334a82a483eb00d83017e66d5246e99dd99c5241cabc54227425a2b62->enter($__internal_4f94cec334a82a483eb00d83017e66d5246e99dd99c5241cabc54227425a2b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4f94cec334a82a483eb00d83017e66d5246e99dd99c5241cabc54227425a2b62->leave($__internal_4f94cec334a82a483eb00d83017e66d5246e99dd99c5241cabc54227425a2b62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
