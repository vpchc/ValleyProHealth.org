<?php

/* @CorePluginsAdmin/marketplace.twig */
class __TwigTemplate_9c80d366e071faae63c77ce29034faa62a9d1bad4ed02a4e54e2934e61fd80a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((array_key_exists("mode", $context) && ((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "user"))) ? ("user.twig") : ("admin.twig")), "@CorePluginsAdmin/marketplace.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["pluginsMacro"] = $this->loadTemplate("@CorePluginsAdmin/macros.twig", "@CorePluginsAdmin/marketplace.twig", 2);
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Marketplace")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"marketplace\">

        <h2 piwik-enriched-headline feature-name=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Marketplace")), "html", null, true);
        echo "\">
            ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
        </h2>

        <ul class=\"nav nav-pills\">
            <li ";
        // line 15
        if ( !(isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("show" => "plugins"))), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
        echo "</a>
            </li>
            <li ";
        // line 18
        if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("show" => "themes"))), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Themes")), "html", null, true);
        echo "</a>
            </li>
        </ul>

        <div class=\"marketplace-max-width\">

            <p>
                ";
        // line 26
        if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
            // line 27
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ThemesDescription")), "html", null, true);
            echo "
                    ";
            // line 28
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallingNewPluginViaMarketplaceOrUpload", "<a href=\"#\" class=\"uploadPlugin\">", "</a>"));
            echo "
                    <br/>
                    ";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_BeCarefulUsingThemes")), "html", null, true);
            echo "
                ";
        } else {
            // line 32
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginsExtendPiwik")), "html", null, true);
            echo "
                    ";
            // line 33
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallingNewPluginViaMarketplaceOrUpload", "<a href=\"#\" class=\"uploadPlugin\">", "</a>"));
            echo "
                    <br/>
                    ";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_BeCarefulUsingPlugins")), "html", null, true);
            echo "
                ";
        }
        // line 37
        echo "            </p>

            ";
        // line 39
        if ( !(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 40
            echo "                <p>
                    ";
            // line 41
            if ((isset($context["showThemes"]) ? $context["showThemes"] : $this->getContext($context, "showThemes"))) {
                // line 42
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NotAllowedToBrowseMarketplaceThemes")), "html", null, true);
                echo "
                    ";
            } else {
                // line 44
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NotAllowedToBrowseMarketplacePlugins")), "html", null, true);
                echo "
                    ";
            }
            // line 46
            echo "                </p>
            ";
        }
        // line 48
        echo "
        </div>

        <hr/>

        <div class=\"ui-confirm\" id=\"installPluginByUpload\">
            <h2>";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_TeaserExtendPiwikByUpload")), "html", null, true);
        echo "</h2>

            <p class=\"description\"> ";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AllowedUploadFormats")), "html", null, true);
        echo " </p>

            <form enctype=\"multipart/form-data\" method=\"post\" id=\"uploadPluginForm\"
                  action=\"";
        // line 59
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "uploadPlugin", "nonce" => (isset($context["installNonce"]) ? $context["installNonce"] : $this->getContext($context, "installNonce"))))), "html", null, true);
        echo "\">
                <input type=\"file\" name=\"pluginZip\">
                <br />
                <input class=\"startUpload\" type=\"submit\" value=\"";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UploadZipFile")), "html", null, true);
        echo "\">
            </form>
        </div>

        ";
        // line 66
        $this->loadTemplate("@CorePluginsAdmin/marketplace/plugin-list.twig", "@CorePluginsAdmin/marketplace.twig", 66)->display($context);
        // line 67
        echo "
        <div class=\"footer-message\">
            ";
        // line 69
        $context["marketplaceSellPluginSubject"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_MarketplaceSellPluginSubject"));
        // line 70
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_GetEarlyAccessForPaidPlugins", (("<a href='mailto:hello@piwik.org?subject=" . (isset($context["marketplaceSellPluginSubject"]) ? $context["marketplaceSellPluginSubject"] : $this->getContext($context, "marketplaceSellPluginSubject"))) . "'>"), "</a>"));
        echo "
            <br/>
            ";
        // line 72
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_DevelopersLearnHowToDevelopPlugins", "<a href=\"?module=Proxy&action=redirect&url=http://developer.piwik.org/plugins\" target=\"_blank\">", "</a>"));
        echo "
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/marketplace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 72,  183 => 70,  181 => 69,  177 => 67,  175 => 66,  168 => 62,  162 => 59,  156 => 56,  151 => 54,  143 => 48,  139 => 46,  133 => 44,  127 => 42,  125 => 41,  122 => 40,  120 => 39,  116 => 37,  111 => 35,  106 => 33,  101 => 32,  96 => 30,  91 => 28,  86 => 27,  84 => 26,  72 => 19,  66 => 18,  59 => 16,  53 => 15,  46 => 11,  42 => 10,  37 => 7,  34 => 6,  30 => 1,  26 => 4,  24 => 2,  18 => 1,);
    }
}
/* {% extends mode is defined and mode == 'user' ? "user.twig" : "admin.twig" %}*/
/* {% import '@CorePluginsAdmin/macros.twig' as pluginsMacro %}*/
/* */
/* {% set title %}{{ 'CorePluginsAdmin_Marketplace'|translate }}{% endset %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="marketplace">*/
/* */
/*         <h2 piwik-enriched-headline feature-name="{{ 'CorePluginsAdmin_Marketplace'|translate }}">*/
/*             {{ title }}*/
/*         </h2>*/
/* */
/*         <ul class="nav nav-pills">*/
/*             <li {% if not showThemes %}class="active"{% endif %}>*/
/*                 <a href="{{ linkTo({'show': 'plugins'}) }}">{{ 'General_Plugins'|translate }}</a>*/
/*             </li>*/
/*             <li {% if showThemes %}class="active"{% endif %}>*/
/*                 <a href="{{ linkTo({'show': 'themes'}) }}">{{ 'CorePluginsAdmin_Themes'|translate }}</a>*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <div class="marketplace-max-width">*/
/* */
/*             <p>*/
/*                 {% if showThemes %}*/
/*                     {{ 'CorePluginsAdmin_ThemesDescription'|translate }}*/
/*                     {{ 'CorePluginsAdmin_InstallingNewPluginViaMarketplaceOrUpload'|translate('<a href="#" class="uploadPlugin">','</a>')|raw }}*/
/*                     <br/>*/
/*                     {{ 'CorePluginsAdmin_BeCarefulUsingThemes'|translate }}*/
/*                 {% else %}*/
/*                     {{ 'CorePluginsAdmin_PluginsExtendPiwik'|translate }}*/
/*                     {{ 'CorePluginsAdmin_InstallingNewPluginViaMarketplaceOrUpload'|translate('<a href="#" class="uploadPlugin">','</a>')|raw }}*/
/*                     <br/>*/
/*                     {{ 'CorePluginsAdmin_BeCarefulUsingPlugins'|translate }}*/
/*                 {% endif %}*/
/*             </p>*/
/* */
/*             {% if not isSuperUser %}*/
/*                 <p>*/
/*                     {% if showThemes %}*/
/*                         {{ 'CorePluginsAdmin_NotAllowedToBrowseMarketplaceThemes'|translate }}*/
/*                     {% else %}*/
/*                         {{ 'CorePluginsAdmin_NotAllowedToBrowseMarketplacePlugins'|translate }}*/
/*                     {% endif %}*/
/*                 </p>*/
/*             {% endif %}*/
/* */
/*         </div>*/
/* */
/*         <hr/>*/
/* */
/*         <div class="ui-confirm" id="installPluginByUpload">*/
/*             <h2>{{ 'CorePluginsAdmin_TeaserExtendPiwikByUpload'|translate }}</h2>*/
/* */
/*             <p class="description"> {{ 'CorePluginsAdmin_AllowedUploadFormats'|translate }} </p>*/
/* */
/*             <form enctype="multipart/form-data" method="post" id="uploadPluginForm"*/
/*                   action="{{ linkTo({'action':'uploadPlugin', 'nonce': installNonce}) }}">*/
/*                 <input type="file" name="pluginZip">*/
/*                 <br />*/
/*                 <input class="startUpload" type="submit" value="{{ 'CorePluginsAdmin_UploadZipFile'|translate }}">*/
/*             </form>*/
/*         </div>*/
/* */
/*         {% include '@CorePluginsAdmin/marketplace/plugin-list.twig' %}*/
/* */
/*         <div class="footer-message">*/
/*             {% set marketplaceSellPluginSubject = 'CorePluginsAdmin_MarketplaceSellPluginSubject'|translate %}*/
/*             {{ 'CorePluginsAdmin_GetEarlyAccessForPaidPlugins'|translate("<a href='mailto:hello@piwik.org?subject=" ~ marketplaceSellPluginSubject ~ "'>", "</a>")|raw }}*/
/*             <br/>*/
/*             {{ 'CorePluginsAdmin_DevelopersLearnHowToDevelopPlugins'|translate('<a href="?module=Proxy&action=redirect&url=http://developer.piwik.org/plugins" target="_blank">', '</a>')|raw }}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
