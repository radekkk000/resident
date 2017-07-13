<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_54afad02227e2138d75c3cc6ffbb5cd4636aac666ae1d94fa652433455e0f65b extends Twig_Template
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
        $__internal_89d2232f93231702845a36bec0daf72dc66fe2410933e750ea4df0aac248c5a5 = $this->env->getExtension("native_profiler");
        $__internal_89d2232f93231702845a36bec0daf72dc66fe2410933e750ea4df0aac248c5a5->enter($__internal_89d2232f93231702845a36bec0daf72dc66fe2410933e750ea4df0aac248c5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_89d2232f93231702845a36bec0daf72dc66fe2410933e750ea4df0aac248c5a5->leave($__internal_89d2232f93231702845a36bec0daf72dc66fe2410933e750ea4df0aac248c5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
