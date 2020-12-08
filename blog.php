<?php include 'header.php';?>

        <div class="main-container">
            <section class="space--sm">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="masonry masonry-blog-list">
                                <div class="masonry__container">
                                     <?php
                                    $url="https://devs.info.ke/portal/wp-json/wp/v2/posts/";
                                    $ch = curl_init();
                                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($ch, CURLOPT_URL,$url);
                                    $result=curl_exec($ch);
                                    $posts = json_decode($result, true);
                                    foreach ($posts as $post) {; ?>

                                    <article class="masonry__item" data-masonry-filter="Web Design">
                                        <div class="article__title text-center">
                                                <h2><?php echo $post['title']['rendered']; ?></h2>
                                            </a>
                                            <span><?php echo date('F j, Y', strtotime($post['date'])); ?> </span>
                                            <span>
                                              Devs Kenya
                                            </span>
                                        </div>
                                        <!--end article title-->
                                        <div class="article__body">
                                            <p>
                                               <?php echo $post['excerpt']['rendered']; ?>
                                            </p>
                                            <a href="post.php?id=<?php echo $post['id']; ?>">Continue reading &raquo;</a>
                                        </div>
                                    </article>
                                      <?php } ?>  
                                </div>
                                <!--
                                <div class="pagination">
                                    <a class="pagination__prev" href="#" title="Previous Page">&laquo;</a>
                                    <ol>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li class="pagination__current">3</li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                    </ol>
                                    <a class="pagination__next" href="#" title="Next Page">&raquo;</a>
                                </div>
                            </div> -->
                            <!--end masonry-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
<?php include 'footer.php';?>  