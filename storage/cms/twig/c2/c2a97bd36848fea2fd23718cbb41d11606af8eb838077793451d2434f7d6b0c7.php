<?php

/* C:\xampp\htdocs\strona2/plugins/rainlab/blog/components/create/default.htm */
class __TwigTemplate_10c1c024c1d20c566df5a35429a65d3d25d10c3c96f599a75d8316280a591134 extends Twig_Template
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
        // line 1
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 3
        echo "<div class=\"container \">
 <h2>Dodaj wiadomość</h2>
<form data-request=\"onSave\" class=\"form-horizontal\">
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Temat</label>
 <div class=\"col-sm-7\">
<input type=\"text\" name=\"title\" class=\"form-control \" id=\"pwd\">
</div>
</div>
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">slug</label>
 <div class=\"col-sm-7\">
<input type=\"text\" name=\"slug\" class=\"form-control\" id=\"pwd\">
</div>
</div>
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Treść</label>
 <div class=\"col-sm-7\">
<input type=\"content\" name=\"content\" class=\"form-control\" rows=\"5\" id=\"comment\">
</div>
 <div class=\"col-sm-7\">
<button type=\"submit\" class=\"btn btn-default\">Dodaj</button>
</div>
<div class=\"form-group\">
     
    </div>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 29
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 30
            echo "    <p> ";
            echo twig_escape_filter($this->env, (isset($context["massage"]) ? $context["massage"] : null), "html", null, true);
            echo " </p>

";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 33
        echo "</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/plugins/rainlab/blog/components/create/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 33,  59 => 30,  57 => 29,  29 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
<div class=\"container \">
 <h2>Dodaj wiadomość</h2>
<form data-request=\"onSave\" class=\"form-horizontal\">
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Temat</label>
 <div class=\"col-sm-7\">
<input type=\"text\" name=\"title\" class=\"form-control \" id=\"pwd\">
</div>
</div>
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">slug</label>
 <div class=\"col-sm-7\">
<input type=\"text\" name=\"slug\" class=\"form-control\" id=\"pwd\">
</div>
</div>
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Treść</label>
 <div class=\"col-sm-7\">
<input type=\"content\" name=\"content\" class=\"form-control\" rows=\"5\" id=\"comment\">
</div>
 <div class=\"col-sm-7\">
<button type=\"submit\" class=\"btn btn-default\">Dodaj</button>
</div>
<div class=\"form-group\">
     
    </div>
{% flash success %}
    <p> {{massage}} </p>

{% endflash %}
</form>
</div>
", "C:\\xampp\\htdocs\\strona2/plugins/rainlab/blog/components/create/default.htm", "");
    }
}
