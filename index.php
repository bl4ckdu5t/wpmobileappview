<?php get_header(); ?>
    <main class="content">
      <div class="post">
        <!-- <form action="" class="post__search" method="get">
          <label for="q">Search:</label>
          <input type="text" name="q" placeholder="Search for anything...">
          <input type="submit" value="Find">
        </form> -->
        <!-- <article class="post__article">
          <h1 class="post__title">The Return of Legends</h1>
          <img src="http://placehold.it/320x250" class="post__article__image" alt="stuff">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iusto illum quia odio molestias excepturi cupiditate ipsum, laudantium debitis nobis, consequuntur? Consequuntur aspernatur hic, natus, veniam quidem, velit recusandae deserunt sunt libero ullam fugiat id blanditiis deleniti consequatur! Excepturi voluptates laboriosam vel explicabo ut iste suscipit dignissimos hic quos dicta illo, ea, optio assumenda adipisci voluptas odio id error neque cum nesciunt facilis quia cupiditate tempora unde? Perferendis quasi cumque distinctio blanditiis quod quam inventore vero voluptatibus mollitia, deleniti est quae a reiciendis quos minima at id earum delectus facilis asperiores accusamus, molestiae error. Nulla, necessitatibus aperiam voluptas est laboriosam, fugiat facere cumque? Atque, aut id magnam voluptatem architecto delectus reprehenderit tenetur consequuntur aliquam omnis. Impedit nesciunt aut non, numquam obcaecati suscipit tempore autem amet dolor dolores architecto sunt perferendis voluptatibus, itaque ullam voluptate nemo nisi vero? Provident vitae deserunt, illo, laborum vel magni quaerat consequatur impedit, doloremque nemo atque ab sint temporibus, dignissimos. Nulla temporibus eius repudiandae voluptate culpa aut non voluptatem id ullam iure? Nisi totam modi, est fugiat libero vitae harum, amet ratione adipisci eligendi eaque labore, facilis optio inventore odit nulla perferendis aliquam exercitationem tenetur incidunt velit. Reprehenderit non ut impedit vel deleniti laudantium voluptatibus! Ipsam!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia corrupti tenetur saepe officia quidem quod adipisci est iusto ipsa maxime illo quibusdam eos nihil rerum consequatur qui, ullam perferendis! Obcaecati temporibus doloremque blanditiis consectetur nisi soluta ea. Libero debitis esse dignissimos rerum hic laudantium, culpa ducimus rem, porro, vero molestiae minima sequi vitae veritatis obcaecati delectus unde doloremque vel perferendis sit expedita. Incidunt harum tempora repellat laborum expedita, modi eum blanditiis possimus illo magnam debitis numquam nobis voluptatem ad placeat voluptate quo veritatis repellendus dolor. Aliquid blanditiis, perferendis architecto natus eligendi! Modi recusandae consectetur maiores in pariatur quae minima cum, dolorem eius, consequuntur natus, beatae sunt dicta, voluptas enim deleniti impedit. Soluta eum velit quo eaque consectetur labore, magnam vitae tenetur facilis corporis? Maiores omnis, nesciunt id neque odit blanditiis impedit dolores porro officia, eligendi, beatae explicabo? Reiciendis officiis adipisci obcaecati consequuntur id odio et repellendus dolores doloremque tempore aliquam harum illum expedita autem non ad eaque at ea, omnis error perferendis fugiat, nihil veniam architecto sequi. Porro libero sequi ullam accusantium optio voluptatibus, repellendus neque cum temporibus provident qui nostrum, itaque, esse perferendis, quibusdam iusto dolor quaerat cupiditate ad sapiente! Similique vero assumenda asperiores sapiente amet, eius quasi veritatis.</p>
        </article> -->
        <ul class="post__excerpts">
        <?php if ( have_posts() ) : ?>

    			<?php while ( have_posts() ) : the_post(); ?>

    				<?php
    					/* Include the Post-Format-specific template for the content.
    					 * If you want to override this in a child theme, then include a file
    					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    					 */
    					get_template_part( 'content', get_post_format() );
    				?>

    			<?php endwhile; ?>

    			<?php the_posts_navigation(); ?>

    		<?php else : ?>

    			<?php get_template_part( 'content', 'none' ); ?>

    		<?php endif; ?>
        </ul>
      </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
