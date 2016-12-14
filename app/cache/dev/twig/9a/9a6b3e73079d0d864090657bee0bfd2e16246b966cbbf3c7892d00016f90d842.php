<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_027f5bd814c3527aada2132b00a67c9ddc9c24411b3bd4bb88de8993cb5a4df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9282f59ab74aab8c71dd1c1febeb21ec5ebb28e4b0a71038a53cafc36ade5e0 = $this->env->getExtension("native_profiler");
        $__internal_f9282f59ab74aab8c71dd1c1febeb21ec5ebb28e4b0a71038a53cafc36ade5e0->enter($__internal_f9282f59ab74aab8c71dd1c1febeb21ec5ebb28e4b0a71038a53cafc36ade5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9282f59ab74aab8c71dd1c1febeb21ec5ebb28e4b0a71038a53cafc36ade5e0->leave($__internal_f9282f59ab74aab8c71dd1c1febeb21ec5ebb28e4b0a71038a53cafc36ade5e0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c97adf1bf901e718e12f714f6b8e80a695fd9c51b79328acaa9985ff1e0ae8c = $this->env->getExtension("native_profiler");
        $__internal_5c97adf1bf901e718e12f714f6b8e80a695fd9c51b79328acaa9985ff1e0ae8c->enter($__internal_5c97adf1bf901e718e12f714f6b8e80a695fd9c51b79328acaa9985ff1e0ae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span10 offset1\">
                        <p>
                            <br />
                            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5c97adf1bf901e718e12f714f6b8e80a695fd9c51b79328acaa9985ff1e0ae8c->leave($__internal_5c97adf1bf901e718e12f714f6b8e80a695fd9c51b79328acaa9985ff1e0ae8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Mot de passe perdu</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span10 offset1">*/
/*                         <p>*/
/*                             <br />*/
/*                             {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
