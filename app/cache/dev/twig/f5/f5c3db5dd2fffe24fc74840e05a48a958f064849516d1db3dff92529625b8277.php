<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5625bc13b8cb3b57bfca32d3380ad4558ec19f3b4cf4812d4700e6291882c8f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_38ee83e87c2d58eb8880919d19100d25442bd0ec870133d2f51a9b8aa2b9178b = $this->env->getExtension("native_profiler");
        $__internal_38ee83e87c2d58eb8880919d19100d25442bd0ec870133d2f51a9b8aa2b9178b->enter($__internal_38ee83e87c2d58eb8880919d19100d25442bd0ec870133d2f51a9b8aa2b9178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ee83e87c2d58eb8880919d19100d25442bd0ec870133d2f51a9b8aa2b9178b->leave($__internal_38ee83e87c2d58eb8880919d19100d25442bd0ec870133d2f51a9b8aa2b9178b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d1ff189047061b0d9d4614d2886993a3fa5d96339fc8d097f3971e219dbdf8e = $this->env->getExtension("native_profiler");
        $__internal_0d1ff189047061b0d9d4614d2886993a3fa5d96339fc8d097f3971e219dbdf8e->enter($__internal_0d1ff189047061b0d9d4614d2886993a3fa5d96339fc8d097f3971e219dbdf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0d1ff189047061b0d9d4614d2886993a3fa5d96339fc8d097f3971e219dbdf8e->leave($__internal_0d1ff189047061b0d9d4614d2886993a3fa5d96339fc8d097f3971e219dbdf8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
