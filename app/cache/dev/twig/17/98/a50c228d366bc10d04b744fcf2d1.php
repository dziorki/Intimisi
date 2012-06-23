<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_1798a50c228d366bc10d04b744fcf2d1 extends Twig_Template
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
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 7
            echo "        <div class=\"message\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
            </div>
";
        }
        // line 11
        echo "

    <div class=\"loginPanel .registerPanel\">
        <div class=\"head\"><h5 class=\"iUser\">Rejestracja w portelu</h5></div>


        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " id=\"valid\" class=\"mainForm\">
            <fieldset>
                <div class=\"loginRow\">
                    <label for=\"req1\">Użytkownik:</label>
                    <div class=\"loginInput\">";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\">
                    <label for=\"req2\">Hasło:</label>
                    <div class=\"loginInput\">";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "password"), "password"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\"> 
                    <label for=\"req3\">Powtórz:</label>
                    <div class=\"loginInput\">";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "password"), "confirm"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\"> 
                    <label for=\"req4\">E-mail:</label>
                    <div class=\"loginInput\">";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\"> 
                    <label for=\"req10\">Potwierdź:</label>
                    <div class=\"loginInput\">";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "terms"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "     
                    
                <div class=\"loginRow\">
                    <div><label><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">Wróc</a></label></div>
                    <input type=\"submit\" name=\"submit\" value=\"Zarejestruj\" class=\"greyishBtn submitForm\" />
                </div>
            </fieldset>
        </form>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
