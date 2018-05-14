<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="wrap">
            <h1><a href="<?php echo site_url();?>" title="<?php bloginfo('name'); ?>">GuilhermeFC</a></h1>
            <div class="info">

                <?php 
                    $args = array('post_type' => 'page', 'pagename' => 'sobre');
                    $my_page = get_posts($args);
                ?>
                <?php if ($my_page): foreach ($my_page as $post): setup_postdata($post); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="custom-botao">Leia Mais</a>
                <?php endforeach; ?>

                <?php else:?>
                <p>Nenhum conteúdo inserido na página sobre.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    