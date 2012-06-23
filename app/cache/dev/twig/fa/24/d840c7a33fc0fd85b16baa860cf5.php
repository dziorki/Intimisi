<?php

/* KlientBundle:Profil:index.html.twig */
class __TwigTemplate_fa24d840c7a33fc0fd85b16baa860cf5 extends Twig_Template
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

<div class=\"title\"><h5>Profil użytkownika</h5></div>

<form action=\"\" class=\"mainForm\">
    <fieldset>
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iLocked2\">Ustawienia</h5>
            </div>                    
            <div class=\"rowElem noborder\">
                <label for=\"radioOne\">Nazwa użytkownika:<span class=\"req\">*</span></label>
                <div class=\"formRight\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "       
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label for=\"radioOne\">E-mail:<span class=\"req\">*</span></label>
                <div class=\"formRight\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "       
                </div>                        
                <div class=\"fix\"></div>                
            </div>
            <div class=\"rowElem\">
                <label for=\"radioOne\">Hasło:<span class=\"req\">*</span></label>
                <div class=\"formRight\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "password"));
        echo "       
                </div>                        
                <div class=\"fix\"></div>                  
            </div>
            <div class=\"rowElem\">
                <label for=\"radioOne\">Powtórz hasło:<span class=\"req\">*</span></label>
                <div class=\"formRight\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password"), "confirm"));
        echo "       
                </div>                        
                <div class=\"fix\"></div>                  
            </div>
            <div class=\"submitForm\">
                <input type=\"submit\" value=\"Zapisz ustawienia\" class=\"greyishBtn\">
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>  
</form>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Profil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
