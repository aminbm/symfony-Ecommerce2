<?php

/* PagesBundle:Default/pages/layout:pages.html.twig */
class __TwigTemplate_7de924b6fbbe3aa582128d084ec38f93869b52dc02a6426bf2d85fed08179307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default/pages/layout:pages.html.twig", 1);
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
        $__internal_9dd4e713ba91c99a302c39ed6a94e0b4073f029132814ffc59a5295c62b0b4bc = $this->env->getExtension("native_profiler");
        $__internal_9dd4e713ba91c99a302c39ed6a94e0b4073f029132814ffc59a5295c62b0b4bc->enter($__internal_9dd4e713ba91c99a302c39ed6a94e0b4073f029132814ffc59a5295c62b0b4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/layout:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd4e713ba91c99a302c39ed6a94e0b4073f029132814ffc59a5295c62b0b4bc->leave($__internal_9dd4e713ba91c99a302c39ed6a94e0b4073f029132814ffc59a5295c62b0b4bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a60a3b0252f6df8cde18fccc2e867d9f960a7430bda8efbd6e8f54ab2e634358 = $this->env->getExtension("native_profiler");
        $__internal_a60a3b0252f6df8cde18fccc2e867d9f960a7430bda8efbd6e8f54ab2e634358->enter($__internal_a60a3b0252f6df8cde18fccc2e867d9f960a7430bda8efbd6e8f54ab2e634358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a60a3b0252f6df8cde18fccc2e867d9f960a7430bda8efbd6e8f54ab2e634358->leave($__internal_a60a3b0252f6df8cde18fccc2e867d9f960a7430bda8efbd6e8f54ab2e634358_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/pages/layout:pages.html.twig";
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
