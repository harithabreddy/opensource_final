<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/media_library/templates/media--media-library.html.twig */
class __TwigTemplate_b6904387eeb7b8fc5f1bf8e6242e2b8ef88ab6c4bed19a0d7dadc8c27a696a62 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 38];
        $filters = ["escape" => 37, "without" => 40, "t" => 43];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 37
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 38
        if (($context["content"] ?? null)) {
            // line 39
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["preview_attributes"] ?? null), "addClass", [0 => "js-media-library-item-preview"], "method")), "html", null, true);
            echo ">
      ";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "name"), "html", null, true);
            echo "
    </div>
    ";
            // line 42
            if ( !($context["status"] ?? null)) {
                // line 43
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("unpublished"));
                echo "
    ";
            }
            // line 45
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata_attributes"] ?? null)), "html", null, true);
            echo ">
      ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 49
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/media_library/templates/media--media-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  85 => 46,  80 => 45,  74 => 43,  72 => 42,  67 => 40,  62 => 39,  60 => 38,  55 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/media_library/templates/media--media-library.html.twig", "D:\\xamppp\\htdocs\\opensource_final\\core\\modules\\media_library\\templates\\media--media-library.html.twig");
    }
}
