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
class __TwigTemplate_25549fe0954df6c918d0e332028f587e22ffdbc1559986dc38adf2219a7b07af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 3
        echo "     <script src=\"https://js.stripe.com/v3/\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement ma commande- laboutique Antillaise";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 41, $this->source); })());
        echo "
     </div>
     <br>
     <hr>
     <div class=\"form-check\">
      <strong>Mon transporteur</strong>
        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "<br>
        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "<br>
        ";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 49, $this->source); })()), "price", [], "any", false, false, false, 49) / 100), 2), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 58, $this->source); })()));
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
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 84, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 84), "price", [], "any", false, false, false, 84) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 84)));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })()) / 100), 2), "html", null, true);
        echo " €</br>
<strong>livraison:   </strong>";
        // line 91
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 91, $this->source); })()), "price", [], "any", false, false, false, 91) / 100), 2), "html", null, true);
        echo " € </br>
<hr>
<strong>Total:   </strong>";
        // line 93
        echo twig_escape_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 93, $this->source); })()) / 100) + twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 93, $this->source); })()), "price", [], "any", false, false, false, 93) / 100), 2)), "html", null, true);
        echo " €</br>
</div>
<a href=\"#\" class=\"btn btn-success btn-block mt-4 mb-4\" id=\"checkout-button\">Payer <b> ";
        // line 95
        echo twig_escape_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 95, $this->source); })()) / 100) + twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 95, $this->source); })()), "price", [], "any", false, false, false, 95) / 100), 2)), "html", null, true);
        echo " € <b></a>


</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 105
        echo "
  <script type=\"text/javascript\">
  //voir doc :https://stripe.com/docs/checkout/integration-builder
    var stripe = Stripe(\"pk_test_vdGiXQPj0PfPsbZSMlvXXcRp00W0XtCrA7\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 111, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  298 => 119,  287 => 111,  279 => 105,  269 => 104,  252 => 95,  247 => 93,  242 => 91,  238 => 90,  233 => 87,  226 => 85,  224 => 84,  215 => 78,  204 => 70,  198 => 67,  193 => 65,  184 => 61,  180 => 59,  175 => 58,  173 => 57,  162 => 49,  158 => 48,  154 => 47,  145 => 41,  113 => 11,  103 => 10,  84 => 8,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block javascript %}
     <script src=\"https://js.stripe.com/v3/\"></script>


{% endblock %}

{% block title %}Paiement ma commande- laboutique Antillaise{% endblock %}

{% block content %}
<style>
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
     {{delivery|raw}}
     </div>
     <br>
     <hr>
     <div class=\"form-check\">
      <strong>Mon transporteur</strong>
        {{carrier.name}}<br>
        {{carrier.description}}<br>
        {{(carrier.price /100)| number_format(2)}} €<br>
  
    </div>
</div>
<div class=\"col-md-6\">

<b class=\"mt-4 \"> Ma commande</b> 
<div class=\"order-sumary\">
{% set total = null %}
 {% for product in cart %}
  <div class=\"row\">
    <div class=\"col-2 mb-2 mt-4\">
              <img src=\"/uploads/{{product.product.illustration}}\" alt=\"{{product.product.name}}\" height=\"50px\" ><br>

    </div>
     <div class=\"col-8 mt-4\">
              {{product.product.name}}
              <small> 
              {{product.product.subtitle}}
              <br>
              
              x {{ product.quantity }}
              </small>
               

     </div>

    <div class=\"col-2 mt-4\">
            
                  {{((product.product.price * product.quantity) /100)| number_format(2)}} €
     </div>
     

      
  </div>
      {% set total = total +(product.product.price * product.quantity ) %}
 
 {% endfor %}
</div>
<div class=\"subtotal\">
<hr>
<strong>Sous-total:   </strong>{{(total  /100)| number_format(2)}} €</br>
<strong>livraison:   </strong>{{(carrier.price /100)| number_format(2)}} € </br>
<hr>
<strong>Total:   </strong>{{(total  /100)+ (carrier.price /100)| number_format(2)}} €</br>
</div>
<a href=\"#\" class=\"btn btn-success btn-block mt-4 mb-4\" id=\"checkout-button\">Payer <b> {{(total  /100)+ (carrier.price /100)| number_format(2)}} € <b></a>


</div>

</div>
{% endblock %}


{% block script %}

  <script type=\"text/javascript\">
  //voir doc :https://stripe.com/docs/checkout/integration-builder
    var stripe = Stripe(\"pk_test_vdGiXQPj0PfPsbZSMlvXXcRp00W0XtCrA7\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/{{reference}}\", {
        method: \"POST\",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          if(session.error == 'order'){
            window.location.replace('{{path('order')}}'); 

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

{% endblock %}
", "order/add.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/templates/order/add.html.twig");
    }
}
