<?php

/* @Utilisateurs/Default/index.html.twig */
class __TwigTemplate_4b2cf3035b05a366e7fdc04567a2f1631fea115612b482fac1ff1c7b4b25f0cb extends Twig_Template
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
        $__internal_d50681f5c4287d84bc349193dfd4115f8b7effba831caea07db3e5f16b117756 = $this->env->getExtension("native_profiler");
        $__internal_d50681f5c4287d84bc349193dfd4115f8b7effba831caea07db3e5f16b117756->enter($__internal_d50681f5c4287d84bc349193dfd4115f8b7effba831caea07db3e5f16b117756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_d50681f5c4287d84bc349193dfd4115f8b7effba831caea07db3e5f16b117756->leave($__internal_d50681f5c4287d84bc349193dfd4115f8b7effba831caea07db3e5f16b117756_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/index.html.twig";
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
/* Hello {{ name }}!*/
/* */
