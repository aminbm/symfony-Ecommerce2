<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_086164257e12cb497d5802c4e6165515a87b5c4f8995acfe9b3fb9679c7a577d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04d31f82fe70b25c4cf9c0d42569dec74a721d5709aa12e56363ed279d0d53e0 = $this->env->getExtension("native_profiler");
        $__internal_04d31f82fe70b25c4cf9c0d42569dec74a721d5709aa12e56363ed279d0d53e0->enter($__internal_04d31f82fe70b25c4cf9c0d42569dec74a721d5709aa12e56363ed279d0d53e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d31f82fe70b25c4cf9c0d42569dec74a721d5709aa12e56363ed279d0d53e0->leave($__internal_04d31f82fe70b25c4cf9c0d42569dec74a721d5709aa12e56363ed279d0d53e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bb11f27f2885f748c85e4dd7daccb726db66a43c9065f81ee4da23b63233e8b = $this->env->getExtension("native_profiler");
        $__internal_8bb11f27f2885f748c85e4dd7daccb726db66a43c9065f81ee4da23b63233e8b->enter($__internal_8bb11f27f2885f748c85e4dd7daccb726db66a43c9065f81ee4da23b63233e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8bb11f27f2885f748c85e4dd7daccb726db66a43c9065f81ee4da23b63233e8b->leave($__internal_8bb11f27f2885f748c85e4dd7daccb726db66a43c9065f81ee4da23b63233e8b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
