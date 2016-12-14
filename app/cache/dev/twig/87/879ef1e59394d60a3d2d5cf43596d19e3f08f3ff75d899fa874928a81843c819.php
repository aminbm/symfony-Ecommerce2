<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9a451f53528ecb8564ee8a1cd8d23a685b4599d87eba47b0487d87ae299d9aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac8ea1d778439079e44e1cd302017bd31422ee90c6217970dcf46ce4b0706e6b = $this->env->getExtension("native_profiler");
        $__internal_ac8ea1d778439079e44e1cd302017bd31422ee90c6217970dcf46ce4b0706e6b->enter($__internal_ac8ea1d778439079e44e1cd302017bd31422ee90c6217970dcf46ce4b0706e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ac8ea1d778439079e44e1cd302017bd31422ee90c6217970dcf46ce4b0706e6b->leave($__internal_ac8ea1d778439079e44e1cd302017bd31422ee90c6217970dcf46ce4b0706e6b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fecae613879869a3c56e6bfc7b0cecc695abf6972d6a5ae0f3af930d22e6ae2 = $this->env->getExtension("native_profiler");
        $__internal_7fecae613879869a3c56e6bfc7b0cecc695abf6972d6a5ae0f3af930d22e6ae2->enter($__internal_7fecae613879869a3c56e6bfc7b0cecc695abf6972d6a5ae0f3af930d22e6ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7fecae613879869a3c56e6bfc7b0cecc695abf6972d6a5ae0f3af930d22e6ae2->leave($__internal_7fecae613879869a3c56e6bfc7b0cecc695abf6972d6a5ae0f3af930d22e6ae2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
