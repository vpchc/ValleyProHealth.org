<?php

/* @ClickHeat/view.twig */
class __TwigTemplate_d454686dea34b76c60f4ec5e54f73864cf7b73b01c2853f3d96464ca1823d838 extends Twig_Template
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
        echo "<link href=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "/styles/piwik.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "js/admin.js\"></script>
<div id=\"contenu\">
\t<span id=\"cleaner\"></span>
\t
\t<form action=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "index.php\" method=\"get\" onsubmit=\"return false;\" id=\"clickForm\">
\t<table cellpadding=\"0\" cellspacing=\"1\" border=\"0\" width=\"100%\">
\t<tr>
\t\t<th>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ClickHeat_LANG_GROUP")), "html", null, true);
        echo "</th>
\t\t<td><select name=\"group\" id=\"formGroup\" onchange=\"hideGroupLayout(); loadIframe();\">";
        // line 10
        echo (isset($context["clickheat_groups"]) ? $context["clickheat_groups"] : $this->getContext($context, "clickheat_groups"));
        echo "</select> <a href=\"#\" onclick=\"showGroupLayout(); return false;\"><img src=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "images/layout.png\" width=\"16\" height=\"16\" align=\"absmiddle\" alt=\"Layout\" /></a><a href=\"#\" onclick=\"updateHeatmap(); return false;\"><img src=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "images/reload.png\" width=\"16\" height=\"16\" align=\"absmiddle\" alt=\"Refresh\" /></a></td>
\t\t<th>";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ClickHeat_LANG_BROWSER")), "html", null, true);
        echo "</th>
\t\t<td><select name=\"browser\" id=\"formBrowser\" onchange=\"updateHeatmap();\">";
        // line 12
        echo (isset($context["clickheat_browsers"]) ? $context["clickheat_browsers"] : $this->getContext($context, "clickheat_browsers"));
        echo "</select></td>
\t\t<td rowspan=\"2\">";
        // line 13
        echo (isset($context["clickheat_menu"]) ? $context["clickheat_menu"] : $this->getContext($context, "clickheat_menu"));
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ClickHeat_LANG_HEATMAP")), "html", null, true);
        echo "</th><td><input type=\"checkbox\" id=\"formHeatmap\" name=\"heatmap\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_force_heatmap"]) ? $context["clickheat_force_heatmap"] : $this->getContext($context, "clickheat_force_heatmap")), "html", null, true);
        echo " onchange=\"updateHeatmap();\" /><span id=\"alphaSelector\"></span></td>
\t\t<th>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ClickHeat_LANG_SCREENSIZE")), "html", null, true);
        echo "</th><td><select name=\"screen\" id=\"formScreen\" onchange=\"resizeDiv(); updateHeatmap();\">";
        echo (isset($context["clickheat_screens"]) ? $context["clickheat_screens"] : $this->getContext($context, "clickheat_screens"));
        echo "</select></td>
\t</tr>
\t</table>
\t</form>
</div>
<div id=\"divPanel\" onmouseover=\"showPanel();\" onclick=\"hidePanel();\"><img src=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "images/arrow-up.png\" width=\"11\" height=\"6\" alt=\"\" /></div>
<div id=\"layoutDiv\"></div>
<div id=\"overflowDiv\">
\t<div id=\"pngDiv\"></div>
\t<p><iframe src=\"";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "clickempty.html\" id=\"webPageFrame\" onload=\"window.setTimeout('cleanIframe();', 2000);\" frameborder=\"0\" scrolling=\"no\" width=\"50\" height=\"0\"></iframe></p>
</div>
<script type=\"text/javascript\">
pleaseWait = '";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_loading"]) ? $context["clickheat_loading"] : $this->getContext($context, "clickheat_loading")), "html", null, true);
        echo "';
cleanerRunning = '";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_cleaner"]) ? $context["clickheat_cleaner"] : $this->getContext($context, "clickheat_cleaner")), "html", null, true);
        echo "';
isJsOkay = '<a href=\"#\" onclick=\"showJsCode(); return false;\">";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_jsokay"]) ? $context["clickheat_jsokay"] : $this->getContext($context, "clickheat_jsokay")), "html", null, true);
        echo "</a>';
jsAdminCookie = '";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_admincookie"]) ? $context["clickheat_admincookie"] : $this->getContext($context, "clickheat_admincookie")), "html", null, true);
        echo "';
hideIframes = ";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_iframes"]) ? $context["clickheat_iframes"] : $this->getContext($context, "clickheat_iframes")), "html", null, true);
        echo ";
hideFlashes = ";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_flashes"]) ? $context["clickheat_flashes"] : $this->getContext($context, "clickheat_flashes")), "html", null, true);
        echo ";
isPiwikModule = true;
scriptPath = '";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_host"]) ? $context["clickheat_host"] : $this->getContext($context, "clickheat_host")), "html", null, true);
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_path"]) ? $context["clickheat_path"] : $this->getContext($context, "clickheat_path")), "html", null, true);
        echo "';
scriptIndexPath = '";
        // line 37
        echo (isset($context["clickheat_index"]) ? $context["clickheat_index"] : $this->getContext($context, "clickheat_index"));
        echo "';
