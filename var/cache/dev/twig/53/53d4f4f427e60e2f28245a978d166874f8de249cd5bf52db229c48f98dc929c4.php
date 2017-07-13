<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0105224dfef8e0e15465b2479202155ae3d3d187fe1c3020132856461ff5446a extends Twig_Template
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
        $__internal_80f13fe01c52dd06e572c48055891bc644df2248efeea1ade7c7631429ac1ad5 = $this->env->getExtension("native_profiler");
        $__internal_80f13fe01c52dd06e572c48055891bc644df2248efeea1ade7c7631429ac1ad5->enter($__internal_80f13fe01c52dd06e572c48055891bc644df2248efeea1ade7c7631429ac1ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_80f13fe01c52dd06e572c48055891bc644df2248efeea1ade7c7631429ac1ad5->leave($__internal_80f13fe01c52dd06e572c48055891bc644df2248efeea1ade7c7631429ac1ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
