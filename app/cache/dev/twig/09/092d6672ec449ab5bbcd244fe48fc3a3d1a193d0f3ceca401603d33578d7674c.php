<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2fb85c4ac8de9caa26122c06e1ca2d0a94c09faec98be873115352cee99d396c extends Twig_Template
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
        $__internal_8b585d21d442eee79ab566cc6701dc2b181c2267196bbb7bdfd7569ed2a3e09f = $this->env->getExtension("native_profiler");
        $__internal_8b585d21d442eee79ab566cc6701dc2b181c2267196bbb7bdfd7569ed2a3e09f->enter($__internal_8b585d21d442eee79ab566cc6701dc2b181c2267196bbb7bdfd7569ed2a3e09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8b585d21d442eee79ab566cc6701dc2b181c2267196bbb7bdfd7569ed2a3e09f->leave($__internal_8b585d21d442eee79ab566cc6701dc2b181c2267196bbb7bdfd7569ed2a3e09f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
