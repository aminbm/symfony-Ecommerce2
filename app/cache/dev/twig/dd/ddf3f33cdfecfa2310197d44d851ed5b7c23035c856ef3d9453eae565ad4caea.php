<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0192431f94a6b0e0d5cdee66a3228e71c1e92a85e0524520dd143471776e3c63 extends Twig_Template
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
        $__internal_c2a8ac7a5816f648d0ebd1f5de1d8034d9de12c7585ca3b6909917812f582a20 = $this->env->getExtension("native_profiler");
        $__internal_c2a8ac7a5816f648d0ebd1f5de1d8034d9de12c7585ca3b6909917812f582a20->enter($__internal_c2a8ac7a5816f648d0ebd1f5de1d8034d9de12c7585ca3b6909917812f582a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c2a8ac7a5816f648d0ebd1f5de1d8034d9de12c7585ca3b6909917812f582a20->leave($__internal_c2a8ac7a5816f648d0ebd1f5de1d8034d9de12c7585ca3b6909917812f582a20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
