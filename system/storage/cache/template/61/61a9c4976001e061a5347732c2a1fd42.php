<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_a9f16eabb1eb76d8d2295fef732a8811 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "</main>
<footer class=\"custom-footer\">
  <div class=\"custom-footer-inner\">

    <!-- LEFT: Nav Links -->
    <nav class=\"footer-links\">
     <a href=\"index.php?route=information/information&information_id=3\">Privacy Policy</a>
      <a href=\"index.php?route=information/information&information_id=4\">Shipping & Returns</a>
      <a href=\"index.php?route=information/information&information_id=2\">Terms and conditions</a>
  <a href=\"";
        // line 10
        yield ($context["contact"] ?? null);
        yield "\">Contact Us</a>
</nav>

    <!-- RIGHT: Instagram + Subscribe -->
    <div class=\"footer-right\">

      <!-- Instagram Icon -->
      <a href=\"https://www.instagram.com/seedsofanaar/\"  target=\"_blank\" class=\"footer-insta\" aria-label=\"Instagram\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"/>
          <circle cx=\"12\" cy=\"12\" r=\"4\"/>
          <circle cx=\"17.5\" cy=\"6.5\" r=\"0.8\" fill=\"currentColor\" stroke=\"none\"/>
        </svg>
      </a>

      <!-- Subscribe Form -->
      <div class=\"footer-subscribe-wrapper\">
        <div id=\"subscribe-form\" class=\"footer-subscribe-form\">
          <input
            type=\"email\"
            id=\"subscribe-email\"
            placeholder=\"E-mail\"
            autocomplete=\"off\"
          />
          <button id=\"subscribe-btn\" type=\"button\">SUBSCRIBE</button>
        </div>
        <p id=\"subscribe-success\" class=\"subscribe-success-msg\" style=\"display:none;\">
          You have been subscribed to our newsletter.
        </p>
      </div>

    </div>
  </div>
</footer>

";
        // line 45
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"";
        // line 46
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 48);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "
<script>
document.getElementById('subscribe-btn').addEventListener('click', function() {
    const email = document.getElementById('subscribe-email').value.trim();

    if (!email || !email.includes('@')) {
        document.getElementById('subscribe-email').style.border = '1px solid #c0392b';
        return;
    }

    // Send to OpenCart newsletter controller
    fetch('index.php?route=common/footer/subscribe', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'email=' + encodeURIComponent(email)
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById('subscribe-form').style.display = 'none';
        document.getElementById('subscribe-success').style.display = 'block';
    })
    .catch(() => {
        // Even if server fails, show success to user
        document.getElementById('subscribe-form').style.display = 'none';
        document.getElementById('subscribe-success').style.display = 'block';
    });
});

// Remove red border on typing
document.getElementById('subscribe-email').addEventListener('input', function() {
    this.style.border = '';
});
</script>

</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  112 => 50,  103 => 48,  99 => 47,  95 => 46,  91 => 45,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>
<footer class=\"custom-footer\">
  <div class=\"custom-footer-inner\">

    <!-- LEFT: Nav Links -->
    <nav class=\"footer-links\">
     <a href=\"index.php?route=information/information&information_id=3\">Privacy Policy</a>
      <a href=\"index.php?route=information/information&information_id=4\">Shipping & Returns</a>
      <a href=\"index.php?route=information/information&information_id=2\">Terms and conditions</a>
  <a href=\"{{ contact }}\">Contact Us</a>
</nav>

    <!-- RIGHT: Instagram + Subscribe -->
    <div class=\"footer-right\">

      <!-- Instagram Icon -->
      <a href=\"https://www.instagram.com/seedsofanaar/\"  target=\"_blank\" class=\"footer-insta\" aria-label=\"Instagram\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
          <rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"/>
          <circle cx=\"12\" cy=\"12\" r=\"4\"/>
          <circle cx=\"17.5\" cy=\"6.5\" r=\"0.8\" fill=\"currentColor\" stroke=\"none\"/>
        </svg>
      </a>

      <!-- Subscribe Form -->
      <div class=\"footer-subscribe-wrapper\">
        <div id=\"subscribe-form\" class=\"footer-subscribe-form\">
          <input
            type=\"email\"
            id=\"subscribe-email\"
            placeholder=\"E-mail\"
            autocomplete=\"off\"
          />
          <button id=\"subscribe-btn\" type=\"button\">SUBSCRIBE</button>
        </div>
        <p id=\"subscribe-success\" class=\"subscribe-success-msg\" style=\"display:none;\">
          You have been subscribed to our newsletter.
        </p>
      </div>

    </div>
  </div>
</footer>

{{ cookie }}
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
{% endfor %}

<script>
document.getElementById('subscribe-btn').addEventListener('click', function() {
    const email = document.getElementById('subscribe-email').value.trim();

    if (!email || !email.includes('@')) {
        document.getElementById('subscribe-email').style.border = '1px solid #c0392b';
        return;
    }

    // Send to OpenCart newsletter controller
    fetch('index.php?route=common/footer/subscribe', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'email=' + encodeURIComponent(email)
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById('subscribe-form').style.display = 'none';
        document.getElementById('subscribe-success').style.display = 'block';
    })
    .catch(() => {
        // Even if server fails, show success to user
        document.getElementById('subscribe-form').style.display = 'none';
        document.getElementById('subscribe-success').style.display = 'block';
    });
});

// Remove red border on typing
document.getElementById('subscribe-email').addEventListener('input', function() {
    this.style.border = '';
});
</script>

</body>
</html>", "catalog/view/template/common/footer.twig", "C:\\xampp\\htdocs\\opencartnew\\catalog\\view\\template\\common\\footer.twig");
    }
}
