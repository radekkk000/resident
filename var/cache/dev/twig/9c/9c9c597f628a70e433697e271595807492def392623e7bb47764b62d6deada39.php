<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6604ee4d7f4c4666c673d49d3deb981eb3bd661d2822f4d45412165ff56dc332 extends Twig_Template
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
        $__internal_057fbeedf5be68a9ef98df44ae293352c9ad1cd5c0437e8fdf448f2a96bb7c6a = $this->env->getExtension("native_profiler");
        $__internal_057fbeedf5be68a9ef98df44ae293352c9ad1cd5c0437e8fdf448f2a96bb7c6a->enter($__internal_057fbeedf5be68a9ef98df44ae293352c9ad1cd5c0437e8fdf448f2a96bb7c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_057fbeedf5be68a9ef98df44ae293352c9ad1cd5c0437e8fdf448f2a96bb7c6a->leave($__internal_057fbeedf5be68a9ef98df44ae293352c9ad1cd5c0437e8fdf448f2a96bb7c6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
