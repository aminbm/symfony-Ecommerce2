<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5d688531cff62ccd0af419f63defe0bef9f9152582b2bf0a54539e595f654ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_73f9deb25aef10e20b63e0d2785725793a70b22c9762ecd096ad2a37bab6cb1b = $this->env->getExtension("native_profiler");
        $__internal_73f9deb25aef10e20b63e0d2785725793a70b22c9762ecd096ad2a37bab6cb1b->enter($__internal_73f9deb25aef10e20b63e0d2785725793a70b22c9762ecd096ad2a37bab6cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f9deb25aef10e20b63e0d2785725793a70b22c9762ecd096ad2a37bab6cb1b->leave($__internal_73f9deb25aef10e20b63e0d2785725793a70b22c9762ecd096ad2a37bab6cb1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ccba6f73cdaf56899062d893851943dcc9720a9a7f8b135baa0367a312458b2 = $this->env->getExtension("native_profiler");
        $__internal_6ccba6f73cdaf56899062d893851943dcc9720a9a7f8b135baa0367a312458b2->enter($__internal_6ccba6f73cdaf56899062d893851943dcc9720a9a7f8b135baa0367a312458b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ccba6f73cdaf56899062d893851943dcc9720a9a7f8b135baa0367a312458b2->leave($__internal_6ccba6f73cdaf56899062d893851943dcc9720a9a7f8b135baa0367a312458b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad3c48ea517d94aa53df7c6dce1f2d052aa3481f0eac811f3c9104af899c02b6 = $this->env->getExtension("native_profiler");
        $__internal_ad3c48ea517d94aa53df7c6dce1f2d052aa3481f0eac811f3c9104af899c02b6->enter($__internal_ad3c48ea517d94aa53df7c6dce1f2d052aa3481f0eac811f3c9104af899c02b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad3c48ea517d94aa53df7c6dce1f2d052aa3481f0eac811f3c9104af899c02b6->leave($__internal_ad3c48ea517d94aa53df7c6dce1f2d052aa3481f0eac811f3c9104af899c02b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3c7ad2d625b41f469449775ae87c559834ef5d0714bf49fc756653137f0c171 = $this->env->getExtension("native_profiler");
        $__internal_e3c7ad2d625b41f469449775ae87c559834ef5d0714bf49fc756653137f0c171->enter($__internal_e3c7ad2d625b41f469449775ae87c559834ef5d0714bf49fc756653137f0c171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3c7ad2d625b41f469449775ae87c559834ef5d0714bf49fc756653137f0c171->leave($__internal_e3c7ad2d625b41f469449775ae87c559834ef5d0714bf49fc756653137f0c171_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
