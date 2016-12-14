<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c25d7f468f438e1dde914555ccac66405a549e8b2f45a6de44569f6ea59d846 extends Twig_Template
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
        $__internal_fa37853d55cf0baa3fcc4f759cd0bd8630bd92e41e3a3f7d3752e3e834b0f7b0 = $this->env->getExtension("native_profiler");
        $__internal_fa37853d55cf0baa3fcc4f759cd0bd8630bd92e41e3a3f7d3752e3e834b0f7b0->enter($__internal_fa37853d55cf0baa3fcc4f759cd0bd8630bd92e41e3a3f7d3752e3e834b0f7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa37853d55cf0baa3fcc4f759cd0bd8630bd92e41e3a3f7d3752e3e834b0f7b0->leave($__internal_fa37853d55cf0baa3fcc4f759cd0bd8630bd92e41e3a3f7d3752e3e834b0f7b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f28c2eeb98b5a6a33e6875d590c059607ebee065c808d248b98d3b6f3d1e5c1 = $this->env->getExtension("native_profiler");
        $__internal_2f28c2eeb98b5a6a33e6875d590c059607ebee065c808d248b98d3b6f3d1e5c1->enter($__internal_2f28c2eeb98b5a6a33e6875d590c059607ebee065c808d248b98d3b6f3d1e5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f28c2eeb98b5a6a33e6875d590c059607ebee065c808d248b98d3b6f3d1e5c1->leave($__internal_2f28c2eeb98b5a6a33e6875d590c059607ebee065c808d248b98d3b6f3d1e5c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a209f0e0e257487d881767612a641f77c680086019b7ffebfc62e827dca3e41c = $this->env->getExtension("native_profiler");
        $__internal_a209f0e0e257487d881767612a641f77c680086019b7ffebfc62e827dca3e41c->enter($__internal_a209f0e0e257487d881767612a641f77c680086019b7ffebfc62e827dca3e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a209f0e0e257487d881767612a641f77c680086019b7ffebfc62e827dca3e41c->leave($__internal_a209f0e0e257487d881767612a641f77c680086019b7ffebfc62e827dca3e41c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea85ab3cd94a16c70afe244d19a482260feb94765ec6a3e679b775d832da53f6 = $this->env->getExtension("native_profiler");
        $__internal_ea85ab3cd94a16c70afe244d19a482260feb94765ec6a3e679b775d832da53f6->enter($__internal_ea85ab3cd94a16c70afe244d19a482260feb94765ec6a3e679b775d832da53f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea85ab3cd94a16c70afe244d19a482260feb94765ec6a3e679b775d832da53f6->leave($__internal_ea85ab3cd94a16c70afe244d19a482260feb94765ec6a3e679b775d832da53f6_prof);

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
