<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_bf3a9d48953cde36f9ff57f0e6c6a40d9967f0f478dabdb78c0c71ed44c9106a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_dea87d76ffcca649986b745ab0fd58b769592a1f171d64d29e628d22093131ce = $this->env->getExtension("native_profiler");
        $__internal_dea87d76ffcca649986b745ab0fd58b769592a1f171d64d29e628d22093131ce->enter($__internal_dea87d76ffcca649986b745ab0fd58b769592a1f171d64d29e628d22093131ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea87d76ffcca649986b745ab0fd58b769592a1f171d64d29e628d22093131ce->leave($__internal_dea87d76ffcca649986b745ab0fd58b769592a1f171d64d29e628d22093131ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cb61c87e616b91060193248e87804123f8acd0d486fd79b12b1303ac62ba6f3 = $this->env->getExtension("native_profiler");
        $__internal_1cb61c87e616b91060193248e87804123f8acd0d486fd79b12b1303ac62ba6f3->enter($__internal_1cb61c87e616b91060193248e87804123f8acd0d486fd79b12b1303ac62ba6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_1cb61c87e616b91060193248e87804123f8acd0d486fd79b12b1303ac62ba6f3->leave($__internal_1cb61c87e616b91060193248e87804123f8acd0d486fd79b12b1303ac62ba6f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
