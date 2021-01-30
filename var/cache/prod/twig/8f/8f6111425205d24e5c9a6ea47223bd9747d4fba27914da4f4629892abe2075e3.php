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

/* order/index.html.twig */
class __TwigTemplate_54f87fd042506e834d5206d0f6ffd03e8cd0f05d773c86e501b2fee5e89f95ca extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande- laboutique Antillaise";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
.form-check{
       padding: 20px 65px;
       background-color:white;
       margin-top:10px;
       border-radius:10px; 
}
.col-form-label{

       font-weight:bold;
}
.order-sumary{
        background-color:white;
        border-radius:10px;
        margin-top:20px;


}

</style>
<h2>Je passe ma commande</h2>
<p> Choisissez vos preferences sur la boutique Antillaise. </p>
<hr>


<div class=\"row\">
<div class=\"col-md-6\">
       
       ";
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "         ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_recap")]);
        echo "
         ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, false, 36), 'label', ["label" => "Choissisez votre adresse de livraison"]);
        echo "
         <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\">Ajoutez une nouvelle adresse.</a>
          ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
       ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "       ";
        echo twig_replace_filter(($context["formHtml"] ?? null), ["[br]" => "<br/>"]);
        echo "
       
</div>
<div class=\"col-md-6\">

<b class=\"mt-4 \"> Recap de la commande</b> 
<div class=\"order-sumary\">
 ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "  <div class=\"row\">
    <div class=\"col-2 mb-2 mt-4\">
              <img src=\"/uploads/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "illustration", [], "any", false, false, false, 50), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "\" height=\"50px\" ><br>

    </div>
     <div class=\"col-8 mt-4\">
              ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "
              ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "subtitle", [], "any", false, false, false, 55), "html", null, true);
            echo "

     </div>

    <div class=\"col-2 mt-4\">
             x ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 60), "html", null, true);
            echo "

     </div>
     

      
  </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>


</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 68,  148 => 60,  140 => 55,  136 => 54,  127 => 50,  123 => 48,  119 => 47,  108 => 40,  103 => 38,  99 => 37,  95 => 36,  90 => 35,  88 => 34,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/index.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/templates/order/index.html.twig");
    }
}
