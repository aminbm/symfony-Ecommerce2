<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a6b3f125724065c52aeea650cdbd3c9ddfb2cea9243cda161e355c36cd750bc6 extends Twig_Template
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
        $__internal_1d50839d655bfccf443a75712cdd8044ed48c55af3e703d970443292aeb273b8 = $this->env->getExtension("native_profiler");
        $__internal_1d50839d655bfccf443a75712cdd8044ed48c55af3e703d970443292aeb273b8->enter($__internal_1d50839d655bfccf443a75712cdd8044ed48c55af3e703d970443292aeb273b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1d50839d655bfccf443a75712cdd8044ed48c55af3e703d970443292aeb273b8->leave($__internal_1d50839d655bfccf443a75712cdd8044ed48c55af3e703d970443292aeb273b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
