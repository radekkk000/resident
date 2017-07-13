<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_218b4708a53382f551594f6cceec33eef3d3ecaa5fff98e722812a8311575d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05ae574888cf8fdf50ad453a3ab66d0aa047a425bb825601a5906b8b9b34b034 = $this->env->getExtension("native_profiler");
        $__internal_05ae574888cf8fdf50ad453a3ab66d0aa047a425bb825601a5906b8b9b34b034->enter($__internal_05ae574888cf8fdf50ad453a3ab66d0aa047a425bb825601a5906b8b9b34b034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ae574888cf8fdf50ad453a3ab66d0aa047a425bb825601a5906b8b9b34b034->leave($__internal_05ae574888cf8fdf50ad453a3ab66d0aa047a425bb825601a5906b8b9b34b034_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c802c564b3a40fe55572ee3c370dd3ad3697cbf0317ce8c0473cab82d3da3921 = $this->env->getExtension("native_profiler");
        $__internal_c802c564b3a40fe55572ee3c370dd3ad3697cbf0317ce8c0473cab82d3da3921->enter($__internal_c802c564b3a40fe55572ee3c370dd3ad3697cbf0317ce8c0473cab82d3da3921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c802c564b3a40fe55572ee3c370dd3ad3697cbf0317ce8c0473cab82d3da3921->leave($__internal_c802c564b3a40fe55572ee3c370dd3ad3697cbf0317ce8c0473cab82d3da3921_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a11fbabfb8537d0cc91286ca1adee9500d6a9ad2ca92a1b9a52a8b4b08b2e214 = $this->env->getExtension("native_profiler");
        $__internal_a11fbabfb8537d0cc91286ca1adee9500d6a9ad2ca92a1b9a52a8b4b08b2e214->enter($__internal_a11fbabfb8537d0cc91286ca1adee9500d6a9ad2ca92a1b9a52a8b4b08b2e214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a11fbabfb8537d0cc91286ca1adee9500d6a9ad2ca92a1b9a52a8b4b08b2e214->leave($__internal_a11fbabfb8537d0cc91286ca1adee9500d6a9ad2ca92a1b9a52a8b4b08b2e214_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d995c9b743629bb11152d108eabdd6d176a586abb42dbea32b7e06b0072f8279 = $this->env->getExtension("native_profiler");
        $__internal_d995c9b743629bb11152d108eabdd6d176a586abb42dbea32b7e06b0072f8279->enter($__internal_d995c9b743629bb11152d108eabdd6d176a586abb42dbea32b7e06b0072f8279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d995c9b743629bb11152d108eabdd6d176a586abb42dbea32b7e06b0072f8279->leave($__internal_d995c9b743629bb11152d108eabdd6d176a586abb42dbea32b7e06b0072f8279_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
