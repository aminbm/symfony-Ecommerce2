<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_da60f82b80a69494ea33505cc999032231609570fe5ff2e17f102a6f4603d1d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_6a81e46763ccba418c31af458af7c965cc7f610b5aa45217d326e7a4c5ffb344 = $this->env->getExtension("native_profiler");
        $__internal_6a81e46763ccba418c31af458af7c965cc7f610b5aa45217d326e7a4c5ffb344->enter($__internal_6a81e46763ccba418c31af458af7c965cc7f610b5aa45217d326e7a4c5ffb344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a81e46763ccba418c31af458af7c965cc7f610b5aa45217d326e7a4c5ffb344->leave($__internal_6a81e46763ccba418c31af458af7c965cc7f610b5aa45217d326e7a4c5ffb344_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ca3fc1ecf878fc94d0d928a44d3a2640d0a40b47935d0995794b3fe517c32a2 = $this->env->getExtension("native_profiler");
        $__internal_2ca3fc1ecf878fc94d0d928a44d3a2640d0a40b47935d0995794b3fe517c32a2->enter($__internal_2ca3fc1ecf878fc94d0d928a44d3a2640d0a40b47935d0995794b3fe517c32a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2ca3fc1ecf878fc94d0d928a44d3a2640d0a40b47935d0995794b3fe517c32a2->leave($__internal_2ca3fc1ecf878fc94d0d928a44d3a2640d0a40b47935d0995794b3fe517c32a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
