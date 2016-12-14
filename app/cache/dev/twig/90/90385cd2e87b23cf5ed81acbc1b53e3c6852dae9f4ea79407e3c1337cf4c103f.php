<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_ce8dbee4c61f4f2acc256bb844ff292950eaca1ddc80d9811d1385d1df7524c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $__internal_ab47f76fdc4631e9a800e817e3e9490e263ecc2dea6c6683c9705487c9237f7f = $this->env->getExtension("native_profiler");
        $__internal_ab47f76fdc4631e9a800e817e3e9490e263ecc2dea6c6683c9705487c9237f7f->enter($__internal_ab47f76fdc4631e9a800e817e3e9490e263ecc2dea6c6683c9705487c9237f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab47f76fdc4631e9a800e817e3e9490e263ecc2dea6c6683c9705487c9237f7f->leave($__internal_ab47f76fdc4631e9a800e817e3e9490e263ecc2dea6c6683c9705487c9237f7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_539e4e5b9a8fbbac407389de30921810635aa14f5cc71e76e8611e0becc82968 = $this->env->getExtension("native_profiler");
        $__internal_539e4e5b9a8fbbac407389de30921810635aa14f5cc71e76e8611e0becc82968->enter($__internal_539e4e5b9a8fbbac407389de30921810635aa14f5cc71e76e8611e0becc82968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 9)->display($context);
        echo "   
        </div>
        
        <div class=\"span9\">
            ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 14
            echo "                <ul class=\"thumbnails\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 16
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"DevAndClick\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " €</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
                // line 23
                echo $this->env->getExtension('routing')->getPath("panier");
                echo "\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
            ";
        } else {
            // line 42
            echo "                Aucun produit
            ";
        }
        // line 44
        echo "        </div>
    </div>
</div>
";
        
        $__internal_539e4e5b9a8fbbac407389de30921810635aa14f5cc71e76e8611e0becc82968->leave($__internal_539e4e5b9a8fbbac407389de30921810635aa14f5cc71e76e8611e0becc82968_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  113 => 42,  97 => 28,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  69 => 18,  65 => 16,  61 => 15,  58 => 14,  56 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*             {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}   */
/*         </div>*/
/*         */
/*         <div class="span9">*/
/*             {% if produits|length != 0 %}*/
/*                 <ul class="thumbnails">*/
/*                 {% for produit in produits %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ produit.image.path }}" alt="DevAndClick" width="300" height="150">*/
/*                             <div class="caption">*/
/*                                 <h4>{{ produit.nom }}</h4>*/
/*                                 <p>{{ produit.prix }} €</p>*/
/*                                 <a class="btn btn-primary" href="{{ path('presentation', { 'id' : produit.id }) }}">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="{{ path('panier') }}">Ajouter au panier</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/* */
/*                 <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             {% else %}*/
/*                 Aucun produit*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
