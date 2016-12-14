<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7ee84a62733328d9d3ce7516c8ead5a40c79d2013afdd110611726a4387a9eda extends Twig_Template
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
        $__internal_7f7c38e7cc3dc66c8af54a73a41119a29443c68ffcff120008be9153f4f060bd = $this->env->getExtension("native_profiler");
        $__internal_7f7c38e7cc3dc66c8af54a73a41119a29443c68ffcff120008be9153f4f060bd->enter($__internal_7f7c38e7cc3dc66c8af54a73a41119a29443c68ffcff120008be9153f4f060bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7f7c38e7cc3dc66c8af54a73a41119a29443c68ffcff120008be9153f4f060bd->leave($__internal_7f7c38e7cc3dc66c8af54a73a41119a29443c68ffcff120008be9153f4f060bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
