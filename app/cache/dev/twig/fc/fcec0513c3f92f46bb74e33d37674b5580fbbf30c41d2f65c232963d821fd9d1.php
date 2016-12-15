<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c79e7062066b988af06313a76bcc7ff29197a0946667d082a1cb4f708cb1cce7 extends Twig_Template
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
        $__internal_b24aa2fa706647008d1f53bbe391f8cc46ffd02e1974f014a44417dae321d7d1 = $this->env->getExtension("native_profiler");
        $__internal_b24aa2fa706647008d1f53bbe391f8cc46ffd02e1974f014a44417dae321d7d1->enter($__internal_b24aa2fa706647008d1f53bbe391f8cc46ffd02e1974f014a44417dae321d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b24aa2fa706647008d1f53bbe391f8cc46ffd02e1974f014a44417dae321d7d1->leave($__internal_b24aa2fa706647008d1f53bbe391f8cc46ffd02e1974f014a44417dae321d7d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
