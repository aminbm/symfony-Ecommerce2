<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_76ff159923553bb2930b5cfa4ac35403f78cc20e16e6e927da4c31a248d59728 extends Twig_Template
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
        $__internal_91ecf050e84dd1329fbdd5175eea54437a5abd52a14c45e0c1f94655972e59ae = $this->env->getExtension("native_profiler");
        $__internal_91ecf050e84dd1329fbdd5175eea54437a5abd52a14c45e0c1f94655972e59ae->enter($__internal_91ecf050e84dd1329fbdd5175eea54437a5abd52a14c45e0c1f94655972e59ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_91ecf050e84dd1329fbdd5175eea54437a5abd52a14c45e0c1f94655972e59ae->leave($__internal_91ecf050e84dd1329fbdd5175eea54437a5abd52a14c45e0c1f94655972e59ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
