<?php

/* resident/gmap.html.twig */
class __TwigTemplate_5adc4e10e96a07f9547a95ce2e4789a8938b7693d92e2b9a70d823f171f313c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "resident/gmap.html.twig", 1);
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
        $__internal_0f7c7ed4c17e8704fa51263a27f07f220a1c232f9c5a6a98fd6c0c388789d3f1 = $this->env->getExtension("native_profiler");
        $__internal_0f7c7ed4c17e8704fa51263a27f07f220a1c232f9c5a6a98fd6c0c388789d3f1->enter($__internal_0f7c7ed4c17e8704fa51263a27f07f220a1c232f9c5a6a98fd6c0c388789d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/gmap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7c7ed4c17e8704fa51263a27f07f220a1c232f9c5a6a98fd6c0c388789d3f1->leave($__internal_0f7c7ed4c17e8704fa51263a27f07f220a1c232f9c5a6a98fd6c0c388789d3f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6059cc7881bc27732576ce63dcc5e7f23beb107203ea37bcba3fb23ae4024f7 = $this->env->getExtension("native_profiler");
        $__internal_a6059cc7881bc27732576ce63dcc5e7f23beb107203ea37bcba3fb23ae4024f7->enter($__internal_a6059cc7881bc27732576ce63dcc5e7f23beb107203ea37bcba3fb23ae4024f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <h3>Trenerzy obok Ciebie</h3>
    <div id=\"map\"></div>
    <script>
        function initMap() {

            var startPosition = {lat: 51.7511912, lng: 19.4003610};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: startPosition
            });

            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) ? $context["points"] : $this->getContext($context, "points")));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 29
            echo "                    marker = new google.maps.Marker({
                        position: {lat: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["point"], "lat", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["point"], "lng", array()), "html", null, true);
            echo "},
                        map: map,
                        label: '";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["point"], "label", array()), "html", null, true);
            echo "',
                        icon: '";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["point"], "icon", array())), "html", null, true);
            echo "'
                    });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
            ";
        // line 38
        echo "                ";
        // line 39
        echo "                ";
        // line 40
        echo "
                ";
        // line 42
        echo "            ";
        // line 43
        echo "            ";
        // line 44
        echo "                ";
        // line 45
        echo "                ";
        // line 46
        echo "                ";
        // line 47
        echo "                ";
        // line 48
        echo "            ";
        // line 49
        echo "            ";
        // line 50
        echo "                ";
        // line 51
        echo "                ";
        // line 52
        echo "                ";
        // line 53
        echo "            ";
        // line 54
        echo "
            ";
        // line 56
        echo "                ";
        // line 57
        echo "                ";
        // line 58
        echo "                ";
        // line 59
        echo "            ";
        // line 60
        echo "
        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBYXurjnfVmbGirz8FZ9dC-my0WnWXGMIc&callback=initMap\">
    </script>
";
        
        $__internal_a6059cc7881bc27732576ce63dcc5e7f23beb107203ea37bcba3fb23ae4024f7->leave($__internal_a6059cc7881bc27732576ce63dcc5e7f23beb107203ea37bcba3fb23ae4024f7_prof);

    }

    public function getTemplateName()
    {
        return "resident/gmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 60,  137 => 59,  135 => 58,  133 => 57,  131 => 56,  128 => 54,  126 => 53,  124 => 52,  122 => 51,  120 => 50,  118 => 49,  116 => 48,  114 => 47,  112 => 46,  110 => 45,  108 => 44,  106 => 43,  104 => 42,  101 => 40,  99 => 39,  97 => 38,  94 => 36,  85 => 33,  81 => 32,  74 => 30,  71 => 29,  67 => 28,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <style>*/
/*         #map {*/
/*             height: 400px;*/
/*             width: 100%;*/
/*         }*/
/*     </style>*/
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*     <h3>Trenerzy obok Ciebie</h3>*/
/*     <div id="map"></div>*/
/*     <script>*/
/*         function initMap() {*/
/* */
/*             var startPosition = {lat: 51.7511912, lng: 19.4003610};*/
/*             var map = new google.maps.Map(document.getElementById('map'), {*/
/*                 zoom: 15,*/
/*                 center: startPosition*/
/*             });*/
/* */
/*             {% for point in points %}*/
/*                     marker = new google.maps.Marker({*/
/*                         position: {lat: {{ point.lat }}, lng: {{ point.lng }}},*/
/*                         map: map,*/
/*                         label: '{{ point.label }}',*/
/*                         icon: '{{ asset(point.icon) }}'*/
/*                     });*/
/*             {% endfor %}*/
/* */
/*             {#var marker = new google.maps.Marker({#}*/
/*                 {#position: {lat: 51.7520000, lng: 19.4000000},#}*/
/*                 {#map: map,#}*/
/* */
/*                 {#label: 'Andrzej Maszewski (body-building)',#}*/
/*             {#});#}*/
/*             {#var marker1 = new google.maps.Marker({#}*/
/*                 {#position: {lat: {{ lat }}, lng: {{ lng }}},#}*/
/*                 {#map: map,#}*/
/*                 {#label: 'Daniel Omielanczuk (mma)',#}*/
/*                 {#icon: '{{ asset('img/marker1.png') }}',#}*/
/*             {#});#}*/
/*             {#var marker2 = new google.maps.Marker({#}*/
/*                 {#position: {lat: 51.7510000, lng: 19.4010000 },#}*/
/*                 {#map: map,#}*/
/*                 {#label: 'Hubert Pomorski (krav maga)',#}*/
/*             {#});#}*/
/* */
/*             {#var marker2 = new google.maps.Marker({#}*/
/*                 {#position: latLng,#}*/
/*                 {#map: map,#}*/
/*                 {#label: 'You',#}*/
/*             {#});#}*/
/* */
/*         }*/
/*     </script>*/
/*     <script async defer*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYXurjnfVmbGirz8FZ9dC-my0WnWXGMIc&callback=initMap">*/
/*     </script>*/
/* {% endblock %}*/
/* */
