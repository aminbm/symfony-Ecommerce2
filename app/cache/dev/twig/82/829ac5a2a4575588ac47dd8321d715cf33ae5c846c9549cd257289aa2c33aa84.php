<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_5f355cf31d7919ca3c386cee4f5ece16064ea22e86bdf8060bd29fac9f2982ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_7dfefdba25b0664f43603dd720de2b6d3fe08753ecd1521cf71e849d7ac45b45 = $this->env->getExtension("native_profiler");
        $__internal_7dfefdba25b0664f43603dd720de2b6d3fe08753ecd1521cf71e849d7ac45b45->enter($__internal_7dfefdba25b0664f43603dd720de2b6d3fe08753ecd1521cf71e849d7ac45b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfefdba25b0664f43603dd720de2b6d3fe08753ecd1521cf71e849d7ac45b45->leave($__internal_7dfefdba25b0664f43603dd720de2b6d3fe08753ecd1521cf71e849d7ac45b45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98b8fdc402bd964d7073e33648fdf8e4877a6408d9b2e1b3ee868752b59ea17c = $this->env->getExtension("native_profiler");
        $__internal_98b8fdc402bd964d7073e33648fdf8e4877a6408d9b2e1b3ee868752b59ea17c->enter($__internal_98b8fdc402bd964d7073e33648fdf8e4877a6408d9b2e1b3ee868752b59ea17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_98b8fdc402bd964d7073e33648fdf8e4877a6408d9b2e1b3ee868752b59ea17c->leave($__internal_98b8fdc402bd964d7073e33648fdf8e4877a6408d9b2e1b3ee868752b59ea17c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
