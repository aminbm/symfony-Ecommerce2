<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ce3731aa15269048c7d4fbe281d06d7e87b28110cde8779cf744c1a1cbef4d2e extends Twig_Template
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
        $__internal_61e183444e0e85c07c7fe5f04632f0fc8b4964a08974b908edf75bb51c831e34 = $this->env->getExtension("native_profiler");
        $__internal_61e183444e0e85c07c7fe5f04632f0fc8b4964a08974b908edf75bb51c831e34->enter($__internal_61e183444e0e85c07c7fe5f04632f0fc8b4964a08974b908edf75bb51c831e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_61e183444e0e85c07c7fe5f04632f0fc8b4964a08974b908edf75bb51c831e34->leave($__internal_61e183444e0e85c07c7fe5f04632f0fc8b4964a08974b908edf75bb51c831e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
