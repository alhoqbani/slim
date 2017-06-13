<?php

/* home.twig */
class __TwigTemplate_388cfc7b6d39a625e51a7f5a392f8579cafe1e250f4e9c9dc1e97545d1a2aaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Welcome Home ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/Users/hamoud/Sites/slim/resources/views/home.twig");
    }
}
