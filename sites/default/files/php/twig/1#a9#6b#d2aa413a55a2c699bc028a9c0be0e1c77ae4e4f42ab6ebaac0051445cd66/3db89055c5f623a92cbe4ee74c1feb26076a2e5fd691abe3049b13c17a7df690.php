<?php

/* core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_a96bd2aa413a55a2c699bc028a9c0be0e1c77ae4e4f42ab6ebaac0051445cd66 extends Twig_Template
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
        // line 17
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "<h3>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>";
        }
        // line 21
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
        // line 22
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 23
            echo twig_drupal_escape_filter($this->env, (isset($context["actions"]) ? $context["actions"] : null), "html", null, true);
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 25,  38 => 23,  36 => 22,  40 => 25,  34 => 23,  31 => 21,  26 => 19,  24 => 18,  19 => 17,);
    }
}
