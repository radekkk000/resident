<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b2c53bb94fbc21212b92b209bcce9f81e1cd1d94333541e54d0b8dc9ed7c8a7b extends Twig_Template
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
        $__internal_0ce7db9cd258a261b6d234439665f74a9c00e28d4002d5dc444327d3ebb9a76e = $this->env->getExtension("native_profiler");
        $__internal_0ce7db9cd258a261b6d234439665f74a9c00e28d4002d5dc444327d3ebb9a76e->enter($__internal_0ce7db9cd258a261b6d234439665f74a9c00e28d4002d5dc444327d3ebb9a76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0ce7db9cd258a261b6d234439665f74a9c00e28d4002d5dc444327d3ebb9a76e->leave($__internal_0ce7db9cd258a261b6d234439665f74a9c00e28d4002d5dc444327d3ebb9a76e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
