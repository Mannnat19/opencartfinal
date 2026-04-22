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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_7c8d39e7c1c0f33109d247a71b99b99a extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 18
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 20
        if (($context["icon"] ?? null)) {
            // line 21
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 23
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 24);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 24);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 24);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 27
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 27);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 33
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "</head>
<body>
<div id=\"container\">
  <div id=\"alert\"></div>
  <!-- INFO BAR -->
<div class=\"top-info-bar\">

<div class=\"container-fluid\">

<div class=\"row align-items-center\">

<div class=\"col-md-6\">

<div class=\"info-text\">
Discover handmade treasures, curated and crafted with care for your home, heart, and dreams.
</div>

</div>

<div class=\"col-md-6 text-end\">

<ul class=\"info-links-list\" style=\"list-style: none; padding: 0; margin: 0; display: flex; gap: 30px;\">
        
<li><a href=\"#\" onclick=\"openSidebar('aboutSidebar')\">About Us</a></li>

<li>
<a href=\"index.php?route=information/journal\">
    Journal
  </a>
  </li>

<li><a href=\"#\" onclick=\"openSidebar('exhibitionSidebar')\">Exhibitions</a></li>

<li><a href=\"https://www.faire.com/direct/craftboat?signUp=direct\" target=\"_blank\">Wholesale</a></li>
</ul>

</div>

</div>

</div>

</div>

  <header class=\"main-header\">
<div class=\"container-fluid\">

<div class=\"header-flex\">

<!-- LEFT LOGO -->
<div class=\"logo-area\">
<a href=\"";
        // line 86
        yield ($context["home"] ?? null);
        yield "\">
<img src=\"";
        // line 87
        yield ($context["base"] ?? null);
        yield "admin/view/image/Anaar-Logo-A.webp\" alt=\"Seeds of Anaar\">
</a>
</div>

