<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content pure-u-1 pure-u-md-3-4">
    <article class="post" itemscope itemtype="https://schema.org/BlogPosting">
        <header class="post-header">
            <h1 class="post-title" itemprop="name headline">
                <a itemprop="url"
                href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h1>
            <p class="post-meta">
                <span class="post-date-sticker"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                <?php $this->date(); ?></time></span>
                <span class="post-category-sticker"><?php $this->category(' '); ?></span>
                <span class="post-tags-sticker" itemprop="keywords">
                    <?php $this->tags(' ', true, ''); ?></span>
            </p>
        </header>

        <div class="post-description" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>

</div><!-- end #main-->

</div>
</body>
</html>