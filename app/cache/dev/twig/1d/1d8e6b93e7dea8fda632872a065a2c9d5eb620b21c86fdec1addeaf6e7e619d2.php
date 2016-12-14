<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ecd54657a169df3c476cbcf964bea05c151fb2e2c4fcbbb6efda836400517c15 extends Twig_Template
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
        $__internal_3698eaf26a430df9284e07b4e2d8bf1aa91c7ac9e45e6a33f1d5a27de0aef2fe = $this->env->getExtension("native_profiler");
        $__internal_3698eaf26a430df9284e07b4e2d8bf1aa91c7ac9e45e6a33f1d5a27de0aef2fe->enter($__internal_3698eaf26a430df9284e07b4e2d8bf1aa91c7ac9e45e6a33f1d5a27de0aef2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3698eaf26a430df9284e07b4e2d8bf1aa91c7ac9e45e6a33f1d5a27de0aef2fe->leave($__internal_3698eaf26a430df9284e07b4e2d8bf1aa91c7ac9e45e6a33f1d5a27de0aef2fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
