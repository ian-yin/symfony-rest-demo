<?php

/* AppBundle:Note:getNotes.html.twig */
class __TwigTemplate_2adfa89f100ecc7902e865b7c8a5473bd2bfc528f5bfafc180c1d5285a03fb87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Note:getNotes.html.twig", 1);
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
        $__internal_b5a698c9354e4ec5c975064205958399510a8e28f8d1ae0b821081477d36a8d2 = $this->env->getExtension("native_profiler");
        $__internal_b5a698c9354e4ec5c975064205958399510a8e28f8d1ae0b821081477d36a8d2->enter($__internal_b5a698c9354e4ec5c975064205958399510a8e28f8d1ae0b821081477d36a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Note:getNotes.html.twig"));

        // line 30
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a698c9354e4ec5c975064205958399510a8e28f8d1ae0b821081477d36a8d2->leave($__internal_b5a698c9354e4ec5c975064205958399510a8e28f8d1ae0b821081477d36a8d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b95202afd847acd8553be60519716259f47ed83342f1f5bd1ddcaf80f5b782b = $this->env->getExtension("native_profiler");
        $__internal_0b95202afd847acd8553be60519716259f47ed83342f1f5bd1ddcaf80f5b782b->enter($__internal_0b95202afd847acd8553be60519716259f47ed83342f1f5bd1ddcaf80f5b782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_0b95202afd847acd8553be60519716259f47ed83342f1f5bd1ddcaf80f5b782b->leave($__internal_0b95202afd847acd8553be60519716259f47ed83342f1f5bd1ddcaf80f5b782b_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_60f7e9d9deb728ebe7ca2a723bb9f0c6c3f58d2d31cf151231c7abc3b69b65ff = $this->env->getExtension("native_profiler");
        $__internal_60f7e9d9deb728ebe7ca2a723bb9f0c6c3f58d2d31cf151231c7abc3b69b65ff->enter($__internal_60f7e9d9deb728ebe7ca2a723bb9f0c6c3f58d2d31cf151231c7abc3b69b65ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_60f7e9d9deb728ebe7ca2a723bb9f0c6c3f58d2d31cf151231c7abc3b69b65ff->leave($__internal_60f7e9d9deb728ebe7ca2a723bb9f0c6c3f58d2d31cf151231c7abc3b69b65ff_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b49415650aac3477247c813e44357d55dbf534b4cbf86da0840eac1d695e1fde = $this->env->getExtension("native_profiler");
        $__internal_b49415650aac3477247c813e44357d55dbf534b4cbf86da0840eac1d695e1fde->enter($__internal_b49415650aac3477247c813e44357d55dbf534b4cbf86da0840eac1d695e1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.headline", array(), "AppBundle"), "html", null, true);
        echo "</h1>

    <p>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.offset", array(), "AppBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "offset", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "offset", array())) : ("-")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.limit", array(), "AppBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "limit", array()), "html", null, true);
        echo "
    </p>

    <ul id=\"note-list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "notes", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["note"]) {
            // line 16
            echo "        <li>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("get_note", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["note"], "html", null, true);
            echo "</a>
            [<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_notes", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.edit.link", array(), "AppBundle"), "html", null, true);
            echo "</a>]
            [<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_notes", array("id" => $context["id"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.remove.link", array(), "AppBundle"), "html", null, true);
            echo "</a>]
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.list.empty", array(), "AppBundle"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
    <p>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("new_note");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note.new.link", array(), "AppBundle"), "html", null, true);
        echo "</a>
    </p>
";
        
        $__internal_b49415650aac3477247c813e44357d55dbf534b4cbf86da0840eac1d695e1fde->leave($__internal_b49415650aac3477247c813e44357d55dbf534b4cbf86da0840eac1d695e1fde_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Note:getNotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  128 => 24,  119 => 22,  109 => 19,  103 => 18,  97 => 17,  94 => 16,  89 => 15,  76 => 11,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 30,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">{{ 'note.list.headline'|trans({}, 'AppBundle') }}</h1>*/
/* */
/*     <p>*/
/*         {{ 'note.offset'|trans({}, 'AppBundle') }}: {{ data.offset ?: '-' }}, {{ 'note.limit'|trans({}, 'AppBundle') }}: {{ data.limit }}*/
/*     </p>*/
/* */
/*     <ul id="note-list">*/
/*         {% for id, note in data.notes %}*/
/*         <li>*/
/*             <a href="{{ path('get_note', {'id': id}) }}">{{ note }}</a>*/
/*             [<a href="{{ path('edit_notes', {'id': id}) }}">{{ 'note.edit.link'|trans({}, 'AppBundle') }}</a>]*/
/*             [<a href="{{ path('remove_notes', {'id': id}) }}">{{ 'note.remove.link'|trans({}, 'AppBundle') }}</a>]*/
/*         </li>*/
/*         {% else %}*/
/*         <li>{{ 'note.list.empty'|trans({}, 'AppBundle') }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <p>*/
/*         <a href="{{ path('new_note') }}">{{ 'note.new.link'|trans({}, 'AppBundle') }}</a>*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
