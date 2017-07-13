<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5be6291686590557af6b1b28e2299044fb9f95ac75ae6d4b5eb5664e7924bc27 extends Twig_Template
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
        $__internal_87c6df819e3fdf753b7b39360ef85b3f83bed2936ecf081b82a8dadd1bc28314 = $this->env->getExtension("native_profiler");
        $__internal_87c6df819e3fdf753b7b39360ef85b3f83bed2936ecf081b82a8dadd1bc28314->enter($__internal_87c6df819e3fdf753b7b39360ef85b3f83bed2936ecf081b82a8dadd1bc28314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_87c6df819e3fdf753b7b39360ef85b3f83bed2936ecf081b82a8dadd1bc28314->leave($__internal_87c6df819e3fdf753b7b39360ef85b3f83bed2936ecf081b82a8dadd1bc28314_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
