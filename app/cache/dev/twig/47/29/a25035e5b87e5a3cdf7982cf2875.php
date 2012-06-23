<?php

/* KlientBundle:Portfel:edit.html.twig */
class __TwigTemplate_4729a25035e5b87e5a3cdf7982cf2875 extends Twig_Template
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

<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo " class=\"mainForm\">
   <fieldset>
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iLocked2\">Konfiguracja</h5>
            </div>                    
            <div class=\"rowElem searchDrop\">
                <label>Nazwa:</label>
                <div class=\"formRight\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "nazwa"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Cena akcji:</label>
                <div class=\"formRight\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "cena"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Ilość:</label>
                <div class=\"formRight\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "ilosc"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Prowizja:</label>
                <div class=\"formRight\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "prowizja"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
                
            ";
        // line 41
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "edit_form"));
        echo " 

            <div class=\"submitForm\">
                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_history"), "html", null, true);
        echo "\"><button class=\"greyishBtn\">Cofnij</button></a>
                <input type=\"submit\" value=\"Edytuj zakup\" class=\"greenBtn\">
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>  
</form>


";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Portfel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
