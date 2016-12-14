<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d0a7c3e72cb52eeb73178625745b833fb7dc1a6d7a8d8392175a533c88d20a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fe86dae65f54827baf0ff61d70519956a6ff14dfc7fafcd1774c69289dac6ed8 = $this->env->getExtension("native_profiler");
        $__internal_fe86dae65f54827baf0ff61d70519956a6ff14dfc7fafcd1774c69289dac6ed8->enter($__internal_fe86dae65f54827baf0ff61d70519956a6ff14dfc7fafcd1774c69289dac6ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe86dae65f54827baf0ff61d70519956a6ff14dfc7fafcd1774c69289dac6ed8->leave($__internal_fe86dae65f54827baf0ff61d70519956a6ff14dfc7fafcd1774c69289dac6ed8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6b126e661fc50a108c4bdc96910521188840487f1a037c2c09f7dd23a2d2ce9 = $this->env->getExtension("native_profiler");
        $__internal_e6b126e661fc50a108c4bdc96910521188840487f1a037c2c09f7dd23a2d2ce9->enter($__internal_e6b126e661fc50a108c4bdc96910521188840487f1a037c2c09f7dd23a2d2ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e6b126e661fc50a108c4bdc96910521188840487f1a037c2c09f7dd23a2d2ce9->leave($__internal_e6b126e661fc50a108c4bdc96910521188840487f1a037c2c09f7dd23a2d2ce9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
