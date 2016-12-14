<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9a8f54b3fcb2f369e6e43ce0623197d0990197c6999309eda8d56e930e871c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_cccea310f9dbca0f9322cdc30d33c97b1e236b36a36268f4e313a90fff0c8d6d = $this->env->getExtension("native_profiler");
        $__internal_cccea310f9dbca0f9322cdc30d33c97b1e236b36a36268f4e313a90fff0c8d6d->enter($__internal_cccea310f9dbca0f9322cdc30d33c97b1e236b36a36268f4e313a90fff0c8d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cccea310f9dbca0f9322cdc30d33c97b1e236b36a36268f4e313a90fff0c8d6d->leave($__internal_cccea310f9dbca0f9322cdc30d33c97b1e236b36a36268f4e313a90fff0c8d6d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_160f791d02b0ed877ae42798b940fa22a5d0208e72db5b835c067989afade1ad = $this->env->getExtension("native_profiler");
        $__internal_160f791d02b0ed877ae42798b940fa22a5d0208e72db5b835c067989afade1ad->enter($__internal_160f791d02b0ed877ae42798b940fa22a5d0208e72db5b835c067989afade1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_160f791d02b0ed877ae42798b940fa22a5d0208e72db5b835c067989afade1ad->leave($__internal_160f791d02b0ed877ae42798b940fa22a5d0208e72db5b835c067989afade1ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
