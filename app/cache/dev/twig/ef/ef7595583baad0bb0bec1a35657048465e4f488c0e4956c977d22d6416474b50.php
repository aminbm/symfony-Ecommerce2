<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_69ace27f4b53e1a7912a39d20f51f6b8c3e41f07a6ad4eff7f6de801d1b65e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_fa4425f1c7fa16ae040177822b38fc5b37c778de135077c0625c1066432899e2 = $this->env->getExtension("native_profiler");
        $__internal_fa4425f1c7fa16ae040177822b38fc5b37c778de135077c0625c1066432899e2->enter($__internal_fa4425f1c7fa16ae040177822b38fc5b37c778de135077c0625c1066432899e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4425f1c7fa16ae040177822b38fc5b37c778de135077c0625c1066432899e2->leave($__internal_fa4425f1c7fa16ae040177822b38fc5b37c778de135077c0625c1066432899e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b5d3873e4912c5fd809b4ba87cd8267cda45914e08e888e8339c0659bd70a8 = $this->env->getExtension("native_profiler");
        $__internal_02b5d3873e4912c5fd809b4ba87cd8267cda45914e08e888e8339c0659bd70a8->enter($__internal_02b5d3873e4912c5fd809b4ba87cd8267cda45914e08e888e8339c0659bd70a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02b5d3873e4912c5fd809b4ba87cd8267cda45914e08e888e8339c0659bd70a8->leave($__internal_02b5d3873e4912c5fd809b4ba87cd8267cda45914e08e888e8339c0659bd70a8_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_371423999c6753876497e1c854c0d30a1f511886820966388d89416b78497513 = $this->env->getExtension("native_profiler");
        $__internal_371423999c6753876497e1c854c0d30a1f511886820966388d89416b78497513->enter($__internal_371423999c6753876497e1c854c0d30a1f511886820966388d89416b78497513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_371423999c6753876497e1c854c0d30a1f511886820966388d89416b78497513->leave($__internal_371423999c6753876497e1c854c0d30a1f511886820966388d89416b78497513_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
