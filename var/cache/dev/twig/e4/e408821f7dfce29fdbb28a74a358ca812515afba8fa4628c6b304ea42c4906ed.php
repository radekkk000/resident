<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9c56177a1230954912e1b7c611bb1d2b6bad3e1451a4931622d02710cbdd4475 extends Twig_Template
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
        $__internal_e2645ea0e18244d8cc4130fdd012fc15919643f91bea33a5d6b1eb35002212cc = $this->env->getExtension("native_profiler");
        $__internal_e2645ea0e18244d8cc4130fdd012fc15919643f91bea33a5d6b1eb35002212cc->enter($__internal_e2645ea0e18244d8cc4130fdd012fc15919643f91bea33a5d6b1eb35002212cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e2645ea0e18244d8cc4130fdd012fc15919643f91bea33a5d6b1eb35002212cc->leave($__internal_e2645ea0e18244d8cc4130fdd012fc15919643f91bea33a5d6b1eb35002212cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
