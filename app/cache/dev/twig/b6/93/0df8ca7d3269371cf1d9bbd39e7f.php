<?php

/* KlientBundle::leftNav.html.twig */
class __TwigTemplate_b6930df8ca7d3269371cf1d9bbd39e7f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Left navigation -->
<div class=\"leftNav\"> <ul id=\"menu\">
        <li class=\"dash\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" title=\"\" ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "index")) {
            echo "class=\"active";
        }
        echo "\">
                <span>Moje konto</span>
            </a>
        </li>
        <li class=\"graphs\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel"), "html", null, true);
        echo "\" title=\"\" ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "portfel")) {
            echo "class=\"active";
        }
        echo "\">
                <span>Portfel inwestycyjny</span>
            </a>
        </li>
        <li class=\"forms\">
            <a href=\"#\" title=\"\" class=\"exp";
        // line 14
        if (twig_in_filter($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method"), array(0 => "portfel_new", 1 => "portfel_history", 2 => "portfel_show", 3 => "portfel_edit"))) {
            echo " active";
        }
        echo "\">
                <span>Operacje</span>
                <span class=\"numberLeft\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "operacje"), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"sub\">
                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_history"), "html", null, true);
        echo "\" title=\"\">Przeglądaj operacje</a></li>
                <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_kup"), "html", null, true);
        echo "\" title=\"\">Kupno papierów</a></li>
                <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_sprzedaj"), "html", null, true);
        echo "\" title=\"\">Sprzedaż papierów</a></li>
            </ul>
        </li>
        <li class=\"files\"><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wycena"), "html", null, true);
        echo "\" title=\"\"><span>Wycena portfela</span></a></li>
        <li class=\"typo\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kalkulator"), "html", null, true);
        echo "\" title=\"\"><span>Kalkulator zysków i strat</span></a></li>
        <li class=\"tables\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notowania"), "html", null, true);
        echo "\" title=\"\" ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "notowania")) {
            echo "class=\"active";
        }
        echo "\"><span>Notowania</span></a></li>
        <li class=\"cal\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_history"), "html", null, true);
        echo "\" title=\"\"><span>Kalendarz</span></a></li>
        <li class=\"gallery\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ulubieni"), "html", null, true);
        echo "\" title=\"\"><span>Obserwowani użytkownicy</span></a></li>
        <li class=\"widgets\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ustawienia"), "html", null, true);
        echo "\" title=\"\" ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "_route"), "method") == "ustawienia")) {
            echo "class=\"active";
        }
        echo "\"><span>Konfiguracja</span></a></li>
        <li class=\"errors\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("komunikaty"), "html", null, true);
        echo "\" title=\"\" class=\"exp\"><span>Komunikaty</span><span class=\"numberLeft\">6</span></a>
            <ul class=\"sub\">
                <li><a href=\"403.html\" title=\"\">403 page</a></li>
                <li><a href=\"404.html\" title=\"\">404 page</a></li>
                <li><a href=\"405.html\" title=\"\">405 page</a></li>
                <li><a href=\"500.html\" title=\"\">500 page</a></li>
                <li><a href=\"503.html\" title=\"\">503 page</a></li>
                <li class=\"last\"><a href=\"offline.html\" title=\"\">Website is offline</a></li>
            </ul>
        </li>
        <li class=\"contacts\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfele"), "html", null, true);
        echo "\" title=\"\"><span>Portfele użytkowników</span></a></li>
        <li class=\"pic\"><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pomoc"), "html", null, true);
        echo "\" title=\"\"><span>Pomoc</span></a></li>
    </ul> 
</div>";
    }

    public function getTemplateName()
    {
        return "KlientBundle::leftNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
