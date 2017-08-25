<?php

/* C:\xampp\htdocs\strona2/themes/responsiv-clean/partials/site/sidebar.htm */
class __TwigTemplate_d59d180a7f271a14b090c0a9f4984c72a04a773114f784961d990c77a751fbb4 extends Twig_Template
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
        echo "<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 4
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 5
            echo "   <div class=\"alert alert-success\" >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 7
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 8
            echo "   <h5> <p>Witaj ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</p></h5>
     <li><a href=\"";
            // line 9
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("create");
            echo "\">Nowa wiadomość</a></li>
     <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Wyloguj</a></li>
";
        } else {
            // line 12
            echo "    <p>Nikt nie jest zalogowany</p>
    <li><a href=\"";
            // line 13
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\">Zaloguj</a></li>
";
        }
        // line 15
        echo "
<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h1 class=\"site-name\">
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
    </h1>
    <p class=\"site-motto\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_motto", array()), "html", null, true);
        echo "
    </p>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Ostatnie wiadomości</h2>
    
    <ul class=\"segment-list\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 30
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Follow me</h2>
    <ul class=\"segment-list\">
        ";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "twitter_url", array())) {
            // line 39
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "twitter_url", array()), "html", null, true);
            echo "\" target=\"_blank\">Twitter</a></li>
        ";
        }
        // line 41
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "facebook_url", array())) {
            // line 42
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "facebook_url", array()), "html", null, true);
            echo "\" target=\"_blank\">Facebook</a></li>
        ";
        }
        // line 44
        echo "        <li><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/rss");
        echo "\">RSS Feed</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  111 => 42,  108 => 41,  102 => 39,  100 => 38,  92 => 32,  81 => 30,  77 => 29,  66 => 21,  58 => 18,  53 => 15,  48 => 13,  45 => 12,  39 => 9,  34 => 8,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>
{% flash success %}
   <div class=\"alert alert-success\" >{{ message }}</div>
{% endflash %}
{% if user %}
   <h5> <p>Witaj {{ user.name }}</p></h5>
     <li><a href=\"{{ 'create'|page }}\">Nowa wiadomość</a></li>
     <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Wyloguj</a></li>
{% else %}
    <p>Nikt nie jest zalogowany</p>
    <li><a href=\"{{ 'login'|page }}\">Zaloguj</a></li>
{% endif %}

<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h1 class=\"site-name\">
        <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
    </h1>
    <p class=\"site-motto\">
        {{ this.theme.site_motto }}
    </p>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Ostatnie wiadomości</h2>
    
    <ul class=\"segment-list\">
        {% for post in blogPosts.posts %}
            <li><a href=\"{{ post.url }}\">{{ post.title }}</a></li>
        {% endfor %}
    </ul>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Follow me</h2>
    <ul class=\"segment-list\">
        {% if this.theme.twitter_url %}
            <li><a href=\"{{ this.theme.twitter_url }}\" target=\"_blank\">Twitter</a></li>
        {% endif %}
        {% if this.theme.facebook_url %}
            <li><a href=\"{{ this.theme.facebook_url }}\" target=\"_blank\">Facebook</a></li>
        {% endif %}
        <li><a href=\"{{ 'blog/rss'|page }}\">RSS Feed</a></li>
    </ul>
</div>", "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/partials/site/sidebar.htm", "");
    }
}
