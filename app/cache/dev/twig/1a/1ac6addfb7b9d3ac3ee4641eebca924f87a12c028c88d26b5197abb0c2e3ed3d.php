<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6dd452476b9b0602cfa83d6d8c9f5369d1336642609d127b84773ee01188bc9e extends Twig_Template
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
        $__internal_108b9ac7e08198aa96fc503c73024e9c0cf4fa30b769316b12b66881a5c81101 = $this->env->getExtension("native_profiler");
        $__internal_108b9ac7e08198aa96fc503c73024e9c0cf4fa30b769316b12b66881a5c81101->enter($__internal_108b9ac7e08198aa96fc503c73024e9c0cf4fa30b769316b12b66881a5c81101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_108b9ac7e08198aa96fc503c73024e9c0cf4fa30b769316b12b66881a5c81101->leave($__internal_108b9ac7e08198aa96fc503c73024e9c0cf4fa30b769316b12b66881a5c81101_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
