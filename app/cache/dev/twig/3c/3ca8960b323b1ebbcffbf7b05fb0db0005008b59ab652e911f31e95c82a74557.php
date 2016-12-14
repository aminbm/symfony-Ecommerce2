<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_dade05244136a44fde306673e984fe205cfe6bac43d12aae654d4fea75b5d3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_a1638a54e9918d7352151ab621543abacd7d7197d0bde5725028a6eee715e4fc = $this->env->getExtension("native_profiler");
        $__internal_a1638a54e9918d7352151ab621543abacd7d7197d0bde5725028a6eee715e4fc->enter($__internal_a1638a54e9918d7352151ab621543abacd7d7197d0bde5725028a6eee715e4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1638a54e9918d7352151ab621543abacd7d7197d0bde5725028a6eee715e4fc->leave($__internal_a1638a54e9918d7352151ab621543abacd7d7197d0bde5725028a6eee715e4fc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c357daf928c8ab8046ca0a1ee7467a531413e7dfb92a0a96368c2d655a34a05c = $this->env->getExtension("native_profiler");
        $__internal_c357daf928c8ab8046ca0a1ee7467a531413e7dfb92a0a96368c2d655a34a05c->enter($__internal_c357daf928c8ab8046ca0a1ee7467a531413e7dfb92a0a96368c2d655a34a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c357daf928c8ab8046ca0a1ee7467a531413e7dfb92a0a96368c2d655a34a05c->leave($__internal_c357daf928c8ab8046ca0a1ee7467a531413e7dfb92a0a96368c2d655a34a05c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
