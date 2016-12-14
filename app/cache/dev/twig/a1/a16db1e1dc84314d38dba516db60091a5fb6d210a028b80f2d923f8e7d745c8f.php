<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_73f4309717b9bd925dc9cd375231b31bbc1301a6cfcb3d57e4a9bd2e2e7d043c extends Twig_Template
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
        $__internal_75b8bd1374de33f304814901b32aac3fb5bba90bbb80b4eaac14ca806f66fbb0 = $this->env->getExtension("native_profiler");
        $__internal_75b8bd1374de33f304814901b32aac3fb5bba90bbb80b4eaac14ca806f66fbb0->enter($__internal_75b8bd1374de33f304814901b32aac3fb5bba90bbb80b4eaac14ca806f66fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_75b8bd1374de33f304814901b32aac3fb5bba90bbb80b4eaac14ca806f66fbb0->leave($__internal_75b8bd1374de33f304814901b32aac3fb5bba90bbb80b4eaac14ca806f66fbb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
