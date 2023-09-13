<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content pure-u-1 pure-u-md-3-4">
    <article class="post" itemscope itemtype="https://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline">
            <a itemprop="url"
                href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </h1>
        <div class="post-description" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
</div><!-- end #main-->

</div>
</body>
</html>