<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_98dc8ac3fe79415dc87d91eedfad8057647fb8850e0a1e58a02d742c8adccdf7 extends Twig_Template
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
        $__internal_6ab4fb5a7b57ce12012ee4a0a4cdf317e97176c5c4ddf3495bba692dee70b173 = $this->env->getExtension("native_profiler");
        $__internal_6ab4fb5a7b57ce12012ee4a0a4cdf317e97176c5c4ddf3495bba692dee70b173->enter($__internal_6ab4fb5a7b57ce12012ee4a0a4cdf317e97176c5c4ddf3495bba692dee70b173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6ab4fb5a7b57ce12012ee4a0a4cdf317e97176c5c4ddf3495bba692dee70b173->leave($__internal_6ab4fb5a7b57ce12012ee4a0a4cdf317e97176c5c4ddf3495bba692dee70b173_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
