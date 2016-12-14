<?php

/* @Pages/Default/pages/modulesUsed/menu.html.twig */
class __TwigTemplate_55c07ec2f8d1cd92c5eecce168b8d39b77b517099c23ecb43dfff04f0dffa699 extends Twig_Template
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
        $__internal_cf4940372ef280b3fe2d3d37c2a8c3053f7ed082d3495033723d6f461aec80b4 = $this->env->getExtension("native_profiler");
        $__internal_cf4940372ef280b3fe2d3d37c2a8c3053f7ed082d3495033723d6f461aec80b4->enter($__internal_cf4940372ef280b3fe2d3d37c2a8c3053f7ed082d3495033723d6f461aec80b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/pages/modulesUsed/menu.html.twig"));

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
        
        $__internal_cf4940372ef280b3fe2d3d37c2a8c3053f7ed082d3495033723d6f461aec80b4->leave($__internal_cf4940372ef280b3fe2d3d37c2a8c3053f7ed082d3495033723d6f461aec80b4_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/pages/modulesUsed/menu.html.twig";
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
