<?php

/* @CorePluginsAdmin/marketplace/plugin-list.twig */
class __TwigTemplate_0295bff1ca69b8c983c4ca383502d8b87e6e977f25ce3713cbfa77eaa6b29089 extends Twig_Template
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
        echo "<div class=\"row marketplace-max-width\">

    ";
        // line 4
        echo "    ";
        if ( !(isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
            // line 5
            echo "        <div class=\"col-sm-12 clearfix\">

            <form action=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => ""))), "html", null, true);
            echo "\" method=\"post\" class=\"plugin-search\">
                <input value=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
            echo "\" placeholder=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, (isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins"))), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, lcfirst(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins"))), "html", null, true);
            echo "...\" type=\"text\" name=\"query\"/>
                <button type=\"submit\">";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
            echo "</button>
            </form>

            <ul class=\"nav nav-pills\">
                <li ";
            // line 13
            if (("popular" == (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")))) {
                echo "class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 14
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => "popular", "query" => ""))), "html", null, true);
            echo "\">
                        ";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_SortByPopular")), "html", null, true);
            echo "
                    </a>
                </li>
                <li ";
            // line 18
            if (("newest" == (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")))) {
                echo "class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => "newest", "query" => ""))), "html", null, true);
            echo "\">
                        ";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_SortByNewest")), "html", null, true);
            echo "
                    </a>
                </li>
                <li ";
            // line 23
            if (("alpha" == (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")))) {
                echo "class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => "alpha", "query" => ""))), "html", null, true);
            echo "\">
                        ";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_SortByAlpha")), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>

        </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 34
            echo "
        <div class=\"col-md-4\">
            <div class=\"panel plugin\">

                <div class=\"panel-heading\">
                    <h3 class=\"panel-title panel-title-block\" title=\"";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
            echo "\">
                        <a class=\"plugin-details\" href=\"#\" data-pluginName=\"";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "</a>
                    </h3>
                </div>

                <div class=\"panel-body\">
                    <p class=\"description\">
                        ";
            // line 46
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", array()), "html", null, true);
            echo "
                        <a class=\"more plugin-details\" href=\"#\" data-pluginName=\"";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
            echo "\">
                            &rsaquo; ";
            // line 48
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreLowerCase")), "html", null, true);
            echo "</a>
                    </p>

                    ";
            // line 51
            if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
                // line 52
                echo "                        ";
                // line 53
                echo "                        <a class=\"more plugin-details\" href=\"#\" data-pluginName=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "\">
                            <img title=\"";
                // line 54
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                echo "\"
                                 class=\"preview\" src=\"";
                // line 55
                echo \Piwik\piwik_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["plugin"], "screenshots", array())), "html", null, true);
                echo "?w=250&h=150\"/></a>
                    ";
            }
            // line 57
            echo "
                    <ul class=\"metadata\">
                        <li>
                            ";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", array()), "html", null, true);
            echo "
                            ";
            // line 61
            if ($this->getAttribute($context["plugin"], "canBeUpdated", array())) {
                // line 62
                echo "                                <a class=\"plugin-details update-available\" href=\"#\" data-pluginName=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "\" data-activePluginTab=\"changelog\"
                                   title=\"";
                // line 63
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginUpdateAvailable", $this->getAttribute($context["plugin"], "currentVersion", array()), $this->getAttribute($context["plugin"], "latestVersion", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 64
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NewVersion")), "html", null, true);
                echo "</a>
                            ";
            }
            // line 66
            echo "                        </li>
                        <li>";
            // line 67
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Updated")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "lastUpdated", array()), "html", null, true);
            echo "</li>
                        <li>";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Downloads")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "numDownloads", array()), "html", null, true);
            echo "</li>
                        <li>";
            // line 69
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Developer")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["pluginsMacro"]) ? $context["pluginsMacro"] : $this->getContext($context, "pluginsMacro")), "pluginDeveloper", array(0 => $this->getAttribute($context["plugin"], "owner", array())), "method"), "html", null, true);
            echo "</li>
                    </ul>
                </div>

                ";
            // line 73
            if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
                // line 74
                echo "                    <div class=\"panel-footer\" data-pluginName=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "\">
                        ";
                // line 75
                if (($this->getAttribute($context["plugin"], "canBeUpdated", array()) && (0 == twig_length_filter($this->env, $this->getAttribute($context["plugin"], "missingRequirements", array()))))) {
                    // line 76
                    echo "                            <a class=\"btn btn-block\"
                               href=\"";
                    // line 77
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute($context["plugin"], "name", array()), "nonce" => (isset($context["updateNonce"]) ? $context["updateNonce"] : $this->getContext($context, "updateNonce"))))), "html", null, true);
                    echo "\">
                                ";
                    // line 78
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
                    echo "
                            </a>
                        ";
                } elseif ($this->getAttribute(                // line 80
$context["plugin"], "isInstalled", array())) {
                    // line 81
                    echo "                            <button class=\"btn btn-noop btn-block\">
                                ";
                    // line 82
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                    echo "
                            </button>
                        ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute(                // line 84
$context["plugin"], "missingRequirements", array())) > 0)) {
                    // line 85
                    echo "                            <a class=\"btn btn-link btn-block plugin-details\" href=\"#\" data-pluginName=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                    echo "\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
                    echo "\">
                                ";
                    // line 86
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CannotInstall")), "html", null, true);
                    echo "
                            </a>
                        ";
                } else {
                    // line 89
                    echo "                            <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "installPlugin", "pluginName" => $this->getAttribute($context["plugin"], "name", array()), "nonce" => (isset($context["installNonce"]) ? $context["installNonce"] : $this->getContext($context, "installNonce"))))), "html", null, true);
                    echo "\"
                               class=\"btn btn-block\">
                                ";
                    // line 91
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionInstall")), "html", null, true);
                    echo "
                            </a>
                        ";
                }
                // line 94
                echo "                    </div>
                ";
            }
            // line 96
            echo "
            </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
    ";
        // line 102
        if ((twig_length_filter($this->env, (isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins"))) == 0)) {
            // line 103
            echo "        ";
            if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
                // line 104
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NoThemesFound")), "html", null, true);
                echo "
        ";
            } else {
                // line 106
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NoPluginsFound")), "html", null, true);
                echo "
        ";
            }
            // line 108
            echo "    ";
        }
        // line 109
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/marketplace/plugin-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 109,  309 => 108,  303 => 106,  297 => 104,  294 => 103,  292 => 102,  289 => 101,  279 => 96,  275 => 94,  269 => 91,  263 => 89,  257 => 86,  250 => 85,  248 => 84,  243 => 82,  240 => 81,  238 => 80,  233 => 78,  229 => 77,  226 => 76,  224 => 75,  219 => 74,  217 => 73,  208 => 69,  202 => 68,  196 => 67,  193 => 66,  188 => 64,  184 => 63,  179 => 62,  177 => 61,  171 => 60,  166 => 57,  161 => 55,  157 => 54,  152 => 53,  150 => 52,  148 => 51,  142 => 48,  136 => 47,  132 => 46,  121 => 40,  117 => 39,  110 => 34,  106 => 33,  103 => 32,  93 => 25,  89 => 24,  83 => 23,  77 => 20,  73 => 19,  67 => 18,  61 => 15,  57 => 14,  51 => 13,  44 => 9,  34 => 8,  30 => 7,  26 => 5,  23 => 4,  19 => 1,);
    }
}
/* <div class="row marketplace-max-width">*/
/* */
/*     {# Hide filters and search for themes because we don't have many of them #}*/
/*     {% if not showThemes %}*/
/*         <div class="col-sm-12 clearfix">*/
/* */
/*             <form action="{{ linkTo({'sort': ''}) }}" method="post" class="plugin-search">*/
/*                 <input value="{{ query }}" placeholder="{{ 'General_Search'|translate }} {{ plugins|length }} {{ 'General_Plugins'|translate|lcfirst }}..." type="text" name="query"/>*/
/*                 <button type="submit">{{ 'General_Search'|translate }}</button>*/
/*             </form>*/
/* */
/*             <ul class="nav nav-pills">*/
/*                 <li {% if 'popular' == sort %}class="active"{% endif %}>*/
/*                     <a href="{{ linkTo({'sort': 'popular', 'query': ''}) }}">*/
/*                         {{ 'CorePluginsAdmin_SortByPopular'|translate }}*/
/*                     </a>*/
/*                 </li>*/
/*                 <li {% if 'newest' == sort %}class="active"{% endif %}>*/
/*                     <a href="{{ linkTo({'sort': 'newest', 'query': ''}) }}">*/
/*                         {{ 'CorePluginsAdmin_SortByNewest'|translate }}*/
/*                     </a>*/
/*                 </li>*/
/*                 <li {% if 'alpha' == sort %}class="active"{% endif %}>*/
/*                     <a href="{{ linkTo({'sort': 'alpha', 'query': ''}) }}">*/
/*                         {{ 'CorePluginsAdmin_SortByAlpha'|translate }}*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% for plugin in plugins %}*/
/* */
/*         <div class="col-md-4">*/
/*             <div class="panel plugin">*/
/* */
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title panel-title-block" title="{{ 'General_MoreDetails'|translate }}">*/
/*                         <a class="plugin-details" href="#" data-pluginName="{{ plugin.name }}">{{ plugin.name }}</a>*/
/*                     </h3>*/
/*                 </div>*/
/* */
/*                 <div class="panel-body">*/
/*                     <p class="description">*/
/*                         {{ plugin.description }}*/
/*                         <a class="more plugin-details" href="#" data-pluginName="{{ plugin.name }}" title="{{ 'General_MoreDetails'|translate }}">*/
/*                             &rsaquo; {{ 'General_MoreLowerCase'|translate }}</a>*/
/*                     </p>*/
/* */
/*                     {% if showThemes %}*/
/*                         {# Screenshot for themes #}*/
/*                         <a class="more plugin-details" href="#" data-pluginName="{{ plugin.name }}">*/
/*                             <img title="{{ 'General_MoreDetails'|translate }}"*/
/*                                  class="preview" src="{{ plugin.screenshots|first }}?w=250&h=150"/></a>*/
/*                     {% endif %}*/
/* */
/*                     <ul class="metadata">*/
/*                         <li>*/
/*                             {{ 'CorePluginsAdmin_Version'|translate }}: {{ plugin.latestVersion }}*/
/*                             {% if plugin.canBeUpdated %}*/
/*                                 <a class="plugin-details update-available" href="#" data-pluginName="{{ plugin.name }}" data-activePluginTab="changelog"*/
/*                                    title="{{ 'CorePluginsAdmin_PluginUpdateAvailable'|translate(plugin.currentVersion, plugin.latestVersion) }}">*/
/*                                     {{ 'CorePluginsAdmin_NewVersion'|translate }}</a>*/
/*                             {% endif %}*/
/*                         </li>*/
/*                         <li>{{ 'CorePluginsAdmin_Updated'|translate }}: {{ plugin.lastUpdated }}</li>*/
/*                         <li>{{ 'General_Downloads'|translate }}: {{ plugin.numDownloads }}</li>*/
/*                         <li>{{ 'CorePluginsAdmin_Developer'|translate }}: {{ pluginsMacro.pluginDeveloper(plugin.owner) }}</li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 {% if isSuperUser %}*/
/*                     <div class="panel-footer" data-pluginName="{{ plugin.name }}">*/
/*                         {% if plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}*/
/*                             <a class="btn btn-block"*/
/*                                href="{{ linkTo({'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}">*/
/*                                 {{ 'CoreUpdater_UpdateTitle'|translate }}*/
/*                             </a>*/
/*                         {% elseif plugin.isInstalled %}*/
/*                             <button class="btn btn-noop btn-block">*/
/*                                 {{ 'General_Installed'|translate }}*/
/*                             </button>*/
/*                         {% elseif plugin.missingRequirements|length > 0 %}*/
/*                             <a class="btn btn-link btn-block plugin-details" href="#" data-pluginName="{{ plugin.name }}" title="{{ 'General_MoreDetails'|translate }}">*/
/*                                 {{ 'CorePluginsAdmin_CannotInstall'|translate }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <a href="{{ linkTo({'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}"*/
/*                                class="btn btn-block">*/
/*                                 {{ 'CorePluginsAdmin_ActionInstall'|translate }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/*     {% if plugins|length == 0 %}*/
/*         {% if showThemes %}*/
/*             {{ 'CorePluginsAdmin_NoThemesFound'|translate }}*/
/*         {% else %}*/
/*             {{ 'CorePluginsAdmin_NoPluginsFound'|translate }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/* </div>*/
/* */
