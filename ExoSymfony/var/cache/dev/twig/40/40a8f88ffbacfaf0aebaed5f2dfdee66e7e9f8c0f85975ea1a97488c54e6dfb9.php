<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9122f096d825a5be34c8cb7354b93633e098ca76fa13e89fa7bc96eeaf296f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9122f096d825a5be34c8cb7354b93633e098ca76fa13e89fa7bc96eeaf296f8->enter($__internal_c9122f096d825a5be34c8cb7354b93633e098ca76fa13e89fa7bc96eeaf296f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7763204676eca41dd5bcf1cbfd2a88812df20dc727c875e8abbb421226327306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7763204676eca41dd5bcf1cbfd2a88812df20dc727c875e8abbb421226327306->enter($__internal_7763204676eca41dd5bcf1cbfd2a88812df20dc727c875e8abbb421226327306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9122f096d825a5be34c8cb7354b93633e098ca76fa13e89fa7bc96eeaf296f8->leave($__internal_c9122f096d825a5be34c8cb7354b93633e098ca76fa13e89fa7bc96eeaf296f8_prof);

        
        $__internal_7763204676eca41dd5bcf1cbfd2a88812df20dc727c875e8abbb421226327306->leave($__internal_7763204676eca41dd5bcf1cbfd2a88812df20dc727c875e8abbb421226327306_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_882f63a83b38762bc43cf390b5aa23e08a6185e67e954d98f058eada4537e3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882f63a83b38762bc43cf390b5aa23e08a6185e67e954d98f058eada4537e3e3->enter($__internal_882f63a83b38762bc43cf390b5aa23e08a6185e67e954d98f058eada4537e3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_090ef5deca17bca3f7e0e6a29ed738d47ef37df4ad573ea7ba90da600bafc821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090ef5deca17bca3f7e0e6a29ed738d47ef37df4ad573ea7ba90da600bafc821->enter($__internal_090ef5deca17bca3f7e0e6a29ed738d47ef37df4ad573ea7ba90da600bafc821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_090ef5deca17bca3f7e0e6a29ed738d47ef37df4ad573ea7ba90da600bafc821->leave($__internal_090ef5deca17bca3f7e0e6a29ed738d47ef37df4ad573ea7ba90da600bafc821_prof);

        
        $__internal_882f63a83b38762bc43cf390b5aa23e08a6185e67e954d98f058eada4537e3e3->leave($__internal_882f63a83b38762bc43cf390b5aa23e08a6185e67e954d98f058eada4537e3e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87222117de8cae6cd72fe3f6d6f324c42926a3e1f2d29e0f97c89388b24c7171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87222117de8cae6cd72fe3f6d6f324c42926a3e1f2d29e0f97c89388b24c7171->enter($__internal_87222117de8cae6cd72fe3f6d6f324c42926a3e1f2d29e0f97c89388b24c7171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ff211ea3a17cb0233cd899fbf6b42006d790bcc6ba5045d3bd9386b051e444f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff211ea3a17cb0233cd899fbf6b42006d790bcc6ba5045d3bd9386b051e444f->enter($__internal_4ff211ea3a17cb0233cd899fbf6b42006d790bcc6ba5045d3bd9386b051e444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4ff211ea3a17cb0233cd899fbf6b42006d790bcc6ba5045d3bd9386b051e444f->leave($__internal_4ff211ea3a17cb0233cd899fbf6b42006d790bcc6ba5045d3bd9386b051e444f_prof);

        
        $__internal_87222117de8cae6cd72fe3f6d6f324c42926a3e1f2d29e0f97c89388b24c7171->leave($__internal_87222117de8cae6cd72fe3f6d6f324c42926a3e1f2d29e0f97c89388b24c7171_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8bf4ebe52fa20bdfbff2bc270297c2e6bec6359f5458bea8a46b07aa72b756f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bf4ebe52fa20bdfbff2bc270297c2e6bec6359f5458bea8a46b07aa72b756f->enter($__internal_b8bf4ebe52fa20bdfbff2bc270297c2e6bec6359f5458bea8a46b07aa72b756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e31335dda9502137d81e4d4729ac54699e4e44a5b2c7f31042f544f008b249c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31335dda9502137d81e4d4729ac54699e4e44a5b2c7f31042f544f008b249c8->enter($__internal_e31335dda9502137d81e4d4729ac54699e4e44a5b2c7f31042f544f008b249c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e31335dda9502137d81e4d4729ac54699e4e44a5b2c7f31042f544f008b249c8->leave($__internal_e31335dda9502137d81e4d4729ac54699e4e44a5b2c7f31042f544f008b249c8_prof);

        
        $__internal_b8bf4ebe52fa20bdfbff2bc270297c2e6bec6359f5458bea8a46b07aa72b756f->leave($__internal_b8bf4ebe52fa20bdfbff2bc270297c2e6bec6359f5458bea8a46b07aa72b756f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/franqui/Developper/Recrutement/exoEnjoy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
