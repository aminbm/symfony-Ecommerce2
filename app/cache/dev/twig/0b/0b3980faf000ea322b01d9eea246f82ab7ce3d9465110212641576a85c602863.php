<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_fbbca40260875fb62daeb79be108b9765ebb207a2ec038d8b7d40e67b383c57d extends Twig_Template
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
        $__internal_ff795a3ab8277e9645eddfd7005c026ef620efaec545aa22fffb29f17ed785d5 = $this->env->getExtension("native_profiler");
        $__internal_ff795a3ab8277e9645eddfd7005c026ef620efaec545aa22fffb29f17ed785d5->enter($__internal_ff795a3ab8277e9645eddfd7005c026ef620efaec545aa22fffb29f17ed785d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span3\">
        ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"span9\">
        <h2>Modifier mon mot de passe</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_ff795a3ab8277e9645eddfd7005c026ef620efaec545aa22fffb29f17ed785d5->leave($__internal_ff795a3ab8277e9645eddfd7005c026ef620efaec545aa22fffb29f17ed785d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  43 => 13,  37 => 12,  29 => 6,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span3">*/
/*         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*     </div>*/
/*     <div class="span9">*/
/*         <h2>Modifier mon mot de passe</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST">*/
/*                         {{ form_widget(form) }}*/
/*                         <br />*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
