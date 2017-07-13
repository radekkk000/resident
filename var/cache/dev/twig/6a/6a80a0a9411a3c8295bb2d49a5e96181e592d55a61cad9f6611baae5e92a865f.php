<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d116cfdba89bd86ede8fc28123cc0342df43a41af430ad5399572d9dbd952466 extends Twig_Template
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
        $__internal_0643f3e3d3e99bfad45eaa25f321ee81ad935e839722e02b5a94f4b9ef148783 = $this->env->getExtension("native_profiler");
        $__internal_0643f3e3d3e99bfad45eaa25f321ee81ad935e839722e02b5a94f4b9ef148783->enter($__internal_0643f3e3d3e99bfad45eaa25f321ee81ad935e839722e02b5a94f4b9ef148783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0643f3e3d3e99bfad45eaa25f321ee81ad935e839722e02b5a94f4b9ef148783->leave($__internal_0643f3e3d3e99bfad45eaa25f321ee81ad935e839722e02b5a94f4b9ef148783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
