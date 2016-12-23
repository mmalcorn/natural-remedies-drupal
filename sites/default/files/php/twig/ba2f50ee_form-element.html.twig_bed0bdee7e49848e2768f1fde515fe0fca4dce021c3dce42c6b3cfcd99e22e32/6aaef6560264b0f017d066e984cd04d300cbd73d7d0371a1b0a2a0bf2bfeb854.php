<?php

/* themes/mbase/templates/form/form-element.html.twig */
class __TwigTemplate_f0313399995222ea38b991be6d5e675ac2d1a772741c46dd436161dbf7564227 extends Twig_Template
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
        $tags = array("set" => 49, "if" => 83);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 49
        $context["classes"] = array(0 => "form-item", 1 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 51
(isset($context["name"]) ? $context["name"] : null))), 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["type"]) ? $context["type"] : null))), 3 => ((!twig_in_filter(        // line 53
(isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 4 => (((        // line 54
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")), 5 => ((        // line 55
(isset($context["is_form_group"]) ? $context["is_form_group"] : null)) ? ("form-group") : ("")), 6 => ((        // line 56
(isset($context["is_radio"]) ? $context["is_radio"] : null)) ? ("radio") : ("")), 7 => ((        // line 57
(isset($context["is_checkbox"]) ? $context["is_checkbox"] : null)) ? ("checkbox") : ("")), 8 => ((        // line 58
(isset($context["is_autocomplete"]) ? $context["is_autocomplete"] : null)) ? ("form-autocomplete") : ("")), 9 => ((        // line 59
(isset($context["has_error"]) ? $context["has_error"] : null)) ? ("error has-error") : ("")));
        // line 63
        echo "
";
        // line 65
        $context["inner_classes"] = array(0 => "input-group");
        // line 69
        echo "
";
        // line 71
        $context["description_classes"] = array(0 => "description", 1 => "help-block", 2 => (((        // line 74
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 3 => "des-after");
        // line 79
        $context["input_group_class"] = (((isset($context["input_group"]) ? $context["input_group"] : null)) ? ("input-group-addon") : (""));
        // line 81
        echo "
<div";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 83
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 86
        echo "

  ";
        // line 88
        if (((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) && twig_test_empty((isset($context["has_tooltip"]) ? $context["has_tooltip"] : null)))) {
            // line 89
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true));
            echo ">
       ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 92
        echo "  
  
  ";
        // line 94
        if (( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null)) ||  !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null)))) {
            // line 95
            echo "    <div class=\"input-group\">
  ";
        }
        // line 97
        echo "  
  ";
        // line 98
        if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
            // line 99
            echo "    <span class=\"input-group-addon input-prefix\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
            echo " </span>
  ";
        }
        // line 101
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
        // line 102
        if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
            // line 103
            echo "    <span class=\"input-group-addon input-suffix\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
            echo " </span>
  ";
        }
        // line 105
        echo "  
  ";
        // line 106
        if (( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null)) ||  !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null)))) {
            // line 107
            echo "    </div>
  ";
        }
        // line 109
        echo "
  ";
        // line 110
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 111
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 113
        echo "  ";
        if (((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) && twig_test_empty((isset($context["has_tooltip"]) ? $context["has_tooltip"] : null)))) {
            // line 114
            echo "    <p";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
            echo ">
    <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"> </span> ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "</p>
  ";
        }
        // line 117
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 117,  161 => 115,  156 => 114,  153 => 113,  147 => 111,  145 => 110,  142 => 109,  138 => 107,  136 => 106,  133 => 105,  127 => 103,  125 => 102,  120 => 101,  114 => 99,  112 => 98,  109 => 97,  105 => 95,  103 => 94,  99 => 92,  93 => 90,  88 => 89,  86 => 88,  82 => 86,  76 => 84,  74 => 83,  70 => 82,  67 => 81,  65 => 79,  63 => 74,  62 => 71,  59 => 69,  57 => 65,  54 => 63,  52 => 59,  51 => 58,  50 => 57,  49 => 56,  48 => 55,  47 => 54,  46 => 53,  45 => 52,  44 => 51,  43 => 49,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - prefix: (optional) The form element prefix, may not be set.*/
/*  * - suffix: (optional) The form element suffix, may not be set.*/
/*  * - required: The required marker, or empty if the associated form element is*/
/*  *   not required.*/
/*  * - type: The type of the element.*/
/*  * - name: The name of the element.*/
/*  * - label: A rendered label element.*/
/*  * - label_display: Label display setting. It can have these values:*/
/*  *   - before: The label is output before the element. This is the default.*/
/*  *     The label includes the #title and the required marker, if #required.*/
/*  *   - after: The label is output after the element. For example, this is used*/
/*  *     for radio and checkbox #type elements. If the #title is empty but the*/
/*  *     field is #required, the label will contain only the required marker.*/
/*  *   - invisible: Labels are critical for screen readers to enable them to*/
/*  *     properly navigate through forms but can be visually distracting. This*/
/*  *     property hides the label for everyone except screen readers.*/
/*  *   - attribute: Set the title attribute on the element to create a tooltip but*/
/*  *     output no label element. This is supported only for checkboxes and radios*/
/*  *     in \Drupal\Core\Render\Element\CompositeFormElementTrait::preRenderCompositeFormElement().*/
/*  *     It is used where a visual label is not needed, such as a table of*/
/*  *     checkboxes where the row and column provide the context. The tooltip will*/
/*  *     include the title and required marker.*/
/*  * - description: (optional) A list of description properties containing:*/
/*  *    - content: A description of the form element, may not be set.*/
/*  *    - attributes: (optional) A list of HTML attributes to apply to the*/
/*  *      description content wrapper. Will only be set when description is set.*/
/*  * - description_display: Description display setting. It can have these values:*/
/*  *   - before: The description is output before the element.*/
/*  *   - after: The description is output after the element. This is the default*/
/*  *     value.*/
/*  *   - invisible: The description is output after the element, hidden visually*/
/*  *     but available to screen readers.*/
/*  * - disabled: True if the element is disabled.*/
/*  * - title_display: Title display setting.*/
/*  **/
/*  * @see template_preprocess_form_element()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/* set classes = [*/
/*   'form-item',*/
/*   'form-item-' ~ name|clean_class,*/
/*   'form-type-' ~ type|clean_class,*/
/*   title_display not in ['after', 'before'] ? 'form-no-label',*/
/*   disabled == 'disabled' ? 'form-disabled',*/
/*   is_form_group ? 'form-group',*/
/*   is_radio ? 'radio',*/
/*   is_checkbox ? 'checkbox',*/
/*   is_autocomplete ? 'form-autocomplete',*/
/*   has_error ? 'error has-error',*/
/* ]*/
/* */
/* %}*/
/* */
/* {%*/
/* set inner_classes = [*/
/*   'input-group',*/
/* ]*/
/* %}*/
/* */
/* {%*/
/* set description_classes = [*/
/*   'description',*/
/*   'help-block',*/
/*   description_display == 'invisible' ? 'visually-hidden',*/
/*   'des-after',*/
/* ]*/
/* %}*/
/* {%*/
/* set input_group_class = input_group ? 'input-group-addon' : ''*/
/* %}*/
/* */
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if label_display in ['before', 'invisible'] %}*/
/*     {{ label }}*/
/*   {% endif %}*/
/* */
/* */
/*   {% if description_display == 'before' and description.content and has_tooltip is empty %}*/
/*     <div{{ description.attributes }}>*/
/*        {{ description.content }}*/
/*     </div>*/
/*   {% endif %}  */
/*   */
/*   {% if prefix is not empty or suffix is not empty %}*/
/*     <div class="input-group">*/
/*   {% endif %}*/
/*   */
/*   {% if prefix is not empty %}*/
/*     <span class="input-group-addon input-prefix"> {{ prefix }} </span>*/
/*   {% endif %}*/
/*   {{ children }}*/
/*   {% if suffix is not empty %}*/
/*     <span class="input-group-addon input-suffix"> {{ suffix }} </span>*/
/*   {% endif %}*/
/*   */
/*   {% if prefix is not empty or suffix is not empty %}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if label_display == 'after' %}*/
/*     {{ label }}*/
/*   {% endif %}*/
/*   {% if description_display in ['after', 'invisible'] and description.content and has_tooltip is empty %}*/
/*     <p{{ description.attributes.addClass(description_classes) }}>*/
/*     <span class="glyphicon glyphicon-info-sign" aria-hidden="true"> </span> {{ description.content }}</p>*/
/*   {% endif %}*/
/* </div>*/
/* */
