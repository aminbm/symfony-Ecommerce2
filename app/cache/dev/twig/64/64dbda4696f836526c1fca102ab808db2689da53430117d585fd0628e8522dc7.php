<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_641338658200aee774e6bf9c85e75b4905a2d17f17f7c6769899530b8fe0ef93 extends Twig_Template
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
        $__internal_e258693b5894b85efa4677d9399e614bcb474622fd029dee65197a2438d64f51 = $this->env->getExtension("native_profiler");
        $__internal_e258693b5894b85efa4677d9399e614bcb474622fd029dee65197a2438d64f51->enter($__internal_e258693b5894b85efa4677d9399e614bcb474622fd029dee65197a2438d64f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e258693b5894b85efa4677d9399e614bcb474622fd029dee65197a2438d64f51->leave($__internal_e258693b5894b85efa4677d9399e614bcb474622fd029dee65197a2438d64f51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
