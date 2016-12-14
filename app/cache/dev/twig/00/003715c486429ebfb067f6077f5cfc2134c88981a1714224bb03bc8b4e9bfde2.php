<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dffd97b086ddc83ddf20455181aedcfa32af63505d25a84bd7dbbffe07305f7b extends Twig_Template
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
        $__internal_b0f19489b7f290a947f3cbabee8fcb5eadea4ec910c99d86b74741d382161f4c = $this->env->getExtension("native_profiler");
        $__internal_b0f19489b7f290a947f3cbabee8fcb5eadea4ec910c99d86b74741d382161f4c->enter($__internal_b0f19489b7f290a947f3cbabee8fcb5eadea4ec910c99d86b74741d382161f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f19489b7f290a947f3cbabee8fcb5eadea4ec910c99d86b74741d382161f4c->leave($__internal_b0f19489b7f290a947f3cbabee8fcb5eadea4ec910c99d86b74741d382161f4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1be5aabb22844b9ad06085f486eb617c7b67ca7538ca05b2b1598f18f2991fc9 = $this->env->getExtension("native_profiler");
        $__internal_1be5aabb22844b9ad06085f486eb617c7b67ca7538ca05b2b1598f18f2991fc9->enter($__internal_1be5aabb22844b9ad06085f486eb617c7b67ca7538ca05b2b1598f18f2991fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1be5aabb22844b9ad06085f486eb617c7b67ca7538ca05b2b1598f18f2991fc9->leave($__internal_1be5aabb22844b9ad06085f486eb617c7b67ca7538ca05b2b1598f18f2991fc9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2e9923ed7588811d7b52fa6b7fc05def47a3814202026ff5da44cd2d4bda91e = $this->env->getExtension("native_profiler");
        $__internal_c2e9923ed7588811d7b52fa6b7fc05def47a3814202026ff5da44cd2d4bda91e->enter($__internal_c2e9923ed7588811d7b52fa6b7fc05def47a3814202026ff5da44cd2d4bda91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2e9923ed7588811d7b52fa6b7fc05def47a3814202026ff5da44cd2d4bda91e->leave($__internal_c2e9923ed7588811d7b52fa6b7fc05def47a3814202026ff5da44cd2d4bda91e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_baca095179e118d5ac7bb6f866752f805952e34568c1e1408c9c17cc90e197af = $this->env->getExtension("native_profiler");
        $__internal_baca095179e118d5ac7bb6f866752f805952e34568c1e1408c9c17cc90e197af->enter($__internal_baca095179e118d5ac7bb6f866752f805952e34568c1e1408c9c17cc90e197af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_baca095179e118d5ac7bb6f866752f805952e34568c1e1408c9c17cc90e197af->leave($__internal_baca095179e118d5ac7bb6f866752f805952e34568c1e1408c9c17cc90e197af_prof);

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
