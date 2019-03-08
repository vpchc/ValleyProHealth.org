<?php

/* @Overlay/renderSidebar.twig */
class __TwigTemplate_cb1e0a3fcb5b7ae3f2ca3ed5862becc0527908f95d5e0718050d714854dc8056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div> <!-- Wrapper is needed that the html can be jqueryfied -->

    <!-- This div is removed by JS and the content is put in the location div -->
    <div class=\"overlayLocation\">
        <strong>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_Location")), "html", null, true);
        echo ":</strong>
\t\t<span data-normalized-url=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["normalizedUrl"]) ? $context["normalizedUrl"] : $this->getContext($context, "normalizedUrl")), "html", null, true);
        echo "\" data-label=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "\">
\t\t\t";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "
\t\t</span>
    </div>

    <div class=\"overlaySegment\">
        <strong>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Segment")), "html", null, true);
        echo ":</strong>
        <span>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["segmentDescription"]) ? $context["segmentDescription"] : $this->getContext($context, "segmentDescription")), "html", null, true);
        echo "</span>
    </div>

    ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) > 0)) {
            // line 17
            echo "        <h2 class=\"overlayMainMetrics\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MainMetrics")), "html", null, true);
            echo "</h2>
        <ul class=\"overlayMetrics\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                // line 20
                echo "            <li class=\"overlayMetric\">
                <span class=\"overlayMetricValue\">";
                // line 21
                echo $this->getAttribute($context["metric"], "value", array());
                echo "</span> ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["metric"], "name", array()), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
        <input type=\"hidden\" value=\"";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "html", null, true);
            echo "\" id=\"segment\" />
    ";
        } else {
            // line 27
            echo "        <!-- note: the class overlayNoData is used in Piwik_Overlay.js -->
        <div class=\"overlayNoData\">";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_NoData")), "html", null, true);
            echo "</div>
    ";
        }
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Overlay/renderSidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  90 => 28,  87 => 27,  82 => 25,  79 => 24,  68 => 21,  65 => 20,  61 => 19,  55 => 17,  53 => 16,  47 => 13,  43 => 12,  35 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div> <!-- Wrapper is needed that the html can be jqueryfied -->*/
/* */
/*     <!-- This div is removed by JS and the content is put in the location div -->*/
/*     <div class="overlayLocation">*/
/*         <strong>{{ 'Overlay_Location'|translate }}:</strong>*/
/* 		<span data-normalized-url="{{ normalizedUrl }}" data-label="{{ label }}">*/
/* 			{{ location }}*/
/* 		</span>*/
/*     </div>*/
/* */
/*     <div class="overlaySegment">*/
/*         <strong>{{ 'General_Segment'|translate }}:</strong>*/
/*         <span>{{ segmentDescription }}</span>*/
/*     </div>*/
/* */
/*     {% if data|length > 0 %}*/
/*         <h2 class="overlayMainMetrics">{{ 'General_MainMetrics'|translate }}</h2>*/
/*         <ul class="overlayMetrics">*/
/*         {% for metric in data %}*/
/*             <li class="overlayMetric">*/
/*                 <span class="overlayMetricValue">{{ metric.value|raw }}</span> {{ metric.name }}*/
/*             </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*         <input type="hidden" value="{{ segment }}" id="segment" />*/
/*     {% else %}*/
/*         <!-- note: the class overlayNoData is used in Piwik_Overlay.js -->*/
/*         <div class="overlayNoData">{{ 'Overlay_NoData'|translate }}</div>*/
/*     {% endif %}*/
/* </div>*/
