<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4cf9c27cddcc7e1623fa1a7d3570ebbbd593100890999097345d961353bf5e0c extends Twig_Template
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
        $__internal_4f8d7830808b948e11085477bef3e31af6546655f146d8ef6d64d5b06d399d48 = $this->env->getExtension("native_profiler");
        $__internal_4f8d7830808b948e11085477bef3e31af6546655f146d8ef6d64d5b06d399d48->enter($__internal_4f8d7830808b948e11085477bef3e31af6546655f146d8ef6d64d5b06d399d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4f8d7830808b948e11085477bef3e31af6546655f146d8ef6d64d5b06d399d48->leave($__internal_4f8d7830808b948e11085477bef3e31af6546655f146d8ef6d64d5b06d399d48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
