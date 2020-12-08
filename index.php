<?php include 'header.php';?>
        <div class="main-container">
            <section class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="typed-headline">
                                <span class="h1 inline-block">A software developers directory for </span>
                                <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="devs.,dev communities., dev companies."></span>
                            </div>
                            <a class="btn btn-light type--uppercase inner-link" href="#demos">
                                <span class="btn__text">
                                    GET STARTED
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
             <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-block">
                                <h3>Dev Communities KE</h3>
                            </div>
                        </div>
                        <?php
                      $string = file_get_contents("communities.json");
                      $json_a = json_decode($string, true);
                      
                      foreach ($json_a as $key => $value) {
                        ?>
                        <div class="col-md-6">
                            <div class="feature feature-1 boxed boxed--border">
                                <span class="label"><?php echo $value['Sponsor'] ?></span>
                                <h5><?php echo $value['Name'] ?></h5>
                                <p>
                                 <?php echo $value['Desc'] ?>
                                </p>

                                <a href="<?php echo $value['Link'] ?>" target="_blank" ><i class="socicon socicon-google icon icon--xs"></i></a> &nbsp;
                                <a href="<?php echo $value['Events'] ?>" target="_blank" ><i class="socicon socicon-meetup icon icon--xs"></i></a> &nbsp;
                                <a href="<?php echo $value['Telegram'] ?>" target="_blank" ><i class="socicon socicon-telegram icon icon--xs"></i></a>
                            </div>
                            <!--end feature-->
                        </div>
                            <?php } ?>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->  
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-block">
                                <h3>Software development &amp; consultancies KE</h3>
                            </div>
                        </div>
                        <?php
                      $string = file_get_contents("sw_company.json");
                      $json_a = json_decode($string, true);
                      
                      foreach ($json_a as $key => $value) {
                        ?>
                        <div class="col-md-6">
                            <div class="feature feature-1 boxed boxed--border">
                                <h5><?php echo $value['Name'] ?></h5>
                                <p>
                                 <?php echo $value['Desc'] ?>
                                </p>
                                  <span class="label"><?php echo $value['Contact'] ?></span>
                                     <a target="_blank" href=" <?php echo $value['Link'] ?>">
                                    View Website
                                </a>
                            </div>
                            <!--end feature-->
                        </div>
                            <?php } ?>

                    </div>
                       <a id="demos"></a>
                    <!--end of row-->
                </div>
                <!--end of container-->  
            </section>

            <section class="switchable">    
                <div class="container">
                     <div class="heading-block">
                                <h3>Join us now!</h3>
                            </div>
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-lg-5">
                            <ul class="accordion accordion-1 accordion--oneopen">
                                <li class="active">
                                    <div class="accordion__title">
                                        <span class="h5 lead">How to create a profile</span>
                                    </div>
                                    <div class="accordion__content">
                                        <p class="lead">
                                            Sign up for an account <a href="/in"> here</a>. 
                                        </p>
                                         <p class="lead">
                                          Check out an <a href="https://devs.info.ke/profile/index.php?id=kenyandev"> example</a>.  You will get a public profile on a unique url. 
                                        </p>
                                        <p class="lead">
                                           You will recieve alerts on different opportunities like gigs, internships and jobs based on your profile. 
                                        </p>
                                    </div>
                                </li>
                                <li >
                                    <div class="accordion__title">
                                        <span class="h5 lead">How to list a community</span>
                                    </div>
                                    <div class="accordion__content">
                                        <p class="lead">
                                         Would you like to update info on any of the above communities? Check out the github repo <a target="_blank" href="https://github.com/linkeefe/devsinfoKE/blob/master/communities.json"> here</a> 
                                        </p>
                                    </div>
                                </li>
                                <li >
                                    <div class="accordion__title">
                                        <span class="h5 lead">How to list a SW consulting firm</span>
                                    </div>
                                    <div class="accordion__content">
                                        <p class="lead">
                                         Would you like to add/update the info on Software development companies? Check out the github repo <a target="_blank" href="https://github.com/linkeefe/devsinfoKE/blob/master/sw_company.json"> here</a> 
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <!--end accordion-->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="img/crypto-2.svg" alt="Image">
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
             <section class="space--xs imagebg" data-gradient-bg='#447422,#FFFFFF,#FFFFFF,#e40808'>
                <div class="container">
                    <div class="row cta cta--horizontal text-center-xs">
                        <div class="col-md-4">
                            <h4>Get Know-ticed!</h4>
                        </div>
                        <div class="col-md-5">
                            <p class="lead">
                                A Kenyan software developers directory
                            </p>
                        </div>
                        <div class="col-md-3 text-right text-center-xs">
                            <a class="btn btn-dark type--uppercase" href="blog.php">
                                <span class="btn__text">
                                    Check out our blog
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
<?php include 'footer.php';?>