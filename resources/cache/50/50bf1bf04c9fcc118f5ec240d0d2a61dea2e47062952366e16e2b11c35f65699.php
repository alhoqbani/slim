<?php

/* 404.twig */
class __TwigTemplate_7124289e6141ecdba2535d38193ba3558a116f5b03dfa65143f1da4be5466a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/master.twig", "404.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "404.twig", "/Users/hamoud/Sites/slim/resources/views/404.twig");
    }
}
