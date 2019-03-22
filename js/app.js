console.log('%cType 0.1', 'padding:5px;color: #fff; background: #377cff;');

/*------------------------------------------------------------------
Dependencies
------------------------------------------------------------------*/

import $ from 'jquery';
import select2 from 'select2';
import Picker from 'vanilla-picker';
import rgbHex from 'rgb-hex';
import isHexcolor from 'is-hexcolor';
import WebFont from 'webfontloader';
import Css from 'json-to-css';
import { uniq, forEach, assign } from 'lodash';

/*------------------------------------------------------------------
Stylesheets
------------------------------------------------------------------*/

import './../scss/style.scss';


/*------------------------------------------------------------------
Variables
------------------------------------------------------------------*/

let $body = $('body');
let $typeSelect = $('.js-type-select, .js-align-select, .js-style-select');
let $fontSelect = $('.js-font-select');
let styles = {};

const createSingleStyleSet = ($el) => {
    return {
        [$el.attr('data-tag')]: {
            'font-family': $el.find('.js-font-select').val(),
            'font-weight': $el.find('.js-type-select').val(),
            'font-size': $el.find('.js-font-size').val() + 'rem',
            'font-style': $el.find('.js-style-select').val(),
            'color': $el.find('.js-colour').val(),
            'background': $el.find('.js-background').val(),
            'text-align': $el.find('.js-align-select').val(),
            'line-height': $el.find('.js-line-height').val(),
        }
    }
};


const createStyles = () => {
    $('.js-type-item').each(function () {
        assign(styles, createSingleStyleSet($(this)));
    });

    $('#typeStyles').html(Css.of(styles));
};

const saveStyles = () => {
    $.ajax({
        url: $('.js-save-type-settings').attr('data-api'),
        type: 'POST',
        data: { 'css': Css.of(styles), 'json': styles }
    }).done(function (response) {
        console.log(response);
    });
};


const loadFonts = (fontsToLoad = []) => {
    $('.js-font-select').each(function () {
        fontsToLoad.push($(this).find('option:selected').val() + ':100,300,400,600,700,800,900');
    });
    WebFont.load({ google: { families: uniq(fontsToLoad) } });
};


$typeSelect.each(function () {
    let $this = $(this);

    $this.select2({
        width: '100%',
        minimumResultsForSearch: 20,
        placeholder: 'Select one...'
    });

    $this.on('select2:open', () => {
        setTimeout(() => $('.select2-dropdown').addClass('animating'), 10);
        setTimeout(() => $('.select2-dropdown').addClass('animated'), 250);
    });

    $this.on('select2:closing', () => $('.select2-dropdown').removeClass('animated animating'));

    $this.on('select2:select', () => loadFonts());

});

$fontSelect.each(function () {
    let $this = $(this);

    $this.select2({
        width: '100%',
        minimumResultsForSearch: 20,
        placeholder: 'Select one...'
    });

    $this.on('select2:open', () => {
        setTimeout(() => $('.select2-dropdown').addClass('animating'), 10);
        setTimeout(() => $('.select2-dropdown').addClass('animated'), 250);
    });

    $this.on('select2:closing', () => $('.select2-dropdown').removeClass('animated animating'));

    $this.on('select2:select', () => loadFonts());

});


$('.js-type-colour').each(function () {
    let $this = $(this);
    var picker = new Picker({
        parent: $this[0],
        color: '#333333',
        editorFormat: 'hex',
        alpha: false,
        onChange(color) {
            let rgba = color._rgba;
            if (rgba) {
                let hex = rgbHex(rgba[0], rgba[1], rgba[2]);
                $this.find('.js-type-colour-swatch').css({ 'background': `#${hex}` })
                $this.parent().find('input').val(`#${hex}`)
            }
        }
    });

    $this.parent().find('.type__item__content__item__input').on('keyup change', function () {
        let val = $(this).val();
        if (val.length > 5 && isHexcolor(val)) {
            picker.setColour(val)
            $this.find('.js-type-colour-swatch').css({ 'background': val })
        }
    });

});

$('.js-increase-number').on('click', function () {
    let $this = $(this);
    let $input = $this.parent().find('input');
    $input.val(parseFloat(parseFloat($input.val()) + parseFloat($input.attr('step'))).toFixed(1));
    createStyles();
});

$('.js-decrease-number').on('click', function () {
    let $this = $(this);
    let $input = $this.parent().find('input');
    if ($input.val() !== '0.0') {
        $input.val(parseFloat(parseFloat($input.val()) - parseFloat($input.attr('step'))).toFixed(1));
        createStyles();
    }
});

$('.js-slide-toggle').on('click', function () {
    let $this = $(this);
    let $content = $this.next('.js-slide-content');
    $this.toggleClass('active');
    $content.slideToggle();
});

$('.js-type-select').on('change', () => createStyles());
$('.js-font-select').on('change', () => createStyles());
$('.js-colour').on('change', () => createStyles());
$('.js-background').on('change', () => createStyles());

$('.js-save-type-settings').on('click', function () {
    createStyles();
    saveStyles();
});