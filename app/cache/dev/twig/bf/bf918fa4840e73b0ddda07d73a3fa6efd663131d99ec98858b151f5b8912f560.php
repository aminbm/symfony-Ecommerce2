<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ba4419b3792ed8674c800d497fe8fe3516558ecd63e791a55671d673791cacd6 extends Twig_Template
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
        $__internal_4485a5bae493b21d5663e227bc7de3e920d0e82dc9f9c2a59bc59b7431388b09 = $this->env->getExtension("native_profiler");
        $__internal_4485a5bae493b21d5663e227bc7de3e920d0e82dc9f9c2a59bc59b7431388b09->enter($__internal_4485a5bae493b21d5663e227bc7de3e920d0e82dc9f9c2a59bc59b7431388b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4485a5bae493b21d5663e227bc7de3e920d0e82dc9f9c2a59bc59b7431388b09->leave($__internal_4485a5bae493b21d5663e227bc7de3e920d0e82dc9f9c2a59bc59b7431388b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
