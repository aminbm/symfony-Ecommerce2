<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_f51f4036442de8a15a100dc60ab045af7ed0bbeba3d41e8e6510ce8c66dfcd3c extends Twig_Template
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
        $__internal_b9e242dde7ea214816c12ac965938136429b4d355e42008424f0e0f9bd2d0b7d = $this->env->getExtension("native_profiler");
        $__internal_b9e242dde7ea214816c12ac965938136429b4d355e42008424f0e0f9bd2d0b7d->enter($__internal_b9e242dde7ea214816c12ac965938136429b4d355e42008424f0e0f9bd2d0b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e242dde7ea214816c12ac965938136429b4d355e42008424f0e0f9bd2d0b7d->leave($__internal_b9e242dde7ea214816c12ac965938136429b4d355e42008424f0e0f9bd2d0b7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8f5b39b1d0e0f27e1bb9e29087d334b1e6f71aa2cb874466097121126bf89b = $this->env->getExtension("native_profiler");
        $__internal_ee8f5b39b1d0e0f27e1bb9e29087d334b1e6f71aa2cb874466097121126bf89b->enter($__internal_ee8f5b39b1d0e0f27e1bb9e29087d334b1e6f71aa2cb874466097121126bf89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee8f5b39b1d0e0f27e1bb9e29087d334b1e6f71aa2cb874466097121126bf89b->leave($__internal_ee8f5b39b1d0e0f27e1bb9e29087d334b1e6f71aa2cb874466097121126bf89b_prof);

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
