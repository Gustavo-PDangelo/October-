<?php

/* C:\xampp\htdocs\install-master/themes/rainlab-vanilla/partials/footer.htm */
class __TwigTemplate_2c5e722e0e89c3fbf02ca8b46ac4249ff84d3cd04813a4d371344b10c2ce644b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; Desenvolvido por ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Diretoria de Imagem UFJF | Universidade Federal de juiz de Fora </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; Desenvolvido por {{ \"now\"|date(\"Y\") }} Diretoria de Imagem UFJF | Universidade Federal de juiz de Fora </p>
    </div>
</div>", "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/partials/footer.htm", "");
    }
}
