<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b68dfd4cc90c34fbdf3e6a031f616b2663f7ec16343d5145c3b830a83cee82ad extends Twig_Template
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
        $__internal_aeb1f34a9c5b37560aedfa54ac61144830ab7f63462eba289450add496ebb573 = $this->env->getExtension("native_profiler");
        $__internal_aeb1f34a9c5b37560aedfa54ac61144830ab7f63462eba289450add496ebb573->enter($__internal_aeb1f34a9c5b37560aedfa54ac61144830ab7f63462eba289450add496ebb573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aeb1f34a9c5b37560aedfa54ac61144830ab7f63462eba289450add496ebb573->leave($__internal_aeb1f34a9c5b37560aedfa54ac61144830ab7f63462eba289450add496ebb573_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
