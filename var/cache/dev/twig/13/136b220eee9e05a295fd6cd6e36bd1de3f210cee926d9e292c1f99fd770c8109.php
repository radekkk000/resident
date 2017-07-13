<?php

/* resident/vendor/font-awesome/scss/_screen-reader.scss */
class __TwigTemplate_c3442da79a9810f3851c90f888ca6baa27b04d13a1cf58487e11907cd6560f3e extends Twig_Template
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
        $__internal_92942d48c4d93a2735f9ee9f691f7e2149af461a3930ca6d1e12cfb9ce908734 = $this->env->getExtension("native_profiler");
        $__internal_92942d48c4d93a2735f9ee9f691f7e2149af461a3930ca6d1e12cfb9ce908734->enter($__internal_92942d48c4d93a2735f9ee9f691f7e2149af461a3930ca6d1e12cfb9ce908734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/vendor/font-awesome/scss/_screen-reader.scss"));

        // line 1
        echo "// Screen Readers
// -------------------------

.sr-only { @include sr-only(); }
.sr-only-focusable { @include sr-only-focusable(); }
";
        
        $__internal_92942d48c4d93a2735f9ee9f691f7e2149af461a3930ca6d1e12cfb9ce908734->leave($__internal_92942d48c4d93a2735f9ee9f691f7e2149af461a3930ca6d1e12cfb9ce908734_prof);

    }

    public function getTemplateName()
    {
        return "resident/vendor/font-awesome/scss/_screen-reader.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* // Screen Readers*/
/* // -------------------------*/
/* */
/* .sr-only { @include sr-only(); }*/
/* .sr-only-focusable { @include sr-only-focusable(); }*/
/* */
