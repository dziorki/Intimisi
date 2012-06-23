<?php

/* KlientBundle::switcher.html.twig */
class __TwigTemplate_cea79ba0193a15e90cc462ec3ade7cf9 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"switcher\"> <ul>
        <li><a href=\"#\" title=\"\" class=\"pat1\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/switcher/1.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
        <li><a href=\"#\" title=\"\" class=\"pat2\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/switcher/2.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
        <li><a href=\"#\" title=\"\" class=\"pat3\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/switcher/3.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
        <li><a href=\"#\" title=\"\" class=\"pat4\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/switcher/4.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
        <li class=\"last\"><a href=\"#\" title=\"\" class=\"pat5\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/switcher/5.png"), "html", null, true);
        echo "\" alt=\"\" /></a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "KlientBundle::switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
