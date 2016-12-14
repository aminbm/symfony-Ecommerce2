<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6a542fce88ca75e13985efbdf07e51ebc211bcd2f4154bf9b8e8feddfca4990b extends Twig_Template
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
        $__internal_992fb6d3ba8260f3c7c2498c6a64b49164b5dab47b25e93308c3b8b9a48d9e05 = $this->env->getExtension("native_profiler");
        $__internal_992fb6d3ba8260f3c7c2498c6a64b49164b5dab47b25e93308c3b8b9a48d9e05->enter($__internal_992fb6d3ba8260f3c7c2498c6a64b49164b5dab47b25e93308c3b8b9a48d9e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_992fb6d3ba8260f3c7c2498c6a64b49164b5dab47b25e93308c3b8b9a48d9e05->leave($__internal_992fb6d3ba8260f3c7c2498c6a64b49164b5dab47b25e93308c3b8b9a48d9e05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
