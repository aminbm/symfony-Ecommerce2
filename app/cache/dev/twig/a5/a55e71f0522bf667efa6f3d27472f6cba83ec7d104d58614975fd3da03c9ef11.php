<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_2da8e2142357652869de40e61bd238c2646c8275f71b50cfaf83c97c517d7ada extends Twig_Template
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
        $__internal_433e72a9b739d23bde6220c37da57fe573a5edbf40868e2b54f5400eba60ab12 = $this->env->getExtension("native_profiler");
        $__internal_433e72a9b739d23bde6220c37da57fe573a5edbf40868e2b54f5400eba60ab12->enter($__internal_433e72a9b739d23bde6220c37da57fe573a5edbf40868e2b54f5400eba60ab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_433e72a9b739d23bde6220c37da57fe573a5edbf40868e2b54f5400eba60ab12->leave($__internal_433e72a9b739d23bde6220c37da57fe573a5edbf40868e2b54f5400eba60ab12_prof);

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
