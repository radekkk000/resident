<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1e05a42e528ae432e9e8340622135fa1552475f2ef3045d783d1bdab0592dd35 extends Twig_Template
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
        $__internal_a86b0fb64bc65eaba8873ce1f7641939a6fbd69ba1f1e125c17dbf090e970432 = $this->env->getExtension("native_profiler");
        $__internal_a86b0fb64bc65eaba8873ce1f7641939a6fbd69ba1f1e125c17dbf090e970432->enter($__internal_a86b0fb64bc65eaba8873ce1f7641939a6fbd69ba1f1e125c17dbf090e970432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a86b0fb64bc65eaba8873ce1f7641939a6fbd69ba1f1e125c17dbf090e970432->leave($__internal_a86b0fb64bc65eaba8873ce1f7641939a6fbd69ba1f1e125c17dbf090e970432_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
