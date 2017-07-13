<?php

/* :resident:user.html.twig */
class __TwigTemplate_ad0976baa34083339af917a6e7721d3402572c99f36f9cb6a173bbb69dab6d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":resident:user.html.twig", 1);
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
        $__internal_14e9c81af5f4a9d64d688bbc69e0fb69344cbe5aef24b6f36fa82ef90c830e2c = $this->env->getExtension("native_profiler");
        $__internal_14e9c81af5f4a9d64d688bbc69e0fb69344cbe5aef24b6f36fa82ef90c830e2c->enter($__internal_14e9c81af5f4a9d64d688bbc69e0fb69344cbe5aef24b6f36fa82ef90c830e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":resident:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e9c81af5f4a9d64d688bbc69e0fb69344cbe5aef24b6f36fa82ef90c830e2c->leave($__internal_14e9c81af5f4a9d64d688bbc69e0fb69344cbe5aef24b6f36fa82ef90c830e2c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_059524150844f89c0908ce7b9e032025fac018bdfc4ad6b78cbf41db95a609ab = $this->env->getExtension("native_profiler");
        $__internal_059524150844f89c0908ce7b9e032025fac018bdfc4ad6b78cbf41db95a609ab->enter($__internal_059524150844f89c0908ce7b9e032025fac018bdfc4ad6b78cbf41db95a609ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <script type=\"text/javascript\">
        var element = document.getElementById('distanceid').nodeValue;
        alert(element);
    </script>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2\" id=\"column1\"><a href=\"/resident/web/\"><h1 style=\"color: black;\">Main</h1></a></div>
            <div class=\"col-md-2\" id=\"column2\"><a href=\"/resident/web/trainer\"><h1 style=\"color: black;\">Trainer</h1></a></div>
        </div>

        <form action=\"/resident/web/user\" method=\"POST\" id=\"form\">
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Trainer name</label>
                <input type=\"text\" class=\"form-control\"  name=\"trainer\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["trainer"]) ? $context["trainer"] : $this->getContext($context, "trainer")), "html", null, true);
        echo "\" placeholder=\"trainer surname\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleSelect1\">Distance</label>
                <select class=\"form-control\" name=\"distance\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["distanceValues"]) ? $context["distanceValues"] : $this->getContext($context, "distanceValues")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                    <option ";
            if (($context["i"] == (isset($context["distance"]) ? $context["distance"] : $this->getContext($context, "distance")))) {
                echo "selected";
            } else {
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleSelect2\">Discipline</label>
                <select multiple class=\"form-control\" name=\"type\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disciplineValues"]) ? $context["disciplineValues"] : $this->getContext($context, "disciplineValues")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "                        <option ";
            if (($context["i"] == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
                echo "selected";
            } else {
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    <option  value=\"brasilian jiu jitsu\">brasilian jiu jitsu</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
        </form>
        <hr>
            </form>
                  <div class=\"row\">
                      <div class=\"col-xs-1\">type</div>
                      <div class=\"col-xs-2\">trainer name</div>
                      <div class=\"col-xs-1\">PLN</div>
                      <div class=\"col-xs-1\">lenght</div>
                      <div class=\"col-xs-1\">district</div>
                      <div class=\"col-xs-1\">city</div>
                      <div class=\"col-xs-1\">distance</div>
                      <div class=\"col-xs-2\">street</div>
                      <div class=\"col-xs-2\">datetime</div>
                  </div>
                 <hr>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 52
            echo "                    <div class=\"row\">
                            <div class=\"col-xs-1\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_type", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-2\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "trainer_name", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-1\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_price", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-1\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_time", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-1\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_district", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-1\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_city", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-1\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_distance", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-2\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "training_street", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-xs-2\">";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["j"], "training_date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                 <hr>
    </div>
";
        
        $__internal_059524150844f89c0908ce7b9e032025fac018bdfc4ad6b78cbf41db95a609ab->leave($__internal_059524150844f89c0908ce7b9e032025fac018bdfc4ad6b78cbf41db95a609ab_prof);

    }

    public function getTemplateName()
    {
        return ":resident:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 64,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  135 => 52,  131 => 51,  110 => 32,  94 => 30,  90 => 29,  83 => 24,  67 => 22,  63 => 21,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <script type="text/javascript">*/
/*         var element = document.getElementById('distanceid').nodeValue;*/
/*         alert(element);*/
/*     </script>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-2" id="column1"><a href="/resident/web/"><h1 style="color: black;">Main</h1></a></div>*/
/*             <div class="col-md-2" id="column2"><a href="/resident/web/trainer"><h1 style="color: black;">Trainer</h1></a></div>*/
/*         </div>*/
/* */
/*         <form action="/resident/web/user" method="POST" id="form">*/
/*             <div class="form-group">*/
/*                 <label for="exampleInputPassword1">Trainer name</label>*/
/*                 <input type="text" class="form-control"  name="trainer" value="{{ trainer }}" placeholder="trainer surname">*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="exampleSelect1">Distance</label>*/
/*                 <select class="form-control" name="distance">*/
/*                     {% for i in distanceValues %}*/
/*                     <option {% if i == distance %}selected{%  else %}{% endif %} value="{{ i }}">{{ i }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="exampleSelect2">Discipline</label>*/
/*                 <select multiple class="form-control" name="type">*/
/*                     {% for i in disciplineValues %}*/
/*                         <option {% if i == type %}selected{%  else %}{% endif %} value="{{ i }}">{{ i }}</option>*/
/*                     {% endfor %}*/
/*                     <option  value="brasilian jiu jitsu">brasilian jiu jitsu</option>*/
/*                 </select>*/
/*             </div>*/
/*             <button type="submit" class="btn btn-primary">Search</button>*/
/*         </form>*/
/*         <hr>*/
/*             </form>*/
/*                   <div class="row">*/
/*                       <div class="col-xs-1">type</div>*/
/*                       <div class="col-xs-2">trainer name</div>*/
/*                       <div class="col-xs-1">PLN</div>*/
/*                       <div class="col-xs-1">lenght</div>*/
/*                       <div class="col-xs-1">district</div>*/
/*                       <div class="col-xs-1">city</div>*/
/*                       <div class="col-xs-1">distance</div>*/
/*                       <div class="col-xs-2">street</div>*/
/*                       <div class="col-xs-2">datetime</div>*/
/*                   </div>*/
/*                  <hr>*/
/*                     {% for j in categories %}*/
/*                     <div class="row">*/
/*                             <div class="col-xs-1">{{ j.training_type }}</div>*/
/*                             <div class="col-xs-2">{{ j.trainer_name }}</div>*/
/*                             <div class="col-xs-1">{{ j.training_price }}</div>*/
/*                             <div class="col-xs-1">{{ j.training_time }}</div>*/
/*                             <div class="col-xs-1">{{ j.training_district }}</div>*/
/*                             <div class="col-xs-1">{{ j.training_city }}</div>*/
/*                             <div class="col-xs-1">{{ j.training_distance }}</div>*/
/*                             <div class="col-xs-2">{{ j.training_street }}</div>*/
/*                             <div class="col-xs-2">{{ j.training_date|date('Y-m-d H:i:s') }}</div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                  <hr>*/
/*     </div>*/
/* {% endblock %}*/
/* */
