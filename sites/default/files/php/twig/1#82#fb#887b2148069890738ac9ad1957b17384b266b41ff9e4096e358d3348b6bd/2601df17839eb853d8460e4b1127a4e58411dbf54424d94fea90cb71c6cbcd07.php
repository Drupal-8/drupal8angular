<?php

/* core/modules/views_ui/templates/views-ui-view-info.html.twig */
class __TwigTemplate_82fb887b2148069890738ac9ad1957b17384b266b41ff9e4096e358d3348b6bd extends Twig_Template
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
        // line 15
        echo "<h3 class=\"views-ui-view-title views-table-filter-text-source\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h3>
<div class=\"views-ui-view-displays\">";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["displays"]) ? $context["displays"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  19 => 15,);
    }
}
