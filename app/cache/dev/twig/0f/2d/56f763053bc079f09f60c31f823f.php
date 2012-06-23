<?php

/* KlientBundle:Notowania:index.html.twig */
class __TwigTemplate_0f2d56f763053bc079f09f60c31f823f extends Twig_Template
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

<div class=\"title\"><h5>Portfel inwestycyjny</h5></div>
<div class=\"stats\">
    <ul><li><a href=\"#\" class=\"count grey\" title=\"\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "ilosc"), "html", null, true);
        echo "</a><span>ilość akcji</span></li>
        <li><a href=\"#\" class=\"count green\" title=\"\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "wzroslo"), "html", null, true);
        echo "</a><span>akcji wzrosło</span></li>
        <li><a href=\"#\" class=\"count red\" title=\"\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "zmalalo"), "html", null, true);
        echo "</a><span>akcji spadło</span></li>
        <li class=\"last\"><a href=\"#\" class=\"count blue\" title=\"\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "bez_zmian"), "html", null, true);
        echo "</a><span>akcji bez zmian</span></li>
    </ul>
    <div class=\"fix\"></div>  
</div>

<!-- Dynamic table --> 
<div class=\"table\"><div class=\"head\">
        <h5 class=\"iFrames\">Notowania akcji</h5></div>
    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"notowania\">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Kurs bieżący</th>
                <th>Zmiana procentowa</th>
                <th>Zmiana kwotowa</th>
                <th>Kurs otwarcia</th>
                <th>Kurs min</th>
                <th>Kurs max</th>
                <th>Wolumen</th>
                <th>Obrót</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "            <tr class=\"";
            if (($this->getAttribute($this->getContext($context, "entity"), "zmianaKwotowa") > 0)) {
                echo "gradeU";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "zmianaKwotowa") == 0)) {
                echo "gradeA";
            } else {
                echo "gradeX";
            }
            echo "\">
                <td><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nazwa"), "html", null, true);
            echo "</a></td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 37
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "kursBiezacy") / 100), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 38
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "zmianaProcentowa") / 100), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 39
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "zmianaKwotowa") / 100), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 40
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "kursOtwarcia") / 100), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 41
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "kursMin") / 100), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 42
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "kursMax") / 100), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "wolumen"), "html", null, true);
            echo "</td>
                <td class=\"right\" style=\"text-align: right\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "obrot"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "        </tbody>
    </table>  
</div>
<div class=\"fix\"></div>
";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Notowania:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
