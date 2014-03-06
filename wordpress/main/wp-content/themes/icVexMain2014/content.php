<article id="post-<?php the_ID(); ?>" <?php post_class('post-item group'); ?>>

<div class="pic">
<a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
</div><!--pic-->

<div class="info">
<header>
<h3><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
</header>
<div class="meta"><?php echo get_the_date(); ?></div>
<div class="excerpt"><?php the_excerpt(); ?><?php /* the_content(); */ ?></div>
</div><!--info-->

</article>