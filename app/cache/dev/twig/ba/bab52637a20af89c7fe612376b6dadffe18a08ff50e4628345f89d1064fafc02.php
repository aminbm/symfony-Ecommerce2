<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9e6df8ab4e65704b5cc9706b9e6e138983bb80b95b69cedc53770bb53ec2bd07 extends Twig_Template
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
        $__internal_785f9d2b5d572aefe8399328dc504dba26de7b59c6ea39c2cb90a1dfdabe4083 = $this->env->getExtension("native_profiler");
        $__internal_785f9d2b5d572aefe8399328dc504dba26de7b59c6ea39c2cb90a1dfdabe4083->enter($__internal_785f9d2b5d572aefe8399328dc504dba26de7b59c6ea39c2cb90a1dfdabe4083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_785f9d2b5d572aefe8399328dc504dba26de7b59c6ea39c2cb90a1dfdabe4083->leave($__internal_785f9d2b5d572aefe8399328dc504dba26de7b59c6ea39c2cb90a1dfdabe4083_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
