<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_cd7b862b92d29440e3b8163cbf9a50f6b0a80becb8f563d472f007f6d98ca51e extends Twig_Template
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
        $__internal_094f5abc884cb596ba88eac14bdaec34021cd9c932ea8fd7d65120c66abb40f3 = $this->env->getExtension("native_profiler");
        $__internal_094f5abc884cb596ba88eac14bdaec34021cd9c932ea8fd7d65120c66abb40f3->enter($__internal_094f5abc884cb596ba88eac14bdaec34021cd9c932ea8fd7d65120c66abb40f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_094f5abc884cb596ba88eac14bdaec34021cd9c932ea8fd7d65120c66abb40f3->leave($__internal_094f5abc884cb596ba88eac14bdaec34021cd9c932ea8fd7d65120c66abb40f3_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
