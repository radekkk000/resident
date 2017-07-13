<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_96e075666053d05d40d8a048843c59e84ef3a4cd5342aea73e28dd21cfee532d extends Twig_Template
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
        $__internal_b8cd2baf398ac0b440b4d7ab284050523ef2f1ecafe080cba9819be0b9670526 = $this->env->getExtension("native_profiler");
        $__internal_b8cd2baf398ac0b440b4d7ab284050523ef2f1ecafe080cba9819be0b9670526->enter($__internal_b8cd2baf398ac0b440b4d7ab284050523ef2f1ecafe080cba9819be0b9670526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b8cd2baf398ac0b440b4d7ab284050523ef2f1ecafe080cba9819be0b9670526->leave($__internal_b8cd2baf398ac0b440b4d7ab284050523ef2f1ecafe080cba9819be0b9670526_prof);

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
