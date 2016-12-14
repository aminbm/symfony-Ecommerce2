<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_99579e1a74ca195f7b207a705d9f8c46bb1ea09965b19655d36f6c636ba6fe09 extends Twig_Template
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
        $__internal_2796c42c40c74161202dc37cbe3defb411ed22793c55ca3f7b451d40c198e51c = $this->env->getExtension("native_profiler");
        $__internal_2796c42c40c74161202dc37cbe3defb411ed22793c55ca3f7b451d40c198e51c->enter($__internal_2796c42c40c74161202dc37cbe3defb411ed22793c55ca3f7b451d40c198e51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2796c42c40c74161202dc37cbe3defb411ed22793c55ca3f7b451d40c198e51c->leave($__internal_2796c42c40c74161202dc37cbe3defb411ed22793c55ca3f7b451d40c198e51c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
