<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_ab4fdaa725b014e23b24ad885b7eef49db47f2ed176838478e94c72ec890d0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_3164698c811b563fca7905a1fec920df25f971d24bdefb06ad25773974b45099 = $this->env->getExtension("native_profiler");
        $__internal_3164698c811b563fca7905a1fec920df25f971d24bdefb06ad25773974b45099->enter($__internal_3164698c811b563fca7905a1fec920df25f971d24bdefb06ad25773974b45099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3164698c811b563fca7905a1fec920df25f971d24bdefb06ad25773974b45099->leave($__internal_3164698c811b563fca7905a1fec920df25f971d24bdefb06ad25773974b45099_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8c93a7807dffacf14ed6bf99581c793d269dce53c0fe6dbc5d477c3c8a1d404 = $this->env->getExtension("native_profiler");
        $__internal_a8c93a7807dffacf14ed6bf99581c793d269dce53c0fe6dbc5d477c3c8a1d404->enter($__internal_a8c93a7807dffacf14ed6bf99581c793d269dce53c0fe6dbc5d477c3c8a1d404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_a8c93a7807dffacf14ed6bf99581c793d269dce53c0fe6dbc5d477c3c8a1d404->leave($__internal_a8c93a7807dffacf14ed6bf99581c793d269dce53c0fe6dbc5d477c3c8a1d404_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
