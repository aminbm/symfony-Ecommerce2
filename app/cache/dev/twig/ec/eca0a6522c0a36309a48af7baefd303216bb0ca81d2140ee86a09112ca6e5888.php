<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6376a6ab2b663035daf9b22042e572005712fe6fcef1aaf7ca93d406948dfc92 extends Twig_Template
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
        $__internal_24579f054ac9d52f52480ffe86ee18465af0cc4637a35e0b968fd29a20f512ab = $this->env->getExtension("native_profiler");
        $__internal_24579f054ac9d52f52480ffe86ee18465af0cc4637a35e0b968fd29a20f512ab->enter($__internal_24579f054ac9d52f52480ffe86ee18465af0cc4637a35e0b968fd29a20f512ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_24579f054ac9d52f52480ffe86ee18465af0cc4637a35e0b968fd29a20f512ab->leave($__internal_24579f054ac9d52f52480ffe86ee18465af0cc4637a35e0b968fd29a20f512ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
