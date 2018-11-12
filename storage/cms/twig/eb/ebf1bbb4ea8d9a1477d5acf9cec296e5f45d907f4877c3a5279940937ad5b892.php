<?php

/* C:\xampp\htdocs\install-master/themes/rainlab-vanilla/layouts/default.htm */
class __TwigTemplate_1cd465b6c20b5762b90c49d6b56c41674e2a3686fe5a2a966cf79948fca84a3e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/less/theme.less"));
        // line 14
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                            <div class=\"Texto-para-lado\">
                                <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"></a>
                            </div>                    
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
        // line 37
        if (($context["user"] ?? null)) {
            // line 38
            echo "                                <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
                            ";
        }
        // line 40
        echo "                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        ";
        // line 47
        $context["jumbotronTexture"] = twig_random($this->env, array(0 => "ufjf-1", 1 => "ufjf-2", 2 => "ufjf-3", 3 => "ufjf-4"));
        // line 48
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url(";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/textures/" . ($context["jumbotronTexture"] ?? null)) . ".png"));
        echo ")\">
                <div class=\"container\">
                    <h1>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                    <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"container\">
                ";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 59
        echo "            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js"));
        // line 83
        echo "\"></script>
        ";
        // line 84
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 85
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 86
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 86,  157 => 85,  142 => 84,  139 => 83,  137 => 68,  132 => 65,  128 => 64,  121 => 59,  119 => 58,  112 => 54,  108 => 53,  103 => 51,  98 => 48,  96 => 47,  87 => 40,  83 => 38,  81 => 37,  73 => 32,  53 => 14,  50 => 12,  47 => 11,  43 => 10,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
        {% styles %}
        <link href=\"{{ [
            'assets/less/theme.less'
        ]|theme }}\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                            <div class=\"Texto-para-lado\">
                                <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"></a>
                            </div>                    
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            {% if user %}
                                <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        {% set jumbotronTexture = random(['ufjf-1', 'ufjf-2', 'ufjf-3', 'ufjf-4']) %}

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url({{ ('assets/images/textures/'~jumbotronTexture~'.png')|theme }})\">
                <div class=\"container\">
                    <h1>{{ this.page.title }}</h1>
                    <p>{{ this.page.description }}</p>
                </div>
            </div>
            <div class=\"container\">
                {% page %}
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ [
            'assets/javascript/jquery.js',
            'assets/vendor/bootstrap/js/transition.js',
            'assets/vendor/bootstrap/js/alert.js',
            'assets/vendor/bootstrap/js/button.js',
            'assets/vendor/bootstrap/js/carousel.js',
            'assets/vendor/bootstrap/js/collapse.js',
            'assets/vendor/bootstrap/js/dropdown.js',
            'assets/vendor/bootstrap/js/modal.js',
            'assets/vendor/bootstrap/js/tooltip.js',
            'assets/vendor/bootstrap/js/popover.js',
            'assets/vendor/bootstrap/js/scrollspy.js',
            'assets/vendor/bootstrap/js/tab.js',
            'assets/vendor/bootstrap/js/affix.js',
            'assets/javascript/app.js'
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/layouts/default.htm", "");
    }
}
