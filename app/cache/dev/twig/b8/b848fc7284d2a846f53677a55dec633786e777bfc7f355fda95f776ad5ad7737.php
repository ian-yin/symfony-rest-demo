<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6a9947ff3df5d77d2032160d6753ac70f42bdd2fe00875a564b3260272277ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60c6afafd5e105e53613b2a31612066b1bc3df6ad434a63c4d4b0dea279c3e26 = $this->env->getExtension("native_profiler");
        $__internal_60c6afafd5e105e53613b2a31612066b1bc3df6ad434a63c4d4b0dea279c3e26->enter($__internal_60c6afafd5e105e53613b2a31612066b1bc3df6ad434a63c4d4b0dea279c3e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_60c6afafd5e105e53613b2a31612066b1bc3df6ad434a63c4d4b0dea279c3e26->leave($__internal_60c6afafd5e105e53613b2a31612066b1bc3df6ad434a63c4d4b0dea279c3e26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
