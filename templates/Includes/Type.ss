<style id="typeStyles">{$decodedTypeCSS.RAW}</style>

<% if $CurrentMember %>
    <% require css("vendor/permanentinc/type/dist/styles/main.css") %>
    <% require javascript("vendor/permanentinc/type/dist/scripts/type.js") %>

<div id="typeSettings" class="js-load-type-settings" data-api="{$BaseHref}type_api/load">

    <div id="typeSettings" class="type" data-save-type-settings="$Link('SaveTypeSettings')"
        data-load-type-settings="$Link('LoadTypeSettings')" data-save-css="$Link('SaveCSS')" data-save-js="$Link('SaveJS')">

        <a href="#" class="js-toggle-type-settings"><svg width="107" height="54" viewBox="0 0 107 54" xmlns="http://www.w3.org/2000/svg"><path d="M53.523 0H0v53.495h107V0H53.523zm50.126 50.192H56.828V3.35h46.82v46.842h.001zm-70.092-8.931l-2.234-6h-9.495l-2.233 6H13.03l11.312-28.98h4.839l11.31 28.981h-6.935v-.001zm-6.05-17.072c-.326-.791-.652-1.906-.885-2.93h-.092a18.174 18.174 0 0 1-.933 2.93l-2.094 5.77h6.05l-2.048-5.77h.002zM90.105 40.33c-.884-.185-1.721-.65-2.466-1.395-.746-.744-1.256-1.58-1.443-2.604-.698 1.21-1.723 2.186-3.118 2.884a9.899 9.899 0 0 1-4.468 1.07c-1.21 0-2.328-.187-3.352-.606-1.024-.418-1.908-.93-2.652-1.628a7.417 7.417 0 0 1-1.723-2.419c-.419-.93-.604-1.906-.604-2.976 0-1.257.232-2.372.697-3.303.466-.978 1.07-1.767 1.862-2.42a9.416 9.416 0 0 1 2.654-1.534 11.683 11.683 0 0 1 3.118-.698l6.933-.698v-2.466c0-1.581-.557-2.883-1.627-3.767-1.07-.93-2.607-1.395-4.562-1.395a14.941 14.941 0 0 0-3.723.512c-1.257.37-2.327.79-3.21 1.349l-.746-3.025c.978-.697 2.187-1.209 3.583-1.534a18.51 18.51 0 0 1 4.235-.512c1.309-.01 2.611.177 3.863.558 1.21.372 2.235.931 3.072 1.674a6.999 6.999 0 0 1 2.003 2.745c.465 1.07.697 2.326.697 3.722v11.908c0 1.303.326 2.279.978 2.977.651.698 1.396 1.115 2.232 1.256l-2.232 2.325h-.001zm-4.562-13.304l-6.374.56c-1.677.139-3.026.696-3.957 1.627-.978.932-1.443 2.093-1.443 3.49 0 1.302.466 2.372 1.443 3.255.978.884 2.14 1.303 3.491 1.303.745 0 1.535-.14 2.372-.466a9.227 9.227 0 0 0 2.235-1.349 6.668 6.668 0 0 0 1.63-2.093 6.163 6.163 0 0 0 .65-2.791v-3.536h-.047z" fill="#000" fill-rule="nonzero" /></svg></a>
        <div class="type__header">
            <svg width="107" height="54" viewBox="0 0 107 54" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M53.523 0H0v53.495h107V0H53.523zm50.126 50.192H56.828V3.35h46.82v46.842h.001zm-70.092-8.931l-2.234-6h-9.495l-2.233 6H13.03l11.312-28.98h4.839l11.31 28.981h-6.935v-.001zm-6.05-17.072c-.326-.791-.652-1.906-.885-2.93h-.092a18.174 18.174 0 0 1-.933 2.93l-2.094 5.77h6.05l-2.048-5.77h.002zM90.105 40.33c-.884-.185-1.721-.65-2.466-1.395-.746-.744-1.256-1.58-1.443-2.604-.698 1.21-1.723 2.186-3.118 2.884a9.899 9.899 0 0 1-4.468 1.07c-1.21 0-2.328-.187-3.352-.606-1.024-.418-1.908-.93-2.652-1.628a7.417 7.417 0 0 1-1.723-2.419c-.419-.93-.604-1.906-.604-2.976 0-1.257.232-2.372.697-3.303.466-.978 1.07-1.767 1.862-2.42a9.416 9.416 0 0 1 2.654-1.534 11.683 11.683 0 0 1 3.118-.698l6.933-.698v-2.466c0-1.581-.557-2.883-1.627-3.767-1.07-.93-2.607-1.395-4.562-1.395a14.941 14.941 0 0 0-3.723.512c-1.257.37-2.327.79-3.21 1.349l-.746-3.025c.978-.697 2.187-1.209 3.583-1.534a18.51 18.51 0 0 1 4.235-.512c1.309-.01 2.611.177 3.863.558 1.21.372 2.235.931 3.072 1.674a6.999 6.999 0 0 1 2.003 2.745c.465 1.07.697 2.326.697 3.722v11.908c0 1.303.326 2.279.978 2.977.651.698 1.396 1.115 2.232 1.256l-2.232 2.325h-.001zm-4.562-13.304l-6.374.56c-1.677.139-3.026.696-3.957 1.627-.978.932-1.443 2.093-1.443 3.49 0 1.302.466 2.372 1.443 3.255.978.884 2.14 1.303 3.491 1.303.745 0 1.535-.14 2.372-.466a9.227 9.227 0 0 0 2.235-1.349 6.668 6.668 0 0 0 1.63-2.093 6.163 6.163 0 0 0 .65-2.791v-3.536h-.047z"
                    fill="#000" fill-rule="nonzero" />
            </svg>
            <h5>TYPE SETTINGS</h5>
        </div>

        <div class="type__scroll">

            <div class="type__colour type__colour--primary">
                <div class="type__colour__item">
                    <label for="selector_primary_fontcolour">PRIMARY COLOUR</label>
                    <input
                        class="type__item__content__item__input type__colour__item__input [ js-primary-colour-input ]"
                        value="#377dff" type="text" id="selector_primary_font-colour" placeholder="#333">
                    <div class="type__colour__item__colour [ js-type-colour ][ no-alpha ]">
                        <span class="type__item__content__item__colour__swatch [ js-type-colour-swatch ]"
                            style="background:#333;"></span>
                    </div>
                </div>
            </div>

            <div class="type__colour type__colour--secondary">
                <div class="type__colour__item">
                    <label for="selector_secondary_fontcolour">SECONDARY COLOUR</label>
                    <input
                        class="type__item__content__item__input type__colour__item__input [ js-secondary-colour-input ]"
                        value="#377dff" type="text" id="selector_secondary_font-colour" placeholder="#333">
                    <div class="type__colour__item__colour [ js-type-colour ][ no-alpha ]">
                        <span class="type__item__content__item__colour__swatch [ js-type-colour-swatch ]"
                            style="background:#333;"></span>
                    </div>
                </div>
            </div>


            <% loop $getTags %>

            <div class="type__item [ js-type-item ]" data-tag="{$Selector}">

                <h6 class="type__item__heading [ js-slide-toggle ]">{$Name}</h6>

                <div id="selector_{$Selector}" class="type__item__content  [ js-slide-content ]"
                    data-selector="{$Selector}" <% if $Selector = 'p' %> style="display:block;" <% end_if %>>
                    <div class="flex">

                        <%--Font Family--%>
                        <div class="type__item__content__item type__item__content__item--select">
                            <select id="selector_{$Selector}_font-family" class="[ js-font-select ]">
                                <% include TypeFamilies %>
                            </select>
                            <label for="selector_{$Selector}_font-family">FONT FAMILY</label>
                        </div>

                        <%--Font Weight--%>
                        <div class="type__item__content__item type__item__content__item--select">
                            <select id="selector_{$Selector}_font-weight" class="[ js-type-select ]">
                                <% include TypeFontWeight %>
                            </select>
                            <label for="selector_{$Selector}_font-weight">FONT WEIGHT</label>
                        </div>

                        <%--Font Size--%>
                        <div class="type__item__content__item type__item__content__item--number">
                            <input class="[ js-font-size ]" type="number" id="selector_{$Selector}_font-size"
                                placeholder="45" data-default="45" min="0" max="100" step="1" value="16">
                            <label for="selector_{$Selector}_font-size">FONT SIZE</label>
                            <span class="type__item__content__item__unit">px</span>
                            <span class="type__item__content__item__increase [ js-increase-number ]">+</span>
                            <span class="type__item__content__item__decrease [ js-decrease-number ]">-</span>
                        </div>

                        <%--Font Style--%>
                        <div class="type__item__content__item type__item__content__item--select">
                            <select id="selector_{$Selector}_font-style" class="[ js-style-select ]">
                                <option value="normal" selected="selected">Normal</option>
                                <option value="italic">Italic</option>
                            </select>
                            <label for="selector_{$Selector}_font-style">FONT STYLE</label>
                        </div>

                        <%--Font Colour--%>
                        <div class="type__item__content__item type__item__content__item--colour">
                            <label for="selector_{$Selector}_fontcolour">FONT COLOUR</label>
                            <input class="type__item__content__item__input [ js-colour ]" value="#333" type="text"
                                id="selector_{$Selector}_font-colour" placeholder="#333">
                            <div class="type__item__content__item__colour [ js-type-colour ][ no-alpha ]">
                                <span class="type__item__content__item__colour__swatch [ js-type-colour-swatch ]"
                                    style="background:#333;"></span>
                            </div>
                        </div>

                        <%--Line Height--%>
                        <div class="type__item__content__item type__item__content__item--number">
                            <input type="number" id="selector_{$Selector}_line-height" class="[ js-line-height ]"
                                placeholder="1.2" data-default="1.2" min="0" max="5" step="0.1" value="1.2">
                            <label for="selector_{$Selector}_line-height">LINE HEIGHT</label>
                            <span class="type__item__content__item__increase [ js-increase-number ]">+</span>
                            <span class="type__item__content__item__decrease [ js-decrease-number ]">-</span>
                        </div>

                        <%--Margin Bottom--%>
                        <div class="type__item__content__item type__item__content__item--number">
                            <input class="[ js-margin-bottom ]" type="number" id="selector_{$Selector}_margin-bottom"
                                placeholder="15" data-default="15" min="-100" max="100" step="1" value="15">
                            <label for="selector_{$Selector}_margin-bottom">MARGIN BOTTOM</label>
                            <span class="type__item__content__item__unit">px</span>
                            <span class="type__item__content__item__increase [ js-increase-number ]">+</span>
                            <span class="type__item__content__item__decrease [ js-decrease-number ]">-</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <% end_loop %>

            <button class="type__button js-save-type-settings" data-api="{$BaseHref}type_api/save">
                <span>SAVE</span>
                <div class="type__button__loader">
                    <span class="type__button__loader__dot"></span>
                    <span class="type__button__loader__dot"></span>
                    <span class="type__button__loader__dot"></span>
                    <div class="type__button__loader__shadows">
                        <span class="type__button__loader__shadows__shadow"></span>
                        <span class="type__button__loader__shadows__shadow"></span>
                        <span class="type__button__loader__shadows__shadow"></span>
                    </div>
                </div>
            </button>

        </div>

    </div>
</div>
<% end_if %>

<% if $SiteConfig.typeFonts %>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"></script>
<script>WebFont.load({ google: { families: $decodedFonts.RAW } });</script>
<% end_if %>

<script src="https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2"></script>

<script crossorigin="anonymous"
    src="https://polyfill.io/v3/polyfill.min.js?features=Object.fromEntries%2CArray.from%2CArray.prototype.includes%2CString.prototype.includes%2CArray.prototype.forEach%2CNodeList.prototype.forEach"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    cssVars({
        rootElement: document,
        shadowDOM: false,
        onlyLegacy: true,
        silent: false,
        updateDOM: true,
        updateURLs: true,
        watch: false,
        onComplete: function (cssText, styleElms, cssVariables, benchmark) {
        }
    });
});
</script>




