<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a3de8e1093cb760279c0723ed95d95dd70204625f6d95a3aef264fb9b54410b3 extends Twig_Template
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
        $__internal_a383bc003b78c9b5b5f5c408056656897c28d07359a67cf0690f404c3bd8d009 = $this->env->getExtension("native_profiler");
        $__internal_a383bc003b78c9b5b5f5c408056656897c28d07359a67cf0690f404c3bd8d009->enter($__internal_a383bc003b78c9b5b5f5c408056656897c28d07359a67cf0690f404c3bd8d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a383bc003b78c9b5b5f5c408056656897c28d07359a67cf0690f404c3bd8d009->leave($__internal_a383bc003b78c9b5b5f5c408056656897c28d07359a67cf0690f404c3bd8d009_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
