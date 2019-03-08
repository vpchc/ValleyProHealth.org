<?php

/* @Overlay/startOverlaySession.twig */
class __TwigTemplate_aacaf0f3a1e27fc57b68f50f4698eb768294894629d1b909a4c7a29f225f013e extends Twig_Template
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
        echo "<html><head><title></title></head><body>
<script type=\"text/javascript\">
    function handleProtocol(url) {
        if (";
        // line 4
        if ((isset($context["isHttps"]) ? $context["isHttps"] : $this->getContext($context, "isHttps"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ") {
            return url.replace(/http:\\/\\//i, \"https://\");
        } else {
            return url.replace(/https:\\/\\//i, \"http://\");
        }
    }

    function removeUrlPrefix(url) {
        return url.replace(/http(s)?:\\/\\/(www\\.)?/i, \"\");
    }

    if (window.location.hash) {
        var match = false;

        var urlToRedirect = window.location.hash.substr(1);
        var urlToRedirectWithoutPrefix = removeUrlPrefix(urlToRedirect);

        var knownUrls = ";
        // line 21
        echo (isset($context["knownUrls"]) ? $context["knownUrls"] : $this->getContext($context, "knownUrls"));
        echo ";
        for (var i = 0; i < knownUrls.length; i++) {
            var testUrl = removeUrlPrefix(knownUrls[i]);
            if (urlToRedirectWithoutPrefix.substr(0, testUrl.length) == testUrl) {
                match = true;
                if (navigator.appName == \"Microsoft Internet Explorer\") {
                    // internet explorer loses the referrer if we use window.location.href=X
                    var referLink = document.createElement(\"a\");
                    referLink.href = handleProtocol(urlToRedirect);
                    document.body.appendChild(referLink);
                    referLink.click();
                } else {
                    window.location.href = handleProtocol(urlToRedirect);
                }
                break;
            }
        }

        if (!match) {
            var idSite = window.location.href.match(/idSite=([0-9]+)/i)[1];
            window.location.href = \"index.php?module=Overlay&action=showErrorWrongDomain\"
                    + \"&idSite=\" + idSite
                    + \"&url=\" + encodeURIComponent(urlToRedirect);
        }
    }
    else {
        window.location.href = handleProtocol(\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["mainUrl"]) ? $context["mainUrl"] : $this->getContext($context, "mainUrl")), "js"), "html", null, true);
        echo "\");
    };
</script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "@Overlay/startOverlaySession.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 47,  48 => 21,  24 => 4,  19 => 1,);
    }
}
/* <html><head><title></title></head><body>*/
/* <script type="text/javascript">*/
/*     function handleProtocol(url) {*/
/*         if ({% if isHttps %}true{% else %}false{% endif %}) {*/
/*             return url.replace(/http:\/\//i, "https://");*/
/*         } else {*/
/*             return url.replace(/https:\/\//i, "http://");*/
/*         }*/
/*     }*/
/* */
/*     function removeUrlPrefix(url) {*/
/*         return url.replace(/http(s)?:\/\/(www\.)?/i, "");*/
/*     }*/
/* */
/*     if (window.location.hash) {*/
/*         var match = false;*/
/* */
/*         var urlToRedirect = window.location.hash.substr(1);*/
/*         var urlToRedirectWithoutPrefix = removeUrlPrefix(urlToRedirect);*/
/* */
/*         var knownUrls = {{ knownUrls|raw }};*/
/*         for (var i = 0; i < knownUrls.length; i++) {*/
/*             var testUrl = removeUrlPrefix(knownUrls[i]);*/
/*             if (urlToRedirectWithoutPrefix.substr(0, testUrl.length) == testUrl) {*/
/*                 match = true;*/
/*                 if (navigator.appName == "Microsoft Internet Explorer") {*/
/*                     // internet explorer loses the referrer if we use window.location.href=X*/
/*                     var referLink = document.createElement("a");*/
/*                     referLink.href = handleProtocol(urlToRedirect);*/
/*                     document.body.appendChild(referLink);*/
/*                     referLink.click();*/
/*                 } else {*/
/*                     window.location.href = handleProtocol(urlToRedirect);*/
/*                 }*/
/*                 break;*/
/*             }*/
/*         }*/
/* */
/*         if (!match) {*/
/*             var idSite = window.location.href.match(/idSite=([0-9]+)/i)[1];*/
/*             window.location.href = "index.php?module=Overlay&action=showErrorWrongDomain"*/
/*                     + "&idSite=" + idSite*/
/*                     + "&url=" + encodeURIComponent(urlToRedirect);*/
/*         }*/
/*     }*/
/*     else {*/
/*         window.location.href = handleProtocol("{{ mainUrl|e('js') }}");*/
/*     };*/
/* </script>*/
/* </body></html>*/