<!-- SHOP DROPDOWN -->
<div class=\"shop-wrapper\">
<button class=\"shop-btn\" id=\"shopToggle\">
<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <mask id=\"path-1-outside-1_3527_1146\" maskUnits=\"userSpaceOnUse\" x=\"0.0244141\" y=\"0\" width=\"20\" height=\"20\" fill=\"black\">
                        <rect fill=\"white\" x=\"0.0244141\" width=\"20\" height=\"20\"></rect>
                        <path d=\"M18.5639 9.22551C18.5596 9.1296 18.4808 9.05339 18.3841 9.05339H16.1508C15.9633 7.94878 15.1113 7.13447 14.1103 7.13447C14.0332 7.13447 13.9579 7.14046 13.8833 7.14988V3.88741C13.8833 3.78808 13.8029 3.70759 13.7035 3.70759H11.4121C11.1655 2.18684 10.0001 1.02997 8.60015 1.02997C8.49825 1.02997 8.39807 1.03682 8.29874 1.04881C8.14119 1.01798 7.98021 1 7.8158 1C6.42092 1 5.2366 2.15341 5.0003 3.70765H1.78496C1.6882 3.70765 1.60942 3.78386 1.60514 3.87977L1.02459 17.4082C1.02202 17.4655 1.04771 17.5212 1.09309 17.5572C1.13848 17.5931 1.19842 17.6051 1.25407 17.5889L2.36039 17.2746L3.31 17.5863C3.32884 17.5923 3.34768 17.5957 3.36651 17.5957H9.75861V18.8202C9.75861 18.9195 9.83911 19 9.93843 19H17.2639C17.2828 19 17.3016 18.9974 17.3204 18.9906L17.9781 18.7748L18.7461 18.9931C18.8018 19.0086 18.8617 18.9974 18.9071 18.9615C18.9525 18.9255 18.9782 18.8698 18.9756 18.8125L18.5646 9.22564L18.5639 9.22551ZM15.7861 9.05254H15.5934C15.4984 8.52249 15.2475 8.05668 14.8981 7.71846C15.3383 7.98475 15.6713 8.466 15.7869 9.05254H15.7861ZM12.4346 9.05254C12.5674 8.38036 12.9852 7.84518 13.5238 7.6157V9.05254H12.4346ZM11.8849 9.05254C11.9928 8.53363 12.2728 8.0935 12.6504 7.81864C12.3584 8.14574 12.1512 8.57131 12.0699 9.05254H11.8849ZM13.8835 7.5532C14.5428 7.70305 15.0668 8.29474 15.2244 9.05254H13.8835V7.5532ZM11.0491 3.70676H10.633C10.4942 2.79396 10.0284 2.0216 9.38536 1.53781C10.2237 1.86149 10.8667 2.68609 11.05 3.70676H11.0491ZM8.29454 1.41363C9.28097 1.63711 10.0713 2.53878 10.2691 3.70676H6.15217C6.36881 2.49941 7.22934 1.56606 8.29454 1.41363ZM7.19935 1.45216C6.47408 1.92054 5.94489 2.73915 5.78906 3.70759H5.36434C5.55272 2.59528 6.27885 1.72615 7.19935 1.45216ZM2.31518 16.9131L1.39554 17.1743L1.95811 4.06718H3.18603V17.1666L2.42051 16.9149C2.38626 16.9037 2.34943 16.9028 2.31518 16.9131ZM3.54566 17.2351V4.06727H5.12549C5.12892 4.06812 5.13234 4.06983 5.13577 4.07069C5.14861 4.0724 5.15974 4.06812 5.17173 4.06727H5.74886C5.74372 4.14604 5.73859 4.22396 5.73859 4.30445V5.14018C5.37209 5.22238 5.09637 5.54948 5.09637 5.94079C5.09637 6.22936 5.24622 6.48283 5.47227 6.62923L4.6117 7.3759C4.51751 7.45725 4.46871 7.56257 4.46871 7.68159V10.8206C4.46871 11.0535 4.67678 11.2428 4.93281 11.2428H6.93138C7.18741 11.2428 7.39548 11.0536 7.39548 10.8206V7.68334C7.39548 7.56346 7.34496 7.45641 7.2482 7.37509L6.36795 6.62842C6.59143 6.48114 6.74043 6.22854 6.74043 5.94169C6.74043 5.55036 6.46556 5.22328 6.09821 5.14108V4.30535C6.09821 4.22571 6.10335 4.14693 6.10849 4.06816H10.4541C10.4618 4.06902 10.4695 4.07245 10.4772 4.07245C10.4832 4.07245 10.49 4.07245 10.4969 4.07159C10.5012 4.07159 10.5037 4.06902 10.5072 4.06816H11.0911C11.0963 4.14609 11.1014 4.22486 11.1014 4.30535V5.11026C10.7349 5.19246 10.4592 5.51956 10.4592 5.91087C10.4592 6.36384 10.8283 6.7329 11.2812 6.7329C11.7342 6.7329 12.1033 6.36384 12.1033 5.91087C12.1033 5.51954 11.8275 5.19246 11.4611 5.11026V4.30535C11.4611 4.22571 11.4559 4.14693 11.4508 4.06816H13.5221V7.15856C12.5314 7.17568 11.7068 7.984 11.515 9.05435H9.93689C9.83756 9.05435 9.75707 9.13484 9.75707 9.23417V17.237H3.54472L3.54566 17.2351ZM5.921 6.76286C5.95611 6.76286 5.98265 6.77143 6.00491 6.79112L7.01618 7.64912C7.03588 7.66625 7.03588 7.67567 7.03588 7.68337V10.8207C7.03588 10.8455 6.99392 10.8823 6.93141 10.8823H4.93285C4.87034 10.8823 4.82839 10.8447 4.82839 10.8207V7.68162C4.82839 7.67391 4.82839 7.66449 4.84808 7.64823L5.83537 6.79196C5.85078 6.77911 5.8739 6.7637 5.91929 6.7637H5.92014H5.921V6.76286ZM5.92014 6.40238H5.91757C5.66325 6.40152 5.45689 6.19516 5.45689 5.93998C5.45689 5.74903 5.57334 5.58462 5.73947 5.51441V5.92713C5.73947 6.02646 5.81996 6.10695 5.91928 6.10695C6.01861 6.10695 6.0991 6.02646 6.0991 5.92713V5.51441C6.26437 5.58462 6.38083 5.74903 6.38083 5.93998C6.38083 6.1943 6.17446 6.40152 5.92014 6.40238ZM11.2822 6.07185C11.3815 6.07185 11.462 5.99136 11.462 5.89204V5.48444C11.6273 5.55466 11.7437 5.71906 11.7437 5.91001C11.7437 6.16519 11.5365 6.37241 11.2813 6.37241C11.0262 6.37241 10.8189 6.16519 10.8189 5.91001C10.8189 5.71906 10.9354 5.55465 11.1015 5.48444V5.89204C11.1015 5.99136 11.182 6.07185 11.2813 6.07185H11.2822ZM17.0844 18.6395H10.1186V9.41214H11.4793C11.4775 9.45068 11.4741 9.48835 11.4741 9.52774V10.0595C11.2121 10.1374 11.0194 10.378 11.0194 10.6657C11.0194 11.016 11.3046 11.3011 11.6548 11.3011C12.005 11.3011 12.2901 11.0159 12.2901 10.6657C12.2901 10.3789 12.0975 10.1383 11.8346 10.0595V9.52774C11.8346 9.48921 11.838 9.45068 11.8397 9.41214H12.1985C12.2011 9.41214 12.2028 9.41386 12.2054 9.41386C12.2131 9.41471 12.2208 9.41214 12.2285 9.41214H15.2709C15.2726 9.45068 15.276 9.48835 15.276 9.52774V10.0817C15.014 10.1597 14.8213 10.4003 14.8213 10.688C14.8213 11.0382 15.1065 11.3233 15.4567 11.3233C15.8069 11.3233 16.092 11.0382 16.092 10.688C16.092 10.4011 15.8994 10.1605 15.6365 10.0817V9.52774C15.6365 9.48921 15.6331 9.45068 15.6314 9.41214H15.9807C15.9867 9.413 15.9919 9.41557 15.997 9.41557C16.003 9.41557 16.0098 9.41557 16.0167 9.41471C16.0193 9.41471 16.021 9.413 16.0235 9.413H17.0862V18.6403L17.0844 18.6395ZM11.6546 10.8337C11.7539 10.8337 11.8344 10.7532 11.8344 10.6539V10.4621C11.8918 10.5126 11.9295 10.5845 11.9295 10.6659C11.9295 10.8174 11.8062 10.9407 11.6546 10.9407C11.5031 10.9407 11.3798 10.8174 11.3798 10.6659C11.3798 10.5837 11.4174 10.5126 11.4748 10.4621V10.653C11.4748 10.7524 11.5553 10.8328 11.6546 10.8328V10.8337ZM15.4548 10.8585C15.5541 10.8585 15.6346 10.778 15.6346 10.6787V10.4835C15.692 10.534 15.7297 10.6059 15.7297 10.6873C15.7297 10.8388 15.6064 10.9621 15.4548 10.9621C15.3032 10.9621 15.1799 10.8388 15.1799 10.6873C15.1799 10.6051 15.2176 10.534 15.275 10.4835V10.6779C15.275 10.7772 15.3555 10.8577 15.4548 10.8577V10.8585ZM18.0237 18.4135C17.9894 18.4041 17.9526 18.4041 17.9184 18.4152L17.4448 18.5711V9.41237H18.2129L18.606 18.5779L18.0246 18.4126L18.0237 18.4135Z\"></path>
                        </mask>
                        <path d=\"M18.5639 9.22551C18.5596 9.1296 18.4808 9.05339 18.3841 9.05339H16.1508C15.9633 7.94878 15.1113 7.13447 14.1103 7.13447C14.0332 7.13447 13.9579 7.14046 13.8833 7.14988V3.88741C13.8833 3.78808 13.8029 3.70759 13.7035 3.70759H11.4121C11.1655 2.18684 10.0001 1.02997 8.60015 1.02997C8.49825 1.02997 8.39807 1.03682 8.29874 1.04881C8.14119 1.01798 7.98021 1 7.8158 1C6.42092 1 5.2366 2.15341 5.0003 3.70765H1.78496C1.6882 3.70765 1.60942 3.78386 1.60514 3.87977L1.02459 17.4082C1.02202 17.4655 1.04771 17.5212 1.09309 17.5572C1.13848 17.5931 1.19842 17.6051 1.25407 17.5889L2.36039 17.2746L3.31 17.5863C3.32884 17.5923 3.34768 17.5957 3.36651 17.5957H9.75861V18.8202C9.75861 18.9195 9.83911 19 9.93843 19H17.2639C17.2828 19 17.3016 18.9974 17.3204 18.9906L17.9781 18.7748L18.7461 18.9931C18.8018 19.0086 18.8617 18.9974 18.9071 18.9615C18.9525 18.9255 18.9782 18.8698 18.9756 18.8125L18.5646 9.22564L18.5639 9.22551ZM15.7861 9.05254H15.5934C15.4984 8.52249 15.2475 8.05668 14.8981 7.71846C15.3383 7.98475 15.6713 8.466 15.7869 9.05254H15.7861ZM12.4346 9.05254C12.5674 8.38036 12.9852 7.84518 13.5238 7.6157V9.05254H12.4346ZM11.8849 9.05254C11.9928 8.53363 12.2728 8.0935 12.6504 7.81864C12.3584 8.14574 12.1512 8.57131 12.0699 9.05254H11.8849ZM13.8835 7.5532C14.5428 7.70305 15.0668 8.29474 15.2244 9.05254H13.8835V7.5532ZM11.0491 3.70676H10.633C10.4942 2.79396 10.0284 2.0216 9.38536 1.53781C10.2237 1.86149 10.8667 2.68609 11.05 3.70676H11.0491ZM8.29454 1.41363C9.28097 1.63711 10.0713 2.53878 10.2691 3.70676H6.15217C6.36881 2.49941 7.22934 1.56606 8.29454 1.41363ZM7.19935 1.45216C6.47408 1.92054 5.94489 2.73915 5.78906 3.70759H5.36434C5.55272 2.59528 6.27885 1.72615 7.19935 1.45216ZM2.31518 16.9131L1.39554 17.1743L1.95811 4.06718H3.18603V17.1666L2.42051 16.9149C2.38626 16.9037 2.34943 16.9028 2.31518 16.9131ZM3.54566 17.2351V4.06727H5.12549C5.12892 4.06812 5.13234 4.06983 5.13577 4.07069C5.14861 4.0724 5.15974 4.06812 5.17173 4.06727H5.74886C5.74372 4.14604 5.73859 4.22396 5.73859 4.30445V5.14018C5.37209 5.22238 5.09637 5.54948 5.09637 5.94079C5.09637 6.22936 5.24622 6.48283 5.47227 6.62923L4.6117 7.3759C4.51751 7.45725 4.46871 7.56257 4.46871 7.68159V10.8206C4.46871 11.0535 4.67678 11.2428 4.93281 11.2428H6.93138C7.18741 11.2428 7.39548 11.0536 7.39548 10.8206V7.68334C7.39548 7.56346 7.34496 7.45641 7.2482 7.37509L6.36795 6.62842C6.59143 6.48114 6.74043 6.22854 6.74043 5.94169C6.74043 5.55036 6.46556 5.22328 6.09821 5.14108V4.30535C6.09821 4.22571 6.10335 4.14693 6.10849 4.06816H10.4541C10.4618 4.06902 10.4695 4.07245 10.4772 4.07245C10.4832 4.07245 10.49 4.07245 10.4969 4.07159C10.5012 4.07159 10.5037 4.06902 10.5072 4.06816H11.0911C11.0963 4.14609 11.1014 4.22486 11.1014 4.30535V5.11026C10.7349 5.19246 10.4592 5.51956 10.4592 5.91087C10.4592 6.36384 10.8283 6.7329 11.2812 6.7329C11.7342 6.7329 12.1033 6.36384 12.1033 5.91087C12.1033 5.51954 11.8275 5.19246 11.4611 5.11026V4.30535C11.4611 4.22571 11.4559 4.14693 11.4508 4.06816H13.5221V7.15856C12.5314 7.17568 11.7068 7.984 11.515 9.05435H9.93689C9.83756 9.05435 9.75707 9.13484 9.75707 9.23417V17.237H3.54472L3.54566 17.2351ZM5.921 6.76286C5.95611 6.76286 5.98265 6.77143 6.00491 6.79112L7.01618 7.64912C7.03588 7.66625 7.03588 7.67567 7.03588 7.68337V10.8207C7.03588 10.8455 6.99392 10.8823 6.93141 10.8823H4.93285C4.87034 10.8823 4.82839 10.8447 4.82839 10.8207V7.68162C4.82839 7.67391 4.82839 7.66449 4.84808 7.64823L5.83537 6.79196C5.85078 6.77911 5.8739 6.7637 5.91929 6.7637H5.92014H5.921V6.76286ZM5.92014 6.40238H5.91757C5.66325 6.40152 5.45689 6.19516 5.45689 5.93998C5.45689 5.74903 5.57334 5.58462 5.73947 5.51441V5.92713C5.73947 6.02646 5.81996 6.10695 5.91928 6.10695C6.01861 6.10695 6.0991 6.02646 6.0991 5.92713V5.51441C6.26437 5.58462 6.38083 5.74903 6.38083 5.93998C6.38083 6.1943 6.17446 6.40152 5.92014 6.40238ZM11.2822 6.07185C11.3815 6.07185 11.462 5.99136 11.462 5.89204V5.48444C11.6273 5.55466 11.7437 5.71906 11.7437 5.91001C11.7437 6.16519 11.5365 6.37241 11.2813 6.37241C11.0262 6.37241 10.8189 6.16519 10.8189 5.91001C10.8189 5.71906 10.9354 5.55465 11.1015 5.48444V5.89204C11.1015 5.99136 11.182 6.07185 11.2813 6.07185H11.2822ZM17.0844 18.6395H10.1186V9.41214H11.4793C11.4775 9.45068 11.4741 9.48835 11.4741 9.52774V10.0595C11.2121 10.1374 11.0194 10.378 11.0194 10.6657C11.0194 11.016 11.3046 11.3011 11.6548 11.3011C12.005 11.3011 12.2901 11.0159 12.2901 10.6657C12.2901 10.3789 12.0975 10.1383 11.8346 10.0595V9.52774C11.8346 9.48921 11.838 9.45068 11.8397 9.41214H12.1985C12.2011 9.41214 12.2028 9.41386 12.2054 9.41386C12.2131 9.41471 12.2208 9.41214 12.2285 9.41214H15.2709C15.2726 9.45068 15.276 9.48835 15.276 9.52774V10.0817C15.014 10.1597 14.8213 10.4003 14.8213 10.688C14.8213 11.0382 15.1065 11.3233 15.4567 11.3233C15.8069 11.3233 16.092 11.0382 16.092 10.688C16.092 10.4011 15.8994 10.1605 15.6365 10.0817V9.52774C15.6365 9.48921 15.6331 9.45068 15.6314 9.41214H15.9807C15.9867 9.413 15.9919 9.41557 15.997 9.41557C16.003 9.41557 16.0098 9.41557 16.0167 9.41471C16.0193 9.41471 16.021 9.413 16.0235 9.413H17.0862V18.6403L17.0844 18.6395ZM11.6546 10.8337C11.7539 10.8337 11.8344 10.7532 11.8344 10.6539V10.4621C11.8918 10.5126 11.9295 10.5845 11.9295 10.6659C11.9295 10.8174 11.8062 10.9407 11.6546 10.9407C11.5031 10.9407 11.3798 10.8174 11.3798 10.6659C11.3798 10.5837 11.4174 10.5126 11.4748 10.4621V10.653C11.4748 10.7524 11.5553 10.8328 11.6546 10.8328V10.8337ZM15.4548 10.8585C15.5541 10.8585 15.6346 10.778 15.6346 10.6787V10.4835C15.692 10.534 15.7297 10.6059 15.7297 10.6873C15.7297 10.8388 15.6064 10.9621 15.4548 10.9621C15.3032 10.9621 15.1799 10.8388 15.1799 10.6873C15.1799 10.6051 15.2176 10.534 15.275 10.4835V10.6779C15.275 10.7772 15.3555 10.8577 15.4548 10.8577V10.8585ZM18.0237 18.4135C17.9894 18.4041 17.9526 18.4041 17.9184 18.4152L17.4448 18.5711V9.41237H18.2129L18.606 18.5779L18.0246 18.4126L18.0237 18.4135Z\" fill=\"#644935\"></path>
                        
                      </svg>
                      SHOP

                      <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <line x1=\"5.06066\" y1=\"7\" x2=\"10\" y2=\"11.9393\" stroke=\"#644935\" stroke-width=\"1.5\" stroke-linecap=\"round\"></line>
                        <line x1=\"0.75\" y1=\"-0.75\" x2=\"7.73528\" y2=\"-0.75\" transform=\"matrix(-0.707107 0.707107 0.707107 0.707107 16 7)\" stroke=\"#644935\" stroke-width=\"1.5\" stroke-linecap=\"round\"></line>
                      </svg>
