<?php

/* core/modules/system/templates/field.html.twig */
class __TwigTemplate_7108f18025287c42f1f9c1b1d294a3bfc51d33cc5c09a3449cf6b9a064ac5650 extends Twig_Template
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
        // line 33
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 34
        if ((!(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 35
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "field-label"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo ":&nbsp;</div>
  ";
        }
        // line 37
        echo "  <div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "field-items"), "method"), "html", null, true);
        echo ">
    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), "addClass", array(0 => "field-item"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 41,  43 => 39,  26 => 35,  24 => 34,  105 => 109,  102 => 108,  96 => 105,  93 => 104,  91 => 103,  85 => 100,  81 => 99,  77 => 97,  71 => 94,  68 => 93,  66 => 92,  62 => 91,  58 => 90,  55 => 89,  53 => 88,  47 => 86,  39 => 38,  34 => 37,  32 => 81,  28 => 80,  29 => 30,  21 => 77,  33 => 24,  27 => 22,  23 => 21,  19 => 33,);
    }
}
