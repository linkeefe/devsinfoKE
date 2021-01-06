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
                                <p>
                                         Would you like to update info of the listed communities? Check out the github repo.
                                        </p>
                                <a target="_blank" href="https://github.com/linkeefe/devsinfoKE/blob/master/communities.json">ADD/UPDATE &raquo;</a>
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
              
   <a id="demos"></a>
  
            <section class="switchable">    
                <div class="container">
                     <div class="heading-block">
                                <h3>Join us now!</h3>
                            </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                             <div class="feature feature--featured feature-5 boxed boxed--lg boxed--border">
                                                <i class="icon icon-User icon--lg"></i>
                                                <div class="feature__body">
                                                    <h5>Join as a dev</h5>
                                                    <p>
                                                      Sign up for an account and get a listed.</br> Check out an <a target="_blank" href="/profile/index.php?id=kenyandev"> example</a>. </br> You will get a public profile on a unique url.  You will recieve alerts on different opportunities like gigs, internships and jobs based on your profile. 
                                                    </p>
                                                    <a href="/in">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature feature--featured feature-5 boxed boxed--lg boxed--border">
                                                <i class="icon icon-Shop icon--lg"></i>
                                                <div class="feature__body">
                                                    <h5>Join as a firm</h5>
                                                    <p>
                                                     Sign up for an account and get a listed. </br> Check out an <a target="_blank" href="/pages/view.php?id=devske"> example</a>. </br>  Get noticed by software developers and IT prationers on the network and get other services like posting of jobs.
                                                    </p>
                                                    <a href="/company">Get Started</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
             <a id="jobs"></a>

            <section>
                <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                            <div class="heading-block">
                                <h3>Post a JOB</h3>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing pricing-1 boxed boxed--lg boxed--border">
                                    <h3>LITE</h3>
                                <span class="h2">
                                    <strong>Ksh. 1000</strong>
                                </span>
                                <span class="type--fine-print">All kind of jobs for 3-months</span>
                                <hr>
                                <ul>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>DevsKE Socials</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>DevsKE Listing</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>DevsKE Newsletter</span>
                                    </li>
                                </ul>
                                <a class="btn btn--primary" href="/company">
                                    <span class="btn__text">
                                       GET STARTED
                                    </span>
                                </a>
                            </div>
                            <!--end of pricing-->
                        </div>
                        <div class="col-md-4">
                            <div class="pricing pricing-1 boxed boxed--lg boxed--border boxed--emphasis">
                                <h3>PREMIUM</h3>
                                <span class="h2">
                                    <strong>Ksh. 10,000</strong>
                                </span>
                                <span class="type--fine-print">All kind of jobs for 3-months</span>
                                <span class="label">Value</span>
                                <hr>
                                <ul>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>DevsKE Socials</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>DevsKE Listing</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>DevsKE Newsletter</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>Screening Candidates</span>
                                    </li>
                                       <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>First-level interview</span>
                                    </li>
                                </ul>
                                <a class="btn btn--primary-1" href="/company">
                                    <span class="btn__text">
                                       GET STARTED
                                    </span>
                                </a>
                            </div>
                            <!--end of pricing-->
                        </div>
                        <div class="col-md-4">
                            <div class="pricing pricing-1 boxed boxed--lg boxed--border">
                                <h3>PREMIUM</h3>
                                <span class="h2">
                                    <strong>Custom</strong>
                                </span>
                                <span class="type--fine-print">Includes all sorts of services</span>
                                <hr>
                                <ul>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>Job description scripting</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>Candidate screening</span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>All interview levels </span>
                                    </li>
                                    <li>
                                        <span class="checkmark bg--primary-1"></span>
                                        <span>Ready-to-hire</span>
                                    </li>
                                </ul>
                                <a class="btn btn--primary" href="#">
                                    <span class="btn__text">
                                           Email: connect@devs.info.ke
                                    </span>
                                </a>
                            </div>
                            <!--end of pricing-->
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
                            <a class="btn btn-dark type--uppercase" href="/portal">
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
