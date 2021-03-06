<?php

/* layout/layout.html.twig */
class __TwigTemplate_f4a5c35d5030fc942d362a947d0d6902dbf3f754d3307b4a1a369795842626b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07f67b330d2e8b7f4a99a3c356801c3504f809dceb92f0c26076bc87fc1663a0 = $this->env->getExtension("native_profiler");
        $__internal_07f67b330d2e8b7f4a99a3c356801c3504f809dceb92f0c26076bc87fc1663a0->enter($__internal_07f67b330d2e8b7f4a99a3c356801c3504f809dceb92f0c26076bc87fc1663a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">DevAndClick</a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 37
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 38
        echo "                        </ul>
                    </div> 

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - DevAndClick</p>
                    </div>
                </div>
            </div>
        </footer>\t
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>";
        
        $__internal_07f67b330d2e8b7f4a99a3c356801c3504f809dceb92f0c26076bc87fc1663a0->leave($__internal_07f67b330d2e8b7f4a99a3c356801c3504f809dceb92f0c26076bc87fc1663a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af9efde361867d12f02a753b4d64abafb5f64239dcad420e5c831d9109a73e3f = $this->env->getExtension("native_profiler");
        $__internal_af9efde361867d12f02a753b4d64abafb5f64239dcad420e5c831d9109a73e3f->enter($__internal_af9efde361867d12f02a753b4d64abafb5f64239dcad420e5c831d9109a73e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af9efde361867d12f02a753b4d64abafb5f64239dcad420e5c831d9109a73e3f->leave($__internal_af9efde361867d12f02a753b4d64abafb5f64239dcad420e5c831d9109a73e3f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b46f7b699e0e9b2c0a73dd865a1fdb023c895f6b7b8b4bfb8cb0420fb09095cc = $this->env->getExtension("native_profiler");
        $__internal_b46f7b699e0e9b2c0a73dd865a1fdb023c895f6b7b8b4bfb8cb0420fb09095cc->enter($__internal_b46f7b699e0e9b2c0a73dd865a1fdb023c895f6b7b8b4bfb8cb0420fb09095cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b46f7b699e0e9b2c0a73dd865a1fdb023c895f6b7b8b4bfb8cb0420fb09095cc->leave($__internal_b46f7b699e0e9b2c0a73dd865a1fdb023c895f6b7b8b4bfb8cb0420fb09095cc_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a72ce4d76b8af6ed957a154f25ca74226f624adfd8902586c336130cb673c83 = $this->env->getExtension("native_profiler");
        $__internal_6a72ce4d76b8af6ed957a154f25ca74226f624adfd8902586c336130cb673c83->enter($__internal_6a72ce4d76b8af6ed957a154f25ca74226f624adfd8902586c336130cb673c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a72ce4d76b8af6ed957a154f25ca74226f624adfd8902586c336130cb673c83->leave($__internal_6a72ce4d76b8af6ed957a154f25ca74226f624adfd8902586c336130cb673c83_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf83608982cbc0f02046d56a7bf50fada2b4490a68dadda22e16ee2a8382db12 = $this->env->getExtension("native_profiler");
        $__internal_cf83608982cbc0f02046d56a7bf50fada2b4490a68dadda22e16ee2a8382db12->enter($__internal_cf83608982cbc0f02046d56a7bf50fada2b4490a68dadda22e16ee2a8382db12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf83608982cbc0f02046d56a7bf50fada2b4490a68dadda22e16ee2a8382db12->leave($__internal_cf83608982cbc0f02046d56a7bf50fada2b4490a68dadda22e16ee2a8382db12_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 62,  172 => 29,  161 => 10,  149 => 5,  141 => 63,  139 => 62,  135 => 61,  131 => 60,  123 => 55,  114 => 49,  110 => 48,  102 => 43,  95 => 38,  93 => 37,  84 => 30,  82 => 29,  76 => 25,  74 => 24,  69 => 22,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="{{ path('produits') }}">DevAndClick</a>*/
/*                     <div class="nav-collapse collapse">*/
/*                         {% render(controller('EcommerceBundle:Produits:recherche')) %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% block body %}{% endblock %}*/
/*         <hr />*/
/*         <footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="span4 offset1">*/
/*                         <h4>Informations</h4>*/
/*                         <ul class="nav nav-stacked">*/
/*                             {% render(controller('PagesBundle:Pages:menu')) %}*/
/*                         </ul>*/
/*                     </div> */
/* */
/*                     <div class="span4">*/
/*                         <h4>Notre entrepôt</h4>*/
/*                         <p><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</p>*/
/*                     </div>*/
/* */
/*                     <div class="span2">*/
/*                         <h4>Nous contacter</h4>*/
/*                         <p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/*                         <p><i class="icon-print"></i>&nbsp;Fax: {{ fax }}</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="span4">*/
/*                         <p>&copy; Copyright {{ "now"|date('Y') }} - DevAndClick</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
