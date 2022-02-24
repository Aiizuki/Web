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

/* activity/index.html.twig */
class __TwigTemplate_94d2580402425a535e1b96503ab6e698 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activity/index.html.twig", 1);
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

        echo "Activity index";
        
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
        <a class=\"navbar-brand\" href=\"#\"> Un univers d'activités    |</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-item nav-link\" href=\"/home\">Acceuil </a>
                <a class=\"nav-item nav-link active\" href=\"/activity\">Activités </a>
                ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "                    <a class=\"nav-item nav-link\" href=\"";
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
        <h1>Liste des activités</h1>
    </div>

    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 42
            echo "            <tr>
                <th class=\"align-middle\" scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>
                <td class=\"align-middle\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td class=\"align-middle\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" role=\"button\">inspecter</a>
                    ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
                // line 49
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATOR")) {
                    // line 50
                    echo "                            <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                    echo "\" role=\"button\">editer</a>
                            <a class=\"btn btn-success\" href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_showP", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                    echo "\" role=\"button\">Voir les participants</a>
                        ";
                }
                // line 53
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 54
                    echo "                            ";
                    if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATOR")) {
                        // line 55
                        echo "                                <a class=\"btn btn-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                        echo "\" role=\"button\">s'inscrire</a>
                                <a class=\"btn btn-success\" href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_desinscription", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                        echo "\" role=\"button\">se désinscrire</a>
                            ";
                    }
                    // line 58
                    echo "                        ";
                }
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>
    <div class=\"flex-row d-flex justify-content-center\">
    ";
        // line 70
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATOR")) {
            // line 71
            echo "        <a class=\"btn btn-success flex-fill\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_new");
            echo "\" role=\"button\">Créer une activité</a>
    ";
        }
        // line 73
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 74
            echo "        ";
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ANIMATOR")) {
                // line 75
                echo "            <a class=\"btn btn-success flex-fill\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activity_showI");
                echo "\" role=\"button\">Voir ses inscriptions</a>
        ";
            }
            // line 77
            echo "    ";
        }
        // line 78
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "activity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 78,  241 => 77,  235 => 75,  232 => 74,  229 => 73,  223 => 71,  221 => 70,  216 => 67,  207 => 63,  200 => 60,  197 => 59,  194 => 58,  189 => 56,  184 => 55,  181 => 54,  178 => 53,  173 => 51,  168 => 50,  165 => 49,  163 => 48,  159 => 47,  154 => 45,  150 => 44,  146 => 43,  143 => 42,  138 => 41,  118 => 23,  114 => 21,  110 => 19,  107 => 18,  101 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activity index{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-custom\">
        <a class=\"navbar-brand\" href=\"#\"> Un univers d'activités    |</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-item nav-link\" href=\"/home\">Acceuil </a>
                <a class=\"nav-item nav-link active\" href=\"/activity\">Activités </a>
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <a class=\"nav-item nav-link\" href=\"{{ path('user_index') }}\">Animateurs </a>
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
        <h1>Liste des activités</h1>
    </div>

    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for activity in activities %}
            <tr>
                <th class=\"align-middle\" scope=\"row\">{{ activity.id }}</th>
                <td class=\"align-middle\">{{ activity.nom }}</td>
                <td class=\"align-middle\">{{ activity.description }}</td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('activity_show', {'id': activity.id}) }}\" role=\"button\">inspecter</a>
                    {% if app.user %}
                        {% if is_granted('ROLE_ANIMATOR') %}
                            <a class=\"btn btn-success\" href=\"{{ path('activity_edit', {'id': activity.id}) }}\" role=\"button\">editer</a>
                            <a class=\"btn btn-success\" href=\"{{ path('activity_showP', {'id': activity.id}) }}\" role=\"button\">Voir les participants</a>
                        {% endif %}
                        {% if is_granted('ROLE_USER') %}
                            {% if not is_granted('ROLE_ANIMATOR') %}
                                <a class=\"btn btn-success\" href=\"{{ path('activity_inscription', {'id':activity.id}) }}\" role=\"button\">s'inscrire</a>
                                <a class=\"btn btn-success\" href=\"{{ path('activity_desinscription', {'id':activity.id}) }}\" role=\"button\">se désinscrire</a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"flex-row d-flex justify-content-center\">
    {% if is_granted('ROLE_ANIMATOR') %}
        <a class=\"btn btn-success flex-fill\" href=\"{{ path('activity_new') }}\" role=\"button\">Créer une activité</a>
    {% endif %}
    {% if is_granted('ROLE_USER') %}
        {% if not is_granted('ROLE_ANIMATOR') %}
            <a class=\"btn btn-success flex-fill\" href=\"{{ path('activity_showI') }}\" role=\"button\">Voir ses inscriptions</a>
        {% endif %}
    {% endif %}
    </div>
</div>
{% endblock %}
", "activity/index.html.twig", "/var/www/html/cc42/CC/templates/activity/index.html.twig");
    }
}
