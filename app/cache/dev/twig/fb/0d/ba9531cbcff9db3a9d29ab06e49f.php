<?php

/* KlientBundle:Aktualnosci:show.html.twig */
class __TwigTemplate_fb0dba9531cbcff9db3a9d29ab06e49f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"title\"><h5>Aktualności</h5></div>
<table class=\"record_properties\">
    <tbody>

        <tr>
            <th>Tytul</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tytul"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Zawartosc</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "zawartosc"), "html", null, true);
        echo "</td>
        </tr>

    </tbody>
</table>


";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Aktualnosci:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
