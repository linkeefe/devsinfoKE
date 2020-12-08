<?php include 'header.php';?>
        <div class="main-container">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <?php
                            
                            $postid = $_GET["id"];  
                            $url="https://devs.info.ke/portal/wp-json/wp/v2/posts/$postid";
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL,$url);
                            $result=curl_exec($ch);
                            $posts = json_decode($result, true);

                            {; ?>
                            <article class="masonry__item" data-masonry-filter="Web Design">
                                <div class="article__title text-center">
                                    <a href="blog.php?id=<?php echo $post['id']; ?>">
                                        <h2><?php echo $posts['title']['rendered']; ?></h2>
                                    </a>
                                    <span><?php echo date('F j, Y', strtotime($posts['date'])); ?> </span>
                                    <span>
                                        <a href="#">Devs Kenya</a>
                                    </span>
                                </div>
                                <!--end article title-->
                                <div class="article__body">
                                    <p>
                                       <?php echo $posts['content']['rendered']; ?> 
                                    </p>
                                </div>
                            </article>
                              <?php } ?>
                            <!--end item-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="bg--secondary">
                <div class="container">
                    <div class="row text-block">
                        <div class="col-md-12">
                            <h3>More recent stories</h3>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                <?php
                    $url="https://devs.info.ke/portal/wp-json/wp/v2/posts/";
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_URL,$url);
                    $result=curl_exec($ch);
                    $posts = json_decode($result, true);
                    foreach ($posts as $post) {; ?>
                                  
                        <div class="col-md-4">
                            <article class="feature feature-1">
                                <div class="feature__body boxed boxed--border">
                                    <span><?php echo date('F j, Y', strtotime($post['date'])); ?></span>
                                    <h5><?php echo $post['title']['rendered']; ?></h5>
                                    <a href="post.php?id=<?php echo $post['id']; ?>">
                                        Read More
                                    </a>
                                </div>
                            </article>
                        </div>
                            <?php } ?>  
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
 <?php include 'footer.php';?>