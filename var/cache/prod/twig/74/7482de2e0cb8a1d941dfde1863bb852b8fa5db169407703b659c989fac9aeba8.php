<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_123d2e62473b1d148958dce8628dd389673b456f0cdcfef855eb20639ec3fe6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_4a985bec8f1bc111f99fd409d96340e333835ddb00a0e688ef7b87cc907a8d66"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"generator\" content=\"EasyAdmin\" />

    <title>";
        // line 13
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 15
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 33), "textDirection", [], "any", false, false, false, 33)))) {
            // line 34
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-custom-rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 43
        echo "</head>

";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 207
        echo "</html>
";
    }

    // line 13
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 15
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 19
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 20), "cssFiles", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 20), "cssFiles", [], "any", false, false, false, 20)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 20), "cssFiles", [], "any", false, false, false, 20)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 21
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
    }

    // line 25
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 26)), "html", null, true);
        echo "\">
    ";
    }

    // line 29
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 38
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 39), "headContents", [], "any", true, true, false, 39) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 39), "headContents", [], "any", false, false, false, 39)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 39), "headContents", [], "any", false, false, false, 39)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 40
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 47
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 191
        echo "
    ";
        // line 192
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 193
        echo "
    ";
        // line 194
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 199
        echo "
    ";
        // line 200
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 205
        echo "    </body>
