<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_45e16e3522a10e55bad6055c7e08425108d90ac0b3942f1d7d186e3ad77914be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_af255efa688f078552ef44f19993afa5cee2cdc26e4e5b4ec9421bac63d52fa5 = $this->env->getExtension("native_profiler");
        $__internal_af255efa688f078552ef44f19993afa5cee2cdc26e4e5b4ec9421bac63d52fa5->enter($__internal_af255efa688f078552ef44f19993afa5cee2cdc26e4e5b4ec9421bac63d52fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af255efa688f078552ef44f19993afa5cee2cdc26e4e5b4ec9421bac63d52fa5->leave($__internal_af255efa688f078552ef44f19993afa5cee2cdc26e4e5b4ec9421bac63d52fa5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40d7abdb4828886fd3a5149afe8a1f738c4ca1b7617a4a315dde98f90540c845 = $this->env->getExtension("native_profiler");
        $__internal_40d7abdb4828886fd3a5149afe8a1f738c4ca1b7617a4a315dde98f90540c845->enter($__internal_40d7abdb4828886fd3a5149afe8a1f738c4ca1b7617a4a315dde98f90540c845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_40d7abdb4828886fd3a5149afe8a1f738c4ca1b7617a4a315dde98f90540c845->leave($__internal_40d7abdb4828886fd3a5149afe8a1f738c4ca1b7617a4a315dde98f90540c845_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
