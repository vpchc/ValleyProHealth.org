<?php

/* @BotTracker/config.twig */
class __TwigTemplate_cc278c53af52e2c3c041be8e7808e6ed70444f8883ace1b5159aeed037f83562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@BotTracker/config.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["piwik"] = $this->loadTemplate("macros.twig", "@BotTracker/config.twig", 4);
        // line 5
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 6
            echo "
\t<h2>";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Config")), "html", null, true);
            echo "</h2>
\t<p>";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_PluginDescription")), "html", null, true);
            echo "</p>

\t<div id=\"sites\">
\t\t<div id=\"label\" style=\"float:left;margin-top:10px\">";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChooseWebsite")), "html", null, true);
            echo " : </div>
\t\t<div id=\"selectID\" style=\"display:inline;\">
\t\t<form method=\"post\" action=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "BotTracker", "action" => "config_reload"))), "html", null, true);
            echo "\" id=\"accessSites\">
\t\t\t<select style=\"width: 200px\" id=\"siteID\" name=\"siteID\" onchange=\"this.form.submit()\">
\t\t   \t ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitesList"]) ? $context["sitesList"] : $this->getContext($context, "sitesList")));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 16
                echo "\t\t      \t  <option value=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["site"], "idsite", array()), "html", null, true);
                echo "\" ";
                if (((isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")) == $this->getAttribute($context["site"], "idsite", array()))) {
                    echo "selected";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["site"], "name", array()), "html", null, true);
                echo "</option>
\t\t    \t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</select>
\t\t</form>
\t\t</div>
\t\t<div id=\"button\" style=\"display:inline;\" >
\t\t\t<form method=\"post\" action=\"";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("action" => "config_insert_db", "token_auth" => (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth"))))), "html", null, true);
            echo "\" id=\"dbButton\">
\t\t\t\t<input type=\"hidden\" value=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
            echo "\" name=\"siteID\" />
\t\t\t\t<input type=\"submit\" value=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_insert_db")), "html", null, true);
            echo " (38)\" name=\"submit\" class=\"submit\" />
\t\t\t</form>
\t\t</div>
\t</div>
\t<br>
\t<br>
   ";
            // line 30
            if ((twig_length_filter($this->env, (isset($context["errorList"]) ? $context["errorList"] : $this->getContext($context, "errorList"))) >= 1)) {
                // line 31
                echo "\t\t<div id=\"messages\">
\t\t   ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : $this->getContext($context, "errorList")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 33
                    echo "\t\t\t\t<font size=+2 color=#ff0000>";
                    echo \Piwik\piwik_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "<br></font>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "\t\t<br>
\t\t<br>
\t\t<div>
   ";
            }
            // line 39
            echo "   
   \t<font size=+2>";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_NoOfActiveBots")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, (isset($context["botList"]) ? $context["botList"] : $this->getContext($context, "botList"))), "html", null, true);
            echo " <br><br></font>
\t<form method=\"POST\" action=\"";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "BotTracker", "action" => "saveConfig"))), "html", null, true);
            echo "\">
\t
\t<table class=\"adminTable\" style=\"width: 700px;\">
\t<tr><th style=\"text-align: left; padding: 0px 5px;\">BotID</th>
\t    <th style=\"text-align: left; padding: 0px 5px;\">Side ID</th>
\t    <th style=\"text-align: left; padding: 0px 5px;\">";
            // line 46
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_BotActive")), "html", null, true);
            echo "</th>
\t    <th style=\"text-align: left; padding: 0px 5px;\">";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_ExtraStats")), "html", null, true);
            echo "</th>
\t    <th style=\"text-align: left; padding: 0px 5px;\">";
            // line 48
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_BotName")), "html", null, true);
            echo "</th>
\t    <th style=\"text-align: left; padding: 0px 5px;\">";
            // line 49
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_BotKeyword")), "html", null, true);
            echo "</th>
