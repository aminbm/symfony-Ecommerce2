<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_436cc54d96b47f5e892533e503648c11f34e53c43a5a0667dbd80b5e97e82a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f636fda27b2f5822a1670eb82aec8a3451ee564fa27817d5c5f7733cba149ea = $this->env->getExtension("native_profiler");
        $__internal_6f636fda27b2f5822a1670eb82aec8a3451ee564fa27817d5c5f7733cba149ea->enter($__internal_6f636fda27b2f5822a1670eb82aec8a3451ee564fa27817d5c5f7733cba149ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6f636fda27b2f5822a1670eb82aec8a3451ee564fa27817d5c5f7733cba149ea->leave($__internal_6f636fda27b2f5822a1670eb82aec8a3451ee564fa27817d5c5f7733cba149ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0602e9a47fa7fda3599083681c1f42ff4b99d4e7e8a8f944bdee1e2b6c9f9f2f = $this->env->getExtension("native_profiler");
        $__internal_0602e9a47fa7fda3599083681c1f42ff4b99d4e7e8a8f944bdee1e2b6c9f9f2f->enter($__internal_0602e9a47fa7fda3599083681c1f42ff4b99d4e7e8a8f944bdee1e2b6c9f9f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0602e9a47fa7fda3599083681c1f42ff4b99d4e7e8a8f944bdee1e2b6c9f9f2f->leave($__internal_0602e9a47fa7fda3599083681c1f42ff4b99d4e7e8a8f944bdee1e2b6c9f9f2f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_895a9bc723f9a8ac98eafedbd40e69e53b84dddf1da3e97cb348c7757e86f2c2 = $this->env->getExtension("native_profiler");
        $__internal_895a9bc723f9a8ac98eafedbd40e69e53b84dddf1da3e97cb348c7757e86f2c2->enter($__internal_895a9bc723f9a8ac98eafedbd40e69e53b84dddf1da3e97cb348c7757e86f2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_895a9bc723f9a8ac98eafedbd40e69e53b84dddf1da3e97cb348c7757e86f2c2->leave($__internal_895a9bc723f9a8ac98eafedbd40e69e53b84dddf1da3e97cb348c7757e86f2c2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0876635ec63b7e7c41e03fc475e7808d4cdf33f6524725930fb0f623a93ba5fe = $this->env->getExtension("native_profiler");
        $__internal_0876635ec63b7e7c41e03fc475e7808d4cdf33f6524725930fb0f623a93ba5fe->enter($__internal_0876635ec63b7e7c41e03fc475e7808d4cdf33f6524725930fb0f623a93ba5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0876635ec63b7e7c41e03fc475e7808d4cdf33f6524725930fb0f623a93ba5fe->leave($__internal_0876635ec63b7e7c41e03fc475e7808d4cdf33f6524725930fb0f623a93ba5fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
