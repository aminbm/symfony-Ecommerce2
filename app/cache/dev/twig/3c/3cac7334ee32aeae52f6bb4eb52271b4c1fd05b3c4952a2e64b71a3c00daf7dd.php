<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7cc8c096d91fc1f18848af3c646f4f4bea99968a59cb3b2b27fec9c22220e60d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_881eba0865415ebb734a10df29d263c22836b5fe00a94fa0860adc5d61d67be3 = $this->env->getExtension("native_profiler");
        $__internal_881eba0865415ebb734a10df29d263c22836b5fe00a94fa0860adc5d61d67be3->enter($__internal_881eba0865415ebb734a10df29d263c22836b5fe00a94fa0860adc5d61d67be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_881eba0865415ebb734a10df29d263c22836b5fe00a94fa0860adc5d61d67be3->leave($__internal_881eba0865415ebb734a10df29d263c22836b5fe00a94fa0860adc5d61d67be3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47ede577656732b96012066a6f4ce2aeb2c394399f1e9579256e4d1116c865af = $this->env->getExtension("native_profiler");
        $__internal_47ede577656732b96012066a6f4ce2aeb2c394399f1e9579256e4d1116c865af->enter($__internal_47ede577656732b96012066a6f4ce2aeb2c394399f1e9579256e4d1116c865af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_47ede577656732b96012066a6f4ce2aeb2c394399f1e9579256e4d1116c865af->leave($__internal_47ede577656732b96012066a6f4ce2aeb2c394399f1e9579256e4d1116c865af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
