<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a9ede3ae68be0f17dd1102a21b1a1b7538e9382d2d683d1c1241b5943c361f57 extends Twig_Template
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
        $__internal_1c1ae6cc83962cf7e37e69769a3c9149f3e335942a4f5cdc453e15f94d592bce = $this->env->getExtension("native_profiler");
        $__internal_1c1ae6cc83962cf7e37e69769a3c9149f3e335942a4f5cdc453e15f94d592bce->enter($__internal_1c1ae6cc83962cf7e37e69769a3c9149f3e335942a4f5cdc453e15f94d592bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1c1ae6cc83962cf7e37e69769a3c9149f3e335942a4f5cdc453e15f94d592bce->leave($__internal_1c1ae6cc83962cf7e37e69769a3c9149f3e335942a4f5cdc453e15f94d592bce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
