<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1e73e185a1b6d67f11c90938c149bb85ce437c6c62a6f6bcfbf8473ae3785f31 extends Twig_Template
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
        $__internal_edc9909e3c2db7dd6d15f1f5029a68c04dcc4c3d78b2a8795820773db99ab33b = $this->env->getExtension("native_profiler");
        $__internal_edc9909e3c2db7dd6d15f1f5029a68c04dcc4c3d78b2a8795820773db99ab33b->enter($__internal_edc9909e3c2db7dd6d15f1f5029a68c04dcc4c3d78b2a8795820773db99ab33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_edc9909e3c2db7dd6d15f1f5029a68c04dcc4c3d78b2a8795820773db99ab33b->leave($__internal_edc9909e3c2db7dd6d15f1f5029a68c04dcc4c3d78b2a8795820773db99ab33b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
