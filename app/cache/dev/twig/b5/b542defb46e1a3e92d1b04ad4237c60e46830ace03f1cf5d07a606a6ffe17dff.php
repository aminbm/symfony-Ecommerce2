<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_915a3c93bb6271dbcd6172ff1ea6f1f08beff17d08804068f247ca2eb313ba03 extends Twig_Template
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
        $__internal_59806f48e65eeb0905db93f26db2b6d34a62cd19112cac86cdf01eb389cf8c6c = $this->env->getExtension("native_profiler");
        $__internal_59806f48e65eeb0905db93f26db2b6d34a62cd19112cac86cdf01eb389cf8c6c->enter($__internal_59806f48e65eeb0905db93f26db2b6d34a62cd19112cac86cdf01eb389cf8c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_59806f48e65eeb0905db93f26db2b6d34a62cd19112cac86cdf01eb389cf8c6c->leave($__internal_59806f48e65eeb0905db93f26db2b6d34a62cd19112cac86cdf01eb389cf8c6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
