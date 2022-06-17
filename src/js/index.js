import $ from 'jquery'
import 'select2'

let player

function init() {
    setUpEventListeners()
    setUpYoutubeAPI()
}

function setUpEventListeners() {
    window.jQuery(document).on('gform_post_render', events.onGFormPostRender)
    $('.demo').on('click', events.onDemoButtonClick)
    $('#request_demo_flyout__close_button').on('click', events.onDemoFlyoutCloseButtonClick)
    $('#header__hamburger').on('click', events.onHeaderHamburgerClick)
    $('#main_nav__header__close').on('click', events.onMainNavHeaderClose)
    $('.hero-alt--left--watch-button').on('click', events.onHeroAltLeftWatchButtonClick)
    $('.hero-alt--modal--window--close').on('click', events.onHeroAltModalWindowCloseButtonClick)
}

function setUpYoutubeAPI() {
    window.onYouTubeIframeAPIReady = () => {
        player = new YT.Player('hero_alt_modal_video', {});
    }
}

function setUpSelects() {
    $('select').each((index, el) => {
        const select = $(el)

        select.select2({
            width: '100%',
            minimumResultsForSearch: Infinity,
            dropdownParent: select.closest('.ginput_container_select')
        })
    })
}

const events = {
    onGFormPostRender() {
        setUpSelects()
    },
    onDemoButtonClick(e) {
        const flyout = $('#request_demo_flyout')

        e.preventDefault()
        flyout.addClass('show')
    },
    onDemoFlyoutCloseButtonClick() {
        const flyout = $('#request_demo_flyout')

        flyout.removeClass('show')
    },
    onHeaderHamburgerClick() {
        const nav = $('#main_nav')

        nav.addClass('open')
    },
    onMainNavHeaderClose() {
        const nav = $('#main_nav')

        nav.removeClass('open')
    },
    onHeroAltLeftWatchButtonClick(e) {
        const btn = $(e.target)
        const block = btn.closest('.block')
        const modal = block.find('.hero-alt--modal')

        modal.addClass('show')
        player.playVideo()
    },
    onHeroAltModalWindowCloseButtonClick(e) {
        const btn = $(e.target)
        const modal = btn.closest('.hero-alt--modal')

        modal.removeClass('show')
        player.stopVideo()
    }
}

$(init)