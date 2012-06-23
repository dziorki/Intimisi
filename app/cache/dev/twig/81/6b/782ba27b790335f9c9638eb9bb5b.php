<?php

/* UserBundle:Login:register.html.twig */
class __TwigTemplate_816b782ba27b790335f9c9638eb9bb5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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

    // line 12
    public function block_form_errors($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 15
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "        ";
                if (($this->getAttribute($this->getContext($context, "error"), "messageTemplate") != "This value is already used")) {
                    // line 17
                    echo "            <div class=\"nNote nFailure hideit\">
                <p>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                    echo "</p>
            </div>
        ";
                }
                // line 21
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "    ";
        }
        echo " 
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
";
        // line 12
        $this->displayBlock('form_errors', $context, $blocks);
        // line 25
        echo "
    <div class=\"loginPanel .registerPanel\">
        <div class=\"head\"><h5 class=\"iUser\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</h5></div>


        <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " id=\"valid\" class=\"mainForm\">
            <fieldset>
                <div class=\"loginRow\">
                    <label for=\"req1\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\">";
        // line 34
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\">
                    <label for=\"req2\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\">";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "plainPassword"), "password"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\"> 
                    <label for=\"req3\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_user_registration_form_plainPassword_second", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\">";
        // line 44
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "plainPassword"), "confirm"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\"> 
                    <label for=\"req4\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_user_registration_form_email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\">";
        // line 49
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"loginRow\"> 
                    <label for=\"req10\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.confirm", array(), "UserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"loginInput\">";
        // line 54
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "terms"));
        echo "</div>
                    <div class=\"fix\"></div>
                </div>
                ";
        // line 57
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "     
                    
                <div class=\"loginRow\">
                    <div><label><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.back", array(), "UserBundle"), "html", null, true);
        echo "</a></label></div>
                    <input type=\"submit\" name=\"submit\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"greyishBtn submitForm\" />
                </div>
            </fieldset>
        </form>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Login:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