currentDate = [";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_day"]) ? $context["clickheat_day"] : $this->getContext($context, "clickheat_day")), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_month"]) ? $context["clickheat_month"] : $this->getContext($context, "clickheat_month")), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_year"]) ? $context["clickheat_year"] : $this->getContext($context, "clickheat_year")), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_day"]) ? $context["clickheat_day"] : $this->getContext($context, "clickheat_day")), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_month"]) ? $context["clickheat_month"] : $this->getContext($context, "clickheat_month")), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_year"]) ? $context["clickheat_year"] : $this->getContext($context, "clickheat_year")), "html", null, true);
        echo "];
currentRange = '";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_range"]) ? $context["clickheat_range"] : $this->getContext($context, "clickheat_range")), "html", null, true);
        echo "';
currentAlpha = ";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["clickheat_alpha"]) ? $context["clickheat_alpha"] : $this->getContext($context, "clickheat_alpha")), "html", null, true);
        echo ";
weekDays = new Array();

/** Draw the alpha selector */
drawAlphaSelector('alphaSelector', 30);

/** Resize the main div */
resizeDiv();

/** Load iframe (which will load the heatmap once the info is okay) */
loadIframe();

/** Run cleaner */
runCleaner();

updateHeatmap();
</script>
";
    }

    public function getTemplateName()
    {
        return "@ClickHeat/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 40,  140 => 39,  126 => 38,  122 => 37,  117 => 36,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  86 => 26,  79 => 22,  69 => 17,  63 => 16,  57 => 13,  53 => 12,  49 => 11,  41 => 10,  37 => 9,  31 => 6,  24 => 2,  19 => 1,);
    }
}
/* <link href="{{ clickheat_path }}/styles/piwik.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="{{ clickheat_path }}js/admin.js"></script>*/
/* <div id="contenu">*/
/* 	<span id="cleaner"></span>*/
/* 	*/
/* 	<form action="{{ clickheat_path }}index.php" method="get" onsubmit="return false;" id="clickForm">*/
/* 	<table cellpadding="0" cellspacing="1" border="0" width="100%">*/
/* 	<tr>*/
/* 		<th>{{ 'ClickHeat_LANG_GROUP' | translate }}</th>*/
/* 		<td><select name="group" id="formGroup" onchange="hideGroupLayout(); loadIframe();">{{ clickheat_groups | raw }}</select> <a href="#" onclick="showGroupLayout(); return false;"><img src="{{ clickheat_path }}images/layout.png" width="16" height="16" align="absmiddle" alt="Layout" /></a><a href="#" onclick="updateHeatmap(); return false;"><img src="{{ clickheat_path }}images/reload.png" width="16" height="16" align="absmiddle" alt="Refresh" /></a></td>*/
/* 		<th>{{ 'ClickHeat_LANG_BROWSER' | translate }}</th>*/
/* 		<td><select name="browser" id="formBrowser" onchange="updateHeatmap();">{{ clickheat_browsers | raw }}</select></td>*/
/* 		<td rowspan="2">{{ clickheat_menu  | raw }}</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<th>{{ 'ClickHeat_LANG_HEATMAP' | translate }}</th><td><input type="checkbox" id="formHeatmap" name="heatmap"{{ clickheat_force_heatmap }} onchange="updateHeatmap();" /><span id="alphaSelector"></span></td>*/
/* 		<th>{{ 'ClickHeat_LANG_SCREENSIZE' | translate }}</th><td><select name="screen" id="formScreen" onchange="resizeDiv(); updateHeatmap();">{{ clickheat_screens | raw }}</select></td>*/
/* 	</tr>*/
/* 	</table>*/
/* 	</form>*/
/* </div>*/
/* <div id="divPanel" onmouseover="showPanel();" onclick="hidePanel();"><img src="{{ clickheat_path }}images/arrow-up.png" width="11" height="6" alt="" /></div>*/
/* <div id="layoutDiv"></div>*/
/* <div id="overflowDiv">*/
/* 	<div id="pngDiv"></div>*/
/* 	<p><iframe src="{{ clickheat_path }}clickempty.html" id="webPageFrame" onload="window.setTimeout('cleanIframe();', 2000);" frameborder="0" scrolling="no" width="50" height="0"></iframe></p>*/
/* </div>*/
/* <script type="text/javascript">*/
/* pleaseWait = '{{ clickheat_loading }}';*/
/* cleanerRunning = '{{ clickheat_cleaner }}';*/
/* isJsOkay = '<a href="#" onclick="showJsCode(); return false;">{{ clickheat_jsokay }}</a>';*/
/* jsAdminCookie = '{{ clickheat_admincookie }}';*/
/* hideIframes = {{ clickheat_iframes }};*/
/* hideFlashes = {{ clickheat_flashes }};*/
/* isPiwikModule = true;*/
/* scriptPath = '{{ clickheat_host }}{{ clickheat_path }}';*/
/* scriptIndexPath = '{{ clickheat_index | raw }}';*/
/* currentDate = [{{ clickheat_day }}, {{ clickheat_month }}, {{ clickheat_year }}, {{ clickheat_day }}, {{ clickheat_month }}, {{ clickheat_year }}];*/
/* currentRange = '{{ clickheat_range }}';*/
/* currentAlpha = {{ clickheat_alpha }};*/
/* weekDays = new Array();*/
/* */
/* /** Draw the alpha selector *//* */
/* drawAlphaSelector('alphaSelector', 30);*/
/* */
/* /** Resize the main div *//* */
/* resizeDiv();*/
/* */
/* /** Load iframe (which will load the heatmap once the info is okay) *//* */
/* loadIframe();*/
/* */
/* /** Run cleaner *//* */
/* runCleaner();*/
/* */
/* updateHeatmap();*/
/* </script>*/
/* */
