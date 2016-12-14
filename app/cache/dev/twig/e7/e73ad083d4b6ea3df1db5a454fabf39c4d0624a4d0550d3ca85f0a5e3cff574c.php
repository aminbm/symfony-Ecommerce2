<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_c889c907734323eec84570c3d6cd35a7e3574d8a78b091a93c0c01a2561e27c8 extends Twig_Template
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
        $__internal_5226baa54e9ca31f017b09f6aa6a947aeb7555cd0ad02ff7b059b86f96b6dfbf = $this->env->getExtension("native_profiler");
        $__internal_5226baa54e9ca31f017b09f6aa6a947aeb7555cd0ad02ff7b059b86f96b6dfbf->enter($__internal_5226baa54e9ca31f017b09f6aa6a947aeb7555cd0ad02ff7b059b86f96b6dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5226baa54e9ca31f017b09f6aa6a947aeb7555cd0ad02ff7b059b86f96b6dfbf->leave($__internal_5226baa54e9ca31f017b09f6aa6a947aeb7555cd0ad02ff7b059b86f96b6dfbf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_99afa1475c83a06e0d53a15084e93605ea0227f55a56436e9dab7b38f0c7a90f = $this->env->getExtension("native_profiler");
        $__internal_99afa1475c83a06e0d53a15084e93605ea0227f55a56436e9dab7b38f0c7a90f->enter($__internal_99afa1475c83a06e0d53a15084e93605ea0227f55a56436e9dab7b38f0c7a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_99afa1475c83a06e0d53a15084e93605ea0227f55a56436e9dab7b38f0c7a90f->leave($__internal_99afa1475c83a06e0d53a15084e93605ea0227f55a56436e9dab7b38f0c7a90f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b9d809d220f8f40f169cfcb872ab100b0fb9c0cfd1b24886a5463e822563c2f1 = $this->env->getExtension("native_profiler");
        $__internal_b9d809d220f8f40f169cfcb872ab100b0fb9c0cfd1b24886a5463e822563c2f1->enter($__internal_b9d809d220f8f40f169cfcb872ab100b0fb9c0cfd1b24886a5463e822563c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b9d809d220f8f40f169cfcb872ab100b0fb9c0cfd1b24886a5463e822563c2f1->leave($__internal_b9d809d220f8f40f169cfcb872ab100b0fb9c0cfd1b24886a5463e822563c2f1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_33f6cc862bc884168907a64df59c527dd25a2c4d2367fe4104598d35eb766191 = $this->env->getExtension("native_profiler");
        $__internal_33f6cc862bc884168907a64df59c527dd25a2c4d2367fe4104598d35eb766191->enter($__internal_33f6cc862bc884168907a64df59c527dd25a2c4d2367fe4104598d35eb766191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_33f6cc862bc884168907a64df59c527dd25a2c4d2367fe4104598d35eb766191->leave($__internal_33f6cc862bc884168907a64df59c527dd25a2c4d2367fe4104598d35eb766191_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
