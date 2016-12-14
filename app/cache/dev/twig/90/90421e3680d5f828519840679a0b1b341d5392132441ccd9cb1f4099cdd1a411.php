<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_040bbe2ef936cfa45800b3bc2f40ef94d274dc217ffab2b2c8d2f241a341e76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_708bf0d301ae21041aee299045916a56349dbc06a0a3bc5b1ad8e7e78872ce5f = $this->env->getExtension("native_profiler");
        $__internal_708bf0d301ae21041aee299045916a56349dbc06a0a3bc5b1ad8e7e78872ce5f->enter($__internal_708bf0d301ae21041aee299045916a56349dbc06a0a3bc5b1ad8e7e78872ce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708bf0d301ae21041aee299045916a56349dbc06a0a3bc5b1ad8e7e78872ce5f->leave($__internal_708bf0d301ae21041aee299045916a56349dbc06a0a3bc5b1ad8e7e78872ce5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d069b7d74c1247a108a0aec5e93fabc83c95dd0f37612c76ebd58d13b350ace = $this->env->getExtension("native_profiler");
        $__internal_6d069b7d74c1247a108a0aec5e93fabc83c95dd0f37612c76ebd58d13b350ace->enter($__internal_6d069b7d74c1247a108a0aec5e93fabc83c95dd0f37612c76ebd58d13b350ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"span12\">
            ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_6d069b7d74c1247a108a0aec5e93fabc83c95dd0f37612c76ebd58d13b350ace->leave($__internal_6d069b7d74c1247a108a0aec5e93fabc83c95dd0f37612c76ebd58d13b350ace_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <h1>{{ page.titre }}</h1>*/
/*         <div class="span12">*/
/*             {{ page.contenu|raw }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
