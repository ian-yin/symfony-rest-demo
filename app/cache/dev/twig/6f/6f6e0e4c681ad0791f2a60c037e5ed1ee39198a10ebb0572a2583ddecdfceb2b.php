<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_67b24477a87af0fbdadda4393ee2355e21644b3c6c743ec52166eceeb41d3e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f09e64c7b9472722b3f18c708356df33f949793210ed915ad4125600107952 = $this->env->getExtension("native_profiler");
        $__internal_31f09e64c7b9472722b3f18c708356df33f949793210ed915ad4125600107952->enter($__internal_31f09e64c7b9472722b3f18c708356df33f949793210ed915ad4125600107952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f09e64c7b9472722b3f18c708356df33f949793210ed915ad4125600107952->leave($__internal_31f09e64c7b9472722b3f18c708356df33f949793210ed915ad4125600107952_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_a88efb0941ef65f9ecacfd69a3b4f9fb8044cc4334de30ec630ba161b955a357 = $this->env->getExtension("native_profiler");
        $__internal_a88efb0941ef65f9ecacfd69a3b4f9fb8044cc4334de30ec630ba161b955a357->enter($__internal_a88efb0941ef65f9ecacfd69a3b4f9fb8044cc4334de30ec630ba161b955a357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a88efb0941ef65f9ecacfd69a3b4f9fb8044cc4334de30ec630ba161b955a357->leave($__internal_a88efb0941ef65f9ecacfd69a3b4f9fb8044cc4334de30ec630ba161b955a357_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_62d351965aa7b2aa6b756054b2174b484db53f02000a3d1c7156083a6bd9bcfb = $this->env->getExtension("native_profiler");
        $__internal_62d351965aa7b2aa6b756054b2174b484db53f02000a3d1c7156083a6bd9bcfb->enter($__internal_62d351965aa7b2aa6b756054b2174b484db53f02000a3d1c7156083a6bd9bcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_62d351965aa7b2aa6b756054b2174b484db53f02000a3d1c7156083a6bd9bcfb->leave($__internal_62d351965aa7b2aa6b756054b2174b484db53f02000a3d1c7156083a6bd9bcfb_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5a68a23b62e04670a6ca284a05f9942572aa0403f6bdceb55e53034e35ff6ad6 = $this->env->getExtension("native_profiler");
        $__internal_5a68a23b62e04670a6ca284a05f9942572aa0403f6bdceb55e53034e35ff6ad6->enter($__internal_5a68a23b62e04670a6ca284a05f9942572aa0403f6bdceb55e53034e35ff6ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_5a68a23b62e04670a6ca284a05f9942572aa0403f6bdceb55e53034e35ff6ad6->leave($__internal_5a68a23b62e04670a6ca284a05f9942572aa0403f6bdceb55e53034e35ff6ad6_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
