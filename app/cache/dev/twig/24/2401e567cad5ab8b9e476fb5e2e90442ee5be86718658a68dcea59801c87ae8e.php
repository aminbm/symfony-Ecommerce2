<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4bd7ec5c2170584ab65f078b04ba22c5d3e26f7d0a1de0c6f818c30f662daad0 extends Twig_Template
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
        $__internal_a5c8c5a1e145cc156abed5c9d150ff3dbf34d54e669e7080c465e5c77e318c48 = $this->env->getExtension("native_profiler");
        $__internal_a5c8c5a1e145cc156abed5c9d150ff3dbf34d54e669e7080c465e5c77e318c48->enter($__internal_a5c8c5a1e145cc156abed5c9d150ff3dbf34d54e669e7080c465e5c77e318c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a5c8c5a1e145cc156abed5c9d150ff3dbf34d54e669e7080c465e5c77e318c48->leave($__internal_a5c8c5a1e145cc156abed5c9d150ff3dbf34d54e669e7080c465e5c77e318c48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
