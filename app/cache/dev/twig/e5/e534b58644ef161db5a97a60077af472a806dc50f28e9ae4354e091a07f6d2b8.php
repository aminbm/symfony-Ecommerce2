<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5fabea6e4974439277576c23e6b444db6f6ad95d314f60c226150980c63b4c19 extends Twig_Template
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
        $__internal_a3b0e57a7bf36ae61de8d095931af951baa3691af3b4e5df5ff694da069f33c8 = $this->env->getExtension("native_profiler");
        $__internal_a3b0e57a7bf36ae61de8d095931af951baa3691af3b4e5df5ff694da069f33c8->enter($__internal_a3b0e57a7bf36ae61de8d095931af951baa3691af3b4e5df5ff694da069f33c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a3b0e57a7bf36ae61de8d095931af951baa3691af3b4e5df5ff694da069f33c8->leave($__internal_a3b0e57a7bf36ae61de8d095931af951baa3691af3b4e5df5ff694da069f33c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
