<?php

/* UtilisateursBundle:Default:index.html.twig */
class __TwigTemplate_04c07838d4df9680d8eae309073e5a6ea48cec37c4da7226662e0663ff3c4ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19a3e8f71886f4d78e65be119fa355384dfbc15268519c80f30923a899fb90f6 = $this->env->getExtension("native_profiler");
        $__internal_19a3e8f71886f4d78e65be119fa355384dfbc15268519c80f30923a899fb90f6->enter($__internal_19a3e8f71886f4d78e65be119fa355384dfbc15268519c80f30923a899fb90f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_19a3e8f71886f4d78e65be119fa355384dfbc15268519c80f30923a899fb90f6->leave($__internal_19a3e8f71886f4d78e65be119fa355384dfbc15268519c80f30923a899fb90f6_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
