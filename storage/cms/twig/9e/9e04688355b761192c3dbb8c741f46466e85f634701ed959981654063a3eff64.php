<?php

/* C:\xampp\htdocs\install-master/themes/rainlab-vanilla/pages/forum.htm */
class __TwigTemplate_3250ec0a15bc837e584c67bceadba02f370a3f2f81242c6f08991da24668170a extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumChannels"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/pages/forum.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'forumChannels' %}", "C:\\xampp\\htdocs\\install-master/themes/rainlab-vanilla/pages/forum.htm", "");
    }
}
