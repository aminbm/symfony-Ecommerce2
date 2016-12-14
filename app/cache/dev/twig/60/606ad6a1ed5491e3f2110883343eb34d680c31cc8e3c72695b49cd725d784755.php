<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_5114994e710f5978e6c33601781fd6496bf68762b6a376cb098f41eb17b04263 extends Twig_Template
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
        $__internal_2b20e549403b00794be234157af025dc61171c07ddfa387cabe180827cac43a0 = $this->env->getExtension("native_profiler");
        $__internal_2b20e549403b00794be234157af025dc61171c07ddfa387cabe180827cac43a0->enter($__internal_2b20e549403b00794be234157af025dc61171c07ddfa387cabe180827cac43a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2b20e549403b00794be234157af025dc61171c07ddfa387cabe180827cac43a0->leave($__internal_2b20e549403b00794be234157af025dc61171c07ddfa387cabe180827cac43a0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
