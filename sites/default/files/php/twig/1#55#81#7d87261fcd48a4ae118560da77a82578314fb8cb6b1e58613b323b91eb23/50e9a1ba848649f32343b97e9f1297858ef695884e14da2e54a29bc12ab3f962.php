<?php

/* core/modules/node/templates/field--node--created.html.twig */
class __TwigTemplate_55817d87261fcd48a4ae118560da77a82578314fb8cb6b1e58613b323b91eb23 extends Twig_Template
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
        // line 20
        echo "<span";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/field--node--created.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 24,  27 => 22,  23 => 21,  19 => 20,);
    }
}
