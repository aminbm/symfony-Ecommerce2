<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_32a441160fbe5ae223d73c8e781a1f617de4a60514d9ed744023b3d2484b069a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e4eb40c7f8b42fcfe0ee6b602a5ac0e03a93f294f6020f3adac89e148e00d283 = $this->env->getExtension("native_profiler");
        $__internal_e4eb40c7f8b42fcfe0ee6b602a5ac0e03a93f294f6020f3adac89e148e00d283->enter($__internal_e4eb40c7f8b42fcfe0ee6b602a5ac0e03a93f294f6020f3adac89e148e00d283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4eb40c7f8b42fcfe0ee6b602a5ac0e03a93f294f6020f3adac89e148e00d283->leave($__internal_e4eb40c7f8b42fcfe0ee6b602a5ac0e03a93f294f6020f3adac89e148e00d283_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_352612c49dd31d304154abe1b387d6f899ad4c4601ac4e55b6c23fe518aef584 = $this->env->getExtension("native_profiler");
        $__internal_352612c49dd31d304154abe1b387d6f899ad4c4601ac4e55b6c23fe518aef584->enter($__internal_352612c49dd31d304154abe1b387d6f899ad4c4601ac4e55b6c23fe518aef584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_352612c49dd31d304154abe1b387d6f899ad4c4601ac4e55b6c23fe518aef584->leave($__internal_352612c49dd31d304154abe1b387d6f899ad4c4601ac4e55b6c23fe518aef584_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbd2bb180c4487c961d6c9819d876ad504e47cc3f5926418f8994b43d4f125f0 = $this->env->getExtension("native_profiler");
        $__internal_dbd2bb180c4487c961d6c9819d876ad504e47cc3f5926418f8994b43d4f125f0->enter($__internal_dbd2bb180c4487c961d6c9819d876ad504e47cc3f5926418f8994b43d4f125f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbd2bb180c4487c961d6c9819d876ad504e47cc3f5926418f8994b43d4f125f0->leave($__internal_dbd2bb180c4487c961d6c9819d876ad504e47cc3f5926418f8994b43d4f125f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
