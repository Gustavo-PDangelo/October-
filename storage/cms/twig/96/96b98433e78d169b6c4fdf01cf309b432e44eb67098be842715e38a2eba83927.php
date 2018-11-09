<?php

/* C:\xampp\htdocs\install-master\October-/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_b1502b054faba29c96c6743391a5820a108489fdbc9f2f23fc48450210e2ba81 extends Twig_Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-user.png");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Cerimonial e Eventos</h3>
                <br />
                <p>
                    <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-user.png");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Criação e Audio Visual</h3>
                <br />
                <p>
                    <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-blog.png");
        echo "\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Jornalismo e Assesoria de Imprensa</h3>
                <br />
                <p>
                    <a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/plugin-forum.png");
        echo "\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Secretaria</h3>
                <br />
                <p>
                    <a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master\\October-/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  88 => 46,  76 => 37,  68 => 32,  56 => 23,  48 => 18,  37 => 10,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-user.png'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Cerimonial e Eventos</h3>
                <br />
                <p>
                    <a href=\"{{ 'account'|page }}\" class=\"btn btn-lg btn-info\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-user.png'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Criação e Audio Visual</h3>
                <br />
                <p>
                    <a href=\"{{ 'account'|page }}\" class=\"btn btn-lg btn-info\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-blog.png'|theme }}\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Jornalismo e Assesoria de Imprensa</h3>
                <br />
                <p>
                    <a href=\"{{ 'blog'|page }}\" class=\"btn btn-lg btn-success\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-3\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-forum.png'|theme }}\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Secretaria</h3>
                <br />
                <p>
                    <a href=\"{{ 'forum'|page }}\" class=\"btn btn-lg btn-warning\" role=\"button\">Entrar</a>
                </p>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\install-master\\October-/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
