<?php

/* C:\xampp\htdocs\strona2/plugins/rainlab/blog/components/edit/default.htm */
class __TwigTemplate_4177657175710e2953948fad0785defb567c70735303110bce0c26b52ccdd2d3 extends Twig_Template
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
        echo "<?php
 function onStart()
{
    \$this['titles'] = \"Hello world!\";
}
?>
<div class=\"container \">
 <h2>Edytuj wiadomość</h2>
<form data-request=\"onEdit\" class=\"form-horizontal\">
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Temat</label>
 <div class=\"col-sm-7\">
 <textarea id=\"textarea\" name=\"title\" rows=\"5\" class=\"form-control col-xs-12\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</textarea>
</div>
</div>

<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Treść</label>
 <div class=\"col-sm-7\">
<textarea id=\"textarea\" name=\"content\" rows=\"5\" class=\"form-control col-xs-12\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "</textarea>
</div>
 <div class=\"col-sm-7\">
<button type=\"submit\" class=\"btn btn-default\">Zmień</button>
</div>
<div class=\"form-group\">
     
    </div>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 30
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 31
            echo "    <p> ";
            echo twig_escape_filter($this->env, (isset($context["massage"]) ? $context["massage"] : null), "html", null, true);
            echo " </p>

";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 34
        echo "</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/plugins/rainlab/blog/components/edit/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 34,  66 => 31,  64 => 30,  53 => 22,  43 => 15,  29 => 3,  22 => 2,  19 => 1,);
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
<?php
 function onStart()
{
    \$this['titles'] = \"Hello world!\";
}
?>
<div class=\"container \">
 <h2>Edytuj wiadomość</h2>
<form data-request=\"onEdit\" class=\"form-horizontal\">
<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Temat</label>
 <div class=\"col-sm-7\">
 <textarea id=\"textarea\" name=\"title\" rows=\"5\" class=\"form-control col-xs-12\">{{title}}</textarea>
</div>
</div>

<div class=\"form-group\">
<label class=\"control-label col-sm-2\" for=\"pwd\">Treść</label>
 <div class=\"col-sm-7\">
<textarea id=\"textarea\" name=\"content\" rows=\"5\" class=\"form-control col-xs-12\">{{content}}</textarea>
</div>
 <div class=\"col-sm-7\">
<button type=\"submit\" class=\"btn btn-default\">Zmień</button>
</div>
<div class=\"form-group\">
     
    </div>
{% flash success %}
    <p> {{massage}} </p>

{% endflash %}
</form>
</div>

", "C:\\xampp\\htdocs\\strona2/plugins/rainlab/blog/components/edit/default.htm", "");
    }
}
