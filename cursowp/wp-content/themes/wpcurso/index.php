<?php get_header(); ?>

<div class="blog">
    <div class="wrap">
        <h2>BLOG</h2>

        <div class="box-list-posts">

            <?php 
                $args = array("post_type" => "post", "showposts" => 2);
                $my_posts = get_posts($args);
            ?>
            <?php 
                $cont = 1;
                if($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);
            ?>

            <div class="list-posts <?php if($cont == 2) echo "segundo-post" ?>">
                <?php the_post_thumbnail(); ?>
                
                <div class="box-content-post">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="custom-botao">Leia Mais</a>
                </div>

            </div>
            <?php $cont ++; endforeach; endif;?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>