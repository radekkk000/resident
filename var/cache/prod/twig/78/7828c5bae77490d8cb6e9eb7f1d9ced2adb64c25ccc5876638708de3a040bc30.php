<?php

/* Resident/trainer.html.twig */
class __TwigTemplate_cb3323fc292274d4e65e95f881451bfcc1d2c0d48c27278054a6009e7200527f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Resident/trainer.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4763c9ecd5baa0c3295ba91facd8ced203dd0250fb849ee2893b2af8535f78da = $this->env->getExtension("native_profiler");
        $__internal_4763c9ecd5baa0c3295ba91facd8ced203dd0250fb849ee2893b2af8535f78da->enter($__internal_4763c9ecd5baa0c3295ba91facd8ced203dd0250fb849ee2893b2af8535f78da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Resident/trainer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4763c9ecd5baa0c3295ba91facd8ced203dd0250fb849ee2893b2af8535f78da->leave($__internal_4763c9ecd5baa0c3295ba91facd8ced203dd0250fb849ee2893b2af8535f78da_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8800b276d66a73e9e9fb196d3d4824e78f93c6487022360cdbb2348f42d49925 = $this->env->getExtension("native_profiler");
        $__internal_8800b276d66a73e9e9fb196d3d4824e78f93c6487022360cdbb2348f42d49925->enter($__internal_8800b276d66a73e9e9fb196d3d4824e78f93c6487022360cdbb2348f42d49925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-2\" id=\"column1\"><a href=\"/resident/web/\"><h1 style=\"color: black;\">Main</h1></a></div>
         <div class=\"col-md-2\" id=\"column2\"><a href=\"/resident/web/user\"><h1 style=\"color: black;\">User</h1></a></div>
       </div>
     <div class=\"table-responsive\">
        <span>Add your training ability for participants</span>

         ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
         ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
         ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_8800b276d66a73e9e9fb196d3d4824e78f93c6487022360cdbb2348f42d49925->leave($__internal_8800b276d66a73e9e9fb196d3d4824e78f93c6487022360cdbb2348f42d49925_prof);

    }

    public function getTemplateName()
    {
        return "Resident/trainer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container">*/
/*        <div class="row">*/
/*          <div class="col-md-2" id="column1"><a href="/resident/web/"><h1 style="color: black;">Main</h1></a></div>*/
/*          <div class="col-md-2" id="column2"><a href="/resident/web/user"><h1 style="color: black;">User</h1></a></div>*/
/*        </div>*/
/*      <div class="table-responsive">*/
/*         <span>Add your training ability for participants</span>*/
/* */
/*          {{ form_start(form) }}*/
/*          {{ form_widget(form) }}*/
/*          {{ form_end(form) }}*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
