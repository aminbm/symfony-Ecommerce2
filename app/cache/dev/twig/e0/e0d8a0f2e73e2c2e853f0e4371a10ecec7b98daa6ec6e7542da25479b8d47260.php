<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_01e12bbbed0e8a6aba5fdd82e04ce0d791fbe5e16eb8ea24f38ad9b3bc15c3c4 extends Twig_Template
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
        $__internal_5a253c746952da3a6a45d10618290a93c29f1e2dda67e061a6623c6019b76579 = $this->env->getExtension("native_profiler");
        $__internal_5a253c746952da3a6a45d10618290a93c29f1e2dda67e061a6623c6019b76579->enter($__internal_5a253c746952da3a6a45d10618290a93c29f1e2dda67e061a6623c6019b76579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a253c746952da3a6a45d10618290a93c29f1e2dda67e061a6623c6019b76579->leave($__internal_5a253c746952da3a6a45d10618290a93c29f1e2dda67e061a6623c6019b76579_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for page in pages %}*/
/*     <li><a href="{{ path('page', { 'id' : page.id }) }}">{{ page.titre }}</a>*/
/* {% endfor %}*/
