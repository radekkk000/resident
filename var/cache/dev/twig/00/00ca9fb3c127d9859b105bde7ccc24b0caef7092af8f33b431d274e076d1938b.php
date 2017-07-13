<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f1140ed43dc8688e3e62ef9af10599d6d6f4a4e11e546ed1b02740efd2a43258 extends Twig_Template
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
        $__internal_c03db611d8fe4026790edd17ef04c6c605bc8a8b2befdb869c09631021d4bb49 = $this->env->getExtension("native_profiler");
        $__internal_c03db611d8fe4026790edd17ef04c6c605bc8a8b2befdb869c09631021d4bb49->enter($__internal_c03db611d8fe4026790edd17ef04c6c605bc8a8b2befdb869c09631021d4bb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c03db611d8fe4026790edd17ef04c6c605bc8a8b2befdb869c09631021d4bb49->leave($__internal_c03db611d8fe4026790edd17ef04c6c605bc8a8b2befdb869c09631021d4bb49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
