<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_561a840f587ea35e5839156188beb412194f4a9474c8ce2a32722c2bbfc50899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_371e3b97bf37cf252e4746ba12e10211a8855306049fa33d84cf189462074ee4 = $this->env->getExtension("native_profiler");
        $__internal_371e3b97bf37cf252e4746ba12e10211a8855306049fa33d84cf189462074ee4->enter($__internal_371e3b97bf37cf252e4746ba12e10211a8855306049fa33d84cf189462074ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371e3b97bf37cf252e4746ba12e10211a8855306049fa33d84cf189462074ee4->leave($__internal_371e3b97bf37cf252e4746ba12e10211a8855306049fa33d84cf189462074ee4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_039c1e639f79818c98a77536f85b42009dd414413265764bdfa9bffa4864182e = $this->env->getExtension("native_profiler");
        $__internal_039c1e639f79818c98a77536f85b42009dd414413265764bdfa9bffa4864182e->enter($__internal_039c1e639f79818c98a77536f85b42009dd414413265764bdfa9bffa4864182e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_039c1e639f79818c98a77536f85b42009dd414413265764bdfa9bffa4864182e->leave($__internal_039c1e639f79818c98a77536f85b42009dd414413265764bdfa9bffa4864182e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
