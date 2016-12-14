<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_edd19536c6d101d49c23b899e32e3a8dcbc3e1ee5423530eba128e8325856d0f extends Twig_Template
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
        $__internal_5f228bbe6afe9b5fa1ff399671ee697ab68261bb7001e4130ddeb52a66ee05a3 = $this->env->getExtension("native_profiler");
        $__internal_5f228bbe6afe9b5fa1ff399671ee697ab68261bb7001e4130ddeb52a66ee05a3->enter($__internal_5f228bbe6afe9b5fa1ff399671ee697ab68261bb7001e4130ddeb52a66ee05a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5f228bbe6afe9b5fa1ff399671ee697ab68261bb7001e4130ddeb52a66ee05a3->leave($__internal_5f228bbe6afe9b5fa1ff399671ee697ab68261bb7001e4130ddeb52a66ee05a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
