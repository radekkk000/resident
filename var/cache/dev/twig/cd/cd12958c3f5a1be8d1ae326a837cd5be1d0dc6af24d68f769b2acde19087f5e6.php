<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f28b222391b9778afa4bce4e034634c97528f1993da617591ab71661d08e432b extends Twig_Template
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
        $__internal_b72e3ff80c3bb61b2aaa2a86a57572f7dac20c44c63f61205361db3ae7364179 = $this->env->getExtension("native_profiler");
        $__internal_b72e3ff80c3bb61b2aaa2a86a57572f7dac20c44c63f61205361db3ae7364179->enter($__internal_b72e3ff80c3bb61b2aaa2a86a57572f7dac20c44c63f61205361db3ae7364179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b72e3ff80c3bb61b2aaa2a86a57572f7dac20c44c63f61205361db3ae7364179->leave($__internal_b72e3ff80c3bb61b2aaa2a86a57572f7dac20c44c63f61205361db3ae7364179_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
