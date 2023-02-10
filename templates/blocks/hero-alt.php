<div id="<?= get_field('section_id') ?>" class="block hero-alt">
    <div class="container">
        <div class="hero-alt--left" style="background-image:url(<?= get_field('left_background_image') ?>)">
            <h1><?= get_field('left_headline') ?></h1>
            <button class="hero-alt--left--watch-button">Watch the Video</button>
        </div>
        <a href="<?= get_field('right_link_url') ?>" class="hero-alt--right">
            <video muted autoplay loop src="<?= get_field('right_background_video') ?>"></video>
            <span><?= get_field('right_link_text') ?></span>
        </a>
    </div>
    <div class="hero-alt--modal">
        <div class="hero-alt--modal--window">
            <button class="hero-alt--modal--window--close"><i class="fas fa-times-circle"></i></button>
            <div class="hero-alt--modal--window--container">
                <iframe id="hero_alt_modal_video" width="560" height="315" src="https://www.youtube.com/embed/<?= get_field('modal_youtube_video_id') ?>?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>