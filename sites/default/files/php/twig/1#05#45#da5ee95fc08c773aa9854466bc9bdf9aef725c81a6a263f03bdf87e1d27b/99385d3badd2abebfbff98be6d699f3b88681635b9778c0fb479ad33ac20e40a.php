<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_0545da5ee95fc08c773aa9854466bc9bdf9aef725c81a6a263f03bdf87e1d27b extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("Breadcrumb"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>
        ";
                // line 18
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url")) {
                    // line 19
                    echo "          <a href=\"";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 21
                    echo "          ";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "
        ";
                }
                // line 23
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 19,  78 => 51,  72 => 49,  49 => 42,  73 => 36,  68 => 47,  44 => 27,  69 => 63,  66 => 62,  61 => 65,  45 => 58,  34 => 36,  31 => 26,  22 => 51,  20 => 44,  77 => 37,  63 => 34,  57 => 20,  48 => 18,  40 => 39,  37 => 56,  27 => 35,  25 => 30,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  197 => 142,  194 => 141,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  163 => 129,  160 => 128,  158 => 127,  144 => 121,  133 => 116,  120 => 110,  111 => 108,  108 => 107,  105 => 106,  95 => 103,  88 => 56,  85 => 54,  75 => 24,  53 => 30,  50 => 29,  42 => 87,  33 => 17,  23 => 29,  203 => 145,  196 => 94,  192 => 140,  184 => 92,  181 => 91,  178 => 90,  176 => 89,  169 => 132,  165 => 84,  157 => 83,  154 => 82,  151 => 81,  145 => 78,  142 => 77,  140 => 76,  132 => 73,  130 => 115,  126 => 113,  107 => 65,  97 => 62,  92 => 42,  86 => 58,  83 => 57,  74 => 52,  62 => 93,  59 => 25,  56 => 48,  54 => 47,  47 => 28,  35 => 13,  32 => 12,  29 => 16,  21 => 13,  155 => 126,  149 => 123,  146 => 122,  143 => 88,  137 => 117,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 68,  113 => 109,  110 => 66,  104 => 64,  102 => 63,  99 => 71,  93 => 68,  90 => 60,  84 => 64,  81 => 52,  79 => 38,  76 => 61,  70 => 23,  67 => 95,  64 => 94,  58 => 62,  55 => 44,  52 => 23,  46 => 21,  43 => 40,  41 => 46,  36 => 18,  30 => 43,  28 => 83,  24 => 14,  19 => 12,);
    }
}