</button>

<div class=\"shop-dropdown\" id=\"shopMenu\">

<div class=\"dropdown-col\">

  <div class=\"dropdown-block\">
    
    <div class=\"dropdown-img\">
      <img src=\"";
        // line 117
        yield ($context["base"] ?? null);
        yield "admin/view/image/categories.png\" alt=\"\">
    </div>

    <div class=\"dropdown-text\">
      <h4>CATEGORIES</h4>

      <a href=\"#\">All</a>
      <a href=\"#\">Tableware</a>
      <a href=\"#\">Bath & Bed</a>
      <a href=\"#\">Kitchen</a>
      <a href=\"#\">Decor</a>
      <a href=\"#\">Personal items</a>
      <a href=\"#\">Clothing</a>
      <a href=\"#\">Gifting</a>
    </div>

  </div>

</div>

<div class=\"dropdown-col\">
 <div class=\"dropdown-block\">

<div class=\"dropdown-img\">

<img src=\"";
        // line 142
        yield ($context["base"] ?? null);
        yield "admin/view/image/cause.png\" alt=\"\">
</div>
<div class=\"dropdown-text\">
<h4>CAUSE</h4>
<a href=\"#\">Small Batch Craft</a>
<a href=\"#\">Reimagined Materials</a>
<a href=\"#\">Naturally Dyed</a>
<a href=\"#\">She Made This</a>
</div>            
</div>
</div>
<div class=\"dropdown-col\">

 <div class=\"dropdown-block\">

<div class=\"dropdown-img\">
<img src=\"";
        // line 158
        yield ($context["base"] ?? null);
        yield "admin/view/image/mood.webp\" alt=\"\">
</div>
<div class=\"dropdown-text\">
<h4>MOOD</h4>
<a href=\"#\">Earth & Clay</a>
<a href=\"#\">Coastal Calm</a>
<a href=\"#\">Monochrome Modern</a>
<a href=\"#\">Garden Tones</a>

</div>
</div>
</div>
</div>
</div>

<div class=\"search-wrapper\">
    
    <img src=\"https://cdn.shopify.com/s/files/1/0858/1509/9671/files/noun-search-7848901_2.png?v=1751396098\" class=\"search-icon\">

    <input 
        type=\"search\" 
        name=\"q\" 
        id=\"searchInput1\"
        class=\"search-input\"
        placeholder=\"Search\"
    >

</div>
<!-- ICONS -->
<div class=\"header-icons\">

<a href=\"";
        // line 189
        yield ($context["account"] ?? null);
        yield "\">
<img class=\"\" src=\"https://cdn.shopify.com/s/files/1/0858/1509/9671/files/Group_1.png?v=1751452048\" width=\"26\" height=\"28\">
</a>
<a href=\"";
        // line 192
        yield ($context["wishlist"] ?? null);
        yield "\"> 
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" overflow=\"unset\" class=\"icon\">
            <path d=\"M12.4869 22C12.2364 21.9968 11.9918 21.9232 11.7804 21.7875C8.18822 19.57 5.48518 17.3766 3.2783 14.8705C2.01853 13.5287 1.04215 11.942 0.408559 10.207C-0.730606 6.84675 0.5832 2.9211 3.46882 1.07256C4.78425 0.221399 6.35422 -0.134962 7.90363 0.0659208C9.45304 0.266804 10.8831 1.01212 11.9431 2.17126C12.1376 2.37977 12.3162 2.60031 12.4869 2.81685C12.7194 2.51694 12.97 2.2317 13.2371 1.96275C13.8816 1.32075 14.6473 0.816306 15.4888 0.479444C16.3303 0.142583 17.2302 -0.0198119 18.1351 0.00192686C19.0214 0.0266866 19.8936 0.23235 20.6992 0.606539C21.5048 0.980728 22.2271 1.51571 22.8227 2.17928C25.0693 4.63732 25.6012 7.62065 24.3072 10.8045C23.6255 12.404 22.6611 13.8647 21.4613 15.1151C19.3548 17.3836 16.9713 19.3724 14.3683 21.0336C14.019 21.2662 13.6578 21.4907 13.3006 21.7113L13.1934 21.7795C12.9825 21.9174 12.738 21.9937 12.4869 22Z\" stroke-width=\"1.7\" stroke=\"currentColor\"></path>
          </svg>

