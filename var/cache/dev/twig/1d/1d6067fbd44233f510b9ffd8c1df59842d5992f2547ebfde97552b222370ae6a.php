<?php

/* :resident:trainer.html.twig */
class __TwigTemplate_0b830d1f3fd15f48cf85db5d04db0345ab4a4b6983c2ab7d343ee6bf4141d982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":resident:trainer.html.twig", 1);
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
        $__internal_3f46fc2017095ddf8a97376ec12325cc3bf9e8614dd7719e7b7bd6ef45f90b1d = $this->env->getExtension("native_profiler");
        $__internal_3f46fc2017095ddf8a97376ec12325cc3bf9e8614dd7719e7b7bd6ef45f90b1d->enter($__internal_3f46fc2017095ddf8a97376ec12325cc3bf9e8614dd7719e7b7bd6ef45f90b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":resident:trainer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f46fc2017095ddf8a97376ec12325cc3bf9e8614dd7719e7b7bd6ef45f90b1d->leave($__internal_3f46fc2017095ddf8a97376ec12325cc3bf9e8614dd7719e7b7bd6ef45f90b1d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a83d1eac0c24cf33e4a1404046f37dc60a473d97cfcd96a4584575915bb1757 = $this->env->getExtension("native_profiler");
        $__internal_9a83d1eac0c24cf33e4a1404046f37dc60a473d97cfcd96a4584575915bb1757->enter($__internal_9a83d1eac0c24cf33e4a1404046f37dc60a473d97cfcd96a4584575915bb1757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a83d1eac0c24cf33e4a1404046f37dc60a473d97cfcd96a4584575915bb1757->leave($__internal_9a83d1eac0c24cf33e4a1404046f37dc60a473d97cfcd96a4584575915bb1757_prof);

    }

    public function getTemplateName()
    {
        return ":resident:trainer.html.twig";
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
