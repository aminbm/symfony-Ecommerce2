<?php

/* :modulesUsed:utilisateurConnecte.html.twig */
class __TwigTemplate_c58aeab3d75bd61e59f0ddb47ca368dee38c5a70ed524683cbcf3559abc7e2b9 extends Twig_Template
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
        $__internal_18e7acb13e6893054ecd094615caa3f8a2cbc2e69645c1ebaee4ce8889575ab1 = $this->env->getExtension("native_profiler");
        $__internal_18e7acb13e6893054ecd094615caa3f8a2cbc2e69645c1ebaee4ce8889575ab1->enter($__internal_18e7acb13e6893054ecd094615caa3f8a2cbc2e69645c1ebaee4ce8889575ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulesUsed:utilisateurConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Modifier mon mot de passe</a>
        </li>
        <li>
            <a href=\"#\">Mes factures</a>
        </li>
        <li>
            <a href=\"#\">Mes adresses</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
        </li>
    </ul>
</div>";
        
        $__internal_18e7acb13e6893054ecd094615caa3f8a2cbc2e69645c1ebaee4ce8889575ab1->leave($__internal_18e7acb13e6893054ecd094615caa3f8a2cbc2e69645c1ebaee4ce8889575ab1_prof);

    }

    public function getTemplateName()
    {
        return ":modulesUsed:utilisateurConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mon profil</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Modifier mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Modifier mon mot de passe</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">Mes factures</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">Mes adresses</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}">deconnexion</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
