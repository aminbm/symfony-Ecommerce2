<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e844f15863bbe6eb3895ac74acd29a85b97534e323269da0ada941c06f584c49 extends Twig_Template
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
        $__internal_3010d0b2faebe5a5865a92f7b428c5478a446c0ceafbfbe67d16df68e7e306ce = $this->env->getExtension("native_profiler");
        $__internal_3010d0b2faebe5a5865a92f7b428c5478a446c0ceafbfbe67d16df68e7e306ce->enter($__internal_3010d0b2faebe5a5865a92f7b428c5478a446c0ceafbfbe67d16df68e7e306ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3010d0b2faebe5a5865a92f7b428c5478a446c0ceafbfbe67d16df68e7e306ce->leave($__internal_3010d0b2faebe5a5865a92f7b428c5478a446c0ceafbfbe67d16df68e7e306ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
