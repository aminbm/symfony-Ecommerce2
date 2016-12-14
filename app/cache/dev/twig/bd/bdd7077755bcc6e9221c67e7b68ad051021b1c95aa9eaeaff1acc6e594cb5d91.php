<?php

/* @Pages/Default/pages/layout/pages.html.twig */
class __TwigTemplate_2c51eb7133fe516f4e1ede51da0b215473239652751b5e2326a3d87eb21696f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Pages/Default/pages/layout/pages.html.twig", 1);
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
        $__internal_ce5b617fcd6d4183c335a8ab44f5984ef20977f9ce8ec7b797b9d2fb7ead58dd = $this->env->getExtension("native_profiler");
        $__internal_ce5b617fcd6d4183c335a8ab44f5984ef20977f9ce8ec7b797b9d2fb7ead58dd->enter($__internal_ce5b617fcd6d4183c335a8ab44f5984ef20977f9ce8ec7b797b9d2fb7ead58dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce5b617fcd6d4183c335a8ab44f5984ef20977f9ce8ec7b797b9d2fb7ead58dd->leave($__internal_ce5b617fcd6d4183c335a8ab44f5984ef20977f9ce8ec7b797b9d2fb7ead58dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3982fb03c5360de2fe4a0b792fabdd218f6460dcc3c07d0ee7d9b4612dd8f1 = $this->env->getExtension("native_profiler");
        $__internal_8d3982fb03c5360de2fe4a0b792fabdd218f6460dcc3c07d0ee7d9b4612dd8f1->enter($__internal_8d3982fb03c5360de2fe4a0b792fabdd218f6460dcc3c07d0ee7d9b4612dd8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d3982fb03c5360de2fe4a0b792fabdd218f6460dcc3c07d0ee7d9b4612dd8f1->leave($__internal_8d3982fb03c5360de2fe4a0b792fabdd218f6460dcc3c07d0ee7d9b4612dd8f1_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/pages/layout/pages.html.twig";
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
