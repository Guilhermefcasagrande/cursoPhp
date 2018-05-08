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
                <h2>Lorem ipsum dolor</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Provident labore dignissimos delectus quia corrupti nobis numquam 
                voluptates aut explicabo! Fugit eligendi necessitatibus tempore corrupti, 
                aliquid beatae deleniti inventore reiciendis esse?</p>
                <a href="#" class="custom-botao">Leia Mais</a>
            </div>
        </div>
    </div>
    