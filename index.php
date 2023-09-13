<?php
/**
 * Purity 主题。
 *
 * @package Purity dev002
 * @author github.com/iklh
 * @version 0.0.1-dev
 * @link https://github.com/iklh
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="content pure-u-1 pure-u-md-3-4">
    <div>
        <div class="posts">
            <h1 class="content-subhead">最近发布的文章</h1>
            <?php while ($this->next()): ?>
                <article class="post" itemscope itemtype="https://schema.org/BlogPosting">
                    <header class="post-header">
                        <h2 class="post-title" itemprop="name headline">
                            <a itemprop="url"
                                href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                        </h2>

                        <p class="post-meta">
                            <span class="post-date-sticker"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                            <?php $this->date(); ?></time></span>
                            <span class="post-category-sticker"><?php $this->category(' '); ?></span>
                            <span class="post-tags-sticker" itemprop="keywords">
                                <?php $this->tags(' ', true, ''); ?></span>
                        </p>
                    </header>

                    <div class="post-description" itemprop="articleBody">
                        <?php $this->content('- 继续阅读 -'); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php $this->pageNav('&laquo; 上一页', '下一页 &raquo;'); ?>
        </div>
    </div>
</div>

</div>
</body>
</html>