<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a657369b4ced0f19aca43756fe9a25b14641c54ca5655a5b9dd461ae144bb91a extends Twig_Template
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
        $__internal_cb0990fa09211aab50ae66c6ecbdb9b84423a712d1631aba12da68aa520637bd = $this->env->getExtension("native_profiler");
        $__internal_cb0990fa09211aab50ae66c6ecbdb9b84423a712d1631aba12da68aa520637bd->enter($__internal_cb0990fa09211aab50ae66c6ecbdb9b84423a712d1631aba12da68aa520637bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cb0990fa09211aab50ae66c6ecbdb9b84423a712d1631aba12da68aa520637bd->leave($__internal_cb0990fa09211aab50ae66c6ecbdb9b84423a712d1631aba12da68aa520637bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
