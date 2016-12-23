<?php

/* themes/mbase/templates/misc/status-messages.html.twig */
class __TwigTemplate_6c2734fbdcdcce5183f05b6b195ea1ab270ddfd337c5abec82d830f247b881cf extends Twig_Template
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
        $tags = array("for" => 26, "if" => 27, "set" => 28);
        $filters = array("length" => 53, "first" => 60);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if', 'set'),
                array('length', 'first'),
                array()
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

        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            if (($context["type"] == "status")) {
                // line 28
                echo "    ";
                $context["type"] = "info";
                // line 29
                echo "  ";
            } elseif (($context["type"] == "error")) {
                // line 30
                echo "    ";
                $context["type"] = "danger";
                // line 31
                echo "  ";
            }
            // line 32
            echo "
    ";
            // line 34
            $context["classes"] = array(0 => "alert", 1 => ("alert-" .             // line 36
$context["type"]), 2 =>             // line 37
(isset($context["alert_dismissible"]) ? $context["alert_dismissible"] : null));
            // line 40
            echo "
  <div class=\"";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class", array()), "html", null, true));
            echo "\" role=\"alert\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\">
     
    ";
            // line 43
            if (((isset($context["alert_dismissible"]) ? $context["alert_dismissible"] : null) == "alert-dismissible")) {
                // line 44
                echo "      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
    ";
            }
            // line 46
            echo "     
    ";
            // line 47
            if (($context["type"] == "error")) {
                // line 48
                echo "      <div role=\"alert\">
    ";
            }
            // line 50
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 51
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 53
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 54
                echo "        <ul class=\"messages__list\">
          ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 56
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        </ul>
      ";
            } else {
                // line 60
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
      ";
            }
            // line 62
            echo "    ";
            if (($context["type"] == "error")) {
                // line 63
                echo "      </div>
    ";
            }
            // line 65
            echo "  </div>
  ";
            // line 67
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 67,  139 => 65,  135 => 63,  132 => 62,  126 => 60,  122 => 58,  113 => 56,  109 => 55,  106 => 54,  103 => 53,  97 => 51,  94 => 50,  90 => 48,  88 => 47,  85 => 46,  81 => 44,  79 => 43,  72 => 41,  69 => 40,  67 => 37,  66 => 36,  65 => 34,  62 => 32,  59 => 31,  56 => 30,  53 => 29,  50 => 28,  47 => 27,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  *//* */
/* #}*/
/* {% for type, messages in message_list %}*/
/*   {% if type == 'status' %}*/
/*     {% set type = 'info' %}*/
/*   {% elseif type == 'error' %}*/
/*     {% set type = 'danger' %}*/
/*   {% endif %}*/
/* */
/*     {%*/
/*     set classes = [*/
/*       'alert',*/
/*       'alert-' ~ type,*/
/*       alert_dismissible,*/
/*     ]*/
/*   %}*/
/* */
/*   <div class="{{ attributes.addClass(classes).class }}" role="alert" aria-label="{{ status_headings[type] }}">*/
/*      */
/*     {% if alert_dismissible == 'alert-dismissible' %}*/
/*       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*     {% endif %}*/
/*      */
/*     {% if type == 'error' %}*/
/*       <div role="alert">*/
/*     {% endif %}*/
/*       {% if status_headings[type] %}*/
/*         <h2 class="visually-hidden">{{ status_headings[type] }}</h2>*/
/*       {% endif %}*/
/*       {% if messages|length > 1 %}*/
/*         <ul class="messages__list">*/
/*           {% for message in messages %}*/
/*             <li class="messages__item">{{ message }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% else %}*/
/*         {{ messages|first }}*/
/*       {% endif %}*/
/*     {% if type == 'error' %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   {# Remove type specific classes. #}*/
/*   {{ attributes.removeClass(classes) }}*/
/* {% endfor %}*/
/* */
