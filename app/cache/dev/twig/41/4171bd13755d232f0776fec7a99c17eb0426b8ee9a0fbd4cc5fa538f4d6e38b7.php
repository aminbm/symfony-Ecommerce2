<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d76f92c1bf3b27ccbec05ff816007a62ff54783e6b0e26f26fbb2830342aa368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_02fd552619a500d85967c13f0c292194b5382a027fbdf81adcef5fe33c341e1f = $this->env->getExtension("native_profiler");
        $__internal_02fd552619a500d85967c13f0c292194b5382a027fbdf81adcef5fe33c341e1f->enter($__internal_02fd552619a500d85967c13f0c292194b5382a027fbdf81adcef5fe33c341e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fd552619a500d85967c13f0c292194b5382a027fbdf81adcef5fe33c341e1f->leave($__internal_02fd552619a500d85967c13f0c292194b5382a027fbdf81adcef5fe33c341e1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9afd70147231b8cf4c18d5d7badeecc122a1c6703f16423a1f175207f808185e = $this->env->getExtension("native_profiler");
        $__internal_9afd70147231b8cf4c18d5d7badeecc122a1c6703f16423a1f175207f808185e->enter($__internal_9afd70147231b8cf4c18d5d7badeecc122a1c6703f16423a1f175207f808185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9afd70147231b8cf4c18d5d7badeecc122a1c6703f16423a1f175207f808185e->leave($__internal_9afd70147231b8cf4c18d5d7badeecc122a1c6703f16423a1f175207f808185e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
