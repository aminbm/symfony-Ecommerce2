<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_65e309499a506c7c89942464b1a3ad5c333722712d62f364fcff624eae52ee38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0713fce9e584cd6729d0ab4b81c9fc4c7e1f35811014687b7e6f2ff1751639c0 = $this->env->getExtension("native_profiler");
        $__internal_0713fce9e584cd6729d0ab4b81c9fc4c7e1f35811014687b7e6f2ff1751639c0->enter($__internal_0713fce9e584cd6729d0ab4b81c9fc4c7e1f35811014687b7e6f2ff1751639c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0713fce9e584cd6729d0ab4b81c9fc4c7e1f35811014687b7e6f2ff1751639c0->leave($__internal_0713fce9e584cd6729d0ab4b81c9fc4c7e1f35811014687b7e6f2ff1751639c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebe433fcfca2e1bc6a4676b41b0eec40180e52430be33900b6841fcc3b9e1ac = $this->env->getExtension("native_profiler");
        $__internal_3ebe433fcfca2e1bc6a4676b41b0eec40180e52430be33900b6841fcc3b9e1ac->enter($__internal_3ebe433fcfca2e1bc6a4676b41b0eec40180e52430be33900b6841fcc3b9e1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_3ebe433fcfca2e1bc6a4676b41b0eec40180e52430be33900b6841fcc3b9e1ac->leave($__internal_3ebe433fcfca2e1bc6a4676b41b0eec40180e52430be33900b6841fcc3b9e1ac_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38ae3da35b429d7e0b3bb89e1d93dcd0108ffb9aa2e89ce977e2cf5b2eff6049 = $this->env->getExtension("native_profiler");
        $__internal_38ae3da35b429d7e0b3bb89e1d93dcd0108ffb9aa2e89ce977e2cf5b2eff6049->enter($__internal_38ae3da35b429d7e0b3bb89e1d93dcd0108ffb9aa2e89ce977e2cf5b2eff6049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_38ae3da35b429d7e0b3bb89e1d93dcd0108ffb9aa2e89ce977e2cf5b2eff6049->leave($__internal_38ae3da35b429d7e0b3bb89e1d93dcd0108ffb9aa2e89ce977e2cf5b2eff6049_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}        */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 <strong>{{ message }}</strong>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock %}*/
