<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_38f37fb36e557afbab68e410e388c4b60c701869010a1d4e5d97f235c652080d extends Twig_Template
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
        $__internal_daeb7bec26c0e3d6e1de0a459394b5ba655733218504165c8346cdd18c0cdf13 = $this->env->getExtension("native_profiler");
        $__internal_daeb7bec26c0e3d6e1de0a459394b5ba655733218504165c8346cdd18c0cdf13->enter($__internal_daeb7bec26c0e3d6e1de0a459394b5ba655733218504165c8346cdd18c0cdf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_daeb7bec26c0e3d6e1de0a459394b5ba655733218504165c8346cdd18c0cdf13->leave($__internal_daeb7bec26c0e3d6e1de0a459394b5ba655733218504165c8346cdd18c0cdf13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
