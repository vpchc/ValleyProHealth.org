<?php

/* @CorePluginsAdmin/pluginDetails.twig */
class __TwigTemplate_819bf853daf0e66e663a4743ab395fb3a2f4b165ec460d897bc55c520008a970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["pluginsMacro"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@CorePluginsAdmin/pluginDetails.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"pluginDetails\">
        ";
        // line 6
        if ((isset($context["errorMessage"]) ? $context["errorMessage"] : $this->getContext($context, "errorMessage"))) {
            // line 7
            echo "            ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["errorMessage"]) ? $context["errorMessage"] : $this->getContext($context, "errorMessage")), "html", null, true);
            echo "
        ";
        } elseif (        // line 8
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))) {
            // line 9
            echo "
            ";
            // line 10
            $context["latestVersion"] = $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "versions", array()), (twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "versions", array())) - 1), array(), "array");
            // line 11
            echo "
            <div class=\"header\">
                <div class=\"intro\" style=\"width:75%;float:left;\">
                    <h2>";
            // line 14
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "html", null, true);
            echo "</h2>
                    <p class=\"description\">
                        ";
            // line 16
            if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "featured", array())) {
                // line 17
                echo "                            ";
                echo $context["pluginsMacro"]->getfeaturedIcon("left");
                echo "
                        ";
            }
            // line 19
            echo "                        ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "description", array()), "html", null, true);
            echo "
                    </p>
                </div>
                <div class=\"width:25%;float:left;\">

                    ";
            // line 24
            if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
                // line 25
                echo "                        ";
                if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "canBeUpdated", array()) && (0 == twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array()))))) {
                    // line 26
                    echo "                            <a class=\"install update\"
                               href=\"";
                    // line 27
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "nonce" => (isset($context["updateNonce"]) ? $context["updateNonce"] : $this->getContext($context, "updateNonce"))))), "html", null, true);
                    echo "\"
                                    >";
                    // line 28
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
                    echo "</a>
                        ";
                } elseif ($this->getAttribute(                // line 29
(isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isInstalled", array())) {
                    // line 30
                    echo "                        ";
                } elseif ((0 < twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements", array())))) {
                    // line 31
                    echo "                        ";
                } else {
                    // line 32
                    echo "                            <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "installPlugin", "pluginName" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name", array()), "nonce" => (isset($context["installNonce"]) ? $context["installNonce"] : $this->getContext($context, "installNonce"))))), "html", null, true);
                    echo "\"
                               class=\"install\">";
                    // line 33
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionInstall")), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 35
                echo "                    ";
            }
            // line 36
            echo "                </div>
            </div>

            <div class=\"content\">
                <div style=\"width:75%;float:left;\">

                    <div id=\"pluginDetailsTabs\">
                        <ul>
                            <li><a href=\"#tabs-description\">";
            // line 44
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</a></li>
                            ";
            // line 45
            if ($this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "faq", array())) {
                // line 46
                echo "                                <li><a href=\"#tabs-faq\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Faq")), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 48
            echo "                            <li><a href=\"#tabs-changelog\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
            echo "</a></li>
                            ";
            // line 49
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "screenshots", array()))) {
                // line 50
                echo "                                <li><a href=\"#tabs-screenshots\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Screenshots")), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 52
            echo "                            ";
            if ($this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "support", array())) {
                // line 53
                echo "                                <li><a href=\"#tabs-support\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Support")), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 55
            echo "                        </ul>

                        <div id=\"tabs-description\">
                            ";
            // line 58
            echo $context["pluginsMacro"]->getmissingRequirementsPleaseUpdateNotice((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")));
            echo "
                            ";
            // line 59
            echo $this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "description", array());
            echo "
                        </div>

                        ";
            // line 62
            if ($this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "faq", array())) {
                // line 63
                echo "                            <div id=\"tabs-faq\">
                                ";
                // line 64
                echo $this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "faq", array());
                echo "
                            </div>
                        ";
            }
            // line 67
            echo "
                        <div id=\"tabs-changelog\">
                            ";
            // line 69
            echo $context["pluginsMacro"]->getmissingRequirementsPleaseUpdateNotice((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")));
            echo "
                            ";
            // line 70
            if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "canBeUpdated", array())) {
                // line 71
                echo "                                <div class=\"alert alert-warning\">
                                    ";
                // line 72
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginUpdateAvailable", $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "currentVersion", array()), $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion", array()))), "html", null, true);
                echo "
                                    ";
                // line 73
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "repositoryChangelogUrl", array())) {
                    echo "<a rel=\"noreferrer\"  target=\"_blank\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "repositoryChangelogUrl", array()), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ViewRepositoryChangelog")), "html", null, true);
                    echo "</a>";
                }
                // line 74
                echo "                                </div>
                            ";
            }
            // line 76
            echo "
                            ";
            // line 77
            if ($this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "changelog", array())) {
                // line 78
                echo "                                ";
                echo $this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "changelog", array());
                echo "
                            ";
            }
            // line 80
            echo "
                            <h3>";
            // line 81
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_History")), "html", null, true);
            echo "</h3>

                            <ul>
                                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "versions", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 85
                echo "                                    <li>
                                        ";
                // line 86
                ob_start();
                // line 87
                echo "                                            <strong>
                                                ";
                // line 88
                if ($this->getAttribute($context["version"], "repositoryChangelogUrl", array())) {
                    // line 89
                    echo "                                                    <a target=\"_blank\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
                    echo "\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["version"], "repositoryChangelogUrl", array()), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["version"], "name", array()), "html", null, true);
                    echo "</a>
                                                ";
                } else {
                    // line 91
                    echo "                                                    ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["version"], "name", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 93
                echo "                                            </strong>
                                        ";
                $context["versionName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 95
                echo "                                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginVersionInfo", (isset($context["versionName"]) ? $context["versionName"] : $this->getContext($context, "versionName")), $this->getAttribute($context["version"], "release", array())));
                echo "
                                        </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                            </ul>
                        </div>

                        ";
            // line 101
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "screenshots", array()))) {
                // line 102
                echo "                            <div id=\"tabs-screenshots\">
                                <div class=\"thumbnails\">
                                    ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "screenshots", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["screenshot"]) {
                    // line 105
                    echo "                                        <div class=\"thumbnail\">
                                            <a href=\"";
                    // line 106
                    echo \Piwik\piwik_escape_filter($this->env, $context["screenshot"], "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["screenshot"], "html", null, true);
                    echo "?w=400\" width=\"400\" alt=\"\"></a>
                                            <p>
                                                ";
                    // line 108
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_last($this->env, twig_split_filter($this->env, $context["screenshot"], "/")), array("_" => " ", ".png" => "", ".jpg" => "", ".jpeg" => "")), "html", null, true);
                    echo "
                                            </p>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['screenshot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                                </div>
                            </div>
                        ";
            }
            // line 115
            echo "
                        ";
            // line 116
            if ($this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "support", array())) {
                // line 117
                echo "                            <div id=\"tabs-support\">

                                ";
                // line 119
                echo $this->getAttribute($this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "readmeHtml", array()), "support", array());
                echo "

                            </div>
                        ";
            }
            // line 123
            echo "                    </div>

                </div>
                <div class=\"metadata\" style=\"width:25%;float:left;\">
                    <p><br /></p>
                    <dl>
                        <dt>";
            // line 129
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 130
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion", array()), "html", null, true);
            echo "</dd>
                        <dt>";
            // line 131
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginKeywords")), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 132
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "keywords", array()), ", "), "html", null, true);
            echo "</dd>
                        <dt>";
            // line 133
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LastUpdated")), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "lastUpdated", array()), "html", null, true);
            echo "</dd>
                        <dt>";
            // line 135
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Downloads")), "html", null, true);
            echo "</dt>
                        <dd title=\"";
            // line 136
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NumDownloadsLatestVersion", twig_number_format_filter($this->env, $this->getAttribute((isset($context["latestVersion"]) ? $context["latestVersion"] : $this->getContext($context, "latestVersion")), "numDownloads", array())))), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "numDownloads", array()), "html", null, true);
            echo "</dd>
                        <dt>";
            // line 137
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Developer")), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 138
            echo $context["pluginsMacro"]->getpluginDeveloper($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "owner", array()));
            echo "</dd>
                        <dt>";
            // line 139
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Authors")), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "authors", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                if ($this->getAttribute($context["author"], "name", array())) {
                    // line 141
                    echo "
                                ";
                    // line 142
                    ob_start();
                    // line 143
                    echo "                                    ";
                    if ($this->getAttribute($context["author"], "homepage", array())) {
                        // line 144
                        echo "                                        <a target=\"_blank\" href=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", array()), "html", null, true);
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                        echo "</a>
                                    ";
                    } elseif ($this->getAttribute(                    // line 145
$context["author"], "email", array())) {
                        // line 146
                        echo "                                        <a href=\"mailto:";
                        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "url"), "html", null, true);
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                        echo "</a>
                                    ";
                    } else {
                        // line 148
                        echo "                                        ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 150
                    echo "
                                    ";
                    // line 151
                    if (($this->getAttribute($context["loop"], "index", array()) < twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "authors", array())))) {
                        // line 152
                        echo "                                        ,
                                    ";
                    }
                    // line 154
                    echo "                                ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 155
                    echo "
                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                        </dd>
                        <dt>";
            // line 158
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Websites")), "html", null, true);
            echo "</dt>
                        <dd>
                            ";
            // line 160
            if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "homepage", array())) {
                // line 161
                echo "                                <a target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "homepage", array()), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginWebsite")), "html", null, true);
                echo "</a>,
                            ";
            }
            // line 163
            echo "                            <a target=\"_blank\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "repositoryUrl", array()), "html", null, true);
            echo "\">GitHub</a></dd>
                        ";
            // line 164
            if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activity", array())) {
                // line 165
                echo "                            <dt>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Activity")), "html", null, true);
                echo "</dt>
                            <dd>
                                ";
                // line 167
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activity", array()), "numCommits", array()), "html", null, true);
                echo " commits

                                ";
                // line 169
                if (($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activity", array()), "numContributors", array()) > 1)) {
                    // line 170
                    echo "                                    ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ByXDevelopers", $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activity", array()), "numContributors", array()))), "html", null, true);
                    echo "
                                ";
                }
                // line 172
                echo "                                ";
                if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activity", array()), "lastCommitDate", array())) {
                    // line 173
                    echo "                                    ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LastCommitTime", $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activity", array()), "lastCommitDate", array()))), "html", null, true);
                    echo "
                                ";
                }
                // line 174
                echo "</dd>
                        ";
            }
            // line 176
            echo "                    </dl>
                    <br />
                </div>
            </div>
            <script type=\"text/javascript\">
                \$(function() {

                    var active = 0;
                    ";
            // line 184
            if ((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab"))) {
                // line 185
                echo "                        var \$activeTab = \$('#tabs-";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")), "js"), "html", null, true);
                echo "');
                        if (\$activeTab) {
                            active = \$activeTab.index() - 1;
                        }
                    ";
            }
            // line 190
            echo "
                    \$( \"#pluginDetailsTabs\" ).tabs({active: active >= 0 ? active : 0});

                    \$('.pluginDetails a').each(function (index, a) {
                        var link = \$(a).attr('href');

                        if (link && 0 === link.indexOf('http')) {
                            \$(a).attr('target', '_blank');
                        }
                    });
                });
            </script>
        ";
        }
        // line 203
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/pluginDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 203,  529 => 190,  520 => 185,  518 => 184,  508 => 176,  504 => 174,  498 => 173,  495 => 172,  489 => 170,  487 => 169,  482 => 167,  476 => 165,  474 => 164,  469 => 163,  461 => 161,  459 => 160,  454 => 158,  451 => 157,  440 => 155,  437 => 154,  433 => 152,  431 => 151,  428 => 150,  422 => 148,  414 => 146,  412 => 145,  405 => 144,  402 => 143,  400 => 142,  397 => 141,  386 => 140,  382 => 139,  378 => 138,  374 => 137,  368 => 136,  364 => 135,  360 => 134,  356 => 133,  352 => 132,  348 => 131,  344 => 130,  340 => 129,  332 => 123,  325 => 119,  321 => 117,  319 => 116,  316 => 115,  311 => 112,  301 => 108,  294 => 106,  291 => 105,  287 => 104,  283 => 102,  281 => 101,  276 => 98,  266 => 95,  262 => 93,  256 => 91,  246 => 89,  244 => 88,  241 => 87,  239 => 86,  236 => 85,  232 => 84,  226 => 81,  223 => 80,  217 => 78,  215 => 77,  212 => 76,  208 => 74,  200 => 73,  196 => 72,  193 => 71,  191 => 70,  187 => 69,  183 => 67,  177 => 64,  174 => 63,  172 => 62,  166 => 59,  162 => 58,  157 => 55,  151 => 53,  148 => 52,  142 => 50,  140 => 49,  135 => 48,  129 => 46,  127 => 45,  123 => 44,  113 => 36,  110 => 35,  105 => 33,  100 => 32,  97 => 31,  94 => 30,  92 => 29,  88 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  67 => 19,  61 => 17,  59 => 16,  54 => 14,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  37 => 7,  35 => 6,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% import '@CorePluginsAdmin/macros.twig' as pluginsMacro %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="pluginDetails">*/
/*         {% if errorMessage %}*/
/*             {{ errorMessage }}*/
/*         {% elseif plugin %}*/
/* */
/*             {% set latestVersion = plugin.versions[plugin.versions|length - 1] %}*/
/* */
/*             <div class="header">*/
/*                 <div class="intro" style="width:75%;float:left;">*/
/*                     <h2>{{ plugin.name }}</h2>*/
/*                     <p class="description">*/
/*                         {% if plugin.featured %}*/
/*                             {{ pluginsMacro.featuredIcon('left') }}*/
/*                         {% endif %}*/
/*                         {{ plugin.description }}*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="width:25%;float:left;">*/
/* */
/*                     {% if isSuperUser %}*/
/*                         {% if plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}*/
/*                             <a class="install update"*/
/*                                href="{{ linkTo({'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}"*/
/*                                     >{{ 'CoreUpdater_UpdateTitle'|translate }}</a>*/
/*                         {% elseif plugin.isInstalled %}*/
/*                         {% elseif 0 < plugin.missingRequirements|length %}*/
/*                         {% else %}*/
/*                             <a href="{{ linkTo({'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}"*/
/*                                class="install">{{ 'CorePluginsAdmin_ActionInstall'|translate }}</a>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="content">*/
/*                 <div style="width:75%;float:left;">*/
/* */
/*                     <div id="pluginDetailsTabs">*/
/*                         <ul>*/
/*                             <li><a href="#tabs-description">{{ 'General_Description'|translate }}</a></li>*/
/*                             {% if latestVersion.readmeHtml.faq %}*/
/*                                 <li><a href="#tabs-faq">{{ 'General_Faq'|translate }}</a></li>*/
/*                             {% endif %}*/
/*                             <li><a href="#tabs-changelog">{{ 'CorePluginsAdmin_Changelog'|translate }}</a></li>*/
/*                             {% if plugin.screenshots|length %}*/
/*                                 <li><a href="#tabs-screenshots">{{ 'CorePluginsAdmin_Screenshots'|translate }}</a></li>*/
/*                             {% endif %}*/
/*                             {% if latestVersion.readmeHtml.support %}*/
/*                                 <li><a href="#tabs-support">{{ 'CorePluginsAdmin_Support'|translate }}</a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/* */
/*                         <div id="tabs-description">*/
/*                             {{ pluginsMacro.missingRequirementsPleaseUpdateNotice(plugin) }}*/
/*                             {{ latestVersion.readmeHtml.description|raw }}*/
/*                         </div>*/
/* */
/*                         {% if latestVersion.readmeHtml.faq %}*/
/*                             <div id="tabs-faq">*/
/*                                 {{ latestVersion.readmeHtml.faq|raw }}*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                         <div id="tabs-changelog">*/
/*                             {{ pluginsMacro.missingRequirementsPleaseUpdateNotice(plugin) }}*/
/*                             {% if plugin.canBeUpdated %}*/
/*                                 <div class="alert alert-warning">*/
/*                                     {{ 'CorePluginsAdmin_PluginUpdateAvailable'|translate(plugin.currentVersion, plugin.latestVersion) }}*/
/*                                     {% if plugin.repositoryChangelogUrl %}<a rel="noreferrer"  target="_blank" href="{{ plugin.repositoryChangelogUrl }}">{{ 'CorePluginsAdmin_ViewRepositoryChangelog'|translate }}</a>{% endif %}*/
/*                                 </div>*/
/*                             {% endif %}*/
/* */
/*                             {% if latestVersion.readmeHtml.changelog %}*/
/*                                 {{ latestVersion.readmeHtml.changelog|raw }}*/
/*                             {% endif %}*/
/* */
/*                             <h3>{{ 'CorePluginsAdmin_History'|translate }}</h3>*/
/* */
/*                             <ul>*/
/*                                 {% for version in plugin.versions|reverse %}*/
/*                                     <li>*/
/*                                         {% set versionName %}*/
/*                                             <strong>*/
/*                                                 {% if version.repositoryChangelogUrl %}*/
/*                                                     <a target="_blank" title="{{ 'CorePluginsAdmin_Changelog'|translate }}" href="{{ version.repositoryChangelogUrl }}">{{ version.name }}</a>*/
/*                                                 {% else %}*/
/*                                                     {{ version.name }}*/
/*                                                 {% endif %}*/
/*                                             </strong>*/
/*                                         {% endset %}*/
/*                                         {{ 'CorePluginsAdmin_PluginVersionInfo'|translate(versionName, version.release)|raw }}*/
/*                                         </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*                         {% if plugin.screenshots|length %}*/
/*                             <div id="tabs-screenshots">*/
/*                                 <div class="thumbnails">*/
/*                                     {% for screenshot in plugin.screenshots %}*/
/*                                         <div class="thumbnail">*/
/*                                             <a href="{{ screenshot }}" target="_blank"><img src="{{ screenshot }}?w=400" width="400" alt=""></a>*/
/*                                             <p>*/
/*                                                 {{ screenshot|split('/')|last|replace({'_': ' ', '.png': '', '.jpg': '', '.jpeg': ''}) }}*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                         {% if latestVersion.readmeHtml.support %}*/
/*                             <div id="tabs-support">*/
/* */
/*                                 {{ latestVersion.readmeHtml.support|raw }}*/
/* */
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="metadata" style="width:25%;float:left;">*/
/*                     <p><br /></p>*/
/*                     <dl>*/
/*                         <dt>{{ 'CorePluginsAdmin_Version'|translate }}</dt>*/
/*                         <dd>{{ plugin.latestVersion }}</dd>*/
/*                         <dt>{{ 'CorePluginsAdmin_PluginKeywords'|translate }}</dt>*/
/*                         <dd>{{ plugin.keywords|join(', ') }}</dd>*/
/*                         <dt>{{ 'CorePluginsAdmin_LastUpdated'|translate }}</dt>*/
/*                         <dd>{{ plugin.lastUpdated }}</dd>*/
/*                         <dt>{{ 'General_Downloads'|translate }}</dt>*/
/*                         <dd title="{{ 'CorePluginsAdmin_NumDownloadsLatestVersion'|translate(latestVersion.numDownloads|number_format) }}">{{ plugin.numDownloads }}</dd>*/
/*                         <dt>{{ 'CorePluginsAdmin_Developer'|translate }}</dt>*/
/*                         <dd>{{ pluginsMacro.pluginDeveloper(plugin.owner) }}</dd>*/
/*                         <dt>{{ 'CorePluginsAdmin_Authors'|translate }}</dt>*/
/*                         <dd>{% for author in plugin.authors if author.name %}*/
/* */
/*                                 {% spaceless %}*/
/*                                     {% if author.homepage %}*/
/*                                         <a target="_blank" href="{{ author.homepage }}">{{ author.name }}</a>*/
/*                                     {% elseif author.email %}*/
/*                                         <a href="mailto:{{ author.email|escape('url') }}">{{ author.name }}</a>*/
/*                                     {% else %}*/
/*                                         {{ author.name }}*/
/*                                     {% endif %}*/
/* */
/*                                     {% if loop.index < plugin.authors|length %}*/
/*                                         ,*/
/*                                     {% endif %}*/
/*                                 {% endspaceless %}*/
/* */
/*                             {% endfor %}*/
/*                         </dd>*/
/*                         <dt>{{ 'CorePluginsAdmin_Websites'|translate }}</dt>*/
/*                         <dd>*/
/*                             {% if plugin.homepage %}*/
/*                                 <a target="_blank" href="{{ plugin.homepage }}">{{ 'CorePluginsAdmin_PluginWebsite'|translate }}</a>,*/
/*                             {% endif %}*/
/*                             <a target="_blank" href="{{ plugin.repositoryUrl }}">GitHub</a></dd>*/
/*                         {% if plugin.activity %}*/
/*                             <dt>{{ 'CorePluginsAdmin_Activity'|translate }}</dt>*/
/*                             <dd>*/
/*                                 {{ plugin.activity.numCommits }} commits*/
/* */
/*                                 {% if plugin.activity.numContributors > 1 %}*/
/*                                     {{ 'CorePluginsAdmin_ByXDevelopers'|translate(plugin.activity.numContributors) }}*/
/*                                 {% endif %}*/
/*                                 {% if plugin.activity.lastCommitDate %}*/
/*                                     {{ 'CorePluginsAdmin_LastCommitTime'|translate(plugin.activity.lastCommitDate) }}*/
/*                                 {% endif %}</dd>*/
/*                         {% endif %}*/
/*                     </dl>*/
/*                     <br />*/
/*                 </div>*/
/*             </div>*/
/*             <script type="text/javascript">*/
/*                 $(function() {*/
/* */
/*                     var active = 0;*/
/*                     {% if activeTab %}*/
/*                         var $activeTab = $('#tabs-{{ activeTab|e('js') }}');*/
/*                         if ($activeTab) {*/
/*                             active = $activeTab.index() - 1;*/
/*                         }*/
/*                     {% endif %}*/
/* */
/*                     $( "#pluginDetailsTabs" ).tabs({active: active >= 0 ? active : 0});*/
/* */
/*                     $('.pluginDetails a').each(function (index, a) {*/
/*                         var link = $(a).attr('href');*/
/* */
/*                         if (link && 0 === link.indexOf('http')) {*/
/*                             $(a).attr('target', '_blank');*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             </script>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
