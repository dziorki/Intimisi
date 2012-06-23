<?php

/* UserBundle:Login:index.html.twig */
class __TwigTemplate_1dd13e7a224d0d4db561d54e34528664 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "


<div class=\"title\">
    <h5>Portfel inwestycyjny</h5>
</div>                


<div class=\"stats\">
    <ul><li><a href=\"#\" class=\"count grey\" title=\"\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "ilosc"), "html", null, true);
        echo "</a><span>ilość akcji</span></li>
        <li><a href=\"#\" class=\"count green\" title=\"\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "wzroslo"), "html", null, true);
        echo "</a><span>akcji wzrosło</span></li>
        <li><a href=\"#\" class=\"count red\" title=\"\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "zmalalo"), "html", null, true);
        echo "</a><span>akcji spadło</span></li>
        <li class=\"last\"><a href=\"#\" class=\"count blue\" title=\"\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "bez_zmian"), "html", null, true);
        echo "</a><span>akcji bez zmian</span></li>
    </ul>
    <div class=\"fix\"></div>  
</div>

<blockquote>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker</blockquote>



";
    }

    public function getTemplateName()
    {
        return "UserBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
