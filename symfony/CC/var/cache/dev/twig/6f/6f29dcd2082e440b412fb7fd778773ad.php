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

/* user/index.html.twig */
class __TwigTemplate_9d28146e276ab9314a89c936c974eb2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-custom\">
        <a class=\"navbar-brand\" href=\"#\">Un univers d'activités    |</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-item nav-link\" href=\"/home\">Acceuil </a>
                <a class=\"nav-item nav-link\" href=\"/activity\">Activités </a>
                ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                    <a class=\"nav-item nav-link active\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">Animateurs </a>
                ";
        }
        // line 18
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "                    <a class=\"nav-item nav-link\" href=\"/logout\">Se Déconnecter </a>
                ";
        } else {
            // line 21
            echo "                    <a class=\"nav-item nav-link\" href=\"/login\">Se Connecter </a>
                ";
        }
        // line 23
        echo "            </div>
        </div>
    </nav>
<div class=\"card activite\">
    <div class=\"card-header\">
        <h1>Liste des animateurs</h1>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Roles</th>
                <th>Password</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "            <tr>
                <td class=\"align-middle\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 47)), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"align-middle\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 52
            if ( !(((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 52)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 52))) : ("")) == "[\"ROLE_ANIMATOR\",\"ROLE_USER\"]")) {
                // line 53
                echo "                        ";
                if ( !(((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 53)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 53))) : ("")) == "[\"ROLE_ADMIN\",\"ROLE_USER\"]")) {
                    // line 54
                    echo "                            <a class=\"btn btn-success\" style=\"width:98%\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_anim", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                    echo "\" role=\"button\">promouvoir animateur</a>
                        ";
                }
                // line 56
                echo "                    ";
            }
            // line 57
            echo "
                    ";
            // line 58
            if ((((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 58)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 58))) : ("")) == "[\"ROLE_ANIMATOR\",\"ROLE_USER\"]")) {
                // line 59
                echo "                        ";
                if ( !(((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 59)) ? (json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 59))) : ("")) == "[\"ROLE_ADMIN\",\"ROLE_USER\"]")) {
                    // line 60
                    echo "                            <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    echo "\" role=\"button\">promouvoir administrateur</a>
                            <a class=\"btn btn-success\" style=\"width:98%\" href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_downgrade", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\" role=\"button\">retrograder</a>
                        ";
                }
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 71,  215 => 67,  208 => 64,  205 => 63,  200 => 61,  195 => 60,  192 => 59,  190 => 58,  187 => 57,  184 => 56,  178 => 54,  175 => 53,  173 => 52,  168 => 50,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  145 => 44,  140 => 43,  118 => 23,  114 => 21,  110 => 19,  107 => 18,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-custom\">
        <a class=\"navbar-brand\" href=\"#\">Un univers d'activités    |</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-item nav-link\" href=\"/home\">Acceuil </a>
                <a class=\"nav-item nav-link\" href=\"/activity\">Activités </a>
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <a class=\"nav-item nav-link active\" href=\"{{ path('user_index') }}\">Animateurs </a>
                {% endif %}
                {% if app.user %}
                    <a class=\"nav-item nav-link\" href=\"/logout\">Se Déconnecter </a>
                {% else %}
                    <a class=\"nav-item nav-link\" href=\"/login\">Se Connecter </a>
                {% endif %}
            </div>
        </div>
    </nav>
<div class=\"card activite\">
    <div class=\"card-header\">
        <h1>Liste des animateurs</h1>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Roles</th>
                <th>Password</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td class=\"align-middle\">{{ user.id }}</td>
                <td class=\"align-middle\">{{ user.login }}</td>
                <td class=\"align-middle\">{{ user.roles ? user.roles|json_encode : '' }}</td>
                <td class=\"align-middle\">{{ user.password }}</td>
                <td class=\"align-middle\">{{ user.nom }}</td>
                <td class=\"align-middle\">{{ user.prenom }}</td>
                <td>
                    {% if not ((user.roles ? user.roles|json_encode : '') == '[\"ROLE_ANIMATOR\",\"ROLE_USER\"]')%}
                        {% if not ((user.roles ? user.roles|json_encode : '') == '[\"ROLE_ADMIN\",\"ROLE_USER\"]')%}
                            <a class=\"btn btn-success\" style=\"width:98%\" href=\"{{ path('user_anim', {'id': user.id}) }}\" role=\"button\">promouvoir animateur</a>
                        {% endif %}
                    {% endif %}

                    {% if ((user.roles ? user.roles|json_encode : '') == '[\"ROLE_ANIMATOR\",\"ROLE_USER\"]')%}
                        {% if not ((user.roles ? user.roles|json_encode : '') == '[\"ROLE_ADMIN\",\"ROLE_USER\"]')%}
                            <a class=\"btn btn-success\" href=\"{{ path('user_admin', {'id': user.id}) }}\" role=\"button\">promouvoir administrateur</a>
                            <a class=\"btn btn-success\" style=\"width:98%\" href=\"{{ path('user_downgrade', {'id': user.id}) }}\" role=\"button\">retrograder</a>
                        {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "user/index.html.twig", "/var/www/html/cc42/CC/templates/user/index.html.twig");
    }
}
