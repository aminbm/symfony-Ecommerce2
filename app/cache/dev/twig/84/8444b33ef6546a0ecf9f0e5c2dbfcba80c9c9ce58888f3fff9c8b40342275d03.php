<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_c162d1292a71684f1e3be11cebbfa2006bc2002607d82ee93bcb5475405a7d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_067c09792819924aecd9d9b35c511fb08bd0a6b5863bed455f5f6b7c431dcb12 = $this->env->getExtension("native_profiler");
        $__internal_067c09792819924aecd9d9b35c511fb08bd0a6b5863bed455f5f6b7c431dcb12->enter($__internal_067c09792819924aecd9d9b35c511fb08bd0a6b5863bed455f5f6b7c431dcb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067c09792819924aecd9d9b35c511fb08bd0a6b5863bed455f5f6b7c431dcb12->leave($__internal_067c09792819924aecd9d9b35c511fb08bd0a6b5863bed455f5f6b7c431dcb12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3cabe9d001ea8ab57fe45679514fb0240deb6e2ee9f7c8133b7a57b24143d6 = $this->env->getExtension("native_profiler");
        $__internal_da3cabe9d001ea8ab57fe45679514fb0240deb6e2ee9f7c8133b7a57b24143d6->enter($__internal_da3cabe9d001ea8ab57fe45679514fb0240deb6e2ee9f7c8133b7a57b24143d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 8)->display($context);
        // line 9
        echo "            </div>\t

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "€</h4>
                        <form action=\"panier.php\">
                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_da3cabe9d001ea8ab57fe45679514fb0240deb6e2ee9f7c8133b7a57b24143d6->leave($__internal_da3cabe9d001ea8ab57fe45679514fb0240deb6e2ee9f7c8133b7a57b24143d6_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  70 => 20,  66 => 19,  62 => 18,  55 => 14,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>	*/
/* */
/*             <div class="span9">*/
/*                 <div class="row">*/
/*                     <div class="span5">*/
/*                         <img src="{{ produit.image.path }}" alt="DevAndClick" width="470" height="310">*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>{{ produit.nom }}</h4>*/
/*                         <h5>{{ produit.categorie.nom }}</h5>*/
/*                         <p>{{ produit.description }}</p>*/
/*                         <h4>{{ produit.prix }}€</h4>*/
/*                         <form action="panier.php">*/
/*                             <select name="qte" class="span1">*/
/*                                 <option>1</option>*/
/*                             </select>*/
/* */
/*                             <div>*/
/*                                 <button class="btn btn-primary">Ajouter au panier</button>*/
/*                             </div>*/
/*                         </form>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
