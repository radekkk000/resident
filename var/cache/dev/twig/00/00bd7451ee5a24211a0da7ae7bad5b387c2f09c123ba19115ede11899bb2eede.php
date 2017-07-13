<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5153bad15c189a9b81be9af7c609f497fda1b8acd35782bde0e4ff53ec967fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8fe457d32be64eb4363e5a3805cf21bec8e8fe95ddc58826eac0be808f4c3a8 = $this->env->getExtension("native_profiler");
        $__internal_e8fe457d32be64eb4363e5a3805cf21bec8e8fe95ddc58826eac0be808f4c3a8->enter($__internal_e8fe457d32be64eb4363e5a3805cf21bec8e8fe95ddc58826eac0be808f4c3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e8fe457d32be64eb4363e5a3805cf21bec8e8fe95ddc58826eac0be808f4c3a8->leave($__internal_e8fe457d32be64eb4363e5a3805cf21bec8e8fe95ddc58826eac0be808f4c3a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecc68b78bcf9102ad682e42e48469a9affaf765fabf5d94f06608c8f50c17287 = $this->env->getExtension("native_profiler");
        $__internal_ecc68b78bcf9102ad682e42e48469a9affaf765fabf5d94f06608c8f50c17287->enter($__internal_ecc68b78bcf9102ad682e42e48469a9affaf765fabf5d94f06608c8f50c17287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ecc68b78bcf9102ad682e42e48469a9affaf765fabf5d94f06608c8f50c17287->leave($__internal_ecc68b78bcf9102ad682e42e48469a9affaf765fabf5d94f06608c8f50c17287_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
