<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d26a0ce72bc4ede3dc7c99504006804d5e0024dd22f6dfe5cd2d8286d3fd7672 extends Twig_Template
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
        $__internal_464353973ec80d3b39af50836492c7e34ef807a245d6b69195247039f3c892af = $this->env->getExtension("native_profiler");
        $__internal_464353973ec80d3b39af50836492c7e34ef807a245d6b69195247039f3c892af->enter($__internal_464353973ec80d3b39af50836492c7e34ef807a245d6b69195247039f3c892af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_464353973ec80d3b39af50836492c7e34ef807a245d6b69195247039f3c892af->leave($__internal_464353973ec80d3b39af50836492c7e34ef807a245d6b69195247039f3c892af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
