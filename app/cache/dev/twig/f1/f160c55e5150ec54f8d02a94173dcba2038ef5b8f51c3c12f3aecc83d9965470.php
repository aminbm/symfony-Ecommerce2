<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_586869d01310f242a6df289d49d2eb1b8be7a96937615b9e4546e9766fb57973 extends Twig_Template
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
        $__internal_4dab96c6f9843c2d692038711e226899f2b991358b59c44d334a7882f9752ce0 = $this->env->getExtension("native_profiler");
        $__internal_4dab96c6f9843c2d692038711e226899f2b991358b59c44d334a7882f9752ce0->enter($__internal_4dab96c6f9843c2d692038711e226899f2b991358b59c44d334a7882f9752ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4dab96c6f9843c2d692038711e226899f2b991358b59c44d334a7882f9752ce0->leave($__internal_4dab96c6f9843c2d692038711e226899f2b991358b59c44d334a7882f9752ce0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
