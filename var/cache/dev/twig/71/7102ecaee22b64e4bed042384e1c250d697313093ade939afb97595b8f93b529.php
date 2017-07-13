<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_927714092f56be0ed8f67a748d5a9c64bd966140ffabcf5ed1cf281220be15b5 extends Twig_Template
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
        $__internal_7feba0099ee04a8b5419bb04c70155a4776817e1c69258c21c28fa221979dd12 = $this->env->getExtension("native_profiler");
        $__internal_7feba0099ee04a8b5419bb04c70155a4776817e1c69258c21c28fa221979dd12->enter($__internal_7feba0099ee04a8b5419bb04c70155a4776817e1c69258c21c28fa221979dd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7feba0099ee04a8b5419bb04c70155a4776817e1c69258c21c28fa221979dd12->leave($__internal_7feba0099ee04a8b5419bb04c70155a4776817e1c69258c21c28fa221979dd12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
