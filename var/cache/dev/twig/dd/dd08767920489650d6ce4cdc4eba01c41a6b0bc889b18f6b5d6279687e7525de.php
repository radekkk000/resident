<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0e90398a56578dffd30a8b06345bee0a9f5b36cd91f453d29756a8bd396568f3 extends Twig_Template
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
        $__internal_4fab440bb47092e961d83e65ece36391108215ca93ba8cd0561aebadfc0421a3 = $this->env->getExtension("native_profiler");
        $__internal_4fab440bb47092e961d83e65ece36391108215ca93ba8cd0561aebadfc0421a3->enter($__internal_4fab440bb47092e961d83e65ece36391108215ca93ba8cd0561aebadfc0421a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4fab440bb47092e961d83e65ece36391108215ca93ba8cd0561aebadfc0421a3->leave($__internal_4fab440bb47092e961d83e65ece36391108215ca93ba8cd0561aebadfc0421a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
