<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8a4238f8ffb8fc655ba74b52977b2b57f35c133601493b5b3bba841195978ee3 extends Twig_Template
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
        $__internal_7a49421112f4f26fd9e377fd4f1d5a2200507a21e51387963918a13bdc3390b3 = $this->env->getExtension("native_profiler");
        $__internal_7a49421112f4f26fd9e377fd4f1d5a2200507a21e51387963918a13bdc3390b3->enter($__internal_7a49421112f4f26fd9e377fd4f1d5a2200507a21e51387963918a13bdc3390b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7a49421112f4f26fd9e377fd4f1d5a2200507a21e51387963918a13bdc3390b3->leave($__internal_7a49421112f4f26fd9e377fd4f1d5a2200507a21e51387963918a13bdc3390b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
