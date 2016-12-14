<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_250f84f63e83d50ea102dc5baa6ed960d9e3a68d419c5c7b14ed0df6551eda4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_aa619ba3791809bd83f50855e88de0c275e0720cb6c8cbbe7d1fdc7a1b7785b9 = $this->env->getExtension("native_profiler");
        $__internal_aa619ba3791809bd83f50855e88de0c275e0720cb6c8cbbe7d1fdc7a1b7785b9->enter($__internal_aa619ba3791809bd83f50855e88de0c275e0720cb6c8cbbe7d1fdc7a1b7785b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa619ba3791809bd83f50855e88de0c275e0720cb6c8cbbe7d1fdc7a1b7785b9->leave($__internal_aa619ba3791809bd83f50855e88de0c275e0720cb6c8cbbe7d1fdc7a1b7785b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a67da593b18cceb5340c91379dd9a693a39e72d91eefe3c600d3cdab7b9662d = $this->env->getExtension("native_profiler");
        $__internal_7a67da593b18cceb5340c91379dd9a693a39e72d91eefe3c600d3cdab7b9662d->enter($__internal_7a67da593b18cceb5340c91379dd9a693a39e72d91eefe3c600d3cdab7b9662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7a67da593b18cceb5340c91379dd9a693a39e72d91eefe3c600d3cdab7b9662d->leave($__internal_7a67da593b18cceb5340c91379dd9a693a39e72d91eefe3c600d3cdab7b9662d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
