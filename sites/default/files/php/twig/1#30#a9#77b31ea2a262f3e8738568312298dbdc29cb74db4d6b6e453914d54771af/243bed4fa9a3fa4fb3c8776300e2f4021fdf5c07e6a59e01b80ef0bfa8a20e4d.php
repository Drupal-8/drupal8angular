<?php

/* core/modules/system/templates/fieldset.html.twig */
class __TwigTemplate_30a977b31ea2a262f3e8738568312298dbdc29cb74db4d6b6e453914d54771af extends Twig_Template
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
        // line 24
        echo "<fieldset";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-item", 1 => "form-wrapper"), "method"), "html", null, true);
        echo ">
  ";
        // line 26
        $context["legend_span_classes"] = array(0 => "fieldset-legend", 1 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 31
        echo "  ";
        // line 32
        echo "  <legend";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes"), "html", null, true);
        echo ">
    <span";
        // line 33
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["legend_span"]) ? $context["legend_span"] : null), "attributes"), "addClass", array(0 => (isset($context["legend_span_classes"]) ? $context["legend_span_classes"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title"), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 36
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 37
            echo "      <span class=\"field-prefix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 39
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
    ";
        // line 40
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 41
            echo "      <span class=\"field-suffix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 43
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content")) {
            // line 44
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"), "addClass", array(0 => "description"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"), "html", null, true);
            echo "</div>
    ";
        }
        // line 46
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 46,  65 => 44,  62 => 43,  56 => 41,  43 => 37,  41 => 36,  33 => 33,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  42 => 30,  32 => 26,  27 => 24,  26 => 31,  54 => 40,  49 => 39,  45 => 31,  39 => 29,  36 => 28,  30 => 22,  28 => 32,  24 => 26,  21 => 22,  35 => 27,  29 => 25,  23 => 22,  19 => 24,);
    }
}
