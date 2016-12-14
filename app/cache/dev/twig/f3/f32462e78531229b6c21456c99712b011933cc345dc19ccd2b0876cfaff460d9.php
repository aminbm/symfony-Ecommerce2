<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_19667ad839703e697cd7d166ec71e2df54d582f237bf3913f4beb7af5bc0d885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de317118eb55abec2905d782c0df4527cc2fdb09d145033a7da73c231c293760 = $this->env->getExtension("native_profiler");
        $__internal_de317118eb55abec2905d782c0df4527cc2fdb09d145033a7da73c231c293760->enter($__internal_de317118eb55abec2905d782c0df4527cc2fdb09d145033a7da73c231c293760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de317118eb55abec2905d782c0df4527cc2fdb09d145033a7da73c231c293760->leave($__internal_de317118eb55abec2905d782c0df4527cc2fdb09d145033a7da73c231c293760_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efdba078831bfad4c4761637db9e0f085fff9109bec001e077fc74c6f8f3b69e = $this->env->getExtension("native_profiler");
        $__internal_efdba078831bfad4c4761637db9e0f085fff9109bec001e077fc74c6f8f3b69e->enter($__internal_efdba078831bfad4c4761637db9e0f085fff9109bec001e077fc74c6f8f3b69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_efdba078831bfad4c4761637db9e0f085fff9109bec001e077fc74c6f8f3b69e->leave($__internal_efdba078831bfad4c4761637db9e0f085fff9109bec001e077fc74c6f8f3b69e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a4c7ccc64cfe45b36acebd5e642fefc377122c9e7cde74a5d0b655b4694d70f = $this->env->getExtension("native_profiler");
        $__internal_2a4c7ccc64cfe45b36acebd5e642fefc377122c9e7cde74a5d0b655b4694d70f->enter($__internal_2a4c7ccc64cfe45b36acebd5e642fefc377122c9e7cde74a5d0b655b4694d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_2a4c7ccc64cfe45b36acebd5e642fefc377122c9e7cde74a5d0b655b4694d70f->leave($__internal_2a4c7ccc64cfe45b36acebd5e642fefc377122c9e7cde74a5d0b655b4694d70f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_08544aa8a9f53808826f7839a4bb7ffbe04af2f394b4509cda16f03acf4fd634 = $this->env->getExtension("native_profiler");
        $__internal_08544aa8a9f53808826f7839a4bb7ffbe04af2f394b4509cda16f03acf4fd634->enter($__internal_08544aa8a9f53808826f7839a4bb7ffbe04af2f394b4509cda16f03acf4fd634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_08544aa8a9f53808826f7839a4bb7ffbe04af2f394b4509cda16f03acf4fd634->leave($__internal_08544aa8a9f53808826f7839a4bb7ffbe04af2f394b4509cda16f03acf4fd634_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_39ffa918ebcf464ef9c46ed6aff9c543d10160490987d12ad1706712c424bd79 = $this->env->getExtension("native_profiler");
        $__internal_39ffa918ebcf464ef9c46ed6aff9c543d10160490987d12ad1706712c424bd79->enter($__internal_39ffa918ebcf464ef9c46ed6aff9c543d10160490987d12ad1706712c424bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_39ffa918ebcf464ef9c46ed6aff9c543d10160490987d12ad1706712c424bd79->leave($__internal_39ffa918ebcf464ef9c46ed6aff9c543d10160490987d12ad1706712c424bd79_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
