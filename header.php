<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('purity.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('pure-min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grids-responsive-min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('styles.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">
                <a class="brand-title-anchor" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            </h1>
            <h2 class="brand-tagline"><?php $this->options->description() ?></h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?><?php while ($pages->next()): ?><a class="pure-button" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a><?php endwhile; ?></li>
                </ul>
            </nav>
        </div>
    </div>