\t    <th style=\"text-align: left; padding: 0px 5px;\"></th>
\t</tr>    
\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["botList"]) ? $context["botList"] : $this->getContext($context, "botList")));
            foreach ($context['_seq'] as $context["_key"] => $context["bot"]) {
                // line 53
                echo "\t\t<tr>
\t       <td>";
                // line 54
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botId", array()), "html", null, true);
                echo "</td>
\t       <td>";
                // line 55
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "idsite", array()), "html", null, true);
                echo "</td>
\t       <td><input type=\"checkbox\" name=\"";
                // line 56
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botId", array()), "html", null, true);
                echo "_botActive\" value=\"1\" ";
                if (($this->getAttribute($context["bot"], "botActive", array()) == 1)) {
                    echo "checked";
                }
                echo "></td>
\t       <td><input type=\"checkbox\" name=\"";
                // line 57
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botId", array()), "html", null, true);
                echo "_extraStats\" value=\"1\" ";
                if (($this->getAttribute($context["bot"], "extra_stats", array()) == 1)) {
                    echo "checked";
                }
                echo "></td>
\t\t  <td><input type=\"text\" size=\"30\" value=\"";
                // line 58
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botName", array()), "html", null, true);
                echo "\" name=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botId", array()), "html", null, true);
                echo "_botName\"/></td>
\t\t  <td><input type=\"text\" size=\"32\" maxlength=\"32\" value=\"";
                // line 59
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botKeyword", array()), "html", null, true);
                echo "\" name=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["bot"], "botId", array()), "html", null, true);
                echo "_botKeyword\"/></td>
\t\t  <td><a href='";
                // line 60
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "BotTracker", "action" => "deleteBotEntry", "idSite" => (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "botId" => $this->getAttribute($context["bot"], "botId", array())))), "html", null, true);
                echo "'><img src='plugins/BotTracker/images/delete.png' title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_delete")), "html", null, true);
                echo "\" border=\"0\"/></a></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t
\t
\t\t<tr>
\t     <td>new</td>
\t     <td>";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
            echo "</td>
\t     <td><input type=\"checkbox\" name=\"new_botActive\" value=\"1\"></td>
\t     <td><input type=\"checkbox\" name=\"new_extraStats\" value=\"1\"></td>
\t\t<td><input type=\"text\" size=\"30\" name=\"new_botName\"/></td>
\t\t<td><input type=\"text\" size=\"32\" maxlength=\"32\" name=\"new_botKeyword\"/></td>
\t\t</tr>
\t
\t</table>\t

\t<input type=\"hidden\" value=\"";
            // line 75
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
            echo "\" name=\"token_auth\" />
\t<input type=\"hidden\" value=\"";
            // line 76
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
            echo "\" name=\"form_nonce\" />
\t<input type=\"hidden\" value=\"";
            // line 77
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
            echo "\" name=\"siteID\" />
\t
\t<input type=\"submit\" value=\"";
            // line 79
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_save_changes")), "html", null, true);
            echo "\" name=\"submit\" class=\"submit\" />
\t</form>

\t<script language=\"JavaScript\" type=\"text/javascript\">
\t<!--
\t\tfunction show_text(div) {
\t\t\twith(document.getElementById(div).style){
\t   \t\t\tif(display==\"none\"){
     \t\t\t\t\tdisplay=\"inline\";
   \t\t\t\t} else {
     \t\t\t\t\tdisplay=\"none\";
   \t\t\t\t}
   \t\t\t}
\t\t}
\t//-->
\t</script>

\t<form enctype=\"multipart/form-data\" action=\"";
            // line 96
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "BotTracker", "action" => "config_import"))), "html", null, true);
            echo "\" method=\"POST\">
 \t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"50000\" />
\t    ";
            // line 98
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Importfile")), "html", null, true);
            echo "[<a href=\"#\" onClick=\"show_text('helptext'); return false;\">?</a>]: <input name=\"importfile\" type=\"file\" />
 \t\t<input type=\"submit\" value=\"";
            // line 99
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_send_file")), "html", null, true);
            echo "\" />
