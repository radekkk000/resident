<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c41abf87adef82f76f7a4a158013e3865a5904fbd32ac6ab9f020632acf2eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cecad377e9e4a270c4a1a6a91ea74045adc6a9218cc33af14a99c51b4c9116b4 = $this->env->getExtension("native_profiler");
        $__internal_cecad377e9e4a270c4a1a6a91ea74045adc6a9218cc33af14a99c51b4c9116b4->enter($__internal_cecad377e9e4a270c4a1a6a91ea74045adc6a9218cc33af14a99c51b4c9116b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cecad377e9e4a270c4a1a6a91ea74045adc6a9218cc33af14a99c51b4c9116b4->leave($__internal_cecad377e9e4a270c4a1a6a91ea74045adc6a9218cc33af14a99c51b4c9116b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a874e5b0fa7305ff4edf506fe66119f48070f642fcc979fea7e8082de5074fb = $this->env->getExtension("native_profiler");
        $__internal_5a874e5b0fa7305ff4edf506fe66119f48070f642fcc979fea7e8082de5074fb->enter($__internal_5a874e5b0fa7305ff4edf506fe66119f48070f642fcc979fea7e8082de5074fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5a874e5b0fa7305ff4edf506fe66119f48070f642fcc979fea7e8082de5074fb->leave($__internal_5a874e5b0fa7305ff4edf506fe66119f48070f642fcc979fea7e8082de5074fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84d811cfc5681bba8d8a9c9da79a63fcba3b31b437db8045bb0cc2f10d6d3cef = $this->env->getExtension("native_profiler");
        $__internal_84d811cfc5681bba8d8a9c9da79a63fcba3b31b437db8045bb0cc2f10d6d3cef->enter($__internal_84d811cfc5681bba8d8a9c9da79a63fcba3b31b437db8045bb0cc2f10d6d3cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84d811cfc5681bba8d8a9c9da79a63fcba3b31b437db8045bb0cc2f10d6d3cef->leave($__internal_84d811cfc5681bba8d8a9c9da79a63fcba3b31b437db8045bb0cc2f10d6d3cef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66ae253b04b2c23f4a9813355452150e8ea5986b0197c7d2a2986dc7a3ac87a6 = $this->env->getExtension("native_profiler");
        $__internal_66ae253b04b2c23f4a9813355452150e8ea5986b0197c7d2a2986dc7a3ac87a6->enter($__internal_66ae253b04b2c23f4a9813355452150e8ea5986b0197c7d2a2986dc7a3ac87a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66ae253b04b2c23f4a9813355452150e8ea5986b0197c7d2a2986dc7a3ac87a6->leave($__internal_66ae253b04b2c23f4a9813355452150e8ea5986b0197c7d2a2986dc7a3ac87a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
