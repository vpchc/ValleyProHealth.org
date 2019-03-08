<?php

/* @Overlay/index.twig */
class __TwigTemplate_b82de33c9ebfe869354b6209653ec02b3486b0cc42ec5909a78ec915423196f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@Overlay/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"plugins/Overlay/javascripts/Piwik_Overlay.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Overlay/stylesheets/overlay.css\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"overlay-sidebar-container\">
        <a id=\"overlayTitle\" href=\"http://piwik.org/docs/page-overlay/\" rel=\"noreferrer\" target=\"_blank\">
            ";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_Overlay")), "html", null, true);
        echo "
            <span class=\"icon-help\"></span>
        </a>

        <div id=\"overlayDateRangeSelection\">
            <select id=\"overlayDateRangeSelect\" name=\"overlayDateRangeSelect\">
                <option value=\"day;today\">";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_Today")), "html", null, true);
        echo "</option>
                <option value=\"day;yesterday\">";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Intl_Yesterday")), "html", null, true);
        echo "</option>
                <option value=\"week;today\">";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_CurrentWeek")), "html", null, true);
        echo "</option>
                <option value=\"month;today\">";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_CurrentMonth")), "html", null, true);
        echo "</option>
                <option value=\"year;today\">";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_CurrentYear")), "html", null, true);
        echo "</option>
            </select>
        </div>

        <div id=\"overlayErrorNotLoading\">
            <p>
                <span>";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_ErrorNotLoading")), "html", null, true);
        echo "</span>
            </p>

            <p>
                ";
        // line 32
        if ((isset($context["ssl"]) ? $context["ssl"] : $this->getContext($context, "ssl"))) {
            // line 33
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_ErrorNotLoadingDetailsSSL")), "html", null, true);
            echo "
                ";
        } else {
            // line 35
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_ErrorNotLoadingDetails")), "html", null, true);
            echo "
                ";
        }
        // line 37
        echo "            </p>

            <p>
                <a href=\"http://piwik.org/docs/page-overlay/#toc-page-overlay-troubleshooting\" rel=\"noreferrer\"  target=\"_blank\">
                    ";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_ErrorNotLoadingLink")), "html", null, true);
        echo "
                </a>
            </p>
        </div>

        <div id=\"overlayLocation\">&nbsp;</div>

        <div id=\"overlayLoading\">";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Loading")), "html", null, true);
        echo "</div>

        <div id=\"overlaySidebar\"></div>

        <a id=\"overlayRowEvolution\">";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RowEvolutionRowActionTooltipTitle")), "html", null, true);
        echo "</a>
        <a id=\"overlayTransitions\">";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TransitionsRowActionTooltipTitle")), "html", null, true);
        echo "</a>
        <a id=\"overlaySegmentedVisitorLog\">";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_RowActionTooltipTitle")), "html", null, true);
        echo "</a>
    </div>

    <div id=\"overlayMain\">
        <iframe id=\"overlayIframe\" src=\"\" frameborder=\"0\"></iframe>
    </div>

    <script type=\"text/javascript\">
        broadcast._isInit = true;
        \$(function () {
            var iframeSrc = 'index.php?module=Overlay&action=startOverlaySession&idSite=";
        // line 64
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
        echo "&period=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "html", null, true);
        echo "&date=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["rawDate"]) ? $context["rawDate"] : $this->getContext($context, "rawDate")), "html", null, true);
        echo "&segment=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "html", null, true);
        echo "';
            Piwik_Overlay.init(iframeSrc, '";
        // line 65
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
        echo "', '";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "html", null, true);
        echo "', '";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["rawDate"]) ? $context["rawDate"] : $this->getContext($context, "rawDate")), "html", null, true);
        echo "', '";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "html", null, true);
        echo "');

            window.Piwik_Overlay_Translations = {
                domain: \"";
        // line 68
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Overlay_Domain")), "html", null, true);
        echo "\"
            };
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Overlay/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 68,  157 => 65,  147 => 64,  134 => 54,  130 => 53,  126 => 52,  119 => 48,  109 => 41,  103 => 37,  97 => 35,  91 => 33,  89 => 32,  82 => 28,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  48 => 12,  44 => 10,  41 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'dashboard.twig' %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="plugins/Overlay/javascripts/Piwik_Overlay.js"></script>*/
/*     <link rel="stylesheet" type="text/css" href="plugins/Overlay/stylesheets/overlay.css" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="overlay-sidebar-container">*/
/*         <a id="overlayTitle" href="http://piwik.org/docs/page-overlay/" rel="noreferrer" target="_blank">*/
/*             {{ 'Overlay_Overlay'|translate }}*/
/*             <span class="icon-help"></span>*/
/*         </a>*/
/* */
/*         <div id="overlayDateRangeSelection">*/
/*             <select id="overlayDateRangeSelect" name="overlayDateRangeSelect">*/
/*                 <option value="day;today">{{ 'Intl_Today'|translate }}</option>*/
/*                 <option value="day;yesterday">{{ 'Intl_Yesterday'|translate }}</option>*/
/*                 <option value="week;today">{{ 'General_CurrentWeek'|translate }}</option>*/
/*                 <option value="month;today">{{ 'General_CurrentMonth'|translate }}</option>*/
/*                 <option value="year;today">{{ 'General_CurrentYear'|translate }}</option>*/
/*             </select>*/
/*         </div>*/
/* */
/*         <div id="overlayErrorNotLoading">*/
/*             <p>*/
/*                 <span>{{ 'Overlay_ErrorNotLoading'|translate }}</span>*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {% if ssl %}*/
/*                     {{ 'Overlay_ErrorNotLoadingDetailsSSL'|translate }}*/
/*                 {% else %}*/
/*                     {{ 'Overlay_ErrorNotLoadingDetails'|translate }}*/
/*                 {% endif %}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 <a href="http://piwik.org/docs/page-overlay/#toc-page-overlay-troubleshooting" rel="noreferrer"  target="_blank">*/
/*                     {{ 'Overlay_ErrorNotLoadingLink'|translate }}*/
/*                 </a>*/
/*             </p>*/
/*         </div>*/
/* */
/*         <div id="overlayLocation">&nbsp;</div>*/
/* */
/*         <div id="overlayLoading">{{ 'General_Loading'|translate }}</div>*/
/* */
/*         <div id="overlaySidebar"></div>*/
/* */
/*         <a id="overlayRowEvolution">{{ 'General_RowEvolutionRowActionTooltipTitle'|translate }}</a>*/
/*         <a id="overlayTransitions">{{ 'General_TransitionsRowActionTooltipTitle'|translate }}</a>*/
/*         <a id="overlaySegmentedVisitorLog">{{ 'Live_RowActionTooltipTitle'|translate }}</a>*/
/*     </div>*/
/* */
/*     <div id="overlayMain">*/
/*         <iframe id="overlayIframe" src="" frameborder="0"></iframe>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         broadcast._isInit = true;*/
/*         $(function () {*/
/*             var iframeSrc = 'index.php?module=Overlay&action=startOverlaySession&idSite={{ idSite }}&period={{ period }}&date={{ rawDate }}&segment={{ segment }}';*/
/*             Piwik_Overlay.init(iframeSrc, '{{ idSite }}', '{{ period }}', '{{ rawDate }}', '{{ segment }}');*/
/* */
/*             window.Piwik_Overlay_Translations = {*/
/*                 domain: "{{ 'Overlay_Domain'|translate }}"*/
/*             };*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
