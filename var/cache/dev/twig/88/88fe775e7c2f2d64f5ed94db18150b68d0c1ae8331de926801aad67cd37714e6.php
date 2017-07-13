<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_34703cec5867ad438a0de86c3c4e5e4a968c7a120daae0eb8c605cf48ae4ff59 extends Twig_Template
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
        $__internal_7807be69e4f0cdd3570f64be2bbca259798bf8b9cd7261d6a06f7639ef201564 = $this->env->getExtension("native_profiler");
        $__internal_7807be69e4f0cdd3570f64be2bbca259798bf8b9cd7261d6a06f7639ef201564->enter($__internal_7807be69e4f0cdd3570f64be2bbca259798bf8b9cd7261d6a06f7639ef201564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7807be69e4f0cdd3570f64be2bbca259798bf8b9cd7261d6a06f7639ef201564->leave($__internal_7807be69e4f0cdd3570f64be2bbca259798bf8b9cd7261d6a06f7639ef201564_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
