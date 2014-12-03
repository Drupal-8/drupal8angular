<?php

/* core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig */
class __TwigTemplate_b863f0ae95004b5e67f50aa265ab71d25cbe08e7d15ebc6bc2cfdf2be0ee4aa8 extends Twig_Template
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
        // line 18
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 19
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 20
            echo "<span class=\"label\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</span>";
        }
        // line 22
        echo "  ";
        if ((isset($context["settings_links"]) ? $context["settings_links"] : null)) {
            // line 23
            echo "    ";
            echo twig_render_var(twig_drupal_join_filter((isset($context["settings_links"]) ? $context["settings_links"] : null), "<span class=\"label\">&nbsp;|&nbsp;</span>"));
            echo "
  ";
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 25,  34 => 23,  31 => 22,  26 => 20,  24 => 19,  19 => 18,);
    }
}
