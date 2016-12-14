<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_846047102e33905c568605bbcd2838fe258cc80fa2b789a4cfab2721d644e29c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_822f579748f4a3724c1cd24b591a2715ba0e0899de7263f61c0477bc6c21bc9d = $this->env->getExtension("native_profiler");
        $__internal_822f579748f4a3724c1cd24b591a2715ba0e0899de7263f61c0477bc6c21bc9d->enter($__internal_822f579748f4a3724c1cd24b591a2715ba0e0899de7263f61c0477bc6c21bc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822f579748f4a3724c1cd24b591a2715ba0e0899de7263f61c0477bc6c21bc9d->leave($__internal_822f579748f4a3724c1cd24b591a2715ba0e0899de7263f61c0477bc6c21bc9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70f35547c45e54ef637603025fe895beb31f4f7a96bda94df76d54f4ca2a74c5 = $this->env->getExtension("native_profiler");
        $__internal_70f35547c45e54ef637603025fe895beb31f4f7a96bda94df76d54f4ca2a74c5->enter($__internal_70f35547c45e54ef637603025fe895beb31f4f7a96bda94df76d54f4ca2a74c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_70f35547c45e54ef637603025fe895beb31f4f7a96bda94df76d54f4ca2a74c5->leave($__internal_70f35547c45e54ef637603025fe895beb31f4f7a96bda94df76d54f4ca2a74c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d97deb1d9eaf57090ead0480a4c3ca0207a7dc36a16fb21e7fe2b4ed1dc4b50 = $this->env->getExtension("native_profiler");
        $__internal_6d97deb1d9eaf57090ead0480a4c3ca0207a7dc36a16fb21e7fe2b4ed1dc4b50->enter($__internal_6d97deb1d9eaf57090ead0480a4c3ca0207a7dc36a16fb21e7fe2b4ed1dc4b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d97deb1d9eaf57090ead0480a4c3ca0207a7dc36a16fb21e7fe2b4ed1dc4b50->leave($__internal_6d97deb1d9eaf57090ead0480a4c3ca0207a7dc36a16fb21e7fe2b4ed1dc4b50_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e39bb2908d6f05917cdae1e934322d0190c015dbdf31c2d1f198638b7ea648c = $this->env->getExtension("native_profiler");
        $__internal_2e39bb2908d6f05917cdae1e934322d0190c015dbdf31c2d1f198638b7ea648c->enter($__internal_2e39bb2908d6f05917cdae1e934322d0190c015dbdf31c2d1f198638b7ea648c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2e39bb2908d6f05917cdae1e934322d0190c015dbdf31c2d1f198638b7ea648c->leave($__internal_2e39bb2908d6f05917cdae1e934322d0190c015dbdf31c2d1f198638b7ea648c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
