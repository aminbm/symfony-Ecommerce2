<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0155b0a382bb9ccafd0d001f19024011f67ec2823d97c9bd9f29555492ecef5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5d0635249ddd8485e067287de343c7a1e226da84931bed72b6d47d0dcfa223b6 = $this->env->getExtension("native_profiler");
        $__internal_5d0635249ddd8485e067287de343c7a1e226da84931bed72b6d47d0dcfa223b6->enter($__internal_5d0635249ddd8485e067287de343c7a1e226da84931bed72b6d47d0dcfa223b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0635249ddd8485e067287de343c7a1e226da84931bed72b6d47d0dcfa223b6->leave($__internal_5d0635249ddd8485e067287de343c7a1e226da84931bed72b6d47d0dcfa223b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b907a91f2eaf2a35d3bdacece90521e041608776a935b3fc273018e7a106a08c = $this->env->getExtension("native_profiler");
        $__internal_b907a91f2eaf2a35d3bdacece90521e041608776a935b3fc273018e7a106a08c->enter($__internal_b907a91f2eaf2a35d3bdacece90521e041608776a935b3fc273018e7a106a08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b907a91f2eaf2a35d3bdacece90521e041608776a935b3fc273018e7a106a08c->leave($__internal_b907a91f2eaf2a35d3bdacece90521e041608776a935b3fc273018e7a106a08c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
