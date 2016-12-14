<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_091d54625af308227ee06622d5219dcd7af007297dd7f3af7ac2990ac9b175c3 extends Twig_Template
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
        $__internal_e56a2bc65cde8c05b6fa6c28c2ada3305ea8966236041ae5ca12d3867734fd28 = $this->env->getExtension("native_profiler");
        $__internal_e56a2bc65cde8c05b6fa6c28c2ada3305ea8966236041ae5ca12d3867734fd28->enter($__internal_e56a2bc65cde8c05b6fa6c28c2ada3305ea8966236041ae5ca12d3867734fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e56a2bc65cde8c05b6fa6c28c2ada3305ea8966236041ae5ca12d3867734fd28->leave($__internal_e56a2bc65cde8c05b6fa6c28c2ada3305ea8966236041ae5ca12d3867734fd28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
