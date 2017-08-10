<?php

/* C:\xampp\htdocs\strona2/themes/responsiv-clean/layouts/default.htm */
class __TwigTemplate_38942c20b65de586e52d4f50480dbe86dadde6ef4302e295f1c16b5e7ec10fb0 extends Twig_Template
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
        echo "<!DOCTYPE html>
";
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 3
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 4
        echo "<html>
    <head>
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 23
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 24
        echo "            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  86 => 33,  80 => 29,  76 => 28,  70 => 24,  68 => 23,  62 => 19,  58 => 18,  52 => 14,  48 => 13,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
{% framework extras %}
{% scripts %}
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'site/header' %}
            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                {% partial 'site/sidebar' %}
            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'site/footer' %}
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>", "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/layouts/default.htm", "");
    }
}
