<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a12cf2b37fff46b37b919e0ab554d7ff86a678b7a6506e6db983a8b255c5d24f extends Twig_Template
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
        $__internal_8f4da8f3e3f3b7f6d8edd228f3c64544b7571fd6afe59a68dc65f978317587b8 = $this->env->getExtension("native_profiler");
        $__internal_8f4da8f3e3f3b7f6d8edd228f3c64544b7571fd6afe59a68dc65f978317587b8->enter($__internal_8f4da8f3e3f3b7f6d8edd228f3c64544b7571fd6afe59a68dc65f978317587b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8f4da8f3e3f3b7f6d8edd228f3c64544b7571fd6afe59a68dc65f978317587b8->leave($__internal_8f4da8f3e3f3b7f6d8edd228f3c64544b7571fd6afe59a68dc65f978317587b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
