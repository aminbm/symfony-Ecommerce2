<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ff4ed3938d968a1f31192eabfd76bb5b19e99dc5cd2dc9744b9968461d25c34a extends Twig_Template
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
        $__internal_0f00236edd91174c3b8f8261caca28973f825461e4b98336a1b92abdda7799e9 = $this->env->getExtension("native_profiler");
        $__internal_0f00236edd91174c3b8f8261caca28973f825461e4b98336a1b92abdda7799e9->enter($__internal_0f00236edd91174c3b8f8261caca28973f825461e4b98336a1b92abdda7799e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0f00236edd91174c3b8f8261caca28973f825461e4b98336a1b92abdda7799e9->leave($__internal_0f00236edd91174c3b8f8261caca28973f825461e4b98336a1b92abdda7799e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
