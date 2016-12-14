<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_d4d49071de26a8ae25ad3cc45264df8e0505fac9ac93ca8a6de8d60765e61954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_611766fe1c978e208d584f5bf0bee85c66cbe83f1473eed739bfea1bf6402108 = $this->env->getExtension("native_profiler");
        $__internal_611766fe1c978e208d584f5bf0bee85c66cbe83f1473eed739bfea1bf6402108->enter($__internal_611766fe1c978e208d584f5bf0bee85c66cbe83f1473eed739bfea1bf6402108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_611766fe1c978e208d584f5bf0bee85c66cbe83f1473eed739bfea1bf6402108->leave($__internal_611766fe1c978e208d584f5bf0bee85c66cbe83f1473eed739bfea1bf6402108_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_741bda8444f94d260291853e7970482cd3a9636daea9194f2e1962a6b2d42c78 = $this->env->getExtension("native_profiler");
        $__internal_741bda8444f94d260291853e7970482cd3a9636daea9194f2e1962a6b2d42c78->enter($__internal_741bda8444f94d260291853e7970482cd3a9636daea9194f2e1962a6b2d42c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_741bda8444f94d260291853e7970482cd3a9636daea9194f2e1962a6b2d42c78->leave($__internal_741bda8444f94d260291853e7970482cd3a9636daea9194f2e1962a6b2d42c78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82e6eee128d922d16f659bb1604c5d52dd2625c2f9d1c6f47ad5808337072c58 = $this->env->getExtension("native_profiler");
        $__internal_82e6eee128d922d16f659bb1604c5d52dd2625c2f9d1c6f47ad5808337072c58->enter($__internal_82e6eee128d922d16f659bb1604c5d52dd2625c2f9d1c6f47ad5808337072c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_82e6eee128d922d16f659bb1604c5d52dd2625c2f9d1c6f47ad5808337072c58->leave($__internal_82e6eee128d922d16f659bb1604c5d52dd2625c2f9d1c6f47ad5808337072c58_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f93ce9b9a892ebfb33fab563c7ef8e7fa3be006ee4c86af8c16e95d7971a85a = $this->env->getExtension("native_profiler");
        $__internal_6f93ce9b9a892ebfb33fab563c7ef8e7fa3be006ee4c86af8c16e95d7971a85a->enter($__internal_6f93ce9b9a892ebfb33fab563c7ef8e7fa3be006ee4c86af8c16e95d7971a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f93ce9b9a892ebfb33fab563c7ef8e7fa3be006ee4c86af8c16e95d7971a85a->leave($__internal_6f93ce9b9a892ebfb33fab563c7ef8e7fa3be006ee4c86af8c16e95d7971a85a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d5ec5d52e0088e242398ae10241604f850b9348c3708c054f8a77bee9c603a2d = $this->env->getExtension("native_profiler");
        $__internal_d5ec5d52e0088e242398ae10241604f850b9348c3708c054f8a77bee9c603a2d->enter($__internal_d5ec5d52e0088e242398ae10241604f850b9348c3708c054f8a77bee9c603a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d5ec5d52e0088e242398ae10241604f850b9348c3708c054f8a77bee9c603a2d->leave($__internal_d5ec5d52e0088e242398ae10241604f850b9348c3708c054f8a77bee9c603a2d_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
