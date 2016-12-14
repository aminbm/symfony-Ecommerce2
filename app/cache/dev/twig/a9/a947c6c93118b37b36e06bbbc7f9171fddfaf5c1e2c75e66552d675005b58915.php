<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c453797a4e48e7f6edf437c12eea493f957e0494786e5d9ca7e7f31fd36cd676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca1a7e5e1282c07c101920d914fd9505087a3f9f174b3e652efcdff7a46d8bf1 = $this->env->getExtension("native_profiler");
        $__internal_ca1a7e5e1282c07c101920d914fd9505087a3f9f174b3e652efcdff7a46d8bf1->enter($__internal_ca1a7e5e1282c07c101920d914fd9505087a3f9f174b3e652efcdff7a46d8bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca1a7e5e1282c07c101920d914fd9505087a3f9f174b3e652efcdff7a46d8bf1->leave($__internal_ca1a7e5e1282c07c101920d914fd9505087a3f9f174b3e652efcdff7a46d8bf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_776cd2fa013ef223826e3122dc7d40a24824e50ffb1f00df0f4c29d629d0126b = $this->env->getExtension("native_profiler");
        $__internal_776cd2fa013ef223826e3122dc7d40a24824e50ffb1f00df0f4c29d629d0126b->enter($__internal_776cd2fa013ef223826e3122dc7d40a24824e50ffb1f00df0f4c29d629d0126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_776cd2fa013ef223826e3122dc7d40a24824e50ffb1f00df0f4c29d629d0126b->leave($__internal_776cd2fa013ef223826e3122dc7d40a24824e50ffb1f00df0f4c29d629d0126b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5e2758c4e8b7db780a45f934d39afcd969ef1ea4834f0c18d14a5c1bb91e187 = $this->env->getExtension("native_profiler");
        $__internal_a5e2758c4e8b7db780a45f934d39afcd969ef1ea4834f0c18d14a5c1bb91e187->enter($__internal_a5e2758c4e8b7db780a45f934d39afcd969ef1ea4834f0c18d14a5c1bb91e187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5e2758c4e8b7db780a45f934d39afcd969ef1ea4834f0c18d14a5c1bb91e187->leave($__internal_a5e2758c4e8b7db780a45f934d39afcd969ef1ea4834f0c18d14a5c1bb91e187_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8c5f320edb680c4a00570960b21f0fb2e6ec3c81624f13d1f5b84fe154f296b = $this->env->getExtension("native_profiler");
        $__internal_e8c5f320edb680c4a00570960b21f0fb2e6ec3c81624f13d1f5b84fe154f296b->enter($__internal_e8c5f320edb680c4a00570960b21f0fb2e6ec3c81624f13d1f5b84fe154f296b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e8c5f320edb680c4a00570960b21f0fb2e6ec3c81624f13d1f5b84fe154f296b->leave($__internal_e8c5f320edb680c4a00570960b21f0fb2e6ec3c81624f13d1f5b84fe154f296b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
