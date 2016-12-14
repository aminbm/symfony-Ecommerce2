<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3e5f37b9388ceaa1dd56353526824d2e565cbb840af18cce0ec06df466ae3236 extends Twig_Template
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
        $__internal_379ccdee841d860d93a9f62fa591c75b6c894d67b17637255278c55710c458fd = $this->env->getExtension("native_profiler");
        $__internal_379ccdee841d860d93a9f62fa591c75b6c894d67b17637255278c55710c458fd->enter($__internal_379ccdee841d860d93a9f62fa591c75b6c894d67b17637255278c55710c458fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_379ccdee841d860d93a9f62fa591c75b6c894d67b17637255278c55710c458fd->leave($__internal_379ccdee841d860d93a9f62fa591c75b6c894d67b17637255278c55710c458fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
