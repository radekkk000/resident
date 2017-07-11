<?php

/* base.html.twig */
class __TwigTemplate_1f3f278507f792b02c28d877a83bf818755d7b0f0336799532995442e82081be extends Twig_Template
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
        $__internal_77a749ef9cdd67c05b3bcb36bee8bc64d6ab3ce4c6bff94346020f4cc91adc67 = $this->env->getExtension("native_profiler");
        $__internal_77a749ef9cdd67c05b3bcb36bee8bc64d6ab3ce4c6bff94346020f4cc91adc67->enter($__internal_77a749ef9cdd67c05b3bcb36bee8bc64d6ab3ce4c6bff94346020f4cc91adc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_77a749ef9cdd67c05b3bcb36bee8bc64d6ab3ce4c6bff94346020f4cc91adc67->leave($__internal_77a749ef9cdd67c05b3bcb36bee8bc64d6ab3ce4c6bff94346020f4cc91adc67_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_c29b34150df72365605768e9b5e2b1688ef4ce121194c1024c8398c6420e5005 = $this->env->getExtension("native_profiler");
        $__internal_c29b34150df72365605768e9b5e2b1688ef4ce121194c1024c8398c6420e5005->enter($__internal_c29b34150df72365605768e9b5e2b1688ef4ce121194c1024c8398c6420e5005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resident";
        
        $__internal_c29b34150df72365605768e9b5e2b1688ef4ce121194c1024c8398c6420e5005->leave($__internal_c29b34150df72365605768e9b5e2b1688ef4ce121194c1024c8398c6420e5005_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58c5144efb4a80ef339d579c6a076c8fd89024df6d0e265974c11698d7aeeb4d = $this->env->getExtension("native_profiler");
        $__internal_58c5144efb4a80ef339d579c6a076c8fd89024df6d0e265974c11698d7aeeb4d->enter($__internal_58c5144efb4a80ef339d579c6a076c8fd89024df6d0e265974c11698d7aeeb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_58c5144efb4a80ef339d579c6a076c8fd89024df6d0e265974c11698d7aeeb4d->leave($__internal_58c5144efb4a80ef339d579c6a076c8fd89024df6d0e265974c11698d7aeeb4d_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03dda0cfdf3038d09e208969fd279358a94e23aef4f9390d090b27ec8068d46c = $this->env->getExtension("native_profiler");
        $__internal_03dda0cfdf3038d09e208969fd279358a94e23aef4f9390d090b27ec8068d46c->enter($__internal_03dda0cfdf3038d09e208969fd279358a94e23aef4f9390d090b27ec8068d46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_03dda0cfdf3038d09e208969fd279358a94e23aef4f9390d090b27ec8068d46c->leave($__internal_03dda0cfdf3038d09e208969fd279358a94e23aef4f9390d090b27ec8068d46c_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b469cfd72f6d28bf5cc0337786714e29312b6eb20388047c794c9cdb866daeb = $this->env->getExtension("native_profiler");
        $__internal_1b469cfd72f6d28bf5cc0337786714e29312b6eb20388047c794c9cdb866daeb->enter($__internal_1b469cfd72f6d28bf5cc0337786714e29312b6eb20388047c794c9cdb866daeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        ";
        
        $__internal_1b469cfd72f6d28bf5cc0337786714e29312b6eb20388047c794c9cdb866daeb->leave($__internal_1b469cfd72f6d28bf5cc0337786714e29312b6eb20388047c794c9cdb866daeb_prof);

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
