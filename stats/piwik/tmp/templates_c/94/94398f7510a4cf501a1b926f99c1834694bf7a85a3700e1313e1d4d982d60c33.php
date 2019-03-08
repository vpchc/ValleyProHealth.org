<?php

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_279820e90f3fa54baba4f8f9c9914a129be872ed205724daaac7ddbd0954c1ca extends Twig_Template
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
        // line 54
        echo "
";
        // line 58
        echo "
";
        // line 65
        echo "
";
        // line 95
        echo "
";
        // line 109
        echo "
";
        // line 128
        echo "
";
    }

    // line 1
    public function gettablePluginUpdates($__pluginsHavingUpdate__ = null, $__nonce__ = null, $__isTheme__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsHavingUpdate" => $__pluginsHavingUpdate__,
            "nonce" => $__nonce__,
            "isTheme" => $__isTheme__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    <div class='entityContainer'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr>
                <th>";
            // line 7
            if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
                <th class=\"num\">";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo "</th>
                <th>";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
                <th class=\"status\">";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
                <th class=\"action-links\">";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody id=\"plugins\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 16
                echo "                <tr ";
                if ((($this->getAttribute($context["plugin"], "isActivated", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["plugin"], "isActivated", array()), false)) : (false))) {
                    echo "class=\"active-plugin\"";
                } else {
                    echo "class=\"inactive-plugin\"";
                }
                echo ">
                    <td class=\"name\">
                        <a href=\"javascript:void(0);\" data-pluginName=\"";
                // line 18
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html_attr");
                echo "\" class=\"plugin-details\">
                            ";
                // line 19
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"vers\">
                        ";
                // line 23
                if ($this->getAttribute($context["plugin"], "repositoryChangelogUrl", array())) {
                    // line 24
                    echo "                            <a href=\"javascript:void(0);\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
                    echo "\" class=\"plugin-details\" data-activePluginTab=\"changelog\" data-pluginName=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", array()), "html_attr");
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "currentVersion", array()), "html", null, true);
                    echo " => ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", array()), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "currentVersion", array()), "html", null, true);
                    echo " => ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "latestVersion", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </td>
                    <td class=\"desc\">
                        ";
                // line 30
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", array()), "html", null, true);
                echo "
                        ";
                // line 31
                echo $this->getAttribute($this, "missingRequirementsPleaseUpdateNotice", array(0 => $context["plugin"]), "method");
                echo "
                    </td>
                    <td class=\"status\">
                        ";
                // line 34
                if ($this->getAttribute($context["plugin"], "isActivated", array())) {
                    // line 35
                    echo "                            ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 37
                    echo "                            ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                    echo "
                        ";
                }
                // line 39
                echo "                    </td>
                    <td class=\"togl action-links\">
                        ";
                // line 41
                if ((0 == twig_length_filter($this->env, $this->getAttribute($context["plugin"], "missingRequirements", array())))) {
                    // line 42
                    echo "                            <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute($context["plugin"], "name", array()), "nonce" => (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce"))))), "html", null, true);
                    echo "\">Update</a>
                        ";
                } else {
                    // line 44
                    echo "                            -
                        ";
                }
                // line 46
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
        </table>
    </div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getpluginDeveloper($__owner__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "owner" => $__owner__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            if (("piwik" == (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")))) {
                echo "<img title=\"Piwik\" alt=\"Piwik\" style=\"padding-bottom:2px;height:11px;\" src=\"plugins/Morpheus/images/logo-marketplace.png\"/>";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getfeaturedIcon($__align__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "align" => $__align__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 61
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_FeaturedPlugin")), "html", null, true);
            echo "\"
         src=\"plugins/CorePluginsAdmin/images/rating_important.png\"
         align=\"";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : $this->getContext($context, "align")), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getpluginsFilter($__isTheme__ = null, $__isMarketplaceEnabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "isTheme" => $__isTheme__,
            "isMarketplaceEnabled" => $__isMarketplaceEnabled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "
    <p class=\"pluginsFilter entityContainer\">
        <span class=\"origin\">
            <strong>";
            // line 70
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Origin")), "html", null, true);
            echo "</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">";
            // line 71
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">";
            // line 72
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"noncore\" href=\"#\">";
            // line 73
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginThirdParty")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>";
            // line 77
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">";
            // line 78
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">";
            // line 79
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        ";
            // line 83
            if ((isset($context["isMarketplaceEnabled"]) ? $context["isMarketplaceEnabled"] : $this->getContext($context, "isMarketplaceEnabled"))) {
                // line 84
                echo "            <span class=\"getNewPlugins\">
                ";
                // line 85
                if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                    // line 86
                    echo "                    <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browseThemes", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewThemes")), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 88
                    echo "                    <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewPlugins")), "html", null, true);
                    echo "</a>
                ";
                }
                // line 90
                echo "            </span>
        ";
            }
            // line 92
            echo "    </p>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getmissingRequirementsPleaseUpdateNotice($__plugin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "    ";
            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()) && (0 < twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()))))) {
                // line 98
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 99
                    echo "<div class=\"alert alert-danger\">
                ";
                    // line 100
                    $context["requirement"] = twig_capitalize_string_filter($this->env, $this->getAttribute($context["req"], "requirement", array()));
                    // line 101
                    echo "                ";
                    if (("Php" == (isset($context["requirement"]) ? $context["requirement"] : $this->getContext($context, "requirement")))) {
                        // line 102
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 103
                        echo "                ";
                    }
                    // line 104
                    echo "                ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_MissingRequirementsNotice", (isset($context["requirement"]) ? $context["requirement"] : $this->getContext($context, "requirement")), $this->getAttribute($context["req"], "actualVersion", array()), $this->getAttribute($context["req"], "requiredVersion", array()))), "html", null, true);
                    echo "
            </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getmissingRequirementsInfo($__pluginName__ = null, $__metadata__ = null, $__missingRequirements__ = null, $__marketplacePluginNames__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginName" => $__pluginName__,
            "metadata" => $__metadata__,
            "missingRequirements" => $__missingRequirements__,
            "marketplacePluginNames" => $__marketplacePluginNames__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            echo "    ";
            $context["causedBy"] = "";
            // line 112
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["missingRequirements"]) ? $context["missingRequirements"] : $this->getContext($context, "missingRequirements")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dependency"]) {
                // line 113
                echo "        ";
                $context["causedBy"] = ((((isset($context["causedBy"]) ? $context["causedBy"] : $this->getContext($context, "causedBy")) . twig_capitalize_string_filter($this->env, $this->getAttribute($context["dependency"], "requirement", array()))) . " ") . $this->getAttribute($context["dependency"], "causedBy", array()));
                // line 114
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 115
                    echo "            ";
                    $context["causedBy"] = ((isset($context["causedBy"]) ? $context["causedBy"] : $this->getContext($context, "causedBy")) . ", ");
                    // line 116
                    echo "        ";
                }
                // line 117
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
    ";
            // line 119
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginRequirement", (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), (isset($context["causedBy"]) ? $context["causedBy"] : $this->getContext($context, "causedBy")))), "html", null, true);
            echo "

    ";
            // line 121
            if ((((array_key_exists("metadata", $context) && $this->getAttribute(            // line 122
(isset($context["metadata"]) ? $context["metadata"] : null), "support", array(), "any", true, true)) && $this->getAttribute($this->getAttribute(            // line 123
(isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "support", array()), "email", array())) && !twig_in_filter(            // line 124
(isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))))) {
                // line 125
                echo "        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_EmailToEnquireUpdatedVersion", (((("<a href=\"mailto:" . \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "support", array()), "email", array()), "html_attr")) . "\">") . $this->getAttribute($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "support", array()), "email", array())) . "</a>"), (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName"))));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function gettablePlugins($__pluginsInfo__ = null, $__pluginNamesHavingSettings__ = null, $__activateNonce__ = null, $__deactivateNonce__ = null, $__uninstallNonce__ = null, $__isTheme__ = null, $__marketplacePluginNames__ = null, $__displayAdminLinks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsInfo" => $__pluginsInfo__,
            "pluginNamesHavingSettings" => $__pluginNamesHavingSettings__,
            "activateNonce" => $__activateNonce__,
            "deactivateNonce" => $__deactivateNonce__,
            "uninstallNonce" => $__uninstallNonce__,
            "isTheme" => $__isTheme__,
            "marketplacePluginNames" => $__marketplacePluginNames__,
            "displayAdminLinks" => $__displayAdminLinks__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "
<div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

    <h2 id=\"uninstallPluginConfirm\">";
            // line 133
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm")), "html", null, true);
            echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
            // line 135
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>

</div>

<div class='entityContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th>";
            // line 143
            if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
            <th>";
            // line 144
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 145
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
            ";
            // line 146
            if ((isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks"))) {
                // line 147
                echo "            <th class=\"action-links\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "</th>
            ";
            }
            // line 149
            echo "        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsInfo"]) ? $context["pluginsInfo"] : $this->getContext($context, "pluginsInfo")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 153
                echo "            ";
                $context["isDefaultTheme"] = ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme")) && ($context["name"] == "Morpheus"));
                // line 154
                echo "            ";
                if ((($this->getAttribute($context["plugin"], "alwaysActivated", array(), "any", true, true) &&  !$this->getAttribute($context["plugin"], "alwaysActivated", array())) || (isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme")))) {
                    // line 155
                    echo "                <tr ";
                    if ($this->getAttribute($context["plugin"], "activated", array())) {
                        echo "class=\"active-plugin\"";
                    } else {
                        echo "class=\"inactive-plugin\"";
                    }
                    echo " data-filter-status=\"";
                    if ($this->getAttribute($context["plugin"], "activated", array())) {
                        echo "active";
                    } else {
                        echo "inactive";
                    }
                    echo "\" data-filter-origin=\"";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", array())) {
                        echo "core";
                    } else {
                        echo "noncore";
                    }
                    echo "\">
                    <td class=\"name\">
                        <a name=\"";
                    // line 157
                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                    echo "\"></a>
                        ";
                    // line 158
                    if (( !$this->getAttribute($context["plugin"], "isCorePlugin", array()) && twig_in_filter($context["name"], (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))))) {
                        // line 159
                        echo "<a href=\"javascript:void(0);\" class=\"plugin-details\"
                               data-pluginName=\"";
                        // line 160
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\"
                               >";
                        // line 161
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "</a>";
                    } else {
                        // line 163
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "
                        ";
                    }
                    // line 165
                    echo "                        <span class=\"plugin-version\" ";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", array())) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CorePluginTooltip")), "html", null, true);
                        echo "\"";
                    }
                    echo ">(";
                    if ($this->getAttribute($context["plugin"], "isCorePlugin", array())) {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
                    } else {
                        echo "v";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "version", array()), "html", null, true);
                    }
                    echo ")</span>

                        ";
                    // line 167
                    if (twig_in_filter($context["name"], (isset($context["pluginNamesHavingSettings"]) ? $context["pluginNamesHavingSettings"] : $this->getContext($context, "pluginNamesHavingSettings")))) {
                        // line 168
                        echo "                            <br /><br />
                            <a href=\"";
                        // line 169
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreAdminHome", "action" => "adminPluginSettings"))), "html", null, true);
                        echo "#";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\" class=\"settingsLink\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 171
                    echo "                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            ";
                    // line 174
                    if (($this->getAttribute($context["plugin"], "missingRequirements", array(), "any", true, true) && $this->getAttribute($context["plugin"], "missingRequirements", array()))) {
                        // line 175
                        echo "                                ";
                        echo $this->getAttribute($this, "missingRequirementsInfo", array(0 => $context["name"], 1 => $this->getAttribute($context["plugin"], "info", array()), 2 => $this->getAttribute($context["plugin"], "missingRequirements", array()), 3 => (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))), "method");
                        echo "
                                <br />
                            ";
                    }
                    // line 178
                    echo "                        </div>
                        <div class=\"plugin-desc-text\">

                            ";
                    // line 181
                    echo nl2br($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "description", array()));
                    echo "

                            ";
                    // line 183
                    if (( !twig_test_empty((($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "homepage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "homepage", array()))) : (""))) && !twig_in_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "homepage", array()), array(0 => "http://piwik.org", 1 => "http://www.piwik.org", 2 => "http://piwik.org/", 3 => "http://www.piwik.org/")))) {
                        // line 186
                        echo "                            <span class=\"plugin-homepage\">
                                <a target=\"_blank\" href=\"";
                        // line 187
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "homepage", array()), "html", null, true);
                        echo "\">(";
                        echo twig_replace_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginHomepage")), array(" " => "&nbsp;"));
                        echo ")</a>
                            </span>
                            ";
                    }
                    // line 190
                    echo "
                            ";
                    // line 191
                    if (($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array())))) {
                        // line 192
                        echo "                                <div class=\"plugin-donation\">
                                    ";
                        // line 193
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LikeThisPlugin")), "html", null, true);
                        echo " <a href=\"javascript:;\" class=\"plugin-donation-link\" data-overlay-id=\"overlay-";
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ConsiderDonating")), "html", null, true);
                        echo "</a>
                                    <div id=\"overlay-";
                        // line 194
                        echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                        echo "\" class=\"donation-overlay ui-confirm\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LikeThisPlugin")), "html", null, true);
                        echo "\">
                                        <p>";
                        // line 195
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CommunityContributedPlugin")), "html", null, true);
                        echo "</p>
                                        <p>";
                        // line 196
                        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ConsiderDonatingCreatorOf", (("<b>" . $context["name"]) . "</b>")));
                        echo "</p>
                                        <div class=\"donation-links\">
                                        ";
                        // line 198
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", false, true), "paypal", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "paypal", array()))) {
                            // line 199
                            echo "                                            <a class=\"donation-link paypal\" target=\"_blank\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&item_name=Piwik%20Plugin%20";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["name"], "url"), "html", null, true);
                            echo "&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted&business=";
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "paypal", array()), "url"), "html", null, true);
                            echo "\"><img src=\"plugins/CorePluginsAdmin/images/paypal_donate.jpg\" height=\"30\"/></a>
                                        ";
                        }
                        // line 201
                        echo "                                        ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", false, true), "flattr", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "flattr", array()))) {
                            // line 202
                            echo "                                            <a class=\"donation-link flattr\" target=\"_blank\" href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "flattr", array()), "html", null, true);
                            echo "\"><img class=\"alignnone\" title=\"Flattr\" alt=\"\" src=\"plugins/CorePluginsAdmin/images/flattr.png\" height=\"29\" /></a>
                                        ";
                        }
                        // line 204
                        echo "                                        ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "donate", array(), "any", false, true), "bitcoin", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "bitcoin", array()))) {
                            // line 205
                            echo "                                            <div class=\"donation-link bitcoin\">
                                                <span>Donate Bitcoins to:</span>
                                                <a href=\"bitcoin:";
                            // line 207
                            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "bitcoin", array()), "url"), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "donate", array()), "bitcoin", array()), "html", null, true);
                            echo "</a>
                                            </div>
                                        ";
                        }
                        // line 210
                        echo "                                        </div>
                                        <input role=\"no\" type=\"button\" value=\"";
                        // line 211
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html", null, true);
                        echo "\"/>
                                    </div>
                                </div>
                            ";
                    }
                    // line 215
                    echo "                        </div>
                        ";
                    // line 216
                    if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "license", array(), "any", true, true)) {
                        // line 217
                        echo "                        <div class=\"plugin-license\">
                            ";
                        // line 218
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "<a title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LicenseHomepage")), "html", null, true);
                            echo "\" rel=\"noreferrer\" target=\"_blank\" href=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "license_homepage", array()), "html", null, true);
                            echo "\">";
                        }
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "license", array()), "html", null, true);
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "</a>";
                        }
                        // line 219
                        echo "                        </div>
                        ";
                    }
                    // line 221
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                        // line 222
                        echo "                        <div class=\"plugin-author\">
                            <cite>By
                            ";
                        // line 224
                        if ($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                            // line 225
                            ob_start();
                            // line 226
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "authors", array()));
                            $context['loop'] = array(
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            );
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                if ($this->getAttribute($context["author"], "name", array())) {
                                    // line 227
                                    echo "                                ";
                                    if ($this->getAttribute($context["author"], "homepage", array(), "any", true, true)) {
                                        // line 228
                                        echo "                                    <a title=\"";
                                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AuthorHomepage")), "html", null, true);
                                        echo "\" href=\"";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", array()), "html", null, true);
                                        echo "\" rel=\"noreferrer\" target=\"_blank\">";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                                        echo "</a>
                                ";
                                    } else {
                                        // line 230
                                        echo "                                    ";
                                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                                        echo "
                                ";
                                    }
                                    // line 232
                                    echo "                                ";
                                    if (($this->getAttribute($context["loop"], "index", array()) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "info", array()), "authors", array())))) {
                                        // line 233
                                        echo "                                        ,
                                    ";
                                    }
                                    // line 235
                                    echo "                            ";
                                    ++$context['loop']['index0'];
                                    ++$context['loop']['index'];
                                    $context['loop']['first'] = false;
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 236
                            echo "                            ";
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        }
                        // line 237
                        echo ".</cite>
                        </div>
                        ";
                    }
                    // line 240
                    echo "                    </td>
                    <td class=\"status\" ";
                    // line 241
                    if ((isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                        echo "style=\"border-left-width:0px;\"";
                    }
                    echo ">
                        ";
                    // line 242
                    if ( !(isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                        // line 244
                        if ($this->getAttribute($context["plugin"], "activated", array())) {
                            // line 245
                            echo "                            ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                            echo "
                        ";
                        } else {
                            // line 247
                            echo "                            ";
                            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                            echo "
                            ";
                            // line 248
                            if (($this->getAttribute($context["plugin"], "uninstallable", array()) && (isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks")))) {
                                echo " <br/> - <a data-pluginName=\"";
                                echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html_attr");
                                echo "\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                                echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                                echo "&nonce=";
                                echo \Piwik\piwik_escape_filter($this->env, (isset($context["uninstallNonce"]) ? $context["uninstallNonce"] : $this->getContext($context, "uninstallNonce")), "html", null, true);
                                echo "'>";
                                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionUninstall")), "html", null, true);
                                echo "</a>";
                            }
                            // line 249
                            echo "                        ";
                        }
                    }
                    // line 252
                    echo "                    </td>

                    ";
                    // line 254
                    if ((isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks"))) {
                        // line 255
                        echo "                    <td class=\"togl action-links\" ";
                        if ((isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                            echo "style=\"border-left-width:0px;\"";
                        }
                        echo ">
                        ";
                        // line 256
                        if ( !(isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                            // line 258
                            if (($this->getAttribute($context["plugin"], "invalid", array(), "any", true, true) || $this->getAttribute($context["plugin"], "alwaysActivated", array()))) {
                                // line 259
                                echo "                            -
                        ";
                            } else {
                                // line 261
                                echo "                            ";
                                if ($this->getAttribute($context["plugin"], "activated", array())) {
                                    // line 262
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                                    echo "&nonce=";
                                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), "html", null, true);
                                    echo "'>";
                                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Deactivate")), "html", null, true);
                                    echo "</a>
                            ";
                                } elseif ($this->getAttribute(                                // line 263
$context["plugin"], "missingRequirements", array())) {
                                    // line 264
                                    echo "                                -
                            ";
                                } else {
                                    // line 266
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                                    echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
                                    echo "&nonce=";
                                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), "html", null, true);
                                    echo "'>";
                                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Activate")), "html", null, true);
                                    echo "</a>
                            ";
                                }
                                // line 268
                                echo "                        ";
                            }
                        }
                        // line 271
                        echo "                    </td>
                    ";
                    }
                    // line 273
                    echo "                </tr>
            ";
                }
                // line 275
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "        </tbody>
    </table>
</div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  971 => 276,  965 => 275,  961 => 273,  957 => 271,  953 => 268,  943 => 266,  939 => 264,  937 => 263,  928 => 262,  925 => 261,  921 => 259,  919 => 258,  917 => 256,  910 => 255,  908 => 254,  904 => 252,  900 => 249,  888 => 248,  883 => 247,  877 => 245,  875 => 244,  873 => 242,  867 => 241,  864 => 240,  859 => 237,  855 => 236,  845 => 235,  841 => 233,  838 => 232,  832 => 230,  822 => 228,  819 => 227,  807 => 226,  805 => 225,  803 => 224,  799 => 222,  796 => 221,  792 => 219,  780 => 218,  777 => 217,  775 => 216,  772 => 215,  765 => 211,  762 => 210,  754 => 207,  750 => 205,  747 => 204,  741 => 202,  738 => 201,  730 => 199,  728 => 198,  723 => 196,  719 => 195,  713 => 194,  705 => 193,  702 => 192,  700 => 191,  697 => 190,  689 => 187,  686 => 186,  684 => 183,  679 => 181,  674 => 178,  667 => 175,  665 => 174,  660 => 171,  651 => 169,  648 => 168,  646 => 167,  629 => 165,  623 => 163,  619 => 161,  615 => 160,  612 => 159,  610 => 158,  606 => 157,  584 => 155,  581 => 154,  578 => 153,  574 => 152,  569 => 149,  563 => 147,  561 => 146,  557 => 145,  553 => 144,  545 => 143,  534 => 135,  530 => 134,  526 => 133,  521 => 130,  502 => 129,  487 => 125,  485 => 124,  484 => 123,  483 => 122,  482 => 121,  477 => 119,  474 => 118,  460 => 117,  457 => 116,  454 => 115,  451 => 114,  448 => 113,  430 => 112,  427 => 111,  412 => 110,  400 => 107,  391 => 104,  388 => 103,  385 => 102,  382 => 101,  380 => 100,  377 => 99,  372 => 98,  369 => 97,  357 => 96,  344 => 92,  340 => 90,  332 => 88,  324 => 86,  322 => 85,  319 => 84,  317 => 83,  311 => 80,  307 => 79,  303 => 78,  299 => 77,  292 => 73,  288 => 72,  284 => 71,  280 => 70,  275 => 67,  262 => 66,  249 => 63,  244 => 61,  241 => 60,  229 => 59,  213 => 56,  201 => 55,  186 => 49,  178 => 46,  174 => 44,  168 => 42,  166 => 41,  162 => 39,  156 => 37,  150 => 35,  148 => 34,  142 => 31,  138 => 30,  134 => 28,  126 => 26,  114 => 24,  112 => 23,  105 => 19,  101 => 18,  91 => 16,  87 => 15,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  60 => 7,  53 => 2,  39 => 1,  34 => 128,  31 => 109,  28 => 95,  25 => 65,  22 => 58,  19 => 54,);
    }
}
/* {% macro tablePluginUpdates(pluginsHavingUpdate, nonce, isTheme) %}*/
/* */
/*     <div class='entityContainer'>*/
/*         <table class="dataTable entityTable">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>{% if isTheme %}{{ 'CorePluginsAdmin_Theme'|translate }}{% else %}{{ 'General_Plugin'|translate }}{% endif %}</th>*/
/*                 <th class="num">{{ 'CorePluginsAdmin_Version'|translate }}</th>*/
/*                 <th>{{ 'General_Description'|translate }}</th>*/
/*                 <th class="status">{{ 'CorePluginsAdmin_Status'|translate }}</th>*/
/*                 <th class="action-links">{{ 'General_Action'|translate }}</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody id="plugins">*/
/*             {% for name,plugin in pluginsHavingUpdate %}*/
/*                 <tr {% if plugin.isActivated|default(false) %}class="active-plugin"{% else %}class="inactive-plugin"{% endif %}>*/
/*                     <td class="name">*/
/*                         <a href="javascript:void(0);" data-pluginName="{{ plugin.name|e('html_attr') }}" class="plugin-details">*/
/*                             {{ plugin.name }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td class="vers">*/
/*                         {% if plugin.repositoryChangelogUrl %}*/
/*                             <a href="javascript:void(0);" title="{{ 'CorePluginsAdmin_Changelog'|translate }}" class="plugin-details" data-activePluginTab="changelog" data-pluginName="{{ plugin.name|e('html_attr') }}">{{ plugin.currentVersion }} => {{ plugin.latestVersion }}</a>*/
/*                         {% else %}*/
/*                             {{ plugin.currentVersion }} => {{ plugin.latestVersion }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td class="desc">*/
/*                         {{ plugin.description }}*/
/*                         {{ _self.missingRequirementsPleaseUpdateNotice(plugin) }}*/
/*                     </td>*/
/*                     <td class="status">*/
/*                         {% if plugin.isActivated %}*/
/*                             {{ 'CorePluginsAdmin_Active'|translate }}*/
/*                         {% else %}*/
/*                             {{ 'CorePluginsAdmin_Inactive'|translate }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td class="togl action-links">*/
/*                         {% if 0 == plugin.missingRequirements|length %}*/
/*                             <a href="{{ linkTo({'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': nonce}) }}">Update</a>*/
/*                         {% else %}*/
/*                             -*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endmacro %}*/
/* */
/* {% macro pluginDeveloper(owner) %}*/
/*     {% if 'piwik' == owner %}<img title="Piwik" alt="Piwik" style="padding-bottom:2px;height:11px;" src="plugins/Morpheus/images/logo-marketplace.png"/>{% else %}{{ owner }}{% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro featuredIcon(align='') %}*/
/*     <img class="featuredIcon"*/
/*          title="{{ 'CorePluginsAdmin_FeaturedPlugin'|translate }}"*/
/*          src="plugins/CorePluginsAdmin/images/rating_important.png"*/
/*          align="{{ align }}" />*/
/* {% endmacro %}*/
/* */
/* {% macro pluginsFilter(isTheme, isMarketplaceEnabled) %}*/
/* */
/*     <p class="pluginsFilter entityContainer">*/
/*         <span class="origin">*/
/*             <strong>{{ 'CorePluginsAdmin_Origin'|translate }}</strong>*/
/*             <a data-filter-origin="all" href="#" class="active">{{ 'General_All'|translate }}<span class="counter"></span></a> |*/
/*             <a data-filter-origin="core" href="#">{{ 'CorePluginsAdmin_OriginCore'|translate }}<span class="counter"></span></a> |*/
/*             <a data-filter-origin="noncore" href="#">{{ 'CorePluginsAdmin_OriginThirdParty'|translate }}<span class="counter"></span></a>*/
/*         </span>*/
/* */
/*         <span class="status">*/
/*             <strong>{{ 'CorePluginsAdmin_Status'|translate }}</strong>*/
/*             <a data-filter-status="all" href="#" class="active">{{ 'General_All'|translate }}<span class="counter"></span></a> |*/
/*             <a data-filter-status="active" href="#">{{ 'CorePluginsAdmin_Active'|translate }}<span class="counter"></span></a> |*/
/*             <a data-filter-status="inactive" href="#">{{ 'CorePluginsAdmin_Inactive'|translate }}<span class="counter"></span></a>*/
/*         </span>*/
/* */
/*         {% if isMarketplaceEnabled %}*/
/*             <span class="getNewPlugins">*/
/*                 {% if isTheme %}*/
/*                     <a href="{{ linkTo({'action':'browseThemes', 'sort': ''}) }}">{{ 'CorePluginsAdmin_InstallNewThemes'|translate }}</a>*/
/*                 {% else %}*/
/*                     <a href="{{ linkTo({'action':'browsePlugins', 'sort': ''}) }}">{{ 'CorePluginsAdmin_InstallNewPlugins'|translate }}</a>*/
/*                 {% endif %}*/
/*             </span>*/
/*         {% endif %}*/
/*     </p>*/
/* */
/* {% endmacro %}*/
/* */
/* {% macro missingRequirementsPleaseUpdateNotice(plugin) %}*/
/*     {% if plugin.missingRequirements and 0 < plugin.missingRequirements|length %}*/
/*         {% for req in plugin.missingRequirements -%}*/
/*             <div class="alert alert-danger">*/
/*                 {% set requirement = req.requirement|capitalize %}*/
/*                 {% if 'Php' == requirement %}*/
/*                     {% set requirement = 'PHP' %}*/
/*                 {% endif %}*/
/*                 {{ 'CorePluginsAdmin_MissingRequirementsNotice'|translate(requirement, req.actualVersion, req.requiredVersion) }}*/
/*             </div>*/
/*         {%- endfor %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro missingRequirementsInfo(pluginName, metadata, missingRequirements, marketplacePluginNames) %}*/
/*     {% set causedBy = '' %}*/
/*     {% for dependency in missingRequirements %}*/
/*         {% set causedBy = causedBy ~ dependency.requirement|capitalize ~ ' ' ~ dependency.causedBy  %}*/
/*         {% if not loop.last %}*/
/*             {% set causedBy = causedBy ~ ', '  %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {{ 'CorePluginsAdmin_PluginRequirement'|translate(pluginName, causedBy) }}*/
/* */
/*     {% if metadata is defined*/
/*         and metadata.support is defined*/
/*         and metadata.support.email*/
/*         and pluginName not in marketplacePluginNames %}*/
/*         {{ 'CorePluginsAdmin_EmailToEnquireUpdatedVersion'|translate('<a href="mailto:' ~ metadata.support.email|e('html_attr') ~'">' ~ metadata.support.email ~ '</a>', pluginName)|raw }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro tablePlugins(pluginsInfo, pluginNamesHavingSettings, activateNonce, deactivateNonce, uninstallNonce, isTheme, marketplacePluginNames, displayAdminLinks) %}*/
/* */
/* <div id="confirmUninstallPlugin" class="ui-confirm">*/
/* */
/*     <h2 id="uninstallPluginConfirm">{{ 'CorePluginsAdmin_UninstallConfirm'|translate }}</h2>*/
/*     <input role="yes" type="button" value="{{ 'General_Yes'|translate }}"/>*/
/*     <input role="no" type="button" value="{{ 'General_No'|translate }}"/>*/
/* */
/* </div>*/
/* */
/* <div class='entityContainer'>*/
/*     <table class="dataTable entityTable">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>{% if isTheme %}{{ 'CorePluginsAdmin_Theme'|translate }}{% else %}{{ 'General_Plugin'|translate }}{% endif %}</th>*/
/*             <th>{{ 'General_Description'|translate }}</th>*/
/*             <th class="status">{{ 'CorePluginsAdmin_Status'|translate }}</th>*/
/*             {% if (displayAdminLinks) %}*/
/*             <th class="action-links">{{ 'General_Action'|translate }}</th>*/
/*             {% endif %}*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody id="plugins">*/
/*         {% for name,plugin in pluginsInfo %}*/
/*             {% set isDefaultTheme = isTheme and name == 'Morpheus' %}*/
/*             {% if (plugin.alwaysActivated is defined and not plugin.alwaysActivated) or isTheme %}*/
/*                 <tr {% if plugin.activated %}class="active-plugin"{% else %}class="inactive-plugin"{% endif %} data-filter-status="{% if plugin.activated %}active{% else %}inactive{% endif %}" data-filter-origin="{% if plugin.isCorePlugin %}core{% else %}noncore{% endif %}">*/
/*                     <td class="name">*/
/*                         <a name="{{ name|e('html_attr') }}"></a>*/
/*                         {% if not plugin.isCorePlugin and name in marketplacePluginNames -%}*/
/*                             <a href="javascript:void(0);" class="plugin-details"*/
/*                                data-pluginName="{{ name|e('html_attr') }}"*/
/*                                >{{ name }}</a>*/
/*                         {%- else %}*/
/*                             {{ name }}*/
/*                         {% endif %}*/
/*                         <span class="plugin-version" {% if plugin.isCorePlugin %}title="{{ 'CorePluginsAdmin_CorePluginTooltip'|translate }}"{% endif %}>({% if plugin.isCorePlugin %}{{ 'CorePluginsAdmin_OriginCore'|translate }}{% else %}v{{ plugin.info.version }}{% endif %})</span>*/
/* */
/*                         {% if name in pluginNamesHavingSettings %}*/
/*                             <br /><br />*/
/*                             <a href="{{ linkTo({'module':'CoreAdminHome', 'action': 'adminPluginSettings'}) }}#{{ name|e('html_attr') }}" class="settingsLink">{{ 'General_Settings'|translate }}</a>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td class="desc">*/
/*                         <div class="plugin-desc-missingrequirements">*/
/*                             {% if plugin.missingRequirements is defined and plugin.missingRequirements %}*/
/*                                 {{ _self.missingRequirementsInfo(name, plugin.info, plugin.missingRequirements, marketplacePluginNames) }}*/
/*                                 <br />*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="plugin-desc-text">*/
/* */
/*                             {{ plugin.info.description|raw|nl2br }}*/
/* */
/*                             {% if plugin.info.homepage|default is not empty and plugin.info.homepage not in [*/
/*                                   'http://piwik.org', 'http://www.piwik.org', 'http://piwik.org/', 'http://www.piwik.org/'*/
/*                             ] %}*/
/*                             <span class="plugin-homepage">*/
/*                                 <a target="_blank" href="{{ plugin.info.homepage }}">({{ 'CorePluginsAdmin_PluginHomepage'|translate|replace({' ': '&nbsp;'})|raw }})</a>*/
/*                             </span>*/
/*                             {% endif %}*/
/* */
/*                             {% if plugin.info.donate is defined and plugin.info.donate|length %}*/
/*                                 <div class="plugin-donation">*/
/*                                     {{ 'CorePluginsAdmin_LikeThisPlugin'|translate }} <a href="javascript:;" class="plugin-donation-link" data-overlay-id="overlay-{{ name|escape('html_attr') }}">{{ 'CorePluginsAdmin_ConsiderDonating'|translate }}</a>*/
/*                                     <div id="overlay-{{ name|escape('html_attr') }}" class="donation-overlay ui-confirm" title="{{ 'CorePluginsAdmin_LikeThisPlugin'|translate }}">*/
/*                                         <p>{{ 'CorePluginsAdmin_CommunityContributedPlugin'|translate }}</p>*/
/*                                         <p>{{ 'CorePluginsAdmin_ConsiderDonatingCreatorOf'|translate("<b>" ~ name ~ "</b>")|raw }}</p>*/
/*                                         <div class="donation-links">*/
/*                                         {% if plugin.info.donate.paypal is defined and plugin.info.donate.paypal %}*/
/*                                             <a class="donation-link paypal" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&item_name=Piwik%20Plugin%20{{ name|escape('url') }}&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted&business={{ plugin.info.donate.paypal|escape('url') }}"><img src="plugins/CorePluginsAdmin/images/paypal_donate.jpg" height="30"/></a>*/
/*                                         {% endif %}*/
/*                                         {% if plugin.info.donate.flattr is defined and plugin.info.donate.flattr %}*/
/*                                             <a class="donation-link flattr" target="_blank" href="{{ plugin.info.donate.flattr }}"><img class="alignnone" title="Flattr" alt="" src="plugins/CorePluginsAdmin/images/flattr.png" height="29" /></a>*/
/*                                         {% endif %}*/
/*                                         {% if plugin.info.donate.bitcoin is defined and plugin.info.donate.bitcoin %}*/
/*                                             <div class="donation-link bitcoin">*/
/*                                                 <span>Donate Bitcoins to:</span>*/
/*                                                 <a href="bitcoin:{{ plugin.info.donate.bitcoin|escape('url') }}">{{ plugin.info.donate.bitcoin }}</a>*/
/*                                             </div>*/
/*                                         {% endif %}*/
/*                                         </div>*/
/*                                         <input role="no" type="button" value="{{ 'General_Close'|translate }}"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         {% if plugin.info.license is defined %}*/
/*                         <div class="plugin-license">*/
/*                             {% if plugin.info.license_homepage is defined %}<a title="{{ 'CorePluginsAdmin_LicenseHomepage'|translate }}" rel="noreferrer" target="_blank" href="{{ plugin.info.license_homepage }}">{% endif %}{{ plugin.info.license }}{% if plugin.info.license_homepage is defined %}</a>{% endif %}*/
/*                         </div>*/
/*                         {% endif %}*/
/*                         {% if plugin.info.authors is defined %}*/
/*                         <div class="plugin-author">*/
/*                             <cite>By*/
/*                             {% if plugin.info.authors is defined -%}*/
/*                             {% spaceless %}*/
/*                             {% for author in plugin.info.authors if author.name %}*/
/*                                 {% if author.homepage is defined %}*/
/*                                     <a title="{{ 'CorePluginsAdmin_AuthorHomepage'|translate }}" href="{{ author.homepage }}" rel="noreferrer" target="_blank">{{ author.name }}</a>*/
/*                                 {% else %}*/
/*                                     {{ author.name }}*/
/*                                 {% endif %}*/
/*                                 {% if loop.index < plugin.info.authors|length %}*/
/*                                         ,*/
/*                                     {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endspaceless %}*/
/*                             {%- endif %}.</cite>*/
/*                         </div>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td class="status" {% if isDefaultTheme %}style="border-left-width:0px;"{% endif %}>*/
/*                         {% if not isDefaultTheme -%}*/
/* */
/*                         {% if plugin.activated %}*/
/*                             {{ 'CorePluginsAdmin_Active'|translate }}*/
/*                         {% else %}*/
/*                             {{ 'CorePluginsAdmin_Inactive'|translate }}*/
/*                             {% if plugin.uninstallable and displayAdminLinks %} <br/> - <a data-pluginName="{{ name|escape('html_attr') }}" class="uninstall" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName={{ name }}&nonce={{ uninstallNonce }}'>{{ 'CorePluginsAdmin_ActionUninstall'|translate }}</a>{% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {%- endif %}*/
/*                     </td>*/
/* */
/*                     {% if displayAdminLinks %}*/
/*                     <td class="togl action-links" {% if isDefaultTheme %}style="border-left-width:0px;"{% endif %}>*/
/*                         {% if not isDefaultTheme -%}*/
/* */
/*                         {% if plugin.invalid is defined or plugin.alwaysActivated %}*/
/*                             -*/
/*                         {% else %}*/
/*                             {% if plugin.activated %}*/
/*                                 <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ name }}&nonce={{ deactivateNonce }}'>{{ 'CorePluginsAdmin_Deactivate'|translate }}</a>*/
/*                             {% elseif plugin.missingRequirements %}*/
/*                                 -*/
/*                             {% else %}*/
/*                                 <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName={{ name }}&nonce={{  activateNonce }}'>{{ 'CorePluginsAdmin_Activate'|translate }}</a>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                         {%- endif %}*/
/*                     </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* {% endmacro %}*/
/* */
