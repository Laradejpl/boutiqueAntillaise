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

/* product/show.html.twig */
class __TwigTemplate_0cc964de1011347fd0b2b2c853dc144e70136f25238e74197696ca86a9a31634 extends Template
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
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
<section class=\"container\">
           <div class=\"row\">
             
             <div class=\"col-12\">
               
              <div class=\"card d-block w-100\">
                
                
              <center> <img src=\"../uploads/";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "illustration", [], "any", false, false, false, 16), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\"  class=\"img-fluid\"></center> 
                
                    <div class=\"card-body \">
                      <center><h4 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h4>
                      <h5 class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "subtitle", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5></center>
                      <hr>
                     <center>
                      <p class=\"mt-3\">
                        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "
                      
                      
                      </p>
                     </center>
                      <hr>
                      <center><span class=\"mt-4 \"> ";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 30) / 100), 2), "html", null, true);
        echo " €</span></center>

                     


                     
                    </div>

                </div>
            </div>


   
           


           </div>
           
</div>
<div class=\"container-fluid\">
 <div class=\"row d-flex justify-content-center\">
   <a href = \"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\" col-6  col-md-4 btn btn-primary mb-4\">
        ajouter au panier
   </a>

 </div>
</div>
<hr>

 <h3>Nos meilleurs ventes</h3>
   <p>Les articles les plus vendus.</p>
        <div class=\"row\">
            
         ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 64
            echo "         <div class=\"col-lg-3\">
        

          ";
            // line 67
            $this->loadTemplate("product/single_product.html.twig", "product/show.html.twig", 67)->display($context);
            // line 68
            echo "

          </div>
         ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        </div><!-- /.row -->


        
           

";
    }

    // line 80
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "    
";
    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 81,  195 => 80,  184 => 72,  167 => 68,  165 => 67,  160 => 64,  143 => 63,  128 => 51,  104 => 30,  95 => 24,  88 => 20,  84 => 19,  76 => 16,  64 => 7,  61 => 6,  57 => 5,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show.html.twig", "/Users/test/Downloads/laboutiqueFrancaise/templates/product/show.html.twig");
    }
}
