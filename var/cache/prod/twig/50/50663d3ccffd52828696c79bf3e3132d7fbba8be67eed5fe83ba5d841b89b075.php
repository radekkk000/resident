<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_651761d26053480fb5c23c0f74af1e95579c5c3a2e57aebf8a215da094549a90 extends Twig_Template
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
        $__internal_f65df3442a6f799770ec9f46ce95f8d746b386af381a78e9c05ee552bb704d51 = $this->env->getExtension("native_profiler");
        $__internal_f65df3442a6f799770ec9f46ce95f8d746b386af381a78e9c05ee552bb704d51->enter($__internal_f65df3442a6f799770ec9f46ce95f8d746b386af381a78e9c05ee552bb704d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65df3442a6f799770ec9f46ce95f8d746b386af381a78e9c05ee552bb704d51->leave($__internal_f65df3442a6f799770ec9f46ce95f8d746b386af381a78e9c05ee552bb704d51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c030fc24ac2a9e1263e35e7b091eb3b30b0f904c60b6e01613a668a2ae01e629 = $this->env->getExtension("native_profiler");
        $__internal_c030fc24ac2a9e1263e35e7b091eb3b30b0f904c60b6e01613a668a2ae01e629->enter($__internal_c030fc24ac2a9e1263e35e7b091eb3b30b0f904c60b6e01613a668a2ae01e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c030fc24ac2a9e1263e35e7b091eb3b30b0f904c60b6e01613a668a2ae01e629->leave($__internal_c030fc24ac2a9e1263e35e7b091eb3b30b0f904c60b6e01613a668a2ae01e629_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e7827c59f8d197efaa44d87e557d26fe05166ca953cc0cf4f9abc9671c52b3 = $this->env->getExtension("native_profiler");
        $__internal_68e7827c59f8d197efaa44d87e557d26fe05166ca953cc0cf4f9abc9671c52b3->enter($__internal_68e7827c59f8d197efaa44d87e557d26fe05166ca953cc0cf4f9abc9671c52b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68e7827c59f8d197efaa44d87e557d26fe05166ca953cc0cf4f9abc9671c52b3->leave($__internal_68e7827c59f8d197efaa44d87e557d26fe05166ca953cc0cf4f9abc9671c52b3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_792da2c0d5bf918ffbd071f91f5f552ca06f27ffd4d96721b6e4abc76883668e = $this->env->getExtension("native_profiler");
        $__internal_792da2c0d5bf918ffbd071f91f5f552ca06f27ffd4d96721b6e4abc76883668e->enter($__internal_792da2c0d5bf918ffbd071f91f5f552ca06f27ffd4d96721b6e4abc76883668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_792da2c0d5bf918ffbd071f91f5f552ca06f27ffd4d96721b6e4abc76883668e->leave($__internal_792da2c0d5bf918ffbd071f91f5f552ca06f27ffd4d96721b6e4abc76883668e_prof);

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
