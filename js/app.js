console.log('%cType 0.1', 'padding:5px;color: #fff; background: #377cff;');

/*------------------------------------------------------------------
Dependencies
------------------------------------------------------------------*/

import $ from 'jquery';
import select2 from 'select2';
import Picker from 'vanilla-picker';
let rgbaToHex = require('hex-and-rgba').rgbaToHex;

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
let fonts = [];
let fontFamilies = [];

const createSingleRootStyleSet = ($el) => {
    return {
        [':root']: {
            '--primary-colour': $('.js-primary-colour-input').val(),
            '--secondary-colour': $('.js-secondary-colour-input').val()
        }
    }
};

const createSingleStyleSet = ($el) => {
    let tag = '#type ' + $el.attr('data-tag')
    if (tag === 'p' || tag === '#type p') tag = 'p, b, li, strong';
    return {
        [tag]: {
            'font-family': $el.find('.js-font-select').val(),
            'font-weight': $el.find('.js-type-select').val(),
            'font-size': $el.find('.js-font-size').val() + 'px',
            'font-style': $el.find('.js-style-select').val(),
            'color': $el.find('.js-colour').val(),
            'background': $el.find('.js-background').val(),
            'text-align': $el.find('.js-align-select').val(),
            'line-height': $el.find('.js-line-height').val(),
        }
    }
};

const updateInputs = (tags) => {
    forEach(tags, (value, key) => {
        if (key === ':root') {
            $(`.js-primary-colour-input`).val(value['--primary-colour']).trigger('change');
            $(`.js-secondary-colour-input`).val(value['--secondary-colour']).trigger('change');
        } else {
            let tag = key.replace('#type ', '');
            if (tag.length > 5) tag = 'p';
            $(`#selector_${tag}_font-family`).val(value['font-family']).trigger('change');
            $(`#selector_${tag}_font-weight`).val(value['font-weight']).trigger('change');
            $(`#selector_${tag}_font-size`).val(value['font-size'].replace('px', ''));
            $(`#selector_${tag}_font-style`).val(value['font-style']).trigger('change');
            $(`#selector_${tag}_font-colour`).val(value['color']).trigger('change');
            $(`#selector_${tag}_background-color`).val(value['background']).trigger('change');
            $(`#selector_${tag}_text-align`).val(value['text-align']).trigger('change');
            $(`#selector_${tag}_line-height`).val(value['line-height']);
        }
    });
    createStyles();
};

const createStyles = () => {
    fonts = [];
    $('.js-type-item').each(function () {
        assign(styles, createSingleStyleSet($(this)));
        fonts.push($(this).find('.js-font-select').val());
    });
    assign(styles, createSingleRootStyleSet());
    $('#typeStyles').html(Css.of(styles));
};

const saveStyles = () => {
    $('body').addClass('typeBusy');
    $.ajax({
        url: $('.js-save-type-settings').attr('data-api'),
        type: 'POST',
        data: { 'css': Css.of(styles), 'json': styles, 'fonts': fonts }
    }).done(function (response) {
        setTimeout(() => $('body').removeClass('typeBusy'), 400);
        $(window).trigger('resize');
    });
};

const loadStyles = () => {
    $.ajax({
        url: $('.js-load-type-settings').attr('data-api'),
        type: 'GET',
        dataType: 'json'
    }).done(function (response) {
        updateInputs(response);
    });
};

if ($('.js-load-type-settings').length) loadStyles();

const loadFonts = (fontsToLoad = []) => {
    $('.js-font-select').each(function () {
        fontsToLoad.push($(this).find('option:selected').val() + ':100,300,400,600,700,800,900');
    });
    WebFont.load({ google: { families: uniq(fontsToLoad) } });
};

$typeSelect.each(function () {
    let $this = $(this);

    $this.select2({ width: '100%', minimumResultsForSearch: 20, dropdownParent: $('#typeSettings') });

    $this.on('select2:open', () => {
        setTimeout(() => $('.select2-dropdown').addClass('animating'), 10);
        setTimeout(() => $('.select2-dropdown').addClass('animated'), 250);
    });

    $this.on('select2:closing', () => $('.select2-dropdown').removeClass('animated animating'));

    $this.on('select2:select', () => loadFonts());

});

$fontSelect.each(function () {
    let $this = $(this);

    $this.select2({ width: '100%', minimumResultsForSearch: 20, dropdownParent: $('#typeSettings') });

    $this.on('select2:open', () => {
        setTimeout(() => $('.select2-dropdown').addClass('animating'), 10);
        setTimeout(() => $('.select2-dropdown').addClass('animated'), 250);
    });

    $this.on('select2:closing', () => $('.select2-dropdown').removeClass('animated animating'));

    $this.on('select2:select', () => loadFonts());

});

$('.js-type-colour').each(function () {
    let $this = $(this);
    let picker = new Picker({
        parent: $this[0],
        color: '#111111',
        editorFormat: 'hex',
        onChange(color) {
            let rgba = color._rgba;
            if (rgba) {
                var hex = rgbaToHex(rgba[0], rgba[1], rgba[2], rgba[3]);
                $this.find('.js-type-colour-swatch').css({ 'background': `${hex}` })
                $this.parent().find('input').val(`${hex}`);
                createStyles();
            }
        }
    });

    $this.parent().find('.type__item__content__item__input').on('keyup change', function () {
        let val = $(this).val();
        if (val.length > 6 && val !== 'transparent') {
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
$('.js-background').on('change', () => createStyles());
$('.js-align-select').on('change', () => createStyles());
$('.js-style-select').on('change', () => createStyles());

$('.js-save-type-settings').on('click', function () {
    createStyles();
    saveStyles();
});

const toggleTypeSidebar = () => {
    $('body').toggleClass('typeSettingsOpen');
};

$('.js-toggle-type-settings').on('click', function (e) {
    e.preventDefault();
    toggleTypeSidebar();
});