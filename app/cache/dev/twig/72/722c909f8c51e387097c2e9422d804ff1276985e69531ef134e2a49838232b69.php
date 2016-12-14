<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79a8bcd30ef59395a37216bd01be6e2aed6e7dc46ad0287db511a1c0127d367f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aebcf22d9595800c0d9e588afac1e3a8c864367c73c12e70108ffad20d45f0b = $this->env->getExtension("native_profiler");
        $__internal_3aebcf22d9595800c0d9e588afac1e3a8c864367c73c12e70108ffad20d45f0b->enter($__internal_3aebcf22d9595800c0d9e588afac1e3a8c864367c73c12e70108ffad20d45f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aebcf22d9595800c0d9e588afac1e3a8c864367c73c12e70108ffad20d45f0b->leave($__internal_3aebcf22d9595800c0d9e588afac1e3a8c864367c73c12e70108ffad20d45f0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a15d5eba4f61c9c351036e71345fec5e8bdddb7e672123d2ca76ca734de6a092 = $this->env->getExtension("native_profiler");
        $__internal_a15d5eba4f61c9c351036e71345fec5e8bdddb7e672123d2ca76ca734de6a092->enter($__internal_a15d5eba4f61c9c351036e71345fec5e8bdddb7e672123d2ca76ca734de6a092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a15d5eba4f61c9c351036e71345fec5e8bdddb7e672123d2ca76ca734de6a092->leave($__internal_a15d5eba4f61c9c351036e71345fec5e8bdddb7e672123d2ca76ca734de6a092_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e25fd13b33d091d5ec7fbe597cc743d378857fb429d74e5c3d3636f2fbc6e767 = $this->env->getExtension("native_profiler");
        $__internal_e25fd13b33d091d5ec7fbe597cc743d378857fb429d74e5c3d3636f2fbc6e767->enter($__internal_e25fd13b33d091d5ec7fbe597cc743d378857fb429d74e5c3d3636f2fbc6e767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e25fd13b33d091d5ec7fbe597cc743d378857fb429d74e5c3d3636f2fbc6e767->leave($__internal_e25fd13b33d091d5ec7fbe597cc743d378857fb429d74e5c3d3636f2fbc6e767_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d7da0a7ccf840575467c22482e51fbc9aad7e96f5e887a55643752d36429e08 = $this->env->getExtension("native_profiler");
        $__internal_8d7da0a7ccf840575467c22482e51fbc9aad7e96f5e887a55643752d36429e08->enter($__internal_8d7da0a7ccf840575467c22482e51fbc9aad7e96f5e887a55643752d36429e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d7da0a7ccf840575467c22482e51fbc9aad7e96f5e887a55643752d36429e08->leave($__internal_8d7da0a7ccf840575467c22482e51fbc9aad7e96f5e887a55643752d36429e08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
