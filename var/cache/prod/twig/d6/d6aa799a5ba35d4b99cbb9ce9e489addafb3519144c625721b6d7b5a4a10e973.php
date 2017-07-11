<?php

/* base.html.twig */
class __TwigTemplate_a478784c6659ac7e52f0795c8a7e467a01cf94b213f70b3dce1e4c4d10ec51dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583f2add666b0c082622f6bf101a2d3a0997b244029e88f54cfb544ffe1ba13d = $this->env->getExtension("native_profiler");
        $__internal_583f2add666b0c082622f6bf101a2d3a0997b244029e88f54cfb544ffe1ba13d->enter($__internal_583f2add666b0c082622f6bf101a2d3a0997b244029e88f54cfb544ffe1ba13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <!-- First include jquery js -->
        <script src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>

        <!-- Then include bootstrap js -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        ";
        // line 12
        echo "        ";
        // line 13
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_583f2add666b0c082622f6bf101a2d3a0997b244029e88f54cfb544ffe1ba13d->leave($__internal_583f2add666b0c082622f6bf101a2d3a0997b244029e88f54cfb544ffe1ba13d_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a201bee510cf359a162c616f88a19928df2d7e13258d3902e591f39df71486d7 = $this->env->getExtension("native_profiler");
        $__internal_a201bee510cf359a162c616f88a19928df2d7e13258d3902e591f39df71486d7->enter($__internal_a201bee510cf359a162c616f88a19928df2d7e13258d3902e591f39df71486d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resident";
        
        $__internal_a201bee510cf359a162c616f88a19928df2d7e13258d3902e591f39df71486d7->leave($__internal_a201bee510cf359a162c616f88a19928df2d7e13258d3902e591f39df71486d7_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4295eb268c00eda33d8668d11efbebc186d954e212dc5bd8e246a9c68de0e86a = $this->env->getExtension("native_profiler");
        $__internal_4295eb268c00eda33d8668d11efbebc186d954e212dc5bd8e246a9c68de0e86a->enter($__internal_4295eb268c00eda33d8668d11efbebc186d954e212dc5bd8e246a9c68de0e86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_4295eb268c00eda33d8668d11efbebc186d954e212dc5bd8e246a9c68de0e86a->leave($__internal_4295eb268c00eda33d8668d11efbebc186d954e212dc5bd8e246a9c68de0e86a_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5140c13bd0f42ecd383c03a9f56e2cd484bb4f2f6c165d2d5815438785a3bc6 = $this->env->getExtension("native_profiler");
        $__internal_c5140c13bd0f42ecd383c03a9f56e2cd484bb4f2f6c165d2d5815438785a3bc6->enter($__internal_c5140c13bd0f42ecd383c03a9f56e2cd484bb4f2f6c165d2d5815438785a3bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c5140c13bd0f42ecd383c03a9f56e2cd484bb4f2f6c165d2d5815438785a3bc6->leave($__internal_c5140c13bd0f42ecd383c03a9f56e2cd484bb4f2f6c165d2d5815438785a3bc6_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_170e1f77ce9de38bbaeec01466d583447c5127d77553bc03b82e4c2cdaa135e3 = $this->env->getExtension("native_profiler");
        $__internal_170e1f77ce9de38bbaeec01466d583447c5127d77553bc03b82e4c2cdaa135e3->enter($__internal_170e1f77ce9de38bbaeec01466d583447c5127d77553bc03b82e4c2cdaa135e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        ";
        
        $__internal_170e1f77ce9de38bbaeec01466d583447c5127d77553bc03b82e4c2cdaa135e3->leave($__internal_170e1f77ce9de38bbaeec01466d583447c5127d77553bc03b82e4c2cdaa135e3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 25,  117 => 24,  108 => 20,  103 => 19,  97 => 18,  88 => 16,  83 => 15,  77 => 14,  65 => 13,  56 => 26,  54 => 24,  50 => 22,  47 => 18,  45 => 14,  40 => 13,  38 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <!-- First include jquery js -->*/
/*         <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>*/
/*         <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/* */
/*         <!-- Then include bootstrap js -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         {#<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.9/jquery.min.js"></script>#}*/
/*         {#<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1" name="viewport" />#}*/
/*         <title>{% block title %}Resident{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('css/style.css')}}">*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="{{ asset('js/bootstrap.min.js') }}" ></script>*/
/*         <script src="{{asset('js/jquery.min.js')}}"></script>*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
