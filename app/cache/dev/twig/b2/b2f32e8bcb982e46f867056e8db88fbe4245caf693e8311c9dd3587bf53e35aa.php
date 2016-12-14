<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a17309d91cd3fc758037079c482b914c73a01f68d765e2e9a4ca4bc5b60b8fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_72ef1573c40b46ac8dd6613fc1ae881ca859963d75215b927b9bf26e34b58ec5 = $this->env->getExtension("native_profiler");
        $__internal_72ef1573c40b46ac8dd6613fc1ae881ca859963d75215b927b9bf26e34b58ec5->enter($__internal_72ef1573c40b46ac8dd6613fc1ae881ca859963d75215b927b9bf26e34b58ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ef1573c40b46ac8dd6613fc1ae881ca859963d75215b927b9bf26e34b58ec5->leave($__internal_72ef1573c40b46ac8dd6613fc1ae881ca859963d75215b927b9bf26e34b58ec5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dedc93dca51193a1871659591ae07cbbf65787d9bfb2f907b87cad2b00c958a8 = $this->env->getExtension("native_profiler");
        $__internal_dedc93dca51193a1871659591ae07cbbf65787d9bfb2f907b87cad2b00c958a8->enter($__internal_dedc93dca51193a1871659591ae07cbbf65787d9bfb2f907b87cad2b00c958a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_dedc93dca51193a1871659591ae07cbbf65787d9bfb2f907b87cad2b00c958a8->leave($__internal_dedc93dca51193a1871659591ae07cbbf65787d9bfb2f907b87cad2b00c958a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
