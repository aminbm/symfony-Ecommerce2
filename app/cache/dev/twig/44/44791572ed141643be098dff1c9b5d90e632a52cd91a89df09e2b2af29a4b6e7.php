<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4665c6ed7cdcd519f98e5e4a8c1b4f64ebc2454504034b85f2ddbc1c80ae936d extends Twig_Template
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
        $__internal_f87072d32ad2dafdd6c52855c56e712059bf8d4a90ca91d9a511c382a26bedcb = $this->env->getExtension("native_profiler");
        $__internal_f87072d32ad2dafdd6c52855c56e712059bf8d4a90ca91d9a511c382a26bedcb->enter($__internal_f87072d32ad2dafdd6c52855c56e712059bf8d4a90ca91d9a511c382a26bedcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f87072d32ad2dafdd6c52855c56e712059bf8d4a90ca91d9a511c382a26bedcb->leave($__internal_f87072d32ad2dafdd6c52855c56e712059bf8d4a90ca91d9a511c382a26bedcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
