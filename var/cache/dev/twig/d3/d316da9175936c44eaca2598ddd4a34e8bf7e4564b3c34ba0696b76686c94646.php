<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_41bb6fac220440a1733fdf90ca61b81b12d1a9cb588d2483f6a8d711e2fd8cb7 extends Twig_Template
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
        $__internal_9d5bd2ad49ae80b071245b3abe10f9d09412546ed132e3ec200c6c45a191fd81 = $this->env->getExtension("native_profiler");
        $__internal_9d5bd2ad49ae80b071245b3abe10f9d09412546ed132e3ec200c6c45a191fd81->enter($__internal_9d5bd2ad49ae80b071245b3abe10f9d09412546ed132e3ec200c6c45a191fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9d5bd2ad49ae80b071245b3abe10f9d09412546ed132e3ec200c6c45a191fd81->leave($__internal_9d5bd2ad49ae80b071245b3abe10f9d09412546ed132e3ec200c6c45a191fd81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
