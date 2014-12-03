<?php

/* core/themes/bartik/templates/node.html.twig */
class __TwigTemplate_73628e2a77c530c465137bdb9bb4452fe28b01cb3494760d6996fda6b9eb705f extends Twig_Template
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
        // line 67
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . drupal_html_class($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "bundle"))), 2 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (((!$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"))) ? ("node--unpublished") : ("")), 5 => (((isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . drupal_html_class((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix");
        // line 77
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  <header>
    ";
        // line 80
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 81
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 82
            echo "      <h2";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true);
            echo ">
        <a href=\"";
            // line 83
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 86
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 88
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 89
            echo "      <div class=\"node__meta\">
        ";
            // line 90
            echo twig_drupal_escape_filter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
        <span";
            // line 91
            echo twig_drupal_escape_filter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true);
            echo ">
          ";
            // line 92
            echo t("Submitted by !author_name on !date", array("!author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "!date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 93
            echo "        </span>
        ";
            // line 94
            echo twig_drupal_escape_filter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 97
        echo "  </header>

  <div";
        // line 99
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true);
        echo ">
    ";
        // line 100
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 103
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links")) {
            // line 104
            echo "    <div class=\"node__links\">
      ";
            // line 105
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 108
        echo "
  ";
        // line 109
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment"), "html", null, true);
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 109,  102 => 108,  96 => 105,  93 => 104,  91 => 103,  85 => 100,  81 => 99,  77 => 97,  71 => 94,  68 => 93,  66 => 92,  62 => 91,  58 => 90,  55 => 89,  53 => 88,  47 => 86,  39 => 83,  34 => 82,  32 => 81,  28 => 80,  29 => 24,  21 => 77,  33 => 24,  27 => 22,  23 => 21,  19 => 67,);
    }
}
