<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b3f223e0f1082755eda90f9d75b90997021d0d4dd1b02c4b5bd33ceaaedbc831 extends Twig_Template
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
        $__internal_977fbd72f3c288854183c0dbcaf1335bed587226c9a0b9b69f1158fbca41d303 = $this->env->getExtension("native_profiler");
        $__internal_977fbd72f3c288854183c0dbcaf1335bed587226c9a0b9b69f1158fbca41d303->enter($__internal_977fbd72f3c288854183c0dbcaf1335bed587226c9a0b9b69f1158fbca41d303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_977fbd72f3c288854183c0dbcaf1335bed587226c9a0b9b69f1158fbca41d303->leave($__internal_977fbd72f3c288854183c0dbcaf1335bed587226c9a0b9b69f1158fbca41d303_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
