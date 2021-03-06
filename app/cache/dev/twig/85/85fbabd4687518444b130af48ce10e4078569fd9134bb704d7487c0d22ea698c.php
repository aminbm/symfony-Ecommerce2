<?php

/* @SensioDistribution/Configurator/final.html.twig */
class __TwigTemplate_f80bfa43fdc5cea4dc2ce43a1f95ee95e004ce0cade7aba24c0063403e1cb712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "@SensioDistribution/Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf90a9da83ce7d87bb9d9afef3df8ef61228787077b642089140dd590208134b = $this->env->getExtension("native_profiler");
        $__internal_bf90a9da83ce7d87bb9d9afef3df8ef61228787077b642089140dd590208134b->enter($__internal_bf90a9da83ce7d87bb9d9afef3df8ef61228787077b642089140dd590208134b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf90a9da83ce7d87bb9d9afef3df8ef61228787077b642089140dd590208134b->leave($__internal_bf90a9da83ce7d87bb9d9afef3df8ef61228787077b642089140dd590208134b_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_3e81b24f3dfa85998aa52d05ef95c75b2b3bcf1d1f3a62f743e0107b241b7a06 = $this->env->getExtension("native_profiler");
        $__internal_3e81b24f3dfa85998aa52d05ef95c75b2b3bcf1d1f3a62f743e0107b241b7a06->enter($__internal_3e81b24f3dfa85998aa52d05ef95c75b2b3bcf1d1f3a62f743e0107b241b7a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_3e81b24f3dfa85998aa52d05ef95c75b2b3bcf1d1f3a62f743e0107b241b7a06->leave($__internal_3e81b24f3dfa85998aa52d05ef95c75b2b3bcf1d1f3a62f743e0107b241b7a06_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d554a78bf3887a90410d6bef8646963e9ee9379205b97e317d3be996160ff14e = $this->env->getExtension("native_profiler");
        $__internal_d554a78bf3887a90410d6bef8646963e9ee9379205b97e317d3be996160ff14e->enter($__internal_d554a78bf3887a90410d6bef8646963e9ee9379205b97e317d3be996160ff14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_d554a78bf3887a90410d6bef8646963e9ee9379205b97e317d3be996160ff14e->leave($__internal_d554a78bf3887a90410d6bef8646963e9ee9379205b97e317d3be996160ff14e_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
