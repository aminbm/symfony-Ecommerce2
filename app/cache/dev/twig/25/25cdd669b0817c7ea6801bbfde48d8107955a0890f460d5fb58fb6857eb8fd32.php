<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fb195b5b3aa0f73e8267b42ec35ddc6b4431790f456d900eecb1eaa57c292802 extends Twig_Template
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
        $__internal_e60e1c6d2dbc89aa76119823d4d5d75a34aad76d9698b037aaea68f6fe3ebd32 = $this->env->getExtension("native_profiler");
        $__internal_e60e1c6d2dbc89aa76119823d4d5d75a34aad76d9698b037aaea68f6fe3ebd32->enter($__internal_e60e1c6d2dbc89aa76119823d4d5d75a34aad76d9698b037aaea68f6fe3ebd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e60e1c6d2dbc89aa76119823d4d5d75a34aad76d9698b037aaea68f6fe3ebd32->leave($__internal_e60e1c6d2dbc89aa76119823d4d5d75a34aad76d9698b037aaea68f6fe3ebd32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
