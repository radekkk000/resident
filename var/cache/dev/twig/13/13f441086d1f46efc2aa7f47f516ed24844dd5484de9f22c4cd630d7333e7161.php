<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4e4516649df9e1e9682b5f2a18b91d63f2737b0e077e560fb43aee0d9dd9f35b extends Twig_Template
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
        $__internal_399500fb0fc8f00a111b16d3e1ab16b2e264d276076857fd2d3ef50af4406e15 = $this->env->getExtension("native_profiler");
        $__internal_399500fb0fc8f00a111b16d3e1ab16b2e264d276076857fd2d3ef50af4406e15->enter($__internal_399500fb0fc8f00a111b16d3e1ab16b2e264d276076857fd2d3ef50af4406e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_399500fb0fc8f00a111b16d3e1ab16b2e264d276076857fd2d3ef50af4406e15->leave($__internal_399500fb0fc8f00a111b16d3e1ab16b2e264d276076857fd2d3ef50af4406e15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
