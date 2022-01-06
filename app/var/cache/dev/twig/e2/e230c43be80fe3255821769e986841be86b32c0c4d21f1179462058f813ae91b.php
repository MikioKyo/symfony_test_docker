<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_e351f314197ed4cf94a049f3390d447acf87af9df07e7de630c47341e95c7ca4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Вход";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"content\">
    <div class=\"container\">
        <h1 class=\"header\">Тестовое задание с галереей</h1>
<form method=\"post\">
    ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"mb-3\">
            Вы уже залогиненые как: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Выйти</a>
        </div>

    ";
        } else {
            // line 20
            echo "    <h1 class=\"h3 mb-3 font-weight-normal\">Пожалуйста войдите</h1>
    <label for=\"inputUsername\" class=\"login\">Логин</label>
    <input type=\"text\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control login\" autocomplete=\"username\" required autofocus>
    <label for=\"inputPassword\" class=\"login\">Пароль</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control login\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\"
    >

    ";
            // line 40
            echo "
    <button class=\"btn btn-lg btn-primary login\" type=\"submit\" >
        Войти
    </button>
    ";
        }
        // line 45
        echo "</form>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  122 => 40,  116 => 27,  108 => 22,  104 => 20,  95 => 16,  92 => 15,  90 => 14,  87 => 13,  81 => 11,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Вход{% endblock %}

{% block body %}
<div class=\"content\">
    <div class=\"container\">
        <h1 class=\"header\">Тестовое задание с галереей</h1>
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            Вы уже залогиненые как: {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Выйти</a>
        </div>

    {% else %}
    <h1 class=\"h3 mb-3 font-weight-normal\">Пожалуйста войдите</h1>
    <label for=\"inputUsername\" class=\"login\">Логин</label>
    <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control login\" autocomplete=\"username\" required autofocus>
    <label for=\"inputPassword\" class=\"login\">Пароль</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control login\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

    <button class=\"btn btn-lg btn-primary login\" type=\"submit\" >
        Войти
    </button>
    {% endif %}
</form>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
