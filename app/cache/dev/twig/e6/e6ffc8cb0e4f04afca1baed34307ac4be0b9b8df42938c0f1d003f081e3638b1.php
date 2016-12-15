<?php

/* AppBundle:Note:getNote.html.twig */
class __TwigTemplate_8e18a0e7c80fa2908b4b31f23395b8782759f58913bece1fab1a46ad9d9ec68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:getNote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cce5d964d3b4266db7492ca50b85abafd62dce36d7325be092a630a2634f8073 = $this->env->getExtension("native_profiler");
        $__internal_cce5d964d3b4266db7492ca50b85abafd62dce36d7325be092a630a2634f8073->enter($__internal_cce5d964d3b4266db7492ca50b85abafd62dce36d7325be092a630a2634f8073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:getNote.html.twig"));

        // line 18
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cce5d964d3b4266db7492ca50b85abafd62dce36d7325be092a630a2634f8073->leave($__internal_cce5d964d3b4266db7492ca50b85abafd62dce36d7325be092a630a2634f8073_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ff2acf5d24d48afc714f8c54c16013cc95fe7632bc8dc4508e5667c7366d67 = $this->env->getExtension("native_profiler");
        $__internal_d8ff2acf5d24d48afc714f8c54c16013cc95fe7632bc8dc4508e5667c7366d67->enter($__internal_d8ff2acf5d24d48afc714f8c54c16013cc95fe7632bc8dc4508e5667c7366d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Note";
        
        $__internal_d8ff2acf5d24d48afc714f8c54c16013cc95fe7632bc8dc4508e5667c7366d67->leave($__internal_d8ff2acf5d24d48afc714f8c54c16013cc95fe7632bc8dc4508e5667c7366d67_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_7af4a8295e78af00166640872fa02e38f6ac4b1eb359af339622e6b444f717be = $this->env->getExtension("native_profiler");
        $__internal_7af4a8295e78af00166640872fa02e38f6ac4b1eb359af339622e6b444f717be->enter($__internal_7af4a8295e78af00166640872fa02e38f6ac4b1eb359af339622e6b444f717be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_7af4a8295e78af00166640872fa02e38f6ac4b1eb359af339622e6b444f717be->leave($__internal_7af4a8295e78af00166640872fa02e38f6ac4b1eb359af339622e6b444f717be_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_775e59d575ad1c74593410c1806b270cb909498d96cb64b8ee8ca0f42f63eb6e = $this->env->getExtension("native_profiler");
        $__internal_775e59d575ad1c74593410c1806b270cb909498d96cb64b8ee8ca0f42f63eb6e->enter($__internal_775e59d575ad1c74593410c1806b270cb909498d96cb64b8ee8ca0f42f63eb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Note #";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>

    <p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo "</p>
    <p>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("get_notes");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.link", array(), "AppBundle"), "html", null, true);
        echo "</a> <br>
        [<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_notes", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.remove.link", array(), "AppBundle"), "html", null, true);
        echo "</a>]
        [<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_notes", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.edit.link", array(), "AppBundle"), "html", null, true);
        echo "</a>]
    </p>
";
        
        $__internal_775e59d575ad1c74593410c1806b270cb909498d96cb64b8ee8ca0f42f63eb6e->leave($__internal_775e59d575ad1c74593410c1806b270cb909498d96cb64b8ee8ca0f42f63eb6e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:getNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  80 => 12,  75 => 10,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 18,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Note" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Note #{{ id }}</h1>*/
/* */
/*     <p>{{ note }}</p>*/
/*     <p>*/
/*         <a href="{{ path('get_notes') }}">{{ 'note.list.link'|trans({}, 'AppBundle') }}</a> <br>*/
/*         [<a href="{{ path('remove_notes', {'id': id}) }}">{{ 'note.remove.link'|trans({}, 'AppBundle') }}</a>]*/
/*         [<a href="{{ path('edit_notes', {'id': id}) }}">{{ 'note.edit.link'|trans({}, 'AppBundle') }}</a>]*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
