<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6c0b452f399b64015d8f2d5cf16faec60279fe079748849bf99e66707cace364 extends Twig_Template
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
        $__internal_7ecdcf9d2227165b41820255e053c8254d4b68bb7f6d73cb496c45507612067a = $this->env->getExtension("native_profiler");
        $__internal_7ecdcf9d2227165b41820255e053c8254d4b68bb7f6d73cb496c45507612067a->enter($__internal_7ecdcf9d2227165b41820255e053c8254d4b68bb7f6d73cb496c45507612067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7ecdcf9d2227165b41820255e053c8254d4b68bb7f6d73cb496c45507612067a->leave($__internal_7ecdcf9d2227165b41820255e053c8254d4b68bb7f6d73cb496c45507612067a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
