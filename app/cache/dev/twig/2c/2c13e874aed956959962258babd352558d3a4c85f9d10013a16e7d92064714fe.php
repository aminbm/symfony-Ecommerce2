<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_ab6bcae3edb8844f4a5adfc314a39aece73df490276ffc58908c111fcb877e34 extends Twig_Template
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
        $__internal_15d7d3f7608b7cc38fd20b1cebfb72d8377af2b1ee506fcaafb710b1b57c628a = $this->env->getExtension("native_profiler");
        $__internal_15d7d3f7608b7cc38fd20b1cebfb72d8377af2b1ee506fcaafb710b1b57c628a->enter($__internal_15d7d3f7608b7cc38fd20b1cebfb72d8377af2b1ee506fcaafb710b1b57c628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

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
        
        $__internal_15d7d3f7608b7cc38fd20b1cebfb72d8377af2b1ee506fcaafb710b1b57c628a->leave($__internal_15d7d3f7608b7cc38fd20b1cebfb72d8377af2b1ee506fcaafb710b1b57c628a_prof);

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
