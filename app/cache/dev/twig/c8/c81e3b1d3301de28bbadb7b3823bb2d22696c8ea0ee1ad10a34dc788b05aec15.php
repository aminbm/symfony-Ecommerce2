<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_067c32ae1a61c8bdf2a15c8b80ba535e7c957a58411deed05fad54f4a7857b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6dc86b52435493dd86d00f30a681c80d3202a8083c13ea5b39b97d649bfb3e73 = $this->env->getExtension("native_profiler");
        $__internal_6dc86b52435493dd86d00f30a681c80d3202a8083c13ea5b39b97d649bfb3e73->enter($__internal_6dc86b52435493dd86d00f30a681c80d3202a8083c13ea5b39b97d649bfb3e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc86b52435493dd86d00f30a681c80d3202a8083c13ea5b39b97d649bfb3e73->leave($__internal_6dc86b52435493dd86d00f30a681c80d3202a8083c13ea5b39b97d649bfb3e73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e596f8629d235ddc0579d16530b8dfcd84b22653d58dfa49ef23184f785e69f = $this->env->getExtension("native_profiler");
        $__internal_6e596f8629d235ddc0579d16530b8dfcd84b22653d58dfa49ef23184f785e69f->enter($__internal_6e596f8629d235ddc0579d16530b8dfcd84b22653d58dfa49ef23184f785e69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e596f8629d235ddc0579d16530b8dfcd84b22653d58dfa49ef23184f785e69f->leave($__internal_6e596f8629d235ddc0579d16530b8dfcd84b22653d58dfa49ef23184f785e69f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a108d1f12bed3aa90b5b83108280f9fce6962a08c8f20b8d8ba36a6dae439775 = $this->env->getExtension("native_profiler");
        $__internal_a108d1f12bed3aa90b5b83108280f9fce6962a08c8f20b8d8ba36a6dae439775->enter($__internal_a108d1f12bed3aa90b5b83108280f9fce6962a08c8f20b8d8ba36a6dae439775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a108d1f12bed3aa90b5b83108280f9fce6962a08c8f20b8d8ba36a6dae439775->leave($__internal_a108d1f12bed3aa90b5b83108280f9fce6962a08c8f20b8d8ba36a6dae439775_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
