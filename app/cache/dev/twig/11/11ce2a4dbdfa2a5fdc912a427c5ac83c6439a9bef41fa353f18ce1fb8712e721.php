<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7ad913087444033a79784288a78881a7e5115ea84af334d886ee014211bff973 extends Twig_Template
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
        $__internal_0b8b6e0ef9a0ffc17fe103fd1a1d68aea3e66c333e07f9738d523a1929b80d11 = $this->env->getExtension("native_profiler");
        $__internal_0b8b6e0ef9a0ffc17fe103fd1a1d68aea3e66c333e07f9738d523a1929b80d11->enter($__internal_0b8b6e0ef9a0ffc17fe103fd1a1d68aea3e66c333e07f9738d523a1929b80d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0b8b6e0ef9a0ffc17fe103fd1a1d68aea3e66c333e07f9738d523a1929b80d11->leave($__internal_0b8b6e0ef9a0ffc17fe103fd1a1d68aea3e66c333e07f9738d523a1929b80d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
