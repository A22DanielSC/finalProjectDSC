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

/* ./show/template_showEmployee.html.twig */
class __TwigTemplate_71b747d2ece58cebf6f4bce54094d56a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./show/template_showEmployee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./show/template_showEmployee.html.twig"));

        // line 1
        if ((isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"showEmployee\">
\t<h3>";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
            echo "</h3>
\t<p>DNI:
\t\t";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 5, $this->source); })()), "dni", [], "any", false, false, false, 5), "html", null, true);
            echo "</p>
\t<p>Birth date:
\t\t";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 7, $this->source); })()), "birthDate", [], "any", false, false, false, 7), "d/m/Y"), "html", null, true);
            echo "</p>
\t<p>Employed since:
\t\t";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 9, $this->source); })()), "dateStartCompany", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t";
            // line 10
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 10, $this->source); })()), "working", [], "any", false, false, false, 10)) {
                // line 11
                echo "\t\t\t<p>End date:
\t\t";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 12, $this->source); })()), "dateEndCompany", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
                echo "</p>
\t\t";
            }
            // line 14
            echo "\t<p>Position:
\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 15, $this->source); })()), "position", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
\t<p>Annual salary:
\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 17, $this->source); })()), "salary", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
\t<p>Situation on the company:
\t\t";
            // line 19
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 19, $this->source); })()), "working", [], "any", false, false, false, 19)) ? ("Working") : ("Not working"));
            echo "</p>
\t<div id=\"showEmployeesButtons\">
\t";
            // line 21
            if ( !(isset($context["hideElement"]) || array_key_exists("hideElement", $context) ? $context["hideElement"] : (function () { throw new RuntimeError('Variable "hideElement" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_one_employee", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\"><input type=\"button\" class=\"buttons\" value=\"Show\"/>
\t";
            }
            // line 24
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_employee", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><input type=\"button\" class=\"buttons\" value=\"Edit\"/>
\t</a>
\t</div>
</div>
";
        } else {
            // line 29
            echo "<div class=\"showEmployee\">
\t<h3 class=\"error\">Employee has not been found</h3>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./show/template_showEmployee.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  112 => 29,  103 => 24,  97 => 22,  95 => 21,  90 => 19,  85 => 17,  80 => 15,  77 => 14,  72 => 12,  69 => 11,  67 => 10,  63 => 9,  58 => 7,  53 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if employee %}
<div class=\"showEmployee\">
\t<h3>{{ employee.name }}</h3>
\t<p>DNI:
\t\t{{ employee.dni }}</p>
\t<p>Birth date:
\t\t{{ employee.birthDate|date(\"d/m/Y\") }}</p>
\t<p>Employed since:
\t\t{{ employee.dateStartCompany|date(\"d/m/Y\") }}</p>
\t\t{% if not employee.working %}
\t\t\t<p>End date:
\t\t{{ employee.dateEndCompany|date(\"d/m/Y\") }}</p>
\t\t{% endif %}
\t<p>Position:
\t\t{{ employee.position }}</p>
\t<p>Annual salary:
\t\t{{ employee.salary }}</p>
\t<p>Situation on the company:
\t\t{{ employee.working ? \"Working\" : \"Not working\" }}</p>
\t<div id=\"showEmployeesButtons\">
\t{% if not hideElement %}
\t\t<a href=\"{{ path(\"show_one_employee\", {id: employee.id}) }}\"><input type=\"button\" class=\"buttons\" value=\"Show\"/>
\t{% endif %}
        <a href=\"{{ path(\"edit_employee\", {id: employee.id}) }}\"><input type=\"button\" class=\"buttons\" value=\"Edit\"/>
\t</a>
\t</div>
</div>
{% else %}
<div class=\"showEmployee\">
\t<h3 class=\"error\">Employee has not been found</h3>
</div>
{% endif %}
", "./show/template_showEmployee.html.twig", "C:\\Users\\curro\\Desktop\\DAW\\2º\\DWCS\\finalProjectDSC\\templates\\show\\template_showEmployee.html.twig");
    }
}
