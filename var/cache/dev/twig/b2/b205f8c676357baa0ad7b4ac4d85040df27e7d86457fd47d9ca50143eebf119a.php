<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5d3c9bc65ce01fced6995e3bacd27490446818dacf5f94c70f279668cb47fd1d extends Twig_Template
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
        $__internal_7881627ed722b9091539390c4b6634ce853a494fc0ba51475a29d9d790ea6af5 = $this->env->getExtension("native_profiler");
        $__internal_7881627ed722b9091539390c4b6634ce853a494fc0ba51475a29d9d790ea6af5->enter($__internal_7881627ed722b9091539390c4b6634ce853a494fc0ba51475a29d9d790ea6af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7881627ed722b9091539390c4b6634ce853a494fc0ba51475a29d9d790ea6af5->leave($__internal_7881627ed722b9091539390c4b6634ce853a494fc0ba51475a29d9d790ea6af5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
