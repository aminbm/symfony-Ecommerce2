<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f46ffc451a39879258066372d46323258195b1d19168de465447755b65ea3905 extends Twig_Template
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
        $__internal_ae5cca3f9b7e6088e18de5bdc3e6ef2c7fcd1b245fc98b58ad1da206d9ac74d8 = $this->env->getExtension("native_profiler");
        $__internal_ae5cca3f9b7e6088e18de5bdc3e6ef2c7fcd1b245fc98b58ad1da206d9ac74d8->enter($__internal_ae5cca3f9b7e6088e18de5bdc3e6ef2c7fcd1b245fc98b58ad1da206d9ac74d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ae5cca3f9b7e6088e18de5bdc3e6ef2c7fcd1b245fc98b58ad1da206d9ac74d8->leave($__internal_ae5cca3f9b7e6088e18de5bdc3e6ef2c7fcd1b245fc98b58ad1da206d9ac74d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
