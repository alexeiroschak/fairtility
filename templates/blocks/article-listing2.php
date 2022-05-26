<section id="<?= get_field('section_id') ?>" class="block article-listing2">
    <div class="container">
        <?php
            $articles = get_field('articles');
            $count = 0;
            foreach ($articles as $article) :
        ?>
            <div class="article-listing2--row">
                <div class="article-listing2--row--left">
                    <?php if ($count == 0) : ?>
                        <h2><?= get_field('headline') ?></h2>
                    <?php endif ?>
                </div>
                <div class="article-listing2--row--right">
                    <?php if ($article['type'] === 'post') : ?>
                        <h3><a href="<?= get_permalink($article['post']) ?>"><?= $article['post']->post_title ?></a></h3>
                        <span><?= get_the_date('j F Y', $article['post']) ?></span>
                        <div class="article-listing2--row--right--copy">
                            <p><?= get_the_excerpt($article['post']) ?></p>
                        </div>
                    <?php elseif ($article['type'] === 'external') : ?>
                        <h3><a href="<?= $article['link_url'] ?>"><?= $article['link_text'] ?></a></h3>
                        <span><?= $article['date'] ?></span>
                        <div class="article-listing2--row--right--copy">
                            <?= $article['excerpt'] ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php $count++; endforeach ?>
    </div>
</section>