<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ca610ab92f25f70fcc1e7c14ea8c4d2b44d13cffbb251f143f3a6cdf6ff20cf6 extends Twig_Template
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
        $__internal_a0f22dc00fa21aa98f4e160ce34cd2f2bb3e04e0d0f7f54ba60ff66abaeded21 = $this->env->getExtension("native_profiler");
        $__internal_a0f22dc00fa21aa98f4e160ce34cd2f2bb3e04e0d0f7f54ba60ff66abaeded21->enter($__internal_a0f22dc00fa21aa98f4e160ce34cd2f2bb3e04e0d0f7f54ba60ff66abaeded21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a0f22dc00fa21aa98f4e160ce34cd2f2bb3e04e0d0f7f54ba60ff66abaeded21->leave($__internal_a0f22dc00fa21aa98f4e160ce34cd2f2bb3e04e0d0f7f54ba60ff66abaeded21_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_49a962984c2fa5a18a97fd8922ede88495f233de395530255a775419a5aad25a = $this->env->getExtension("native_profiler");
        $__internal_49a962984c2fa5a18a97fd8922ede88495f233de395530255a775419a5aad25a->enter($__internal_49a962984c2fa5a18a97fd8922ede88495f233de395530255a775419a5aad25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49a962984c2fa5a18a97fd8922ede88495f233de395530255a775419a5aad25a->leave($__internal_49a962984c2fa5a18a97fd8922ede88495f233de395530255a775419a5aad25a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_853a8ddb2c130b9eb4c508c68c13eb632175120bcd243f7155de7834d174ff8b = $this->env->getExtension("native_profiler");
        $__internal_853a8ddb2c130b9eb4c508c68c13eb632175120bcd243f7155de7834d174ff8b->enter($__internal_853a8ddb2c130b9eb4c508c68c13eb632175120bcd243f7155de7834d174ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_853a8ddb2c130b9eb4c508c68c13eb632175120bcd243f7155de7834d174ff8b->leave($__internal_853a8ddb2c130b9eb4c508c68c13eb632175120bcd243f7155de7834d174ff8b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_209c3b014d7f02372769ee7bb993243bd978e3020b10fb42cac78d6ccafd1728 = $this->env->getExtension("native_profiler");
        $__internal_209c3b014d7f02372769ee7bb993243bd978e3020b10fb42cac78d6ccafd1728->enter($__internal_209c3b014d7f02372769ee7bb993243bd978e3020b10fb42cac78d6ccafd1728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_209c3b014d7f02372769ee7bb993243bd978e3020b10fb42cac78d6ccafd1728->leave($__internal_209c3b014d7f02372769ee7bb993243bd978e3020b10fb42cac78d6ccafd1728_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
