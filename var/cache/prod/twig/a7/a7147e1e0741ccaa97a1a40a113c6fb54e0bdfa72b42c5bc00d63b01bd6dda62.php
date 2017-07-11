<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd9e5c14ac200f6f70a93cf9ea573f029a37a9c5e202b788ee2aeefdf6037c4b extends Twig_Template
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
        $__internal_f4163fc7782b5b80e8c6645613ac37c1b2acf591ce9834744a8b7f4f46d23174 = $this->env->getExtension("native_profiler");
        $__internal_f4163fc7782b5b80e8c6645613ac37c1b2acf591ce9834744a8b7f4f46d23174->enter($__internal_f4163fc7782b5b80e8c6645613ac37c1b2acf591ce9834744a8b7f4f46d23174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4163fc7782b5b80e8c6645613ac37c1b2acf591ce9834744a8b7f4f46d23174->leave($__internal_f4163fc7782b5b80e8c6645613ac37c1b2acf591ce9834744a8b7f4f46d23174_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e24cdf86b13c120465cec8a37ef78ece032ae059f19ac554942f8905b850bec = $this->env->getExtension("native_profiler");
        $__internal_5e24cdf86b13c120465cec8a37ef78ece032ae059f19ac554942f8905b850bec->enter($__internal_5e24cdf86b13c120465cec8a37ef78ece032ae059f19ac554942f8905b850bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e24cdf86b13c120465cec8a37ef78ece032ae059f19ac554942f8905b850bec->leave($__internal_5e24cdf86b13c120465cec8a37ef78ece032ae059f19ac554942f8905b850bec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d3bc0239877d2313977d8199919e96fa92487d2533a7c3822b2d3d6ae9bdee3 = $this->env->getExtension("native_profiler");
        $__internal_0d3bc0239877d2313977d8199919e96fa92487d2533a7c3822b2d3d6ae9bdee3->enter($__internal_0d3bc0239877d2313977d8199919e96fa92487d2533a7c3822b2d3d6ae9bdee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d3bc0239877d2313977d8199919e96fa92487d2533a7c3822b2d3d6ae9bdee3->leave($__internal_0d3bc0239877d2313977d8199919e96fa92487d2533a7c3822b2d3d6ae9bdee3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1370314e39c73b99be4fef083afecb95c65de9480a0a14e785438b4a212aa8ef = $this->env->getExtension("native_profiler");
        $__internal_1370314e39c73b99be4fef083afecb95c65de9480a0a14e785438b4a212aa8ef->enter($__internal_1370314e39c73b99be4fef083afecb95c65de9480a0a14e785438b4a212aa8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1370314e39c73b99be4fef083afecb95c65de9480a0a14e785438b4a212aa8ef->leave($__internal_1370314e39c73b99be4fef083afecb95c65de9480a0a14e785438b4a212aa8ef_prof);

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
