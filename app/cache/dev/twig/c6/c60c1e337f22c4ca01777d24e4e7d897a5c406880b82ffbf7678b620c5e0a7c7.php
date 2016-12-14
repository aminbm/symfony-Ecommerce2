<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_784074de6b7c52c71067a7a4de5902c73fc424466b472908fe7d65268a1f6bc8 extends Twig_Template
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
        $__internal_115e5a79baf3d3d17815e44cdc995c68e4dbb3db7e7f748dbe5e23b0b64c7931 = $this->env->getExtension("native_profiler");
        $__internal_115e5a79baf3d3d17815e44cdc995c68e4dbb3db7e7f748dbe5e23b0b64c7931->enter($__internal_115e5a79baf3d3d17815e44cdc995c68e4dbb3db7e7f748dbe5e23b0b64c7931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_115e5a79baf3d3d17815e44cdc995c68e4dbb3db7e7f748dbe5e23b0b64c7931->leave($__internal_115e5a79baf3d3d17815e44cdc995c68e4dbb3db7e7f748dbe5e23b0b64c7931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
