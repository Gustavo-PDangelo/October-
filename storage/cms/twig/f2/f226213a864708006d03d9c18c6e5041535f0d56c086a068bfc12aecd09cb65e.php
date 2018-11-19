<?php

/* C:\xampp\htdocs\install-master/themes/rainlab-vanilla/layouts/fallback.htm */
class __TwigTemplate_8451f279edc80eeb844ab80174c26084600ffa27da15ee9e3f4a53dfca6b8b31 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/layouts/fallback.htm", "");
    }
}
