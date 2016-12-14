<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_a9b93b106e4cd3c247afd371f95c4c26f149f9ea3792a1d35d7a684415e9015b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_bfd71acfe630f5317d97cef82fc6184ab15a99fb64c4bd4c445c65b9af92efa2 = $this->env->getExtension("native_profiler");
        $__internal_bfd71acfe630f5317d97cef82fc6184ab15a99fb64c4bd4c445c65b9af92efa2->enter($__internal_bfd71acfe630f5317d97cef82fc6184ab15a99fb64c4bd4c445c65b9af92efa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd71acfe630f5317d97cef82fc6184ab15a99fb64c4bd4c445c65b9af92efa2->leave($__internal_bfd71acfe630f5317d97cef82fc6184ab15a99fb64c4bd4c445c65b9af92efa2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cffbf09c6b7f9aeeb0cf0b111b79c094609253a13e08f0fec9cce7d64f1ca494 = $this->env->getExtension("native_profiler");
        $__internal_cffbf09c6b7f9aeeb0cf0b111b79c094609253a13e08f0fec9cce7d64f1ca494->enter($__internal_cffbf09c6b7f9aeeb0cf0b111b79c094609253a13e08f0fec9cce7d64f1ca494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        
        <div class=\"span9\">
            <h2>Votre parnier</h2>
            <form>
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AB29837</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>                                
                            <td>333,33€</td>
                            <td>666,66€</td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt>
                <dd>799,99€</dd>

                <dt>TVA :</dt>
                <dd>200€</dd>

                <dt>Total:</dt>
                <dd>999,99€</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
        
        $__internal_cffbf09c6b7f9aeeb0cf0b111b79c094609253a13e08f0fec9cce7d64f1ca494->leave($__internal_cffbf09c6b7f9aeeb0cf0b111b79c094609253a13e08f0fec9cce7d64f1ca494_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 60,  100 => 59,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*         </div>*/
/*         */
/*         <div class="span9">*/
/*             <h2>Votre parnier</h2>*/
/*             <form>*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Références</th>*/
/*                             <th>Quantité</th>*/
/*                             <th>Prix unitaire</th>*/
/*                             <th>Total HT</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>AB29837</td>*/
/*                             <td>*/
/*                                 <select class="span1"><option>1</option></select>&nbsp;*/
/*                                 <a href="#"><i class="icon-refresh"></i></a>*/
/*                                 <a href="#"><i class="icon-trash"></i></a>*/
/*                             </td>*/
/*                             <td>333,33€</td>*/
/*                             <td>333,33€</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>AC34423</td>*/
/*                             <td>*/
/*                                 <select class="span1"><option>1</option></select>&nbsp;*/
/*                                 <a href="#"><i class="icon-refresh"></i></a>*/
/*                                 <a href="#"><i class="icon-trash"></i></a>*/
/*                             </td>                                */
/*                             <td>333,33€</td>*/
/*                             <td>666,66€</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </form>*/
/* */
/*             <dl class="dl-horizontal pull-right">*/
/*                 <dt>Total HT :</dt>*/
/*                 <dd>799,99€</dd>*/
/* */
/*                 <dt>TVA :</dt>*/
/*                 <dd>200€</dd>*/
/* */
/*                 <dt>Total:</dt>*/
/*                 <dd>999,99€</dd>*/
/*             </dl>*/
/*             <div class="clearfix"></div>*/
/*             <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*             <a href="{{ path('produits') }}" class="btn btn-primary">Continuer mes achats</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
