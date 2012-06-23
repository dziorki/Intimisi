<?php

/* KlientBundle::topNav.html.twig */
class __TwigTemplate_19e0e3d752a01407a32e0e102d6a0da6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Top navigation bar -->
<div id=\"topNav\"> <div class=\"fixed\">  
        <div class=\"wrapper\"><div class=\"welcome\"><a href=\"#\" title=\"\">
                    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/userPic.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                <span>Dzień dobry, ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "!</span></div>
            <div class=\"userNav\">
                <ul>
                    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/topnav/profile.png"), "html", null, true);
        echo "\" alt=\"\" /><span>Profil użytkownika</span></a></li>
                    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notowania"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/topnav/tasks.png"), "html", null, true);
        echo "\" alt=\"\" /><span>Notowania akcji</span></a></li>
                    <li class=\"dd\"><a title=\"\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/topnav/messages.png"), "html", null, true);
        echo "\" alt=\"\" /><span>Wiadomości</span><span class=\"numberTop blue\">8</span></a>
                        <ul class=\"menu_body\">
                            <li><a href=\"#\" title=\"\" class=\"sAdd\">nowa wiadomość</a></li>
                            <li><a href=\"#\" title=\"\" class=\"sInbox\">przychodzące</a></li>
                            <li><a href=\"#\" title=\"\" class=\"sOutbox\">wychodzące</a></li>
                            <li><a href=\"#\" title=\"\" class=\"sTrash\">kosz</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ustawienia"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/topnav/settings.png"), "html", null, true);
        echo "\" alt=\"\" /><span>Ustawienia</span></a></li>
                    <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\" title=\"\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/topnav/logout.png"), "html", null, true);
        echo "\" alt=\"\" /><span>Wyloguj</span></a></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div> 
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "KlientBundle::topNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
