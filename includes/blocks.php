<?php

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name' => 'hero-alt',
            'title' => __('Hero Alt.'),
            'description' => __('Hero Alt. Block'),
            'keywords' => [ 'hero', 'alt' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/hero-alt.php'
        ]);

        acf_register_block_type([
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('Hero Block'),
            'keywords' => [ 'hero' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/hero.php'
        ]);

        acf_register_block_type([
            'name' => 'subnav',
            'title' => __('Subnav'),
            'description' => __('Subnav Block'),
            'keywords' => [ 'nav', 'subnav' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/subnav.php'
        ]);

        acf_register_block_type([
            'name' => 'three-col',
            'title' => __('Three-Column'),
            'description' => __('Three-Column Block'),
            'keywords' => [ 'three', 'column' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/three-column.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col-center-stack',
            'title' => __('Two-Column Center Stack'),
            'description' => __('Two-Column Center Stack Block'),
            'keywords' => [ 'two', 'column', 'center', 'stack' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-col-center-stack.php'
        ]);

        acf_register_block_type([
            'name' => 'quote',
            'title' => __('Quote'),
            'description' => __('Quote Block'),
            'keywords' => [ 'quote' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/quote.php'
        ]);

        acf_register_block_type([
            'name' => 'image-and-text',
            'title' => __('Image and Text'),
            'description' => __('Image and Text Block'),
            'keywords' => [ 'image', 'text' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/image-and-text.php'
        ]);

        acf_register_block_type([
            'name' => 'summary',
            'title' => __('Summary'),
            'description' => __('Summary Block'),
            'keywords' => [ 'summary' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/summary.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col',
            'title' => __('Two Column (White Background)'),
            'description' => __('Two Column (White Background) Block'),
            'keywords' => [ 'two', 'column' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-column-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'full-width-image',
            'title' => __('Full-Width Image (White Background)'),
            'description' => __('Full-Width Image (White Background) Block'),
            'keywords' => [ 'full', 'width', 'image' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/full-width-image-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'text-left-with-icon',
            'title' => __('Text Left With Icon (White Background)'),
            'description' => __('Text Left With Icon (White Background) Block'),
            'keywords' => [ 'text', 'left', 'icon' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/text-left-with-icon-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'four-col-small',
            'title' => __('Four-Column Small (White Background)'),
            'description' => __('Four-Column Small (White Background) Block'),
            'keywords' => [ 'four', 'column', 'small' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/four-column-small-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'text-callout',
            'title' => __('Text Callout (White Background)'),
            'description' => __('Text Callout (White Background) Block'),
            'keywords' => [ 'text', 'callout' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/text-callout-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col-center-stack-white-bg',
            'title' => __('Two-Column Center Stack (White Background)'),
            'description' => __('Two-Column Center Stack (White Background) Block'),
            'keywords' => [ 'two', 'column', 'center', 'stack' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-col-center-stack-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col-intro',
            'title' => __('Two-Column Intro (White Background)'),
            'description' => __('Two-Column Intro (White Background) Block'),
            'keywords' => [ 'two', 'column', 'intro' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-col-intro-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'logo-list-with-heading',
            'title' => __('Logo List With Heading'),
            'description' => __('Logo List With Heading Block'),
            'keywords' => [ 'image', 'list', 'logo' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/logo-list-with-heading.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col-content',
            'title' => __('Two-Column Content (White Background)'),
            'description' => __('Two-Column Content (White Background) Block'),
            'keywords' => [ 'two', 'column', 'content' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-col-content-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'bio-list',
            'title' => __('Bio List'),
            'description' => __('Bio List Block'),
            'keywords' => [ 'bio', 'list' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/bio-list.php'
        ]);

        acf_register_block_type([
            'name' => 'hero-headline',
            'title' => __('Hero Headline'),
            'description' => __('Hero Headline Block'),
            'keywords' => [ 'hero', 'headline' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/hero-headline.php'
        ]);

        acf_register_block_type([
            'name' => 'content-list',
            'title' => __('Content List (White Background)'),
            'description' => __('Content List (White Background) Block'),
            'keywords' => [ 'content', 'list' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/content-list.php'
        ]);

        acf_register_block_type([
            'name' => 'Hero Image',
            'title' => __('Hero Image (White Background)'),
            'description' => __('Hero Image (White Background) Block'),
            'keywords' => [ 'hero', 'image' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/hero-image.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col-with-form',
            'title' => __('Two-Column With Form (White Background)'),
            'description' => __('Two-Column With Form (White Background) Block'),
            'keywords' => [ 'two', 'column', 'form' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-col-with-form.php'
        ]);

        acf_register_block_type([
            'name' => 'two-col-with-form2',
            'title' => __('Two-Column With Form'),
            'description' => __('Two-Column With Form Block'),
            'keywords' => [ 'two', 'column', 'form' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/two-col-with-form2.php'
        ]);

        acf_register_block_type([
            'name' => 'listing-with-headline',
            'title' => __('Listing With Headline (White Background)'),
            'description' => __('Listing With Headline (White Background) Block'),
            'keywords' => [ 'list', 'listing', 'headline' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/listing-with-headline-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'content',
            'title' => __('Content'),
            'description' => __('Content Block'),
            'keywords' => [ 'content' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/content.php'
        ]);

        acf_register_block_type([
            'name' => 'article-listing',
            'title' => __('Article Listing (White Background)'),
            'description' => __('Article Listing (White Background) Block'),
            'keywords' => [ 'article', 'list' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/article-listing.php'
        ]);

        acf_register_block_type([
            'name' => 'article-listing2',
            'title' => __('Article Listing'),
            'description' => __('Article Listing'),
            'keywords' => [ 'article', 'list' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/article-listing2.php'
        ]);

        acf_register_block_type([
            'name' => 'content2',
            'title' => __('Full-Width Content (White Background)'),
            'description' => __('Full-Width Content (White Background) Block'),
            'keywords' => [ 'content', 'full', 'width' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/content-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'spacer',
            'title' => __('Spacer (White Background)'),
            'description' => __('Spacer (White Background) Block'),
            'keywords' => [ 'space', 'spacer' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/spacer.php'
        ]);

        acf_register_block_type([
            'name' => 'separator',
            'title' => __('Horizontal Rule'),
            'description' => __('Horizontal Rule'),
            'keywords' => [ 'horizontal', 'rule' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/separator.php'
        ]);

        acf_register_block_type([
            'name' => 'separator2',
            'title' => __('Horizontal Rule (White Background)'),
            'description' => __('Horizontal Rule (White Background)'),
            'keywords' => [ 'horizontal', 'rule' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/separator-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'image-and-text-reverse',
            'title' => __('Image and Text Reverse (White Background)'),
            'description' => __('Image and Text Reverse (White Background)'),
            'keywords' => [ 'image', 'text', 'reverse' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/image-and-text-reverse-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'full-width-image-alt',
            'title' => __('Full-Width Image Alt. (White Background)'),
            'description' => __('Full-Width Image Alt. (White Background)'),
            'keywords' => [ 'image', 'full', 'width' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/full-width-image-alt-white-background.php'
        ]);

        acf_register_block_type([
            'name' => 'full-width-image2',
            'title' => __('Full-Width Image'),
            'description' => __('Full-Width Image'),
            'keywords' => [ 'full', 'width', 'image' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/full-width-image2.php'
        ]);

        acf_register_block_type([
            'name' => 'hero-video',
            'title' => __('Hero with Video'),
            'description' => __('Hero with Video Block'),
            'keywords' => [ 'hero', 'video' ],
            'mode' => 'edit',
            'render_template' => 'templates/blocks/hero-video.php'
        ]);
    }
});