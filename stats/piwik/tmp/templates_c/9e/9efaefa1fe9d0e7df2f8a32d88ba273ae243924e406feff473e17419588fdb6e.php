<?php

/* @Referrers/allReferrers.twig */
class __TwigTemplate_6e7ccfdf8fc4d531f0f03fff8f7e02224810dcd7867d68ca4619eaa2296054b9 extends Twig_Template
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
        echo "<h2 piwik-enriched-headline>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_ReferrerTypes")), "html", null, true);
        echo "</h2>
";
        // line 2
        echo (isset($context["dataTableReferrerType"]) ? $context["dataTableReferrerType"] : $this->getContext($context, "dataTableReferrerType"));
        echo "

<div style=\"clear:both;\"></div>

";
        // line 6
        if (((isset($context["totalVisits"]) ? $context["totalVisits"] : $this->getContext($context, "totalVisits")) > 0)) {
            // line 7
            echo "    <h2 piwik-enriched-headline>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Referrers")), "html", null, true);
            echo "</h2>
    ";
            // line 8
            echo (isset($context["referrersReportsByDimension"]) ? $context["referrersReportsByDimension"] : $this->getContext($context, "referrersReportsByDimension"));
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("_sparklineFooter.twig", "@Referrers/allReferrers.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "@Referrers/allReferrers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,  38 => 8,  33 => 7,  31 => 6,  24 => 2,  19 => 1,);
    }
}
/* <h2 piwik-enriched-headline>{{ 'Referrers_ReferrerTypes'|translate }}</h2>*/
/* {{ dataTableReferrerType|raw }}*/
/* */
/* <div style="clear:both;"></div>*/
/* */
/* {% if totalVisits > 0 %}*/
/*     <h2 piwik-enriched-headline>{{ 'Referrers_Referrers'|translate }}</h2>*/
/*     {{ referrersReportsByDimension|raw }}*/
/* {% endif %}*/
/* */
/* {% include "_sparklineFooter.twig" %}*/
/* */
