<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1ca708aff4562683219412d0b7fa8891f5768a6f389c793cfac26f705ef47890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e1db53334b95555c28523cf5588e024e09b5cf45e89d2cccb39e5ace15238f03 = $this->env->getExtension("native_profiler");
        $__internal_e1db53334b95555c28523cf5588e024e09b5cf45e89d2cccb39e5ace15238f03->enter($__internal_e1db53334b95555c28523cf5588e024e09b5cf45e89d2cccb39e5ace15238f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1db53334b95555c28523cf5588e024e09b5cf45e89d2cccb39e5ace15238f03->leave($__internal_e1db53334b95555c28523cf5588e024e09b5cf45e89d2cccb39e5ace15238f03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_244c3dc7bea5772d96b105185a17683a35094891c1ae6804c317055e84916ec9 = $this->env->getExtension("native_profiler");
        $__internal_244c3dc7bea5772d96b105185a17683a35094891c1ae6804c317055e84916ec9->enter($__internal_244c3dc7bea5772d96b105185a17683a35094891c1ae6804c317055e84916ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_244c3dc7bea5772d96b105185a17683a35094891c1ae6804c317055e84916ec9->leave($__internal_244c3dc7bea5772d96b105185a17683a35094891c1ae6804c317055e84916ec9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
