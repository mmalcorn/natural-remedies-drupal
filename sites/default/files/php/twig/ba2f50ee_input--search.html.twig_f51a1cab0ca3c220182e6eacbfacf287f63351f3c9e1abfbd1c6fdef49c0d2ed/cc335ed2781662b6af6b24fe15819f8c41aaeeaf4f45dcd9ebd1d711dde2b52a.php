<?php

/* themes/mbase/templates/form/input--search.html.twig */
class __TwigTemplate_b23de783a58e1320bcd23487720eba09d4efa9e9bfcbfdb104b4b0cc4a81a4c4 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 10
        echo "<div class=\"input-group\">
  <input";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />
    <span class=\"input-group-btn\">
    <button class=\"btn btn-default\" type=\"button\">  
      <span class=\"glyphicon glyphicon-search\"></span>
    </button>
    </span>
";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/form/input--search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  46 => 11,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * input--search.html.twig*/
/*  **/
/*  * Markup for Bootstrap search forms.*/
/*  *//* */
/* */
/* #}*/
/* <div class="input-group">*/
/*   <input{{ attributes }} />*/
/*     <span class="input-group-btn">*/
/*     <button class="btn btn-default" type="button">  */
/*       <span class="glyphicon glyphicon-search"></span>*/
/*     </button>*/
/*     </span>*/
/* {{ children }}*/
/* </div>*/
/* */
