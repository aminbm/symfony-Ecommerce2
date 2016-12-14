<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_da8e6123507c03edf1617ab2e55ccf573159a45d0220cbb2bdd5e8fde6d8e0be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_84f30c07b8e33f01689b070e18ce0f12787a5ab37d86a8fe452ae3c590bce7b4 = $this->env->getExtension("native_profiler");
        $__internal_84f30c07b8e33f01689b070e18ce0f12787a5ab37d86a8fe452ae3c590bce7b4->enter($__internal_84f30c07b8e33f01689b070e18ce0f12787a5ab37d86a8fe452ae3c590bce7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f30c07b8e33f01689b070e18ce0f12787a5ab37d86a8fe452ae3c590bce7b4->leave($__internal_84f30c07b8e33f01689b070e18ce0f12787a5ab37d86a8fe452ae3c590bce7b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e245b4da8209d658fee10f1e2fe87922e16d925b23407f0787df31c6dbb6d5aa = $this->env->getExtension("native_profiler");
        $__internal_e245b4da8209d658fee10f1e2fe87922e16d925b23407f0787df31c6dbb6d5aa->enter($__internal_e245b4da8209d658fee10f1e2fe87922e16d925b23407f0787df31c6dbb6d5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e245b4da8209d658fee10f1e2fe87922e16d925b23407f0787df31c6dbb6d5aa->leave($__internal_e245b4da8209d658fee10f1e2fe87922e16d925b23407f0787df31c6dbb6d5aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
