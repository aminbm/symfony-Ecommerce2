<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_27f145eaa075344e4a2408ec3ec169b3c92f6ce6cd5db2c3bd45f132236eb48b extends Twig_Template
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
        $__internal_be784171c2047b3000902347e0b4b760f2a3d5173a2ee0aa030d8f6fd96df67e = $this->env->getExtension("native_profiler");
        $__internal_be784171c2047b3000902347e0b4b760f2a3d5173a2ee0aa030d8f6fd96df67e->enter($__internal_be784171c2047b3000902347e0b4b760f2a3d5173a2ee0aa030d8f6fd96df67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be784171c2047b3000902347e0b4b760f2a3d5173a2ee0aa030d8f6fd96df67e->leave($__internal_be784171c2047b3000902347e0b4b760f2a3d5173a2ee0aa030d8f6fd96df67e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c0e2d25d6dd23fb4e643fcc674ec1740e5b65f0f519effcc40b36a6de48ff5c = $this->env->getExtension("native_profiler");
        $__internal_9c0e2d25d6dd23fb4e643fcc674ec1740e5b65f0f519effcc40b36a6de48ff5c->enter($__internal_9c0e2d25d6dd23fb4e643fcc674ec1740e5b65f0f519effcc40b36a6de48ff5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9c0e2d25d6dd23fb4e643fcc674ec1740e5b65f0f519effcc40b36a6de48ff5c->leave($__internal_9c0e2d25d6dd23fb4e643fcc674ec1740e5b65f0f519effcc40b36a6de48ff5c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afcbd9b5f5319168917f08dbd563466e5a8f23ba9cb996c051046ee59db42b69 = $this->env->getExtension("native_profiler");
        $__internal_afcbd9b5f5319168917f08dbd563466e5a8f23ba9cb996c051046ee59db42b69->enter($__internal_afcbd9b5f5319168917f08dbd563466e5a8f23ba9cb996c051046ee59db42b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_afcbd9b5f5319168917f08dbd563466e5a8f23ba9cb996c051046ee59db42b69->leave($__internal_afcbd9b5f5319168917f08dbd563466e5a8f23ba9cb996c051046ee59db42b69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54051565e22e3b5ed6ccaad4fbb47836965a1cf69e2a0828cd34547a86d0881e = $this->env->getExtension("native_profiler");
        $__internal_54051565e22e3b5ed6ccaad4fbb47836965a1cf69e2a0828cd34547a86d0881e->enter($__internal_54051565e22e3b5ed6ccaad4fbb47836965a1cf69e2a0828cd34547a86d0881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54051565e22e3b5ed6ccaad4fbb47836965a1cf69e2a0828cd34547a86d0881e->leave($__internal_54051565e22e3b5ed6ccaad4fbb47836965a1cf69e2a0828cd34547a86d0881e_prof);

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
