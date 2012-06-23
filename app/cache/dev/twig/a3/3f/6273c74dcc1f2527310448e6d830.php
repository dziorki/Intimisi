<?php

/* KlientBundle::header.html.twig */
class __TwigTemplate_a33f6273c74dcc1f2527310448e6d830 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Header -->
<div id=\"header\" class=\"wrapper\"> <div class=\"logo\"><a href=\"/\" title=\"\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
    <div class=\"middleNav\"> 
        <ul>
            <li class=\"iMes\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aktualnosci"), "html", null, true);
        echo "\" title=\"\"><span>Aktualności</span></a><span class=\"numberMiddle\">12</span></li>
            <li class=\"iStat\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("statystyki"), "html", null, true);
        echo "\" title=\"\"><span>Moje statystyki</span></a></li>
            <li class=\"iUser\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ulubieni"), "html", null, true);
        echo "\" title=\"\"><span>Ulubieni użytkownicy</span></a><span class=\"numberMiddle\">3</span></li>
            <li class=\"iOrders\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel"), "html", null, true);
        echo "\" title=\"\"><span>Inwestycje</span></a><span class=\"numberMiddle green\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "inwestycje"), "html", null, true);
        echo "</span></li> 
        </ul> </div> <div class=\"fix\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "KlientBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
