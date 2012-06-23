<?php

/* UserBundle:Login:login.html.twig */
class __TwigTemplate_402ea88a90c6c7ef31992fe36b955d68 extends Twig_Template
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
        return "::logowanie.html.twig";
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

<div class=\"loginWrapper\">
        
";
        // line 8
        if ($this->getContext($context, "error")) {
            // line 9
            echo "<div class=\"nNote nFailure hideit\">
    <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error"), array(), "validators"), "html", null, true);
            echo "</p>
</div>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 14
            echo "<div class=\"nNote nSuccess hideit\">
    <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "</p>
</div>
";
        }
        // line 18
        echo "    
    
    <div class=\"loginPanel\">
        <div class=\"head\"><h5 class=\"iUser\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.welcome", array(), "FOSUserBundle"), "html", null, true);
        echo "</h5></div>
        <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"POST\" id=\"valid\" class=\"mainForm\">
            <fieldset>
                <div class=\"loginRow noborder\">
                    <label for=\"req1\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\"><input type=\"text\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" class=\"validate[required]\" id=\"req1\"></div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"loginRow\">
                    <label for=\"req2\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\"><input type=\"password\" name=\"_password\" value=\"\" class=\"validate[required]\" id=\"req2\"></div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"loginRow\">
                    <div ><label for=\"check2\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></label></div>
                    <input type=\"submit\" name=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"greyishBtn submitForm\">
                </div>
            </fieldset>
        </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