\t</form>

   \t<div id=\"helptext\" style=\"display:none;\">
   \t<font size=+2 color=#0000ff><b>";
            // line 103
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Import_help_headline")), "html", null, true);
            echo "</b><br>
   \t<p style=\"font-family:monospace;\">";
            // line 104
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Import_help_format")), "html", null, true);
            echo "</p>
   \t<ul>
   \t\t<li>";
            // line 106
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Import_help_line1")), "html", null, true);
            echo "</li>
   \t\t<li>";
            // line 107
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Import_help_line2")), "html", null, true);
            echo "</li>
   \t\t<li>";
            // line 108
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("BotTracker_Import_help_line3")), "html", null, true);
            echo "</li>
   \t</ul>
\t</div>


    
";
        }
        // line 115
        echo "
";
    }

    public function getTemplateName()
    {
        return "@BotTracker/config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 115,  297 => 108,  293 => 107,  289 => 106,  284 => 104,  280 => 103,  273 => 99,  269 => 98,  264 => 96,  244 => 79,  239 => 77,  235 => 76,  231 => 75,  219 => 66,  213 => 62,  202 => 60,  196 => 59,  190 => 58,  182 => 57,  174 => 56,  170 => 55,  166 => 54,  163 => 53,  159 => 52,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  133 => 41,  127 => 40,  124 => 39,  118 => 35,  109 => 33,  105 => 32,  102 => 31,  100 => 30,  91 => 24,  87 => 23,  83 => 22,  77 => 18,  62 => 16,  58 => 15,  53 => 13,  48 => 11,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.twig' %}*/
/* */
/* {% block content %}*/
/* {% import 'macros.twig' as piwik %}*/
/* {% if isSuperUser %}*/
/* */
/* 	<h2>{{'BotTracker_Config'|translate}}</h2>*/
/* 	<p>{{'BotTracker_PluginDescription'|translate}}</p>*/
/* */
/* 	<div id="sites">*/
/* 		<div id="label" style="float:left;margin-top:10px">{{'General_ChooseWebsite'|translate}} : </div>*/
/* 		<div id="selectID" style="display:inline;">*/
/* 		<form method="post" action="{{ linkTo({'module':'BotTracker','action':'config_reload'})}}" id="accessSites">*/
/* 			<select style="width: 200px" id="siteID" name="siteID" onchange="this.form.submit()">*/
/* 		   	 {% for site in sitesList %}*/
/* 		      	  <option value="{{site.idsite}}" {% if idSite == site.idsite %}selected{% endif %}>{{site.name}}</option>*/
/* 		    	 {% endfor %}*/
/* 			</select>*/
/* 		</form>*/
/* 		</div>*/
/* 		<div id="button" style="display:inline;" >*/
/* 			<form method="post" action="{{ {'action':'config_insert_db', 'token_auth':token_auth} | urlRewriteWithParameters }}" id="dbButton">*/
/* 				<input type="hidden" value="{{ idSite }}" name="siteID" />*/
/* 				<input type="submit" value="{{'BotTracker_insert_db'|translate}} (38)" name="submit" class="submit" />*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* 	<br>*/
/* 	<br>*/
/*    {% if errorList|length >= 1 %}*/
/* 		<div id="messages">*/
/* 		   {% for error in errorList %}*/
/* 				<font size=+2 color=#ff0000>{{error}}<br></font>*/
/* 			{% endfor %}*/
/* 		<br>*/
/* 		<br>*/
/* 		<div>*/
/*    {% endif %}*/
/*    */
/*    	<font size=+2>{{'BotTracker_NoOfActiveBots'|translate}}: {{botList|length}} <br><br></font>*/
/* 	<form method="POST" action="{{ linkTo({'module':'BotTracker','action':'saveConfig'}) }}">*/
/* 	*/
/* 	<table class="adminTable" style="width: 700px;">*/
/* 	<tr><th style="text-align: left; padding: 0px 5px;">BotID</th>*/
/* 	    <th style="text-align: left; padding: 0px 5px;">Side ID</th>*/
/* 	    <th style="text-align: left; padding: 0px 5px;">{{'BotTracker_BotActive'|translate}}</th>*/
/* 	    <th style="text-align: left; padding: 0px 5px;">{{'BotTracker_ExtraStats'|translate}}</th>*/
/* 	    <th style="text-align: left; padding: 0px 5px;">{{'BotTracker_BotName'|translate}}</th>*/
/* 	    <th style="text-align: left; padding: 0px 5px;">{{'BotTracker_BotKeyword'|translate}}</th>*/
/* 	    <th style="text-align: left; padding: 0px 5px;"></th>*/
/* 	</tr>    */
/* 	{% for bot in botList %}*/
/* 		<tr>*/
/* 	       <td>{{bot.botId}}</td>*/
/* 	       <td>{{bot.idsite}}</td>*/
/* 	       <td><input type="checkbox" name="{{bot.botId}}_botActive" value="1" {% if (bot.botActive == 1) %}checked{% endif %}></td>*/
/* 	       <td><input type="checkbox" name="{{bot.botId}}_extraStats" value="1" {% if (bot.extra_stats == 1) %}checked{% endif %}></td>*/
/* 		  <td><input type="text" size="30" value="{{bot.botName}}" name="{{bot.botId}}_botName"/></td>*/
/* 		  <td><input type="text" size="32" maxlength="32" value="{{bot.botKeyword}}" name="{{bot.botId}}_botKeyword"/></td>*/
/* 		  <td><a href='{{ linkTo({'module':'BotTracker','action':'deleteBotEntry', 'idSite':idSite, 'botId':bot.botId}) }}'><img src='plugins/BotTracker/images/delete.png' title="{{'BotTracker_delete'|translate}}" border="0"/></a></td>*/
/* 		</tr>*/
/* 	{% endfor %}	*/
/* 	*/
/* 		<tr>*/
/* 	     <td>new</td>*/
/* 	     <td>{{idSite}}</td>*/
/* 	     <td><input type="checkbox" name="new_botActive" value="1"></td>*/
/* 	     <td><input type="checkbox" name="new_extraStats" value="1"></td>*/
/* 		<td><input type="text" size="30" name="new_botName"/></td>*/
/* 		<td><input type="text" size="32" maxlength="32" name="new_botKeyword"/></td>*/
/* 		</tr>*/
/* 	*/
/* 	</table>	*/
/* */
/* 	<input type="hidden" value="{{token_auth}}" name="token_auth" />*/
/* 	<input type="hidden" value="{{nonce}}" name="form_nonce" />*/
/* 	<input type="hidden" value="{{idSite}}" name="siteID" />*/
/* 	*/
/* 	<input type="submit" value="{{'BotTracker_save_changes'|translate}}" name="submit" class="submit" />*/
/* 	</form>*/
/* */
/* 	<script language="JavaScript" type="text/javascript">*/
/* 	<!--*/
/* 		function show_text(div) {*/
/* 			with(document.getElementById(div).style){*/
/* 	   			if(display=="none"){*/
/*      					display="inline";*/
/*    				} else {*/
/*      					display="none";*/
/*    				}*/
/*    			}*/
/* 		}*/
/* 	//-->*/
/* 	</script>*/
/* */
/* 	<form enctype="multipart/form-data" action="{{ linkTo({'module':'BotTracker','action':'config_import'})}}" method="POST">*/
/*  		<input type="hidden" name="MAX_FILE_SIZE" value="50000" />*/
/* 	    {{'BotTracker_Importfile'|translate}}[<a href="#" onClick="show_text('helptext'); return false;">?</a>]: <input name="importfile" type="file" />*/
/*  		<input type="submit" value="{{'BotTracker_send_file'|translate}}" />*/
/* 	</form>*/
/* */
/*    	<div id="helptext" style="display:none;">*/
/*    	<font size=+2 color=#0000ff><b>{{'BotTracker_Import_help_headline'|translate}}</b><br>*/
/*    	<p style="font-family:monospace;">{{'BotTracker_Import_help_format'|translate}}</p>*/
/*    	<ul>*/
/*    		<li>{{'BotTracker_Import_help_line1'|translate}}</li>*/
/*    		<li>{{'BotTracker_Import_help_line2'|translate}}</li>*/
/*    		<li>{{'BotTracker_Import_help_line3'|translate}}</li>*/
/*    	</ul>*/
/* 	</div>*/
/* */
/* */
/*     */
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
