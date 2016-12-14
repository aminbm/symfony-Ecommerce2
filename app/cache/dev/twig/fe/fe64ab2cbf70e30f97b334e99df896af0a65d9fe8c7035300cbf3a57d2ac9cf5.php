<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1e425173f188a989c2e4ed52fc79caeb0bc8d60c483e303e56790e95a3a292fb extends Twig_Template
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
        $__internal_9a16a01feea571e8d58e4ce9c178719b80f615b6871421f3318512fbf936dbd9 = $this->env->getExtension("native_profiler");
        $__internal_9a16a01feea571e8d58e4ce9c178719b80f615b6871421f3318512fbf936dbd9->enter($__internal_9a16a01feea571e8d58e4ce9c178719b80f615b6871421f3318512fbf936dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9a16a01feea571e8d58e4ce9c178719b80f615b6871421f3318512fbf936dbd9->leave($__internal_9a16a01feea571e8d58e4ce9c178719b80f615b6871421f3318512fbf936dbd9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
