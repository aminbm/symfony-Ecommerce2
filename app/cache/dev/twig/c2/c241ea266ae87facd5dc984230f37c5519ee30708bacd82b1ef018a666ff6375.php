<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_f1ce20c69019026af7db74f452b9bfd3b01e56c1de9a1c4dd8a0b1e9760cd984 extends Twig_Template
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
        $__internal_12d8f590d77a8cfcc6a5d909d45f19f1e9cce9ed3a89a42aa5a83ad4085cf984 = $this->env->getExtension("native_profiler");
        $__internal_12d8f590d77a8cfcc6a5d909d45f19f1e9cce9ed3a89a42aa5a83ad4085cf984->enter($__internal_12d8f590d77a8cfcc6a5d909d45f19f1e9cce9ed3a89a42aa5a83ad4085cf984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_12d8f590d77a8cfcc6a5d909d45f19f1e9cce9ed3a89a42aa5a83ad4085cf984->leave($__internal_12d8f590d77a8cfcc6a5d909d45f19f1e9cce9ed3a89a42aa5a83ad4085cf984_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for categorie in categories %}*/
/*     <li>*/
/*         <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}">{{ categorie.nom }}</a>*/
/*     </li>*/
/* {% endfor %}*/
