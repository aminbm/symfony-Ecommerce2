<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b1b2f27235e2d1baa1482acff6d4f034c63aa20cf4fc1e25830f0c4ac476a282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f95b948cce14f311e61467e7a4e0ae910d845f06ea851d62c0fb4096934c82ad = $this->env->getExtension("native_profiler");
        $__internal_f95b948cce14f311e61467e7a4e0ae910d845f06ea851d62c0fb4096934c82ad->enter($__internal_f95b948cce14f311e61467e7a4e0ae910d845f06ea851d62c0fb4096934c82ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f95b948cce14f311e61467e7a4e0ae910d845f06ea851d62c0fb4096934c82ad->leave($__internal_f95b948cce14f311e61467e7a4e0ae910d845f06ea851d62c0fb4096934c82ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
