<?php

/* Frontend/product-detail.html.twig */
class __TwigTemplate_c96231dd1d9f601c8015ca4f0a9400aa0c97515a179b7a935c78ff6c6e27c950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Frontend/layout.html.twig", "Frontend/product-detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Frontend/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div style=\"width:100%;margin:auto;\">
    <a href=\"/chi-tiet-san-pham\">
        <img src=\"/assets/Frontend/images/Art_product-detail.jpg\" style=\"width:100%;\" />
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "Frontend/product-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Frontend/product-detail.html.twig", "E:\\www\\mvcframework\\App\\Views\\Frontend\\product-detail.html.twig");
    }
}
