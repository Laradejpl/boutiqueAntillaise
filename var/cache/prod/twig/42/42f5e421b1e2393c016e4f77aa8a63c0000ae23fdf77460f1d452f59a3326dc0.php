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

/* reset_password/index.html.twig */
class __TwigTemplate_81117a32aacbd0ab1af4d6ee766ce403ecec32a9e619c037065192cf559a90cf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Mot de passe oublié .La boutique des Antilles";
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

     ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "
     <div class=\"alert alert-info\">";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>


     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

      <form method=\"post\">
       

          <h1 class=\"h3 mb-3 font-weight-normal\">Réinitialiser  votre mon mot de passe</h1>
          <label for=\"inputEmail\"> votre email</label>
          <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Votre email\" required autofocus>
         

    ";
        // line 47
        echo "
    <button class=\"btn btn-info btn-block mb-4 mt-3\" type=\"submit\">
       Valider
    </button>
    <hr>
    <p class=\"text-center\"> Ou souhaitez vous  <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Vous connecter.</a></p>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "reset_password/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  104 => 47,  92 => 27,  82 => 23,  79 => 22,  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/index.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/templates/reset_password/index.html.twig");
    }
}
