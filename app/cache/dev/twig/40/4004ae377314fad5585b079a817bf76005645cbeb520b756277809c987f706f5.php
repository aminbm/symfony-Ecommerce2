<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_605c2838d3942f449440368dce19d63c81097f376fe24e1bf472a306b445c3c9 extends Twig_Template
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
        $__internal_f6e8082f60afc460b4bc921314e2241fc274974d71fa55c0a3cd3c3a7f5a8cc2 = $this->env->getExtension("native_profiler");
        $__internal_f6e8082f60afc460b4bc921314e2241fc274974d71fa55c0a3cd3c3a7f5a8cc2->enter($__internal_f6e8082f60afc460b4bc921314e2241fc274974d71fa55c0a3cd3c3a7f5a8cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f6e8082f60afc460b4bc921314e2241fc274974d71fa55c0a3cd3c3a7f5a8cc2->leave($__internal_f6e8082f60afc460b4bc921314e2241fc274974d71fa55c0a3cd3c3a7f5a8cc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
