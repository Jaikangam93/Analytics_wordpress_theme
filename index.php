<?php get_header(); ?>



    
    <section class="main">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-9">
            
            <div class="blog-posts">
              
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?> >
                        
                        <div class="post__image">    
                            <?php if(has_post_thumbnail()) : ?> 
                                 <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        
                        <div class="post__content">
                            <h2><a href="<?php the_permalink(); ?>"> <?php the_title( ); ?></a></h2>
                        
                            <div class="post__meta pb-2">
                                <span><i class="fa fa-user pr-1"></i> By :  <a href="#"><?php the_author()?></a> </span>
                                
                                <span><i class="fa fa-clock-o pr-1"></i>  
                                    <?php echo get_the_date(); ?>   
                                </span>
                                
                                <span><i class="fa fa-list-alt pr-1"></i> <a href="#">Categories</a></span>
                            </div>

                            <?php the_content(); ?>
                        </div>
                        <div class="post__readmore">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"> Read more...</a>
                        </div>

                    </article>
                    <hr> 

                <?php endwhile; else : ?>
                    
                    <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
                    
                        <div class="post__content">
                        <h2><a href="#"> Sorry, No posts were found  </a> </h2>
                            <?php esc_html_e( 'Sorry! No content found.', 'hranlytics' ); ?>
                        </div>

                    </article>

                <?php endif; ?>

            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </nav>
              
            <p>Template: index.php</p>
          </div>

          
          <div class="col-lg-3">
            <aside class="sidebar">
							
              <form>
                <div class="input-group input-group-4">
                  <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
            
              <hr>
            
              <h4 class="heading-primary">Categories</h4>
              <ul class="nav nav-list flex-column mb-5">
                <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Photos (4)</a>
                  <ul>
                    <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
              </ul>
          
            </aside>
          </div>


        </div>
      </div>
    </section>


<?php get_footer(); ?>
