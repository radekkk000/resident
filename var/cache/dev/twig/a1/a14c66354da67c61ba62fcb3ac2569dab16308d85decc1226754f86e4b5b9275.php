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
        $__internal_bde01a69c63f06b45c84d1e0fb5fd93b756a541e8b147d4c8a597e6f2f812167 = $this->env->getExtension("native_profiler");
        $__internal_bde01a69c63f06b45c84d1e0fb5fd93b756a541e8b147d4c8a597e6f2f812167->enter($__internal_bde01a69c63f06b45c84d1e0fb5fd93b756a541e8b147d4c8a597e6f2f812167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/gmap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde01a69c63f06b45c84d1e0fb5fd93b756a541e8b147d4c8a597e6f2f812167->leave($__internal_bde01a69c63f06b45c84d1e0fb5fd93b756a541e8b147d4c8a597e6f2f812167_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b2fb3a421794ee702357d2e7a959c751be0cfb3abeacd24388914218c5266f = $this->env->getExtension("native_profiler");
        $__internal_27b2fb3a421794ee702357d2e7a959c751be0cfb3abeacd24388914218c5266f->enter($__internal_27b2fb3a421794ee702357d2e7a959c751be0cfb3abeacd24388914218c5266f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

            var xx = 51.7531912;
            var yy = 9.40961;
            var latLng = new google.maps.LatLng(Number(xx), Number(yy));

            var uluru = {lat: 51.7511912, lng: 19.400361};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: {lat: 51.7511912, lng: 19.400361},
                map: map,
                label: 'Andrzej Maszewski (body-building)',
            });
            var marker1 = new google.maps.Marker({
                position: {lat: 51.7518982, lng: 19.40691},
                map: map,
                label: 'Daniel Omielanczuk (mma)',
            });
            var marker2 = new google.maps.Marker({
                position: {lat: 51.7511912, lng: 19.40961 },
                map: map,
                label: 'Hubert Pomorski (krav maga)',
            });


            var marker2 = new google.maps.Marker({
                position: latLng,
                map: map,
                label: 'You',
            });

        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBYXurjnfVmbGirz8FZ9dC-my0WnWXGMIc&callback=initMap\">
    </script>
";
        
        $__internal_27b2fb3a421794ee702357d2e7a959c751be0cfb3abeacd24388914218c5266f->leave($__internal_27b2fb3a421794ee702357d2e7a959c751be0cfb3abeacd24388914218c5266f_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
/* */
/*         function initMap() {*/
/* */
/*             var xx = 51.7531912;*/
/*             var yy = 9.40961;*/
/*             var latLng = new google.maps.LatLng(Number(xx), Number(yy));*/
/* */
/*             var uluru = {lat: 51.7511912, lng: 19.400361};*/
/*             var map = new google.maps.Map(document.getElementById('map'), {*/
/*                 zoom: 15,*/
/*                 center: uluru*/
/*             });*/
/*             var marker = new google.maps.Marker({*/
/*                 position: {lat: 51.7511912, lng: 19.400361},*/
/*                 map: map,*/
/*                 label: 'Andrzej Maszewski (body-building)',*/
/*             });*/
/*             var marker1 = new google.maps.Marker({*/
/*                 position: {lat: 51.7518982, lng: 19.40691},*/
/*                 map: map,*/
/*                 label: 'Daniel Omielanczuk (mma)',*/
/*             });*/
/*             var marker2 = new google.maps.Marker({*/
/*                 position: {lat: 51.7511912, lng: 19.40961 },*/
/*                 map: map,*/
/*                 label: 'Hubert Pomorski (krav maga)',*/
/*             });*/
/* */
/* */
/*             var marker2 = new google.maps.Marker({*/
/*                 position: latLng,*/
/*                 map: map,*/
/*                 label: 'You',*/
/*             });*/
/* */
/*         }*/
/*     </script>*/
/*     <script async defer*/
/*             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYXurjnfVmbGirz8FZ9dC-my0WnWXGMIc&callback=initMap">*/
/*     </script>*/
/* {% endblock %}*/
/* */
