<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_44aad1a336b6bb3c3a1e20ba3a608625e7b4b01dbfd621120778ed4ddcc83f24 extends Twig_Template
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
        $__internal_5df864c300a16df8a5ef614b46dc8a09e913f7e7dda74555c695fc670a455bdb = $this->env->getExtension("native_profiler");
        $__internal_5df864c300a16df8a5ef614b46dc8a09e913f7e7dda74555c695fc670a455bdb->enter($__internal_5df864c300a16df8a5ef614b46dc8a09e913f7e7dda74555c695fc670a455bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5df864c300a16df8a5ef614b46dc8a09e913f7e7dda74555c695fc670a455bdb->leave($__internal_5df864c300a16df8a5ef614b46dc8a09e913f7e7dda74555c695fc670a455bdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
