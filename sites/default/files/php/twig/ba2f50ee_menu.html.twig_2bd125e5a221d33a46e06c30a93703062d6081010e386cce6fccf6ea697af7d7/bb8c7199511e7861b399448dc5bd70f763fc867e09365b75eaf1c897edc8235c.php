<?php

/* themes/mbase/templates/navigation/menu.html.twig */
class __TwigTemplate_174f2a7a8446ad363c14a0d489f4f9fcc17087508456bcd537095436e82cea1a extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 30, "if" => 32, "for" => 39, "set" => 41);
        $filters = array();
        $functions = array("link" => 59);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "


";
    }

    // line 30
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "  ";
            $context["menus"] = $this;
            // line 32
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 33
                echo "
    ";
                // line 34
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu", 1 => "nav"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", array())) ? ("expanded dropdown leaf") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "is_collapsed", array())) ? ("collapsed") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["item"], "in_active_trail", array())) ? ("active") : ("")), 4 => ("menu-depth-" . (                    // line 46
(isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)), 5 => (($this->getAttribute(                    // line 47
$context["loop"], "first", array())) ? ("first") : ("")), 6 => (($this->getAttribute(                    // line 48
$context["loop"], "last", array())) ? ("last") : ("")));
                    // line 51
                    echo "      <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                    echo ">
      ";
                    // line 53
                    $context["link_class"] = array(0 => (($this->getAttribute(                    // line 54
$context["item"], "is_expanded", array())) ? ("dropdown-toggle") : ("")), 1 => (($this->getAttribute(                    // line 55
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 59
                    echo "        ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), array("class" => (isset($context["link_class"]) ? $context["link_class"] : null))), "html", null, true));
                    echo "
        ";
                    // line 60
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 61
                        echo "          ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
        ";
                    }
                    // line 63
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  141 => 63,  135 => 61,  133 => 60,  128 => 59,  126 => 55,  125 => 54,  124 => 53,  119 => 51,  117 => 48,  116 => 47,  115 => 46,  114 => 45,  113 => 44,  112 => 43,  111 => 41,  109 => 40,  91 => 39,  87 => 37,  81 => 35,  79 => 34,  76 => 33,  73 => 32,  70 => 31,  56 => 30,  48 => 27,  45 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *   - is_expanded: TRUE if the link has visible children within the current*/
/*  *     menu tree.*/
/*  *   - is_collapsed: TRUE if the link has children within the current menu tree*/
/*  *     that are not currently visible.*/
/*  *   - in_active_trail: TRUE if the link is in the active trail.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/* */
/*     {% if menu_level == 0 %}*/
/*       <ul{{ attributes.addClass('menu', 'nav') }}>*/
/*     {% else %}*/
/*       <ul class="dropdown-menu">*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       {%*/
/*         set classes = [*/
/*           'menu-item',*/
/*           item.is_expanded ? 'expanded dropdown leaf',*/
/*           item.is_collapsed ? 'collapsed',*/
/*           item.in_active_trail ? 'active',*/
/*           'menu-depth-' ~ (menu_level + 1),*/
/*           loop.first ? 'first',*/
/*           loop.last ? 'last',*/
/*         ]*/
/*       %}*/
/*       <li{{ item.attributes.addClass(classes) }}>*/
/*       {%*/
/*         set link_class = [*/
/*           item.is_expanded ? 'dropdown-toggle',*/
/*           item.in_active_trail ? 'active',*/
/*         ]*/
/*         */
/*       %}*/
/*         {{ link(item.title, item.url, { 'class':link_class}) }}*/
/*         {% if item.below %}*/
/*           {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
