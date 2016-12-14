<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c6a75bd013cef8c05ee7a4bad49d40531ffc84a58182adc27aaf8e51b46aa8a1 extends Twig_Template
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
        $__internal_7ccffab6c3be34b69b6eb4e58c572441d981c6a16e3d028c206962280737c4d7 = $this->env->getExtension("native_profiler");
        $__internal_7ccffab6c3be34b69b6eb4e58c572441d981c6a16e3d028c206962280737c4d7->enter($__internal_7ccffab6c3be34b69b6eb4e58c572441d981c6a16e3d028c206962280737c4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ccffab6c3be34b69b6eb4e58c572441d981c6a16e3d028c206962280737c4d7->leave($__internal_7ccffab6c3be34b69b6eb4e58c572441d981c6a16e3d028c206962280737c4d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f950cea36607bcc30b6c8a643020c5f68b8a3e122f756e7c441560bbb1858ff8 = $this->env->getExtension("native_profiler");
        $__internal_f950cea36607bcc30b6c8a643020c5f68b8a3e122f756e7c441560bbb1858ff8->enter($__internal_f950cea36607bcc30b6c8a643020c5f68b8a3e122f756e7c441560bbb1858ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f950cea36607bcc30b6c8a643020c5f68b8a3e122f756e7c441560bbb1858ff8->leave($__internal_f950cea36607bcc30b6c8a643020c5f68b8a3e122f756e7c441560bbb1858ff8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_130d5ad34f83a9c972a872ad91a1c5869b78779fe793f803fcf46eac8419ddea = $this->env->getExtension("native_profiler");
        $__internal_130d5ad34f83a9c972a872ad91a1c5869b78779fe793f803fcf46eac8419ddea->enter($__internal_130d5ad34f83a9c972a872ad91a1c5869b78779fe793f803fcf46eac8419ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_130d5ad34f83a9c972a872ad91a1c5869b78779fe793f803fcf46eac8419ddea->leave($__internal_130d5ad34f83a9c972a872ad91a1c5869b78779fe793f803fcf46eac8419ddea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_645741614eef20c6f445439b9dc3631c74c0f2603ec9df7f76db3103d7cf4268 = $this->env->getExtension("native_profiler");
        $__internal_645741614eef20c6f445439b9dc3631c74c0f2603ec9df7f76db3103d7cf4268->enter($__internal_645741614eef20c6f445439b9dc3631c74c0f2603ec9df7f76db3103d7cf4268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_645741614eef20c6f445439b9dc3631c74c0f2603ec9df7f76db3103d7cf4268->leave($__internal_645741614eef20c6f445439b9dc3631c74c0f2603ec9df7f76db3103d7cf4268_prof);

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
