<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac9c352c168aa75ce2e7eb547d8bcba9f916240752744df887ef30e16707a9d2 extends Twig_Template
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
        $__internal_8c99e9f40027ad62e8cad07375d39cceb77d95f88ffb509061656c909a497706 = $this->env->getExtension("native_profiler");
        $__internal_8c99e9f40027ad62e8cad07375d39cceb77d95f88ffb509061656c909a497706->enter($__internal_8c99e9f40027ad62e8cad07375d39cceb77d95f88ffb509061656c909a497706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8c99e9f40027ad62e8cad07375d39cceb77d95f88ffb509061656c909a497706->leave($__internal_8c99e9f40027ad62e8cad07375d39cceb77d95f88ffb509061656c909a497706_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