</a>

<a href=\"javascript:void(0)\" onclick=\"openCartDrawer()\">
<svg aria-hidden=\"true\" fill=\"none\" focusable=\"false\" width=\"32\" class=\"header__nav-icon icon icon-cart\" viewBox=\"0 0 24 24\"><path d=\"M19.8757 5.24613C19.7647 5.10391 19.5943 5.02078 19.4139 5.02078H4.80903C4.68629 4.52985 4.47872 3.69946 4.27356 2.87924C3.84981 1.18401 2.33342 0 0.585933 0C0.262342 0 0 0.262342 0 0.585933C0 0.909524 0.262342 1.17187 0.585933 1.17187C1.79467 1.17187 2.84357 1.9908 3.13669 3.16349L5.2498 11.6163C5.41062 12.2595 5.78663 12.8017 6.28937 13.1752C5.28422 14.1306 5.50922 15.8793 6.703 16.5587C5.64503 17.9425 6.67464 20.0161 8.43099 19.9998C10.0195 20.0213 11.0921 18.2569 10.3476 16.8618H13.4179C12.6736 18.2571 13.7458 20.0213 15.3346 19.9998C18.1893 19.8916 18.1887 15.7979 15.3345 15.69H7.80334C6.50065 15.6404 6.50163 13.7729 7.80334 13.7238H15.8162C17.0954 13.7238 18.2054 12.8572 18.5156 11.6162L19.9823 5.74878C20.0261 5.57378 19.9868 5.38832 19.8757 5.24613ZM15.3345 16.8619C15.8766 16.8619 16.3176 17.3029 16.3176 17.8449C16.2682 19.1473 14.4007 19.147 14.3515 17.8449C14.3515 17.3029 14.7925 16.8619 15.3345 16.8619ZM8.43095 16.8619C8.97302 16.8619 9.41403 17.3029 9.41403 17.8449C9.36462 19.1473 7.49713 19.147 7.44787 17.8449C7.44787 17.3029 7.88888 16.8619 8.43095 16.8619ZM17.3788 11.3321C17.1992 12.0503 16.5567 12.552 15.8162 12.552H7.94924C7.20877 12.552 6.56624 12.0503 6.38667 11.3321L5.10195 6.19269H18.6635L17.3788 11.3321Z\" fill=\"#303030\"></path></svg>
</a>

<!-- CURRENCY -->
<div class=\"currency-box\">
<select onchange=\"location = this.value;\">
<option value=\"#\">INR ₹</option>
<option value=\"#\">USD \$</option>
</select>
</div>

</div>

</div>
</div>
</header>


<!-- CART SIDEBAR (NEW) -->
<div id=\"cartDrawer\">

  <div class=\"cart-drawer-header\">
    <span>Cart</span>
    <span id=\"cartCloseBtn\">×</span>
  </div>

  <div class=\"cart-drawer-body\" id=\"cartDrawerItems\">
    <p class=\"empty-text\">Your cart is empty</p>
  </div>

  <div class=\"cart-drawer-footer\">
    <div class=\"cart-total-row\">
      <span>Total</span>
      <span id=\"drawerTotal\">\$0.00</span>
    </div>

    <button class=\"checkout-btn\">Checkout</button>
  </div>

</div>
<div id=\"overlay\"></div>

<!-- ABOUT SIDEBAR -->
<div id=\"aboutSidebar\" class=\"custom-sidebar\">
  <div class=\"sidebar-content\">

    <span class=\"close-btn\" onclick=\"closeSidebar('aboutSidebar')\">&times;</span>

    <h3>WELCOME TO SEEDS OF ANAAR</h3>

    <img src=\"admin/view/image/about1.webp\" class=\"sidebar-img\">

    <p>
      An intentional shop, curated by the team behind Craft Boat —
      rooted in the belief that creativity, curiosity, and courage help meaningful things grow.
    </p>

    <img src=\"admin/view/image/about2.png\" class=\"sidebar-img\">

    <div class=\"insta-icon\">
    <a href=\"https://www.instagram.com/seedsofanaar/\" target=\"_blank\">
    <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#9b8a7a\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"5\"></rect>
  <circle cx=\"12\" cy=\"12\" r=\"4\"></circle>
  <circle cx=\"17\" cy=\"7\" r=\"1.2\"></circle>
   </svg>
   </a>
     </div>

  </div>
</div>

<div id=\"exhibitionSidebar\" class=\"custom-sidebar\">
  <div class=\"sidebar-content\">

    <span class=\"close-btn\" onclick=\"closeSidebar('exhibitionSidebar')\">&times;</span>

    <h3>EXHIBITION</h3>

    <img src=\"admin/view/image/exhibition1.jpg\" class=\"sidebar-img\">

    <p>
      As part of this journey, we host workshops and exhibitions aligned with our vision.
    </p>

    <p><b>Upcoming Exhibition</b></p>
    <p>Shoppe Object — New York</p>
    <p>August 3 – 5, 2025</p>

     <img src=\"admin/view/image/exhibition2.jpg\" class=\"sidebar-img\">

    <div class=\"insta-icon\">
    <a href=\"https://www.instagram.com/seedsofanaar/\" target=\"_blank\">
    <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#9b8a7a\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"5\"></rect>
  <circle cx=\"12\" cy=\"12\" r=\"4\"></circle>
  <circle cx=\"17\" cy=\"7\" r=\"1.2\"></circle>
   </svg>
   </a>
     </div>

  </div>
</div>
<div id=\"overlay\" onclick=\"closeAllSidebars()\"></div>

<script>

