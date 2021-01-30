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

/* order/add.html.twig */
class __TwigTemplate_db775495328726d7d02d552d1c676f53f0e5e015f4403a588061d0f658554475 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     <script src=\"https://js.stripe.com/v3/\"></script>


";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement ma commande- laboutique Antillaise";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<style>
 .form-check ,.subtotal{
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
<h2>Mon récapitulatif</h2>
<p> Verifiez vos information avant de payer votre commande.</p>
<hr>


<div class=\"row\">
<div class=\"col-md-6\">
       
     <strong>Mon adresse de livraison</strong><br>
     <div class=\"form-check mt-4\">
     ";
        // line 41
        echo ($context["delivery"] ?? null);
        echo "
     </div>
     <br>
     <hr>
     <div class=\"form-check\">
      <strong>Mon transporteur</strong>
        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "<br>
        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "<br>
        ";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 49) / 100), 2), "html", null, true);
        echo " €<br>
  
    </div>
</div>
<div class=\"col-md-6\">

<b class=\"mt-4 \"> Ma commande</b> 
<div class=\"order-sumary\">
";
        // line 57
        $context["total"] = null;
        // line 58
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            echo "  <div class=\"row\">
    <div class=\"col-2 mb-2 mt-4\">
              <img src=\"/uploads/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 61), "illustration", [], "any", false, false, false, 61), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
            echo "\" height=\"50px\" ><br>

    </div>
     <div class=\"col-8 mt-4\">
              ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
            echo "
              <small> 
              ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 67), "subtitle", [], "any", false, false, false, 67), "html", null, true);
            echo "
              <br>
              
              x ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 70), "html", null, true);
            echo "
              </small>
               

     </div>

    <div class=\"col-2 mt-4\">
            
                  ";
            // line 78
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 78)) / 100), 2), "html", null, true);
            echo " €
     </div>
     

      
  </div>
      ";
            // line 84
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 84), "price", [], "any", false, false, false, 84) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 84)));
            // line 85
            echo " 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "</div>
<div class=\"subtotal\">
<hr>
<strong>Sous-total:   </strong>";
        // line 90
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2), "html", null, true);
        echo " €</br>
<strong>livraison:   </strong>";
        // line 91
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 91) / 100), 2), "html", null, true);
        echo " € </br>
<hr>
<strong>Total:   </strong>";
        // line 93
        echo twig_escape_filter($this->env, ((($context["total"] ?? null) / 100) + twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 93) / 100), 2)), "html", null, true);
        echo " €</br>
</div>
<a href=\"#\" class=\"btn btn-success btn-block mt-4 mb-4\" id=\"checkout-button\">Payer <b> ";
        // line 95
        echo twig_escape_filter($this->env, ((($context["total"] ?? null) / 100) + twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 95) / 100), 2)), "html", null, true);
        echo " € <b></a>


</div>

</div>
";
    }

    // line 104
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "
  <script type=\"text/javascript\">
  //voir doc :https://stripe.com/docs/checkout/integration-builder
    var stripe = Stripe(\"pk_test_vdGiXQPj0PfPsbZSMlvXXcRp00W0XtCrA7\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/";
        // line 111
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
        echo "\", {
        method: \"POST\",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          if(session.error == 'order'){
            window.location.replace('";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "'); 

       }else{
             return stripe.redirectToCheckout({ sessionId: session.id });

       }
          
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error(\"Error:\", error);
        });
    });
  </script>

";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 119,  233 => 111,  225 => 105,  221 => 104,  210 => 95,  205 => 93,  200 => 91,  196 => 90,  191 => 87,  184 => 85,  182 => 84,  173 => 78,  162 => 70,  156 => 67,  151 => 65,  142 => 61,  138 => 59,  133 => 58,  131 => 57,  120 => 49,  116 => 48,  112 => 47,  103 => 41,  71 => 11,  67 => 10,  60 => 8,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/templates/order/add.html.twig");
    }
}
