<?php

/* modulesUsed/utilisateurConnecte.html.twig */
class __TwigTemplate_182bf90a267afe8692bc8e51012d6dfb229e3790c371125ec9a912f5c8cd0951 extends Twig_Template
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
        $__internal_4a50f498f310048a8127eaf42bab530d9c64707c67de9134b8ea2e1dd9c2b5df = $this->env->getExtension("native_profiler");
        $__internal_4a50f498f310048a8127eaf42bab530d9c64707c67de9134b8ea2e1dd9c2b5df->enter($__internal_4a50f498f310048a8127eaf42bab530d9c64707c67de9134b8ea2e1dd9c2b5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/utilisateurConnecte.html.twig"));

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
        
        $__internal_4a50f498f310048a8127eaf42bab530d9c64707c67de9134b8ea2e1dd9c2b5df->leave($__internal_4a50f498f310048a8127eaf42bab530d9c64707c67de9134b8ea2e1dd9c2b5df_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/utilisateurConnecte.html.twig";
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
