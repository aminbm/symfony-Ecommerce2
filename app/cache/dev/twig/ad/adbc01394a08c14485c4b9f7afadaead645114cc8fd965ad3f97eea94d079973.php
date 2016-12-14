<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_8ba1cc29027eb33f9c0f8f68c5ea359693099ebca7401cc1b5201fb274f5dd44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4d73545f24ac457e82e57c85729d693d20b1704574b26e1ee1bb99bc41ce7ea1 = $this->env->getExtension("native_profiler");
        $__internal_4d73545f24ac457e82e57c85729d693d20b1704574b26e1ee1bb99bc41ce7ea1->enter($__internal_4d73545f24ac457e82e57c85729d693d20b1704574b26e1ee1bb99bc41ce7ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d73545f24ac457e82e57c85729d693d20b1704574b26e1ee1bb99bc41ce7ea1->leave($__internal_4d73545f24ac457e82e57c85729d693d20b1704574b26e1ee1bb99bc41ce7ea1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f04c634f6b0da8c3f3cbc0d5f4cc120cc0e12dc0d1983f122c9a1bdb61b67704 = $this->env->getExtension("native_profiler");
        $__internal_f04c634f6b0da8c3f3cbc0d5f4cc120cc0e12dc0d1983f122c9a1bdb61b67704->enter($__internal_f04c634f6b0da8c3f3cbc0d5f4cc120cc0e12dc0d1983f122c9a1bdb61b67704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f04c634f6b0da8c3f3cbc0d5f4cc120cc0e12dc0d1983f122c9a1bdb61b67704->leave($__internal_f04c634f6b0da8c3f3cbc0d5f4cc120cc0e12dc0d1983f122c9a1bdb61b67704_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
