<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_74b5f270aa2caa8548ea7fe1cf2bed6b933836073a906158b9c6bfe7a8b0d090 extends Twig_Template
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
        $__internal_0ede8e7027923bea62ff497a1bdc41e3b4544b6b6572421774a907ccb8fab660 = $this->env->getExtension("native_profiler");
        $__internal_0ede8e7027923bea62ff497a1bdc41e3b4544b6b6572421774a907ccb8fab660->enter($__internal_0ede8e7027923bea62ff497a1bdc41e3b4544b6b6572421774a907ccb8fab660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ede8e7027923bea62ff497a1bdc41e3b4544b6b6572421774a907ccb8fab660->leave($__internal_0ede8e7027923bea62ff497a1bdc41e3b4544b6b6572421774a907ccb8fab660_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f532c7e2e62ae236810984946e173acb7dc83c0bfc9c3ddecc2bb5731417184 = $this->env->getExtension("native_profiler");
        $__internal_1f532c7e2e62ae236810984946e173acb7dc83c0bfc9c3ddecc2bb5731417184->enter($__internal_1f532c7e2e62ae236810984946e173acb7dc83c0bfc9c3ddecc2bb5731417184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f532c7e2e62ae236810984946e173acb7dc83c0bfc9c3ddecc2bb5731417184->leave($__internal_1f532c7e2e62ae236810984946e173acb7dc83c0bfc9c3ddecc2bb5731417184_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efb5766317350d86fd263932d7f262aac985789c0ef1293c33b723843f6120ce = $this->env->getExtension("native_profiler");
        $__internal_efb5766317350d86fd263932d7f262aac985789c0ef1293c33b723843f6120ce->enter($__internal_efb5766317350d86fd263932d7f262aac985789c0ef1293c33b723843f6120ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_efb5766317350d86fd263932d7f262aac985789c0ef1293c33b723843f6120ce->leave($__internal_efb5766317350d86fd263932d7f262aac985789c0ef1293c33b723843f6120ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5eb9549c83256368c322fd95cc9d35ceb2d3f5f8fb9f102d17a8bf7a29e41a4e = $this->env->getExtension("native_profiler");
        $__internal_5eb9549c83256368c322fd95cc9d35ceb2d3f5f8fb9f102d17a8bf7a29e41a4e->enter($__internal_5eb9549c83256368c322fd95cc9d35ceb2d3f5f8fb9f102d17a8bf7a29e41a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5eb9549c83256368c322fd95cc9d35ceb2d3f5f8fb9f102d17a8bf7a29e41a4e->leave($__internal_5eb9549c83256368c322fd95cc9d35ceb2d3f5f8fb9f102d17a8bf7a29e41a4e_prof);

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
