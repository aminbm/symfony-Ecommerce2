<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_58f36587b8e0d3c6d7d9ab3e244659eee523afac066de1fbf9f51c3f677c522d extends Twig_Template
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
        $__internal_4dfb40205840d85173a6709c86fd0213c0c513c05103d16c81fd30e690dd8b11 = $this->env->getExtension("native_profiler");
        $__internal_4dfb40205840d85173a6709c86fd0213c0c513c05103d16c81fd30e690dd8b11->enter($__internal_4dfb40205840d85173a6709c86fd0213c0c513c05103d16c81fd30e690dd8b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_4dfb40205840d85173a6709c86fd0213c0c513c05103d16c81fd30e690dd8b11->leave($__internal_4dfb40205840d85173a6709c86fd0213c0c513c05103d16c81fd30e690dd8b11_prof);

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
