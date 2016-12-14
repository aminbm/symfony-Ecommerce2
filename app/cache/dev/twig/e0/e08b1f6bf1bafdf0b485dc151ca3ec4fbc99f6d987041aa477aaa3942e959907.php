<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c255389134892cc3599c79cd6dba82b3e80ac241475117a2ff870df67c3032d2 extends Twig_Template
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
        $__internal_7ddebc8be0b92fea05216f27ee85751f81615187536ed1f52f9bbba93de92abd = $this->env->getExtension("native_profiler");
        $__internal_7ddebc8be0b92fea05216f27ee85751f81615187536ed1f52f9bbba93de92abd->enter($__internal_7ddebc8be0b92fea05216f27ee85751f81615187536ed1f52f9bbba93de92abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7ddebc8be0b92fea05216f27ee85751f81615187536ed1f52f9bbba93de92abd->leave($__internal_7ddebc8be0b92fea05216f27ee85751f81615187536ed1f52f9bbba93de92abd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
