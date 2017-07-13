<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4f1c9e8bf2ea7d55768db8da4899e9a9c1e6fe98744b0e3ec8300e7f91320b40 extends Twig_Template
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
        $__internal_bed644a6ab567ba0454882ce96a764e29c710d2d4cc6e64219bd2c949da32f11 = $this->env->getExtension("native_profiler");
        $__internal_bed644a6ab567ba0454882ce96a764e29c710d2d4cc6e64219bd2c949da32f11->enter($__internal_bed644a6ab567ba0454882ce96a764e29c710d2d4cc6e64219bd2c949da32f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bed644a6ab567ba0454882ce96a764e29c710d2d4cc6e64219bd2c949da32f11->leave($__internal_bed644a6ab567ba0454882ce96a764e29c710d2d4cc6e64219bd2c949da32f11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
