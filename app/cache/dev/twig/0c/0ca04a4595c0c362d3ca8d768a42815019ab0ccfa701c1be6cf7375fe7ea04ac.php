<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_fadeadc6e80b01b73e57acaf0e112ee89c0ec42fe95a52a626dfb25e64b06ebf extends Twig_Template
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
        $__internal_255ab11b0cd1ad4e9e2ccaf5c23ae3eb0352ccbaf54601a8aa13aca9a4c25647 = $this->env->getExtension("native_profiler");
        $__internal_255ab11b0cd1ad4e9e2ccaf5c23ae3eb0352ccbaf54601a8aa13aca9a4c25647->enter($__internal_255ab11b0cd1ad4e9e2ccaf5c23ae3eb0352ccbaf54601a8aa13aca9a4c25647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_255ab11b0cd1ad4e9e2ccaf5c23ae3eb0352ccbaf54601a8aa13aca9a4c25647->leave($__internal_255ab11b0cd1ad4e9e2ccaf5c23ae3eb0352ccbaf54601a8aa13aca9a4c25647_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8a8e8115eaf40286d43d35336009262f6844f0e4ba2c3cc92d3d2f73193c306c = $this->env->getExtension("native_profiler");
        $__internal_8a8e8115eaf40286d43d35336009262f6844f0e4ba2c3cc92d3d2f73193c306c->enter($__internal_8a8e8115eaf40286d43d35336009262f6844f0e4ba2c3cc92d3d2f73193c306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a8e8115eaf40286d43d35336009262f6844f0e4ba2c3cc92d3d2f73193c306c->leave($__internal_8a8e8115eaf40286d43d35336009262f6844f0e4ba2c3cc92d3d2f73193c306c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f16ddaff7624a7cce3cc795742deefff79298622a6eca024d907ac3df6d75425 = $this->env->getExtension("native_profiler");
        $__internal_f16ddaff7624a7cce3cc795742deefff79298622a6eca024d907ac3df6d75425->enter($__internal_f16ddaff7624a7cce3cc795742deefff79298622a6eca024d907ac3df6d75425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f16ddaff7624a7cce3cc795742deefff79298622a6eca024d907ac3df6d75425->leave($__internal_f16ddaff7624a7cce3cc795742deefff79298622a6eca024d907ac3df6d75425_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9d72277091abbd927baa3e295775cb2fd5bca7776e9f88cdef9b9a1d22e974e3 = $this->env->getExtension("native_profiler");
        $__internal_9d72277091abbd927baa3e295775cb2fd5bca7776e9f88cdef9b9a1d22e974e3->enter($__internal_9d72277091abbd927baa3e295775cb2fd5bca7776e9f88cdef9b9a1d22e974e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9d72277091abbd927baa3e295775cb2fd5bca7776e9f88cdef9b9a1d22e974e3->leave($__internal_9d72277091abbd927baa3e295775cb2fd5bca7776e9f88cdef9b9a1d22e974e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
