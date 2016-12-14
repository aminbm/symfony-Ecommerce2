<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_55507021ef9ca968a5ff409a27595952909582072e98e3c2f1a818a96cc2d5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_520ee8039c0475f31d668e1158eff6bdbb65bc28798a69c5fd46dceac24b8671 = $this->env->getExtension("native_profiler");
        $__internal_520ee8039c0475f31d668e1158eff6bdbb65bc28798a69c5fd46dceac24b8671->enter($__internal_520ee8039c0475f31d668e1158eff6bdbb65bc28798a69c5fd46dceac24b8671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520ee8039c0475f31d668e1158eff6bdbb65bc28798a69c5fd46dceac24b8671->leave($__internal_520ee8039c0475f31d668e1158eff6bdbb65bc28798a69c5fd46dceac24b8671_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d073d387ccfe805f6bcb4a427e9b71123a1386b61302df8146006f9e9eda994 = $this->env->getExtension("native_profiler");
        $__internal_8d073d387ccfe805f6bcb4a427e9b71123a1386b61302df8146006f9e9eda994->enter($__internal_8d073d387ccfe805f6bcb4a427e9b71123a1386b61302df8146006f9e9eda994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("validation");
        echo "\">
                            <h4>Adresse de livraison</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>

                            <br /><br />

                            <h4>Adresse de facturation</h4>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </label>
                            <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                        </form>
                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>
                        <form>
                            <label>Nom</label>
                            <input type=\"text\">

                            <label>Prénom</label>
                            <input type=\"text\">

                            <label>Adresse</label>
                            <input type=\"text\">

                            <label>Ville</label>
                            <input type=\"text\">

                            <label>Code postal</label>
                            <input type=\"text\">

                            <label>Ville</label>
                            <input type=\"text\">

                            <label>Téléphone</label>
                            <input type=\"text\">                                        

                            <br />
                            <button class=\"btn btn-primary\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_8d073d387ccfe805f6bcb4a427e9b71123a1386b61302df8146006f9e9eda994->leave($__internal_8d073d387ccfe805f6bcb4a427e9b71123a1386b61302df8146006f9e9eda994_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}        */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Livraison</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <form action="{{ path('validation') }}">*/
/*                             <h4>Adresse de livraison</h4>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                 3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                 4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                 5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/* */
/*                             <br /><br />*/
/* */
/*                             <h4>Adresse de facturation</h4>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                 3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                 4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                 5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                             </label>*/
/*                             <button class="btn btn-primary">Valider mon adresse de livraison</button>*/
/*                         </form>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="span4 offset2">*/
/*                         <h4>Ajouter une nouvelle adresse</h4>*/
/*                         <form>*/
/*                             <label>Nom</label>*/
/*                             <input type="text">*/
/* */
/*                             <label>Prénom</label>*/
/*                             <input type="text">*/
/* */
/*                             <label>Adresse</label>*/
/*                             <input type="text">*/
/* */
/*                             <label>Ville</label>*/
/*                             <input type="text">*/
/* */
/*                             <label>Code postal</label>*/
/*                             <input type="text">*/
/* */
/*                             <label>Ville</label>*/
/*                             <input type="text">*/
/* */
/*                             <label>Téléphone</label>*/
/*                             <input type="text">                                        */
/* */
/*                             <br />*/
/*                             <button class="btn btn-primary">Ajouter</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
