<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fdd097e186008be5a3ce949c5116c1384a8a1b63cb3970f83975ec03a18082a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_9b0f5f690bb38a28503d5d8d10d3b58ea6f6bbc2ff7bfacc57d9c867b8134beb = $this->env->getExtension("native_profiler");
        $__internal_9b0f5f690bb38a28503d5d8d10d3b58ea6f6bbc2ff7bfacc57d9c867b8134beb->enter($__internal_9b0f5f690bb38a28503d5d8d10d3b58ea6f6bbc2ff7bfacc57d9c867b8134beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b0f5f690bb38a28503d5d8d10d3b58ea6f6bbc2ff7bfacc57d9c867b8134beb->leave($__internal_9b0f5f690bb38a28503d5d8d10d3b58ea6f6bbc2ff7bfacc57d9c867b8134beb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb5228ebd564bf72c17fec7d40ba20495c1e42a4cd8dbc79987261054713a226 = $this->env->getExtension("native_profiler");
        $__internal_cb5228ebd564bf72c17fec7d40ba20495c1e42a4cd8dbc79987261054713a226->enter($__internal_cb5228ebd564bf72c17fec7d40ba20495c1e42a4cd8dbc79987261054713a226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cb5228ebd564bf72c17fec7d40ba20495c1e42a4cd8dbc79987261054713a226->leave($__internal_cb5228ebd564bf72c17fec7d40ba20495c1e42a4cd8dbc79987261054713a226_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
