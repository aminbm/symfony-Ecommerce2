<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_6063bbcaea5021bca1e48b48085db5bdea9fc67edf5e3ceb04c4dc04e66ec38c extends Twig_Template
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
        $__internal_9dd3e7c0419d4951a607735705998674edd178fe41c30980a5c8201fc1fd77bb = $this->env->getExtension("native_profiler");
        $__internal_9dd3e7c0419d4951a607735705998674edd178fe41c30980a5c8201fc1fd77bb->enter($__internal_9dd3e7c0419d4951a607735705998674edd178fe41c30980a5c8201fc1fd77bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_9dd3e7c0419d4951a607735705998674edd178fe41c30980a5c8201fc1fd77bb->leave($__internal_9dd3e7c0419d4951a607735705998674edd178fe41c30980a5c8201fc1fd77bb_prof);

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
