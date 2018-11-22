<?php

/* C:\xampp\htdocs\install-master/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_4627ff95363b40caa8ab6629053f115d3045a1965e281f66f8f0644902060075 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cerimonial.jpg");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Cerimonial e Eventos</h3>
                <br />
                <p>
                    <br />
                    <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cerimonial-e-eventos");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/criacao.jpg");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Criação e Audiovisual</h3>
                <br />
                <p>
                <br />
                    <a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("criacao-e-audiovisual");
        echo "\" class=\"btn btn-lg btn-info btn-agora vai \" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jornalismo.jpg");
        echo "\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Jornalismo e Imprensa</h3>
                <br />
                <p>
                    <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jornalismo-e-imprensa");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/secretaria.jpg");
        echo "\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Secretaria</h3>
                <br />
                <p>
                <br />
                    <a href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("secretaria");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  90 => 48,  78 => 39,  70 => 34,  58 => 25,  49 => 19,  38 => 11,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/cerimonial.jpg'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Cerimonial e Eventos</h3>
                <br />
                <p>
                    <br />
                    <a href=\"{{ 'cerimonial-e-eventos'|page }}\" class=\"btn btn-lg btn-info\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/criacao.jpg'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Criação e Audiovisual</h3>
                <br />
                <p>
                <br />
                    <a href=\"{{ 'criacao-e-audiovisual'|page }}\" class=\"btn btn-lg btn-info btn-agora vai \" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/jornalismo.jpg'|theme }}\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Jornalismo e Imprensa</h3>
                <br />
                <p>
                    <a href=\"{{ 'jornalismo-e-imprensa'|page }}\" class=\"btn btn-lg btn-success\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/secretaria.jpg'|theme }}\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Secretaria</h3>
                <br />
                <p>
                <br />
                    <a href=\"{{ 'secretaria'|page }}\" class=\"btn btn-lg btn-warning\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