// ================= SHOP DROPDOWN =================
const shopWrapper = document.querySelector(\".shop-wrapper\");

if (shopWrapper) {
  shopWrapper.addEventListener(\"mouseenter\", () => {
    document.getElementById(\"shopMenu\").classList.add(\"show\");
  });

  shopWrapper.addEventListener(\"mouseleave\", () => {
    document.getElementById(\"shopMenu\").classList.remove(\"show\");
  });
}

// ================= SIDEBARS (About / Exhibition etc.) =================
function openSidebar(id) {
  document.getElementById(id).classList.add(\"active\");
  document.getElementById(\"overlay\").classList.add(\"active\");
  document.body.classList.add(\"no-scroll\");
}

function closeSidebar(id) {
  document.getElementById(id).classList.remove(\"active\");
  document.getElementById(\"overlay\").classList.remove(\"active\");
  document.body.classList.remove(\"no-scroll\");
}

function closeAllSidebars() {
  document.querySelectorAll(\".custom-sidebar\").forEach(el => {
    el.classList.remove(\"active\");
  });
  document.getElementById(\"overlay\").classList.remove(\"active\");
  document.body.classList.remove(\"no-scroll\");
}

// ESC KEY CLOSE
document.addEventListener(\"keydown\", function(e){
  if(e.key === \"Escape\") {
    closeAllSidebars();
    closeCartDrawer();
  }
});

// ================= HEADER SCROLL EFFECT =================
let lastScroll = 0;

window.addEventListener(\"scroll\", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll > lastScroll && currentScroll > 50) {
    document.body.classList.add(\"info-hidden\");
  } else {
    document.body.classList.remove(\"info-hidden\");
  }

  lastScroll = currentScroll;
});

// ================= CART SIDEBAR (FIXED VERSION) =================
const cartDrawer = document.getElementById('cartDrawer');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('cartCloseBtn');

// OPEN (called from your onclick)
function openCartDrawer(){
  if(cartDrawer){
    cartDrawer.classList.add('active');
  }
  if(overlay){
    overlay.classList.add('active');
  }
  document.body.classList.add('no-scroll');
}

// CLOSE
function closeCartDrawer(){
  if(cartDrawer){
    cartDrawer.classList.remove('active');
  }
  if(overlay){
    overlay.classList.remove('active');
  }
  document.body.classList.remove('no-scroll');
}

// CLOSE BUTTON
if(closeBtn){
  closeBtn.addEventListener('click', closeCartDrawer);
}

// CLICK OUTSIDE (overlay)
if(overlay){
  overlay.addEventListener('click', () => {
    closeCartDrawer();
    closeAllSidebars(); // keeps your existing system working
  });
}

</script>

</body>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  345 => 192,  339 => 189,  305 => 158,  286 => 142,  258 => 117,  225 => 87,  221 => 86,  168 => 35,  159 => 33,  154 => 32,  143 => 30,  138 => 29,  129 => 27,  124 => 26,  111 => 24,  106 => 23,  100 => 21,  98 => 20,  93 => 18,  89 => 17,  85 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
  {% endif %}
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
</head>
<body>
<div id=\"container\">
  <div id=\"alert\"></div>
  <!-- INFO BAR -->
<div class=\"top-info-bar\">

<div class=\"container-fluid\">

<div class=\"row align-items-center\">

<div class=\"col-md-6\">

<div class=\"info-text\">
Discover handmade treasures, curated and crafted with care for your home, heart, and dreams.
</div>

</div>

<div class=\"col-md-6 text-end\">

<ul class=\"info-links-list\" style=\"list-style: none; padding: 0; margin: 0; display: flex; gap: 30px;\">
        
<li><a href=\"#\" onclick=\"openSidebar('aboutSidebar')\">About Us</a></li>

<li>
<a href=\"index.php?route=information/journal\">
    Journal
  </a>
  </li>

<li><a href=\"#\" onclick=\"openSidebar('exhibitionSidebar')\">Exhibitions</a></li>

<li><a href=\"https://www.faire.com/direct/craftboat?signUp=direct\" target=\"_blank\">Wholesale</a></li>
</ul>

</div>

</div>

</div>

</div>

  <header class=\"main-header\">
<div class=\"container-fluid\">

<div class=\"header-flex\">

<!-- LEFT LOGO -->
<div class=\"logo-area\">
<a href=\"{{ home }}\">
<img src=\"{{ base }}admin/view/image/Anaar-Logo-A.webp\" alt=\"Seeds of Anaar\">
</a>
</div>

<!-- SHOP DROPDOWN -->
<div class=\"shop-wrapper\">
<button class=\"shop-btn\" id=\"shopToggle\">
<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <mask id=\"path-1-outside-1_3527_1146\" maskUnits=\"userSpaceOnUse\" x=\"0.0244141\" y=\"0\" width=\"20\" height=\"20\" fill=\"black\">
                        <rect fill=\"white\" x=\"0.0244141\" width=\"20\" height=\"20\"></rect>
                        <path d=\"M18.5639 9.22551C18.5596 9.1296 18.4808 9.05339 18.3841 9.05339H16.1508C15.9633 7.94878 15.1113 7.13447 14.1103 7.13447C14.0332 7.13447 13.9579 7.14046 13.8833 7.14988V3.88741C13.8833 3.78808 13.8029 3.70759 13.7035 3.70759H11.4121C11.1655 2.18684 10.0001 1.02997 8.60015 1.02997C8.49825 1.02997 8.39807 1.03682 8.29874 1.04881C8.14119 1.01798 7.98021 1 7.8158 1C6.42092 1 5.2366 2.15341 5.0003 3.70765H1.78496C1.6882 3.70765 1.60942 3.78386 1.60514 3.87977L1.02459 17.4082C1.02202 17.4655 1.04771 17.5212 1.09309 17.5572C1.13848 17.5931 1.19842 17.6051 1.25407 17.5889L2.36039 17.2746L3.31 17.5863C3.32884 17.5923 3.34768 17.5957 3.36651 17.5957H9.75861V18.8202C9.75861 18.9195 9.83911 19 9.93843 19H17.2639C17.2828 19 17.3016 18.9974 17.3204 18.9906L17.9781 18.7748L18.7461 18.9931C18.8018 19.0086 18.8617 18.9974 18.9071 18.9615C18.9525 18.9255 18.9782 18.8698 18.9756 18.8125L18.5646 9.22564L18.5639 9.22551ZM15.7861 9.05254H15.5934C15.4984 8.52249 15.2475 8.05668 14.8981 7.71846C15.3383 7.98475 15.6713 8.466 15.7869 9.05254H15.7861ZM12.4346 9.05254C12.5674 8.38036 12.9852 7.84518 13.5238 7.6157V9.05254H12.4346ZM11.8849 9.05254C11.9928 8.53363 12.2728 8.0935 12.6504 7.81864C12.3584 8.14574 12.1512 8.57131 12.0699 9.05254H11.8849ZM13.8835 7.5532C14.5428 7.70305 15.0668 8.29474 15.2244 9.05254H13.8835V7.5532ZM11.0491 3.70676H10.633C10.4942 2.79396 10.0284 2.0216 9.38536 1.53781C10.2237 1.86149 10.8667 2.68609 11.05 3.70676H11.0491ZM8.29454 1.41363C9.28097 1.63711 10.0713 2.53878 10.2691 3.70676H6.15217C6.36881 2.49941 7.22934 1.56606 8.29454 1.41363ZM7.19935 1.45216C6.47408 1.92054 5.94489 2.73915 5.78906 3.70759H5.36434C5.55272 2.59528 6.27885 1.72615 7.19935 1.45216ZM2.31518 16.9131L1.39554 17.1743L1.95811 4.06718H3.18603V17.1666L2.42051 16.9149C2.38626 16.9037 2.34943 16.9028 2.31518 16.9131ZM3.54566 17.2351V4.06727H5.12549C5.12892 4.06812 5.13234 4.06983 5.13577 4.07069C5.14861 4.0724 5.15974 4.06812 5.17173 4.06727H5.74886C5.74372 4.14604 5.73859 4.22396 5.73859 4.30445V5.14018C5.37209 5.22238 5.09637 5.54948 5.09637 5.94079C5.09637 6.22936 5.24622 6.48283 5.47227 6.62923L4.6117 7.3759C4.51751 7.45725 4.46871 7.56257 4.46871 7.68159V10.8206C4.46871 11.0535 4.67678 11.2428 4.93281 11.2428H6.93138C7.18741 11.2428 7.39548 11.0536 7.39548 10.8206V7.68334C7.39548 7.56346 7.34496 7.45641 7.2482 7.37509L6.36795 6.62842C6.59143 6.48114 6.74043 6.22854 6.74043 5.94169C6.74043 5.55036 6.46556 5.22328 6.09821 5.14108V4.30535C6.09821 4.22571 6.10335 4.14693 6.10849 4.06816H10.4541C10.4618 4.06902 10.4695 4.07245 10.4772 4.07245C10.4832 4.07245 10.49 4.07245 10.4969 4.07159C10.5012 4.07159 10.5037 4.06902 10.5072 4.06816H11.0911C11.0963 4.14609 11.1014 4.22486 11.1014 4.30535V5.11026C10.7349 5.19246 10.4592 5.51956 10.4592 5.91087C10.4592 6.36384 10.8283 6.7329 11.2812 6.7329C11.7342 6.7329 12.1033 6.36384 12.1033 5.91087C12.1033 5.51954 11.8275 5.19246 11.4611 5.11026V4.30535C11.4611 4.22571 11.4559 4.14693 11.4508 4.06816H13.5221V7.15856C12.5314 7.17568 11.7068 7.984 11.515 9.05435H9.93689C9.83756 9.05435 9.75707 9.13484 9.75707 9.23417V17.237H3.54472L3.54566 17.2351ZM5.921 6.76286C5.95611 6.76286 5.98265 6.77143 6.00491 6.79112L7.01618 7.64912C7.03588 7.66625 7.03588 7.67567 7.03588 7.68337V10.8207C7.03588 10.8455 6.99392 10.8823 6.93141 10.8823H4.93285C4.87034 10.8823 4.82839 10.8447 4.82839 10.8207V7.68162C4.82839 7.67391 4.82839 7.66449 4.84808 7.64823L5.83537 6.79196C5.85078 6.77911 5.8739 6.7637 5.91929 6.7637H5.92014H5.921V6.76286ZM5.92014 6.40238H5.91757C5.66325 6.40152 5.45689 6.19516 5.45689 5.93998C5.45689 5.74903 5.57334 5.58462 5.73947 5.51441V5.92713C5.73947 6.02646 5.81996 6.10695 5.91928 6.10695C6.01861 6.10695 6.0991 6.02646 6.0991 5.92713V5.51441C6.26437 5.58462 6.38083 5.74903 6.38083 5.93998C6.38083 6.1943 6.17446 6.40152 5.92014 6.40238ZM11.2822 6.07185C11.3815 6.07185 11.462 5.99136 11.462 5.89204V5.48444C11.6273 5.55466 11.7437 5.71906 11.7437 5.91001C11.7437 6.16519 11.5365 6.37241 11.2813 6.37241C11.0262 6.37241 10.8189 6.16519 10.8189 5.91001C10.8189 5.71906 10.9354 5.55465 11.1015 5.48444V5.89204C11.1015 5.99136 11.182 6.07185 11.2813 6.07185H11.2822ZM17.0844 18.6395H10.1186V9.41214H11.4793C11.4775 9.45068 11.4741 9.48835 11.4741 9.52774V10.0595C11.2121 10.1374 11.0194 10.378 11.0194 10.6657C11.0194 11.016 11.3046 11.3011 11.6548 11.3011C12.005 11.3011 12.2901 11.0159 12.2901 10.6657C12.2901 10.3789 12.0975 10.1383 11.8346 10.0595V9.52774C11.8346 9.48921 11.838 9.45068 11.8397 9.41214H12.1985C12.2011 9.41214 12.2028 9.41386 12.2054 9.41386C12.2131 9.41471 12.2208 9.41214 12.2285 9.41214H15.2709C15.2726 9.45068 15.276 9.48835 15.276 9.52774V10.0817C15.014 10.1597 14.8213 10.4003 14.8213 10.688C14.8213 11.0382 15.1065 11.3233 15.4567 11.3233C15.8069 11.3233 16.092 11.0382 16.092 10.688C16.092 10.4011 15.8994 10.1605 15.6365 10.0817V9.52774C15.6365 9.48921 15.6331 9.45068 15.6314 9.41214H15.9807C15.9867 9.413 15.9919 9.41557 15.997 9.41557C16.003 9.41557 16.0098 9.41557 16.0167 9.41471C16.0193 9.41471 16.021 9.413 16.0235 9.413H17.0862V18.6403L17.0844 18.6395ZM11.6546 10.8337C11.7539 10.8337 11.8344 10.7532 11.8344 10.6539V10.4621C11.8918 10.5126 11.9295 10.5845 11.9295 10.6659C11.9295 10.8174 11.8062 10.9407 11.6546 10.9407C11.5031 10.9407 11.3798 10.8174 11.3798 10.6659C11.3798 10.5837 11.4174 10.5126 11.4748 10.4621V10.653C11.4748 10.7524 11.5553 10.8328 11.6546 10.8328V10.8337ZM15.4548 10.8585C15.5541 10.8585 15.6346 10.778 15.6346 10.6787V10.4835C15.692 10.534 15.7297 10.6059 15.7297 10.6873C15.7297 10.8388 15.6064 10.9621 15.4548 10.9621C15.3032 10.9621 15.1799 10.8388 15.1799 10.6873C15.1799 10.6051 15.2176 10.534 15.275 10.4835V10.6779C15.275 10.7772 15.3555 10.8577 15.4548 10.8577V10.8585ZM18.0237 18.4135C17.9894 18.4041 17.9526 18.4041 17.9184 18.4152L17.4448 18.5711V9.41237H18.2129L18.606 18.5779L18.0246 18.4126L18.0237 18.4135Z\"></path>
                        </mask>
                        <path d=\"M18.5639 9.22551C18.5596 9.1296 18.4808 9.05339 18.3841 9.05339H16.1508C15.9633 7.94878 15.1113 7.13447 14.1103 7.13447C14.0332 7.13447 13.9579 7.14046 13.8833 7.14988V3.88741C13.8833 3.78808 13.8029 3.70759 13.7035 3.70759H11.4121C11.1655 2.18684 10.0001 1.02997 8.60015 1.02997C8.49825 1.02997 8.39807 1.03682 8.29874 1.04881C8.14119 1.01798 7.98021 1 7.8158 1C6.42092 1 5.2366 2.15341 5.0003 3.70765H1.78496C1.6882 3.70765 1.60942 3.78386 1.60514 3.87977L1.02459 17.4082C1.02202 17.4655 1.04771 17.5212 1.09309 17.5572C1.13848 17.5931 1.19842 17.6051 1.25407 17.5889L2.36039 17.2746L3.31 17.5863C3.32884 17.5923 3.34768 17.5957 3.36651 17.5957H9.75861V18.8202C9.75861 18.9195 9.83911 19 9.93843 19H17.2639C17.2828 19 17.3016 18.9974 17.3204 18.9906L17.9781 18.7748L18.7461 18.9931C18.8018 19.0086 18.8617 18.9974 18.9071 18.9615C18.9525 18.9255 18.9782 18.8698 18.9756 18.8125L18.5646 9.22564L18.5639 9.22551ZM15.7861 9.05254H15.5934C15.4984 8.52249 15.2475 8.05668 14.8981 7.71846C15.3383 7.98475 15.6713 8.466 15.7869 9.05254H15.7861ZM12.4346 9.05254C12.5674 8.38036 12.9852 7.84518 13.5238 7.6157V9.05254H12.4346ZM11.8849 9.05254C11.9928 8.53363 12.2728 8.0935 12.6504 7.81864C12.3584 8.14574 12.1512 8.57131 12.0699 9.05254H11.8849ZM13.8835 7.5532C14.5428 7.70305 15.0668 8.29474 15.2244 9.05254H13.8835V7.5532ZM11.0491 3.70676H10.633C10.4942 2.79396 10.0284 2.0216 9.38536 1.53781C10.2237 1.86149 10.8667 2.68609 11.05 3.70676H11.0491ZM8.29454 1.41363C9.28097 1.63711 10.0713 2.53878 10.2691 3.70676H6.15217C6.36881 2.49941 7.22934 1.56606 8.29454 1.41363ZM7.19935 1.45216C6.47408 1.92054 5.94489 2.73915 5.78906 3.70759H5.36434C5.55272 2.59528 6.27885 1.72615 7.19935 1.45216ZM2.31518 16.9131L1.39554 17.1743L1.95811 4.06718H3.18603V17.1666L2.42051 16.9149C2.38626 16.9037 2.34943 16.9028 2.31518 16.9131ZM3.54566 17.2351V4.06727H5.12549C5.12892 4.06812 5.13234 4.06983 5.13577 4.07069C5.14861 4.0724 5.15974 4.06812 5.17173 4.06727H5.74886C5.74372 4.14604 5.73859 4.22396 5.73859 4.30445V5.14018C5.37209 5.22238 5.09637 5.54948 5.09637 5.94079C5.09637 6.22936 5.24622 6.48283 5.47227 6.62923L4.6117 7.3759C4.51751 7.45725 4.46871 7.56257 4.46871 7.68159V10.8206C4.46871 11.0535 4.67678 11.2428 4.93281 11.2428H6.93138C7.18741 11.2428 7.39548 11.0536 7.39548 10.8206V7.68334C7.39548 7.56346 7.34496 7.45641 7.2482 7.37509L6.36795 6.62842C6.59143 6.48114 6.74043 6.22854 6.74043 5.94169C6.74043 5.55036 6.46556 5.22328 6.09821 5.14108V4.30535C6.09821 4.22571 6.10335 4.14693 6.10849 4.06816H10.4541C10.4618 4.06902 10.4695 4.07245 10.4772 4.07245C10.4832 4.07245 10.49 4.07245 10.4969 4.07159C10.5012 4.07159 10.5037 4.06902 10.5072 4.06816H11.0911C11.0963 4.14609 11.1014 4.22486 11.1014 4.30535V5.11026C10.7349 5.19246 10.4592 5.51956 10.4592 5.91087C10.4592 6.36384 10.8283 6.7329 11.2812 6.7329C11.7342 6.7329 12.1033 6.36384 12.1033 5.91087C12.1033 5.51954 11.8275 5.19246 11.4611 5.11026V4.30535C11.4611 4.22571 11.4559 4.14693 11.4508 4.06816H13.5221V7.15856C12.5314 7.17568 11.7068 7.984 11.515 9.05435H9.93689C9.83756 9.05435 9.75707 9.13484 9.75707 9.23417V17.237H3.54472L3.54566 17.2351ZM5.921 6.76286C5.95611 6.76286 5.98265 6.77143 6.00491 6.79112L7.01618 7.64912C7.03588 7.66625 7.03588 7.67567 7.03588 7.68337V10.8207C7.03588 10.8455 6.99392 10.8823 6.93141 10.8823H4.93285C4.87034 10.8823 4.82839 10.8447 4.82839 10.8207V7.68162C4.82839 7.67391 4.82839 7.66449 4.84808 7.64823L5.83537 6.79196C5.85078 6.77911 5.8739 6.7637 5.91929 6.7637H5.92014H5.921V6.76286ZM5.92014 6.40238H5.91757C5.66325 6.40152 5.45689 6.19516 5.45689 5.93998C5.45689 5.74903 5.57334 5.58462 5.73947 5.51441V5.92713C5.73947 6.02646 5.81996 6.10695 5.91928 6.10695C6.01861 6.10695 6.0991 6.02646 6.0991 5.92713V5.51441C6.26437 5.58462 6.38083 5.74903 6.38083 5.93998C6.38083 6.1943 6.17446 6.40152 5.92014 6.40238ZM11.2822 6.07185C11.3815 6.07185 11.462 5.99136 11.462 5.89204V5.48444C11.6273 5.55466 11.7437 5.71906 11.7437 5.91001C11.7437 6.16519 11.5365 6.37241 11.2813 6.37241C11.0262 6.37241 10.8189 6.16519 10.8189 5.91001C10.8189 5.71906 10.9354 5.55465 11.1015 5.48444V5.89204C11.1015 5.99136 11.182 6.07185 11.2813 6.07185H11.2822ZM17.0844 18.6395H10.1186V9.41214H11.4793C11.4775 9.45068 11.4741 9.48835 11.4741 9.52774V10.0595C11.2121 10.1374 11.0194 10.378 11.0194 10.6657C11.0194 11.016 11.3046 11.3011 11.6548 11.3011C12.005 11.3011 12.2901 11.0159 12.2901 10.6657C12.2901 10.3789 12.0975 10.1383 11.8346 10.0595V9.52774C11.8346 9.48921 11.838 9.45068 11.8397 9.41214H12.1985C12.2011 9.41214 12.2028 9.41386 12.2054 9.41386C12.2131 9.41471 12.2208 9.41214 12.2285 9.41214H15.2709C15.2726 9.45068 15.276 9.48835 15.276 9.52774V10.0817C15.014 10.1597 14.8213 10.4003 14.8213 10.688C14.8213 11.0382 15.1065 11.3233 15.4567 11.3233C15.8069 11.3233 16.092 11.0382 16.092 10.688C16.092 10.4011 15.8994 10.1605 15.6365 10.0817V9.52774C15.6365 9.48921 15.6331 9.45068 15.6314 9.41214H15.9807C15.9867 9.413 15.9919 9.41557 15.997 9.41557C16.003 9.41557 16.0098 9.41557 16.0167 9.41471C16.0193 9.41471 16.021 9.413 16.0235 9.413H17.0862V18.6403L17.0844 18.6395ZM11.6546 10.8337C11.7539 10.8337 11.8344 10.7532 11.8344 10.6539V10.4621C11.8918 10.5126 11.9295 10.5845 11.9295 10.6659C11.9295 10.8174 11.8062 10.9407 11.6546 10.9407C11.5031 10.9407 11.3798 10.8174 11.3798 10.6659C11.3798 10.5837 11.4174 10.5126 11.4748 10.4621V10.653C11.4748 10.7524 11.5553 10.8328 11.6546 10.8328V10.8337ZM15.4548 10.8585C15.5541 10.8585 15.6346 10.778 15.6346 10.6787V10.4835C15.692 10.534 15.7297 10.6059 15.7297 10.6873C15.7297 10.8388 15.6064 10.9621 15.4548 10.9621C15.3032 10.9621 15.1799 10.8388 15.1799 10.6873C15.1799 10.6051 15.2176 10.534 15.275 10.4835V10.6779C15.275 10.7772 15.3555 10.8577 15.4548 10.8577V10.8585ZM18.0237 18.4135C17.9894 18.4041 17.9526 18.4041 17.9184 18.4152L17.4448 18.5711V9.41237H18.2129L18.606 18.5779L18.0246 18.4126L18.0237 18.4135Z\" fill=\"#644935\"></path>
                        
                      </svg>
                      SHOP

                      <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <line x1=\"5.06066\" y1=\"7\" x2=\"10\" y2=\"11.9393\" stroke=\"#644935\" stroke-width=\"1.5\" stroke-linecap=\"round\"></line>
                        <line x1=\"0.75\" y1=\"-0.75\" x2=\"7.73528\" y2=\"-0.75\" transform=\"matrix(-0.707107 0.707107 0.707107 0.707107 16 7)\" stroke=\"#644935\" stroke-width=\"1.5\" stroke-linecap=\"round\"></line>
                      </svg>
</button>

<div class=\"shop-dropdown\" id=\"shopMenu\">

<div class=\"dropdown-col\">

  <div class=\"dropdown-block\">
    
    <div class=\"dropdown-img\">
      <img src=\"{{ base }}admin/view/image/categories.png\" alt=\"\">
    </div>

    <div class=\"dropdown-text\">
      <h4>CATEGORIES</h4>

      <a href=\"#\">All</a>
      <a href=\"#\">Tableware</a>
      <a href=\"#\">Bath & Bed</a>
      <a href=\"#\">Kitchen</a>
      <a href=\"#\">Decor</a>
      <a href=\"#\">Personal items</a>
      <a href=\"#\">Clothing</a>
      <a href=\"#\">Gifting</a>
    </div>

  </div>

</div>

<div class=\"dropdown-col\">
 <div class=\"dropdown-block\">

<div class=\"dropdown-img\">

<img src=\"{{ base }}admin/view/image/cause.png\" alt=\"\">
</div>
<div class=\"dropdown-text\">
<h4>CAUSE</h4>
<a href=\"#\">Small Batch Craft</a>
<a href=\"#\">Reimagined Materials</a>
<a href=\"#\">Naturally Dyed</a>
<a href=\"#\">She Made This</a>
</div>            
</div>
</div>
<div class=\"dropdown-col\">

 <div class=\"dropdown-block\">

<div class=\"dropdown-img\">
<img src=\"{{ base }}admin/view/image/mood.webp\" alt=\"\">
</div>
<div class=\"dropdown-text\">
<h4>MOOD</h4>
<a href=\"#\">Earth & Clay</a>
<a href=\"#\">Coastal Calm</a>
<a href=\"#\">Monochrome Modern</a>
<a href=\"#\">Garden Tones</a>

</div>
</div>
</div>
</div>
</div>

<div class=\"search-wrapper\">
    
    <img src=\"https://cdn.shopify.com/s/files/1/0858/1509/9671/files/noun-search-7848901_2.png?v=1751396098\" class=\"search-icon\">

    <input 
        type=\"search\" 
        name=\"q\" 
        id=\"searchInput1\"
        class=\"search-input\"
        placeholder=\"Search\"
    >

</div>
<!-- ICONS -->
<div class=\"header-icons\">

<a href=\"{{ account }}\">
<img class=\"\" src=\"https://cdn.shopify.com/s/files/1/0858/1509/9671/files/Group_1.png?v=1751452048\" width=\"26\" height=\"28\">
</a>
<a href=\"{{ wishlist }}\"> 
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" overflow=\"unset\" class=\"icon\">
            <path d=\"M12.4869 22C12.2364 21.9968 11.9918 21.9232 11.7804 21.7875C8.18822 19.57 5.48518 17.3766 3.2783 14.8705C2.01853 13.5287 1.04215 11.942 0.408559 10.207C-0.730606 6.84675 0.5832 2.9211 3.46882 1.07256C4.78425 0.221399 6.35422 -0.134962 7.90363 0.0659208C9.45304 0.266804 10.8831 1.01212 11.9431 2.17126C12.1376 2.37977 12.3162 2.60031 12.4869 2.81685C12.7194 2.51694 12.97 2.2317 13.2371 1.96275C13.8816 1.32075 14.6473 0.816306 15.4888 0.479444C16.3303 0.142583 17.2302 -0.0198119 18.1351 0.00192686C19.0214 0.0266866 19.8936 0.23235 20.6992 0.606539C21.5048 0.980728 22.2271 1.51571 22.8227 2.17928C25.0693 4.63732 25.6012 7.62065 24.3072 10.8045C23.6255 12.404 22.6611 13.8647 21.4613 15.1151C19.3548 17.3836 16.9713 19.3724 14.3683 21.0336C14.019 21.2662 13.6578 21.4907 13.3006 21.7113L13.1934 21.7795C12.9825 21.9174 12.738 21.9937 12.4869 22Z\" stroke-width=\"1.7\" stroke=\"currentColor\"></path>
          </svg>

</a>

<a href=\"javascript:void(0)\" onclick=\"openCartDrawer()\">
<svg aria-hidden=\"true\" fill=\"none\" focusable=\"false\" width=\"32\" class=\"header__nav-icon icon icon-cart\" viewBox=\"0 0 24 24\"><path d=\"M19.8757 5.24613C19.7647 5.10391 19.5943 5.02078 19.4139 5.02078H4.80903C4.68629 4.52985 4.47872 3.69946 4.27356 2.87924C3.84981 1.18401 2.33342 0 0.585933 0C0.262342 0 0 0.262342 0 0.585933C0 0.909524 0.262342 1.17187 0.585933 1.17187C1.79467 1.17187 2.84357 1.9908 3.13669 3.16349L5.2498 11.6163C5.41062 12.2595 5.78663 12.8017 6.28937 13.1752C5.28422 14.1306 5.50922 15.8793 6.703 16.5587C5.64503 17.9425 6.67464 20.0161 8.43099 19.9998C10.0195 20.0213 11.0921 18.2569 10.3476 16.8618H13.4179C12.6736 18.2571 13.7458 20.0213 15.3346 19.9998C18.1893 19.8916 18.1887 15.7979 15.3345 15.69H7.80334C6.50065 15.6404 6.50163 13.7729 7.80334 13.7238H15.8162C17.0954 13.7238 18.2054 12.8572 18.5156 11.6162L19.9823 5.74878C20.0261 5.57378 19.9868 5.38832 19.8757 5.24613ZM15.3345 16.8619C15.8766 16.8619 16.3176 17.3029 16.3176 17.8449C16.2682 19.1473 14.4007 19.147 14.3515 17.8449C14.3515 17.3029 14.7925 16.8619 15.3345 16.8619ZM8.43095 16.8619C8.97302 16.8619 9.41403 17.3029 9.41403 17.8449C9.36462 19.1473 7.49713 19.147 7.44787 17.8449C7.44787 17.3029 7.88888 16.8619 8.43095 16.8619ZM17.3788 11.3321C17.1992 12.0503 16.5567 12.552 15.8162 12.552H7.94924C7.20877 12.552 6.56624 12.0503 6.38667 11.3321L5.10195 6.19269H18.6635L17.3788 11.3321Z\" fill=\"#303030\"></path></svg>
</a>

<!-- CURRENCY -->
<div class=\"currency-box\">
<select onchange=\"location = this.value;\">
<option value=\"#\">INR ₹</option>
<option value=\"#\">USD \$</option>
</select>
</div>

</div>

</div>
</div>
</header>


<!-- CART SIDEBAR (NEW) -->
<div id=\"cartDrawer\">

  <div class=\"cart-drawer-header\">
    <span>Cart</span>
    <span id=\"cartCloseBtn\">×</span>
  </div>

  <div class=\"cart-drawer-body\" id=\"cartDrawerItems\">
    <p class=\"empty-text\">Your cart is empty</p>
  </div>

  <div class=\"cart-drawer-footer\">
    <div class=\"cart-total-row\">
      <span>Total</span>
      <span id=\"drawerTotal\">\$0.00</span>
    </div>

    <button class=\"checkout-btn\">Checkout</button>
  </div>

</div>
<div id=\"overlay\"></div>

<!-- ABOUT SIDEBAR -->
<div id=\"aboutSidebar\" class=\"custom-sidebar\">
  <div class=\"sidebar-content\">

    <span class=\"close-btn\" onclick=\"closeSidebar('aboutSidebar')\">&times;</span>

    <h3>WELCOME TO SEEDS OF ANAAR</h3>

    <img src=\"admin/view/image/about1.webp\" class=\"sidebar-img\">

    <p>
      An intentional shop, curated by the team behind Craft Boat —
      rooted in the belief that creativity, curiosity, and courage help meaningful things grow.
    </p>

    <img src=\"admin/view/image/about2.png\" class=\"sidebar-img\">

    <div class=\"insta-icon\">
    <a href=\"https://www.instagram.com/seedsofanaar/\" target=\"_blank\">
    <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#9b8a7a\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"5\"></rect>
  <circle cx=\"12\" cy=\"12\" r=\"4\"></circle>
  <circle cx=\"17\" cy=\"7\" r=\"1.2\"></circle>
   </svg>
   </a>
     </div>

  </div>
</div>

<div id=\"exhibitionSidebar\" class=\"custom-sidebar\">
  <div class=\"sidebar-content\">

    <span class=\"close-btn\" onclick=\"closeSidebar('exhibitionSidebar')\">&times;</span>

    <h3>EXHIBITION</h3>

    <img src=\"admin/view/image/exhibition1.jpg\" class=\"sidebar-img\">

    <p>
      As part of this journey, we host workshops and exhibitions aligned with our vision.
    </p>

    <p><b>Upcoming Exhibition</b></p>
    <p>Shoppe Object — New York</p>
    <p>August 3 – 5, 2025</p>

     <img src=\"admin/view/image/exhibition2.jpg\" class=\"sidebar-img\">

    <div class=\"insta-icon\">
    <a href=\"https://www.instagram.com/seedsofanaar/\" target=\"_blank\">
    <svg width=\"26\" height=\"26\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"#9b8a7a\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
  <rect x=\"3\" y=\"3\" width=\"18\" height=\"18\" rx=\"5\"></rect>
  <circle cx=\"12\" cy=\"12\" r=\"4\"></circle>
  <circle cx=\"17\" cy=\"7\" r=\"1.2\"></circle>
   </svg>
   </a>
     </div>

  </div>
</div>
<div id=\"overlay\" onclick=\"closeAllSidebars()\"></div>

<script>

// ================= SHOP DROPDOWN =================
const shopWrapper = document.querySelector(\".shop-wrapper\");

if (shopWrapper) {
  shopWrapper.addEventListener(\"mouseenter\", () => {
    document.getElementById(\"shopMenu\").classList.add(\"show\");
  });

  shopWrapper.addEventListener(\"mouseleave\", () => {
    document.getElementById(\"shopMenu\").classList.remove(\"show\");
  });
}

// ================= SIDEBARS (About / Exhibition etc.) =================
function openSidebar(id) {
  document.getElementById(id).classList.add(\"active\");
  document.getElementById(\"overlay\").classList.add(\"active\");
  document.body.classList.add(\"no-scroll\");
}

function closeSidebar(id) {
  document.getElementById(id).classList.remove(\"active\");
  document.getElementById(\"overlay\").classList.remove(\"active\");
  document.body.classList.remove(\"no-scroll\");
}

function closeAllSidebars() {
  document.querySelectorAll(\".custom-sidebar\").forEach(el => {
    el.classList.remove(\"active\");
  });
  document.getElementById(\"overlay\").classList.remove(\"active\");
  document.body.classList.remove(\"no-scroll\");
}

// ESC KEY CLOSE
document.addEventListener(\"keydown\", function(e){
  if(e.key === \"Escape\") {
    closeAllSidebars();
    closeCartDrawer();
  }
});

// ================= HEADER SCROLL EFFECT =================
let lastScroll = 0;

window.addEventListener(\"scroll\", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll > lastScroll && currentScroll > 50) {
    document.body.classList.add(\"info-hidden\");
  } else {
    document.body.classList.remove(\"info-hidden\");
  }

  lastScroll = currentScroll;
});

// ================= CART SIDEBAR (FIXED VERSION) =================
const cartDrawer = document.getElementById('cartDrawer');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('cartCloseBtn');

// OPEN (called from your onclick)
function openCartDrawer(){
  if(cartDrawer){
    cartDrawer.classList.add('active');
  }
  if(overlay){
    overlay.classList.add('active');
  }
  document.body.classList.add('no-scroll');
}

// CLOSE
function closeCartDrawer(){
  if(cartDrawer){
    cartDrawer.classList.remove('active');
  }
  if(overlay){
    overlay.classList.remove('active');
  }
  document.body.classList.remove('no-scroll');
}

// CLOSE BUTTON
if(closeBtn){
  closeBtn.addEventListener('click', closeCartDrawer);
}

// CLICK OUTSIDE (overlay)
if(overlay){
  overlay.addEventListener('click', () => {
    closeCartDrawer();
    closeAllSidebars(); // keeps your existing system working
  });
}

</script>

</body>", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\opencartnew\\catalog\\view\\template\\common\\header.twig");
    }
}
