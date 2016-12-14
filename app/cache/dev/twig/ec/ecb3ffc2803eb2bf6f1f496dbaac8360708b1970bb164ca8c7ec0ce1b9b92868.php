<?php

/* modulesUsed/navigation.html.twig */
class __TwigTemplate_23292e98f0c0bfd4360805282cb0152a309371e84f13362b47cf3a4b6e625547 extends Twig_Template
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
        $__internal_168b2cc62c42dd031d4645dad2ffaa8800acd646083b76c015a79c609ada3dd6 = $this->env->getExtension("native_profiler");
        $__internal_168b2cc62c42dd031d4645dad2ffaa8800acd646083b76c015a79c609ada3dd6->enter($__internal_168b2cc62c42dd031d4645dad2ffaa8800acd646083b76c015a79c609ada3dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/navigation.html.twig"));

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
        
        $__internal_168b2cc62c42dd031d4645dad2ffaa8800acd646083b76c015a79c609ada3dd6->leave($__internal_168b2cc62c42dd031d4645dad2ffaa8800acd646083b76c015a79c609ada3dd6_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/navigation.html.twig";
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
