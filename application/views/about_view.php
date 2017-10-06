
<!-- main -->

<main role="main-inner-wrapper" class="container">	

    <div class="row">   

        <section style="margin-right: 25px;" class="col-xs-12 col-sm-5 col-md-5 col-lg-5">

            <article role="pge-title-content">

                <header>

                    <h2><span>DREAM</span> <span>CREATE</span> <span>FUTURE</span></h2>

                </header>

            </article>

        </section>

        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="row">
            
                <div class="timeline-centered">

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon bg-success">
                                <i class="entypo-feather"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Muhammad Asqolani</a></h2>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-suitcase"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Jakarta, 07 November 1994</a></h2>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">MI. ASH-SHIDDIQIN Jakarta</a></h2>
                            </div>
                        </div>

                    </article>

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">MTs. Negeri 05 Jakarta</a></h2>
                            </div>
                        </div>

                    </article>

                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">SMA Negeri 114 Jakarta</a></h2>
                            </div>
                        </div>

                    </article>


                    <article class="timeline-entry">

                        <div class="timeline-entry-inner">

                            <div class="timeline-icon bg-secondary">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Teknik Informatika - Universitas YARSI Jakarta</a></h2>
                            </div>
                        </div>

                    </article>
                    

                    <article class="timeline-entry begin">

                        <div class="timeline-entry-inner begin">

                            <div class="timeline-icon bg-success">
                                <i class="entypo-camera"></i>
                            </div>

                            <div class="timeline-label">
                                <h2><a href="#">Bekerja di pergi.com</a></h2>
                                <i class="entypo-flight"></i>
                            </div>
                        </div>

                    </article>
                
                </div>
            </div>

        </section>
    

        <div class="clearfix"></div>
        

        <!-- thumbnails -->

        	<div class="thumbnails-pan">

                <?php
                    foreach ($about_image as $key => $value) {

                        echo '<section class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">

                                <figure>

                                    <img src="'.base_url().$value['image'].'" class="img-responsive"/>

                                    <figcaption>

                                        <h3>'.$value['description'].'</h3>

                                    </figcaption>

                                </figure>

                            </section>';
                    }
                ?>

            </div>

        <!-- thumbnails -->
    </div>

</main>

<!-- main -->
