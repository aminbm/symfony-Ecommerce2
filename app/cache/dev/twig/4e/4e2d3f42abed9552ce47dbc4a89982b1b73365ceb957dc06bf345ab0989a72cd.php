<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_262cd34402952c41048e33fbd42786ec9495d83c5a8f28d1c9e0d8c5909d5b95 extends Twig_Template
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
        $__internal_02cf053e911dee04c39708884714eadec4d0c8daf51a93c357ba399d4619f63b = $this->env->getExtension("native_profiler");
        $__internal_02cf053e911dee04c39708884714eadec4d0c8daf51a93c357ba399d4619f63b->enter($__internal_02cf053e911dee04c39708884714eadec4d0c8daf51a93c357ba399d4619f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02cf053e911dee04c39708884714eadec4d0c8daf51a93c357ba399d4619f63b->leave($__internal_02cf053e911dee04c39708884714eadec4d0c8daf51a93c357ba399d4619f63b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ebf023ffcf87e6169823b12b3e2ea566e85b5dccf23b3fe1955583bcf3312aa = $this->env->getExtension("native_profiler");
        $__internal_7ebf023ffcf87e6169823b12b3e2ea566e85b5dccf23b3fe1955583bcf3312aa->enter($__internal_7ebf023ffcf87e6169823b12b3e2ea566e85b5dccf23b3fe1955583bcf3312aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ebf023ffcf87e6169823b12b3e2ea566e85b5dccf23b3fe1955583bcf3312aa->leave($__internal_7ebf023ffcf87e6169823b12b3e2ea566e85b5dccf23b3fe1955583bcf3312aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eab2772479c9a511898871c691192f958953daadb12b5ad9ba8fe206ebbe329 = $this->env->getExtension("native_profiler");
        $__internal_8eab2772479c9a511898871c691192f958953daadb12b5ad9ba8fe206ebbe329->enter($__internal_8eab2772479c9a511898871c691192f958953daadb12b5ad9ba8fe206ebbe329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8eab2772479c9a511898871c691192f958953daadb12b5ad9ba8fe206ebbe329->leave($__internal_8eab2772479c9a511898871c691192f958953daadb12b5ad9ba8fe206ebbe329_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6726dfda8b56233cbb0c65a8a83144271de82567f6dc8dcf79936bc7fa721322 = $this->env->getExtension("native_profiler");
        $__internal_6726dfda8b56233cbb0c65a8a83144271de82567f6dc8dcf79936bc7fa721322->enter($__internal_6726dfda8b56233cbb0c65a8a83144271de82567f6dc8dcf79936bc7fa721322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6726dfda8b56233cbb0c65a8a83144271de82567f6dc8dcf79936bc7fa721322->leave($__internal_6726dfda8b56233cbb0c65a8a83144271de82567f6dc8dcf79936bc7fa721322_prof);

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
