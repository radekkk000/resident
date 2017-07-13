<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_424cedcdb995b64e61e81a02f8c557d5ef9c6a7b0eae49374ec8786913fe9ffb extends Twig_Template
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
        $__internal_4b852c0ea112572e2956a64b2f244d27b37bb7049ba257ba1940d6c3bb145649 = $this->env->getExtension("native_profiler");
        $__internal_4b852c0ea112572e2956a64b2f244d27b37bb7049ba257ba1940d6c3bb145649->enter($__internal_4b852c0ea112572e2956a64b2f244d27b37bb7049ba257ba1940d6c3bb145649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4b852c0ea112572e2956a64b2f244d27b37bb7049ba257ba1940d6c3bb145649->leave($__internal_4b852c0ea112572e2956a64b2f244d27b37bb7049ba257ba1940d6c3bb145649_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
