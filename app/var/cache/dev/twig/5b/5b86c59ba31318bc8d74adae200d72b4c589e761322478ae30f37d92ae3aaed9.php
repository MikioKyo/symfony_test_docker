<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home.html.twig */
class __TwigTemplate_d0823b3fd8bc213bc7ec16227d8c9802d0fec59cdc748c01bf1c94276631d615 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Галерея";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/combine/npm/lightgallery@2.3.0,npm/lightgallery@2.3.0/plugins/zoom/lg-zoom.umd.min.js,npm/lightgallery@2.3.0/plugins/thumbnail/lg-thumbnail.umd.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"content\">
        <div class=\"container\">
            <h1 class=\"header\">Тестовое задание с галереей</h1>
            <div style=\"display: block\">
            ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "                <span>Вы залогинены.</span>
                <a href=\"/logout\">Выйти</a>
                <!-- форма, для отправки фоток на сайт -->
                <form method=\"POST\" ";
            // line 17
            if ((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 17, $this->source); })())) {
                echo " style=\"display: none\" ";
            }
            echo " class=\"file-upload-form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery_upload");
            echo "\" enctype=\"multipart/form-data\">
                    <input id=\"file-upload\" type=\"file\" name=\"image\" accept=\"image/png,image/jpeg\">
                </form>
                <!-- форма, для изменения фоток на сайте -->
                <form method=\"POST\" style=\"display: none\" class=\"file-update-form\" action=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery_update");
            echo "\" enctype=\"multipart/form-data\">
                    <input id=\"file-update\" type=\"file\" name=\"image\" accept=\"image/png,image/jpeg\">
                    <input id=\"file-update-name\" type=\"text\" name=\"image_filename\">
                </form>

            ";
        } else {
            // line 27
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Войдите,</a> или <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">зарегистрируйтесь</a> <span>чтобы редактировать галерею.</span>
            ";
        }
        // line 29
        echo "            <!-- checking if we parsed images through and if we did, we create inline gallery -->
                <div id=\"inline-gallery-container\" ";
        // line 30
        if ( !(isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 30, $this->source); })())) {
            echo "style=\"display: none\" ";
        }
        echo " class=\"inline-gallery-container\"></div>
            ";
        // line 31
        if ((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                <span id=\"gallery-info\"></span>
            ";
        } else {
            // line 34
            echo "                <span id=\"gallery-info\">Сейчас галерея пуста! Добавьте файл, чтобы увидеть её.</span>
            ";
        }
        // line 36
        echo "            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        const lgContainer = document.getElementById('inline-gallery-container');
        let lgOpen = false;
        const galleryItems = [
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 45
            echo "            {
                src: '";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "directory", [], "any", false, false, false, 46)), "html", null, true);
            echo "',
                thumb: '";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "directory", [], "any", false, false, false, 47)), "html", null, true);
            echo "',
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        ];
        //adding remove and upload button but only if user is admin
        ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "        lgContainer.addEventListener('lgInit', (event) => {
            let updateSlideInstance = event.detail.instance;
            const deleteBtn =
                '<button type=\"button\" aria-label=\"Remove slide\" class=\"lg-icon\" id=\"lg-delete\"><img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/trash-can.png"), "html", null, true);
            echo "\"></button>';
            const uploadBtn = '<label class=\"lg-icon\" id=\"lg-upload\" for=\"file-upload\" style=\"cursor: pointer;\"><img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/upload.png"), "html", null, true);
            echo "\"></label>';
            const updateBtn = '<label class=\"lg-icon\" id=\"lg-update\" for=\"file-update\" style=\"cursor: pointer;\"><img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/update.png"), "html", null, true);
            echo "\"></label>';
            updateSlideInstance.outer.find('.lg-toolbar').append(deleteBtn);
            updateSlideInstance.outer.find('.lg-toolbar').append(uploadBtn);
            updateSlideInstance.outer.find('.lg-toolbar').append(updateBtn);
        });
        lgContainer.addEventListener('lgAfterOpen', () => {
            lgOpen = true;
        })
        ";
        }
        // line 68
        echo "        const inlineGallery = lightGallery(lgContainer, {
            container: lgContainer,
            dynamic: true,
            // Turn off hash plugin in case if you are using it
            // as we don't want to change the url on slide change
            hash: false,
            // Do not allow users to close the gallery
            closable: false,
            // Add maximize icon to enlarge the gallery
            showMaximizeIcon: true,
            // Append caption inside the slide item
            // to apply some animation for the captions (Optional)
            appendSubHtmlTo: '.lg-item',
            // Delay slide transition to complete captions animations
            // before navigating to different slides (Optional)
            // You can find caption animation demo on the captions demo page
            slideDelay: 400,
        });
        if(galleryItems.length!==0){
            // Since we are using dynamic mode, we need to programmatically open lightGallery
            inlineGallery.refresh(galleryItems);
            inlineGallery.openGallery(0);
        }
        else {

        }





        inlineGallery.outer.find('#lg-delete').on('click', () => {
            // Delete current item
            if (galleryItems.length > 1){
                let cur_index = parseInt(\$(\".lg-current\").children().children().attr(\"data-index\"));
                let imagesrc = galleryItems[cur_index]['src'];
                if (cur_index===galleryItems.length-1) {
                    galleryItems.remove(cur_index);
                    inlineGallery.refresh(galleryItems);
                    inlineGallery.updateSlides(galleryItems, cur_index-1);
                }
                else {
                    galleryItems.remove(cur_index);
                    inlineGallery.refresh(galleryItems);
                    inlineGallery.updateSlides(galleryItems, cur_index);
                }

                \$.post('/delete', {imagesrc: imagesrc}, function(data){
                });
            }
            else {

                \$.post('/delete', {imagesrc: galleryItems[0]['src']}, function(data){
                });
                galleryItems.remove(0);
                inlineGallery.refresh(galleryItems);
                initialized = false;
                \$('#gallery-info').text('Сейчас галерея пуста! Добавьте файл, чтобы увидеть её.');
                \$('#file-upload').parent().attr('style','display: contents');
                \$('#inline-gallery-container').toggle();
            }
        });

        \$('#file-upload').on('change', () => {
            let file = \$('#file-upload').prop('files')[0];
            let fd = new FormData;
            fd.append('img',file);
            \$.ajax({
                url: '/upload',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    \$('.file-upload-form').attr('style','display: none');
                    \$('#gallery-info').text('');
                    galleryItems.push({src: data, thumb: data, __slideVideoInfo: undefined});
                    inlineGallery.refresh(galleryItems);
                    if(lgOpen){
                        if (\$('#inline-gallery-container').is(\":hidden\")){
                            \$('#inline-gallery-container').toggle();
                        }
                        inlineGallery.updateSlides(galleryItems, galleryItems.length-1);
                    }
                    else{
                        if (\$('#inline-gallery-container').is(\":hidden\")){
                            \$('#inline-gallery-container').toggle();
                        }
                        inlineGallery.openGallery();
                    }
                }
            });
        });
        \$('#file-update').on('change', () => {
            console.log(galleryItems);
            let file = \$('#file-update').prop('files')[0];
            let file_name = \$(\".lg-current\").children().eq(0).children().eq(0).attr(\"src\");
            let fd = new FormData;
            fd.append('img',file);
            fd.append('img_src', file_name);
            \$.ajax({
                url: '/update',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    let curr_index = parseInt(\$(\".lg-current\").children().children().attr(\"data-index\"));
                    galleryItems[curr_index] = {src: data, thumb: data, __slideVideoInfo: undefined};
                    inlineGallery.updateSlides(galleryItems, curr_index);
                    console.log(galleryItems);
                }
            });
        });
        // функция, для удаления элемента массива по его айди
        Array.prototype.remove = function(from, to) {
            var rest = this.slice((to || from) + 1 || this.length);
            this.length = from < 0 ? this.length + from : from;
            return this.push.apply(this, rest);
        };

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 68,  200 => 59,  196 => 58,  192 => 57,  187 => 54,  185 => 53,  180 => 50,  171 => 47,  167 => 46,  164 => 45,  160 => 44,  150 => 36,  146 => 34,  142 => 32,  140 => 31,  134 => 30,  131 => 29,  123 => 27,  114 => 21,  103 => 17,  98 => 14,  96 => 13,  90 => 9,  83 => 8,  74 => 5,  67 => 4,  54 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/lucky/home.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}Галерея{% endblock %}
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/combine/npm/lightgallery@2.3.0,npm/lightgallery@2.3.0/plugins/zoom/lg-zoom.umd.min.js,npm/lightgallery@2.3.0/plugins/thumbnail/lg-thumbnail.umd.min.js\"></script>
{% endblock %}
{% block body %}
    <div class=\"content\">
        <div class=\"container\">
            <h1 class=\"header\">Тестовое задание с галереей</h1>
            <div style=\"display: block\">
            {% if is_granted('ROLE_ADMIN') %}
                <span>Вы залогинены.</span>
                <a href=\"/logout\">Выйти</a>
                <!-- форма, для отправки фоток на сайт -->
                <form method=\"POST\" {% if images %} style=\"display: none\" {% endif %} class=\"file-upload-form\" action=\"{{ path('app_gallery_upload') }}\" enctype=\"multipart/form-data\">
                    <input id=\"file-upload\" type=\"file\" name=\"image\" accept=\"image/png,image/jpeg\">
                </form>
                <!-- форма, для изменения фоток на сайте -->
                <form method=\"POST\" style=\"display: none\" class=\"file-update-form\" action=\"{{ path('app_gallery_update') }}\" enctype=\"multipart/form-data\">
                    <input id=\"file-update\" type=\"file\" name=\"image\" accept=\"image/png,image/jpeg\">
                    <input id=\"file-update-name\" type=\"text\" name=\"image_filename\">
                </form>

            {% else %}
                <a href=\"{{ path('app_login') }}\">Войдите,</a> или <a href=\"{{ path('app_register') }}\">зарегистрируйтесь</a> <span>чтобы редактировать галерею.</span>
            {% endif %}
            <!-- checking if we parsed images through and if we did, we create inline gallery -->
                <div id=\"inline-gallery-container\" {% if not images %}style=\"display: none\" {% endif %} class=\"inline-gallery-container\"></div>
            {% if images %}
                <span id=\"gallery-info\"></span>
            {% else %}
                <span id=\"gallery-info\">Сейчас галерея пуста! Добавьте файл, чтобы увидеть её.</span>
            {% endif %}
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        const lgContainer = document.getElementById('inline-gallery-container');
        let lgOpen = false;
        const galleryItems = [
            {% for image in images %}
            {
                src: '{{ asset(image.directory) }}',
                thumb: '{{ asset(image.directory) }}',
            },
            {% endfor %}

        ];
        //adding remove and upload button but only if user is admin
        {% if is_granted('ROLE_ADMIN') %}
        lgContainer.addEventListener('lgInit', (event) => {
            let updateSlideInstance = event.detail.instance;
            const deleteBtn =
                '<button type=\"button\" aria-label=\"Remove slide\" class=\"lg-icon\" id=\"lg-delete\"><img src=\"{{ asset('images/trash-can.png') }}\"></button>';
            const uploadBtn = '<label class=\"lg-icon\" id=\"lg-upload\" for=\"file-upload\" style=\"cursor: pointer;\"><img src=\"{{ asset('images/upload.png') }}\"></label>';
            const updateBtn = '<label class=\"lg-icon\" id=\"lg-update\" for=\"file-update\" style=\"cursor: pointer;\"><img src=\"{{ asset('images/update.png') }}\"></label>';
            updateSlideInstance.outer.find('.lg-toolbar').append(deleteBtn);
            updateSlideInstance.outer.find('.lg-toolbar').append(uploadBtn);
            updateSlideInstance.outer.find('.lg-toolbar').append(updateBtn);
        });
        lgContainer.addEventListener('lgAfterOpen', () => {
            lgOpen = true;
        })
        {% endif %}
        const inlineGallery = lightGallery(lgContainer, {
            container: lgContainer,
            dynamic: true,
            // Turn off hash plugin in case if you are using it
            // as we don't want to change the url on slide change
            hash: false,
            // Do not allow users to close the gallery
            closable: false,
            // Add maximize icon to enlarge the gallery
            showMaximizeIcon: true,
            // Append caption inside the slide item
            // to apply some animation for the captions (Optional)
            appendSubHtmlTo: '.lg-item',
            // Delay slide transition to complete captions animations
            // before navigating to different slides (Optional)
            // You can find caption animation demo on the captions demo page
            slideDelay: 400,
        });
        if(galleryItems.length!==0){
            // Since we are using dynamic mode, we need to programmatically open lightGallery
            inlineGallery.refresh(galleryItems);
            inlineGallery.openGallery(0);
        }
        else {

        }





        inlineGallery.outer.find('#lg-delete').on('click', () => {
            // Delete current item
            if (galleryItems.length > 1){
                let cur_index = parseInt(\$(\".lg-current\").children().children().attr(\"data-index\"));
                let imagesrc = galleryItems[cur_index]['src'];
                if (cur_index===galleryItems.length-1) {
                    galleryItems.remove(cur_index);
                    inlineGallery.refresh(galleryItems);
                    inlineGallery.updateSlides(galleryItems, cur_index-1);
                }
                else {
                    galleryItems.remove(cur_index);
                    inlineGallery.refresh(galleryItems);
                    inlineGallery.updateSlides(galleryItems, cur_index);
                }

                \$.post('/delete', {imagesrc: imagesrc}, function(data){
                });
            }
            else {

                \$.post('/delete', {imagesrc: galleryItems[0]['src']}, function(data){
                });
                galleryItems.remove(0);
                inlineGallery.refresh(galleryItems);
                initialized = false;
                \$('#gallery-info').text('Сейчас галерея пуста! Добавьте файл, чтобы увидеть её.');
                \$('#file-upload').parent().attr('style','display: contents');
                \$('#inline-gallery-container').toggle();
            }
        });

        \$('#file-upload').on('change', () => {
            let file = \$('#file-upload').prop('files')[0];
            let fd = new FormData;
            fd.append('img',file);
            \$.ajax({
                url: '/upload',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    \$('.file-upload-form').attr('style','display: none');
                    \$('#gallery-info').text('');
                    galleryItems.push({src: data, thumb: data, __slideVideoInfo: undefined});
                    inlineGallery.refresh(galleryItems);
                    if(lgOpen){
                        if (\$('#inline-gallery-container').is(\":hidden\")){
                            \$('#inline-gallery-container').toggle();
                        }
                        inlineGallery.updateSlides(galleryItems, galleryItems.length-1);
                    }
                    else{
                        if (\$('#inline-gallery-container').is(\":hidden\")){
                            \$('#inline-gallery-container').toggle();
                        }
                        inlineGallery.openGallery();
                    }
                }
            });
        });
        \$('#file-update').on('change', () => {
            console.log(galleryItems);
            let file = \$('#file-update').prop('files')[0];
            let file_name = \$(\".lg-current\").children().eq(0).children().eq(0).attr(\"src\");
            let fd = new FormData;
            fd.append('img',file);
            fd.append('img_src', file_name);
            \$.ajax({
                url: '/update',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    let curr_index = parseInt(\$(\".lg-current\").children().children().attr(\"data-index\"));
                    galleryItems[curr_index] = {src: data, thumb: data, __slideVideoInfo: undefined};
                    inlineGallery.updateSlides(galleryItems, curr_index);
                    console.log(galleryItems);
                }
            });
        });
        // функция, для удаления элемента массива по его айди
        Array.prototype.remove = function(from, to) {
            var rest = this.slice((to || from) + 1 || this.length);
            this.length = from < 0 ? this.length + from : from;
            return this.push.apply(this, rest);
        };

    </script>

{% endblock %}", "home.html.twig", "/var/www/html/templates/home.html.twig");
    }
}