";
    }

    // line 46
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 50
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 50), "contentWidth", [], "any", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 50), "contentWidth", [], "any", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 50), "contentWidth", [], "any", false, false, false, 50)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 50)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 51
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 51), "sidebarWidth", [], "any", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 51), "sidebarWidth", [], "any", false, false, false, 51)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 51), "sidebarWidth", [], "any", false, false, false, 51)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 51)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 51)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 56
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 60
        echo "
        <div class=\"wrapper\">
            ";
        // line 62
        $this->displayBlock('wrapper', $context, $blocks);
        // line 189
        echo "        </div>
    ";
    }

    // line 57
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 58));
        echo "
        ";
    }

    // line 62
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                <header class=\"main-header\">
                    ";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 126
        echo "                </header>

                <aside class=\"main-sidebar\">
                    ";
        // line 129
        $this->displayBlock('sidebar', $context, $blocks);
        // line 137
        echo "                </aside>

                <div class=\"content-wrapper\">
                    <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                    ";
        // line 142
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "
                    <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                </div>
            ";
    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                        <nav class=\"navbar\" role=\"navigation\">
                            ";
        // line 66
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 79
        echo "                        </nav>

                        ";
        // line 81
        ob_start(function () { return ''; });
        // line 82
        echo "                            <div class=\"popover-content-section user-details ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 82), "items", [], "any", false, false, false, 82)), 0))) ? ("user-has-actions") : (""));
        echo "\">
                                <p class=\"small text-muted mb-0\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                                <p class=\"user-details-name\">
                                    ";
        // line 85
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 85))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85))), "html", null, true);
        echo "
                                </p>
                            </div>

                            ";
        // line 89
        $this->displayBlock('user_menu', $context, $blocks);
        // line 101
        echo "                        ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "
                        <div class=\"content-top navbar-custom-menu\">
                            ";
        // line 104
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 124
        echo "                        </div>
                    ";
    }

    // line 66
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                                    <i class=\"fa fa-fw fa-bars\"></i>
                                </button>

                                <div id=\"header-logo\">
                                    ";
        // line 72
        $this->displayBlock('header_logo', $context, $blocks);
        // line 77
        echo "                                </div>
                            ";
    }

    // line 72
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                        <a class=\"logo ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 73)), 14))) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 73)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 73));
        echo "\">
                                            ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 74);
        echo "
                                        </a>
                                    ";
    }

    // line 89
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                                ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 90), "items", [], "any", false, false, false, 90)), 0))) {
            // line 91
            echo "                                    <div class=\"popover-content-section user-menu\">
                                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 92), "items", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 93
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 93), "html", null, true);
                echo "\" class=\"user-action ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 93), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 93), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 93), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\">
                                                ";
                // line 94
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 94))) {
                    echo "<i class=\"fa fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 94), "html", null, true);
                    echo "\"></i>";
                }
                // line 95
                echo "                                                <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 95), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                    </div>
                                ";
        }
        // line 100
        echo "                            ";
    }

    // line 104
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                                ";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 106
            echo "                                    ";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 107
            echo "                                ";
        } else {
            // line 108
            echo "                                    ";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 109
            echo "                                ";
        }
        // line 110
        echo "
                                <div class=\"user user-menu-wrapper ";
        // line 111
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                                    ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 112), "isAvatarDisplayed", [], "any", false, false, false, 112)) {
            // line 113
            echo "                                        ";
            if ((0 === twig_compare(null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 113), "avatarUrl", [], "any", false, false, false, 113)))) {
                // line 114
                echo "                                            <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 114))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                        ";
            } else {
                // line 116
                echo "                                            <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 116), "avatarUrl", [], "any", false, false, false, 116), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 118
            echo "                                    ";
        }
        // line 119
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 119), "isNameDisplayed", [], "any", false, false, false, 119)) {
            // line 120
            echo "                                        <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 122
        echo "                                </div>
                            ";
    }

    // line 129
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "                        <section class=\"sidebar\">
                            ";
        // line 131
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 134
        echo "                        </section>

                    ";
    }

    // line 131
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 132));
        echo "
                            ";
    }

    // line 142
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                        <div class=\"content\">
                            ";
        // line 144
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 170
        echo "
                            <section id=\"main\" class=\"content-body\">
                                ";
        // line 172
        $this->displayBlock('main', $context, $blocks);
        // line 173
        echo "                            </section>

                            ";
        // line 175
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 183
        echo "                        </div>
                    ";
    }

    // line 144
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                                ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 145), "helpMessage", [], "any", true, true, false, 145) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 145), "helpMessage", [], "any", false, false, false, 145)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 145), "helpMessage", [], "any", false, false, false, 145)) : ("")));
        // line 146
        echo "                                <section class=\"content-header\">
                                    ";
        // line 147
        $this->displayBlock('content_header', $context, $blocks);
        // line 168
        echo "                                </section>
                            ";
    }

    // line 147
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 151
        $this->displayBlock('content_title', $context, $blocks);
        // line 152
        echo "
                                                    ";
        // line 153
        $this->displayBlock('content_help', $context, $blocks);
        // line 160
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 163
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 166
        echo "                                        </div>
                                    ";
    }

    // line 151
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 153
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 155
            echo "                                                            <span class=\"content-header-help\">
                                                                <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 156), "helpMessage", [], "any", false, false, false, 156), "html_attr");
            echo "\"></i>
                                                            </span>
                                                        ";
        }
        // line 159
        echo "                                                    ";
    }

    // line 163
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 172
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 175
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "                                ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 177
        echo "                                ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 178
            echo "                                    <section class=\"content-footer\">
                                        ";
            // line 179
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                    </section>
                                ";
        }
        // line 182
        echo "                            ";
    }

    // line 192
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 194
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 195), "jsFiles", [], "any", true, true, false, 195) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 195), "jsFiles", [], "any", false, false, false, 195)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 195), "jsFiles", [], "any", false, false, false, 195)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 196
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "    ";
    }

    // line 200
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 201), "bodyContents", [], "any", true, true, false, 201) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 201), "bodyContents", [], "any", false, false, false, 201)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 201), "bodyContents", [], "any", false, false, false, 201)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 202
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 204,  757 => 202,  752 => 201,  748 => 200,  744 => 198,  735 => 196,  730 => 195,  726 => 194,  720 => 192,  716 => 182,  710 => 179,  707 => 178,  704 => 177,  701 => 176,  697 => 175,  691 => 172,  679 => 164,  675 => 163,  671 => 159,  665 => 156,  662 => 155,  659 => 154,  655 => 153,  649 => 151,  644 => 166,  642 => 163,  637 => 160,  635 => 153,  632 => 152,  630 => 151,  625 => 148,  621 => 147,  616 => 168,  614 => 147,  611 => 146,  608 => 145,  604 => 144,  599 => 183,  597 => 175,  593 => 173,  591 => 172,  587 => 170,  585 => 144,  582 => 143,  578 => 142,  571 => 132,  567 => 131,  561 => 134,  559 => 131,  556 => 130,  552 => 129,  547 => 122,  541 => 120,  538 => 119,  535 => 118,  529 => 116,  523 => 114,  520 => 113,  518 => 112,  512 => 111,  509 => 110,  506 => 109,  503 => 108,  500 => 107,  497 => 106,  494 => 105,  490 => 104,  486 => 100,  482 => 98,  472 => 95,  466 => 94,  455 => 93,  451 => 92,  448 => 91,  445 => 90,  441 => 89,  434 => 74,  425 => 73,  421 => 72,  416 => 77,  414 => 72,  407 => 67,  403 => 66,  398 => 124,  396 => 104,  392 => 102,  389 => 101,  387 => 89,  380 => 85,  375 => 83,  370 => 82,  368 => 81,  364 => 79,  362 => 66,  359 => 65,  355 => 64,  348 => 185,  346 => 142,  339 => 137,  337 => 129,  332 => 126,  330 => 64,  327 => 63,  323 => 62,  316 => 58,  312 => 57,  307 => 189,  305 => 62,  301 => 60,  298 => 57,  294 => 56,  286 => 51,  282 => 50,  278 => 48,  274 => 47,  263 => 46,  258 => 205,  256 => 200,  253 => 199,  251 => 194,  248 => 193,  246 => 192,  243 => 191,  241 => 56,  238 => 55,  236 => 47,  229 => 46,  225 => 45,  221 => 42,  212 => 40,  207 => 39,  203 => 38,  196 => 30,  192 => 29,  185 => 26,  181 => 25,  177 => 23,  168 => 21,  163 => 20,  159 => 19,  152 => 16,  148 => 15,  141 => 13,  136 => 207,  134 => 45,  130 => 43,  128 => 38,  125 => 37,  120 => 35,  115 => 34,  113 => 33,  110 => 32,  108 => 29,  105 => 28,  103 => 25,  100 => 24,  98 => 19,  95 => 18,  93 => 15,  88 => 13,  75 => 5,  71 => 3,  69 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/vendor/easycorp/easyadmin-bundle/src/Resources/views/layout.html.twig");
    }
}
