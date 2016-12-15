<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5d8d6f5f7222613ee80ba14821b6cd03454c366c0e3b0036fcb556864e853708 extends Twig_Template
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
        $__internal_a6d34a06b60d7c82d598fa6ff53a33b113c2d1563578398ae91562f7cc5a47f5 = $this->env->getExtension("native_profiler");
        $__internal_a6d34a06b60d7c82d598fa6ff53a33b113c2d1563578398ae91562f7cc5a47f5->enter($__internal_a6d34a06b60d7c82d598fa6ff53a33b113c2d1563578398ae91562f7cc5a47f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a6d34a06b60d7c82d598fa6ff53a33b113c2d1563578398ae91562f7cc5a47f5->leave($__internal_a6d34a06b60d7c82d598fa6ff53a33b113c2d1563578398ae91562f7cc5a47f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
