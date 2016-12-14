<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2f57789e7f7a7f8c2deb595f6d28295790e74e362a59e36e68d7b46114dd2111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_dec65e611e742aff19abb9602bb0fc3cff97f76b52e8e170fec5c27deb96df00 = $this->env->getExtension("native_profiler");
        $__internal_dec65e611e742aff19abb9602bb0fc3cff97f76b52e8e170fec5c27deb96df00->enter($__internal_dec65e611e742aff19abb9602bb0fc3cff97f76b52e8e170fec5c27deb96df00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec65e611e742aff19abb9602bb0fc3cff97f76b52e8e170fec5c27deb96df00->leave($__internal_dec65e611e742aff19abb9602bb0fc3cff97f76b52e8e170fec5c27deb96df00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0b5b93828c8312c8a5054e770a50ed0965adacfbef4e29fba1ceca7de8861d9 = $this->env->getExtension("native_profiler");
        $__internal_c0b5b93828c8312c8a5054e770a50ed0965adacfbef4e29fba1ceca7de8861d9->enter($__internal_c0b5b93828c8312c8a5054e770a50ed0965adacfbef4e29fba1ceca7de8861d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c0b5b93828c8312c8a5054e770a50ed0965adacfbef4e29fba1ceca7de8861d9->leave($__internal_c0b5b93828c8312c8a5054e770a50ed0965adacfbef4e29fba1ceca7de8861d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
