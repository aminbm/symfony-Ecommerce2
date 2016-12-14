<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a057fa3a912b1bd7611d09850d080a1a34b6e269a207021cdfb1295e0d378992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_a56ccbb3060be54c280acf5d1523169f1271e35248e8d2e0198c84c5b283c1e4 = $this->env->getExtension("native_profiler");
        $__internal_a56ccbb3060be54c280acf5d1523169f1271e35248e8d2e0198c84c5b283c1e4->enter($__internal_a56ccbb3060be54c280acf5d1523169f1271e35248e8d2e0198c84c5b283c1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56ccbb3060be54c280acf5d1523169f1271e35248e8d2e0198c84c5b283c1e4->leave($__internal_a56ccbb3060be54c280acf5d1523169f1271e35248e8d2e0198c84c5b283c1e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c7994a3f6339554fd9f473d5e8dcc261cf7f82c3c91cd2489267b2d2f9348c8 = $this->env->getExtension("native_profiler");
        $__internal_9c7994a3f6339554fd9f473d5e8dcc261cf7f82c3c91cd2489267b2d2f9348c8->enter($__internal_9c7994a3f6339554fd9f473d5e8dcc261cf7f82c3c91cd2489267b2d2f9348c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9c7994a3f6339554fd9f473d5e8dcc261cf7f82c3c91cd2489267b2d2f9348c8->leave($__internal_9c7994a3f6339554fd9f473d5e8dcc261cf7f82c3c91cd2489267b2d2f9348c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
