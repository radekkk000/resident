<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_feb54a34ed712cadc394ba94429d5619c305bf8d2ef0697a3c7f0d83ab774571 extends Twig_Template
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
        $__internal_a809a7f1b6d90cbc3899d259988d129d7146b96fce6982c525bf78d6e275a156 = $this->env->getExtension("native_profiler");
        $__internal_a809a7f1b6d90cbc3899d259988d129d7146b96fce6982c525bf78d6e275a156->enter($__internal_a809a7f1b6d90cbc3899d259988d129d7146b96fce6982c525bf78d6e275a156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a809a7f1b6d90cbc3899d259988d129d7146b96fce6982c525bf78d6e275a156->leave($__internal_a809a7f1b6d90cbc3899d259988d129d7146b96fce6982c525bf78d6e275a156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
