<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_03921ae5605dd541f373ead5aa7046856702fef30dad9180997ac1e6498785c3 extends Twig_Template
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
        $__internal_b0d3664495526fbe628094e264f1988ae8bae8656d6d7cd1084bb8f0823a1528 = $this->env->getExtension("native_profiler");
        $__internal_b0d3664495526fbe628094e264f1988ae8bae8656d6d7cd1084bb8f0823a1528->enter($__internal_b0d3664495526fbe628094e264f1988ae8bae8656d6d7cd1084bb8f0823a1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        ";
        // line 4
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 5
        echo "    </ul>
</div>";
        
        $__internal_b0d3664495526fbe628094e264f1988ae8bae8656d6d7cd1084bb8f0823a1528->leave($__internal_b0d3664495526fbe628094e264f1988ae8bae8656d6d7cd1084bb8f0823a1528_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Nos produits</li>*/
/*         {% render(controller('EcommerceBundle:Categories:menu')) %}*/
/*     </ul>*/
/* </div>*/
