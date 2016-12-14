<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_27c6e45e1814c3a4bd56ee95bac6c5978533db39499cd0793636f1c1885af695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_39c4da6237422815d1de8b298597bc80fd5867995c0625248984f4b5492d977b = $this->env->getExtension("native_profiler");
        $__internal_39c4da6237422815d1de8b298597bc80fd5867995c0625248984f4b5492d977b->enter($__internal_39c4da6237422815d1de8b298597bc80fd5867995c0625248984f4b5492d977b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c4da6237422815d1de8b298597bc80fd5867995c0625248984f4b5492d977b->leave($__internal_39c4da6237422815d1de8b298597bc80fd5867995c0625248984f4b5492d977b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c582ba0ade9ca342ed6a96e0011f53b665c150c4e42f2976771b1dbd05382c45 = $this->env->getExtension("native_profiler");
        $__internal_c582ba0ade9ca342ed6a96e0011f53b665c150c4e42f2976771b1dbd05382c45->enter($__internal_c582ba0ade9ca342ed6a96e0011f53b665c150c4e42f2976771b1dbd05382c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c582ba0ade9ca342ed6a96e0011f53b665c150c4e42f2976771b1dbd05382c45->leave($__internal_c582ba0ade9ca342ed6a96e0011f53b665c150c4e42f2976771b1dbd05382c45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
