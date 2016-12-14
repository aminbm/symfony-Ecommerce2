<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c435e141f870eb6addaef97d616c98b8a0fd0a76c680545aa3d6910e1aeb48a6 extends Twig_Template
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
        $__internal_d9fcd159af78d0840ad4036b71e5aeea0327a2a9ecf831ebc283cdffb5c41e16 = $this->env->getExtension("native_profiler");
        $__internal_d9fcd159af78d0840ad4036b71e5aeea0327a2a9ecf831ebc283cdffb5c41e16->enter($__internal_d9fcd159af78d0840ad4036b71e5aeea0327a2a9ecf831ebc283cdffb5c41e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d9fcd159af78d0840ad4036b71e5aeea0327a2a9ecf831ebc283cdffb5c41e16->leave($__internal_d9fcd159af78d0840ad4036b71e5aeea0327a2a9ecf831ebc283cdffb5c41e16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
