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

/* security/login.html.twig */
class __TwigTemplate_05075ae01b055b45a75cd71fab3cb65973cc99b897823e3f7d29a9dbaa368088 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " se connecter .La boutique des Antilles";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>


.block-small{
    max-width: 600px;
    margin:0 auto;


}


</style>

<div class=\"block-small\">


      <form method=\"post\">
          ";
        // line 23
        if (($context["error"] ?? null)) {
            // line 24
            echo "              <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 26
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "
                <div class=\"alert alert-info\">";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>


           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
          ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "              <div class=\"mb-3\">
                  You are logged in as ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
              </div>
          ";
        }
        // line 38
        echo "
          <h1 class=\"h3 mb-3 font-weight-normal\">Merci de vous connecter</h1>
          <label for=\"inputEmail\"> votre email</label>
          <input type=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Votre email\" required autofocus>
          <label for=\"inputPassword\">Votre mot de passe</label>
          <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"  placeholder=\"Votre mot de passe\"required>

          <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

    ";
        // line 58
        echo "
    <button class=\"btn btn-info btn-block mb-4 mt-3\" type=\"submit\">
        Se connecter
    </button>
    <hr>
        <p class=\"text-center\"><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
        echo "\">Mot de passe oublié.</a></p>

    <p class=\"text-center\"> Ou souhaitez vous  <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">creer un compte.</a></p>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 65,  144 => 63,  137 => 58,  132 => 46,  124 => 41,  119 => 38,  111 => 35,  108 => 34,  106 => 33,  103 => 32,  93 => 28,  90 => 27,  85 => 26,  79 => 24,  77 => 23,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/templates/security/login.html.twig");
    }
}
