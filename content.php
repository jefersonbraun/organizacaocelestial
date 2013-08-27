<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1><?php the_title(); ?></h1>
		<?php else : ?>
		<h1>
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div>
		<?php the_content( __( 'Continuar lendo <span class="meta-nav">&rarr;</span>' ) ); ?>
		<?php wp_link_pages( array( 'anterior' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>', 'próximo' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Deixe um comentário' ) . '</span>', __( '1 comentário' ), __( 'Ver todos os % comentários' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
