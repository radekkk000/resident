<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ae27c0a044d387f1e68dd93ea001d95832a04864148730343facb1d3ffe492df extends Twig_Template
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
        $__internal_217113b4b18fb4d9d164535afa8b4f79d1b03b766edee2820dea0ae47bea8672 = $this->env->getExtension("native_profiler");
        $__internal_217113b4b18fb4d9d164535afa8b4f79d1b03b766edee2820dea0ae47bea8672->enter($__internal_217113b4b18fb4d9d164535afa8b4f79d1b03b766edee2820dea0ae47bea8672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_217113b4b18fb4d9d164535afa8b4f79d1b03b766edee2820dea0ae47bea8672->leave($__internal_217113b4b18fb4d9d164535afa8b4f79d1b03b766edee2820dea0ae47bea8672_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
