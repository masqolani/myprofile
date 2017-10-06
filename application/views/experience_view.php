<!-- main -->

<main role="main-home-wrapper" class="container">

    <div class="row">

    	<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        	<article role="pge-title-content">

            	<header>

                	<h2><span>My Experience</span></h2>

                </header>

            </article>

        </section>
        

        <div class="clearfix"></div>

        
        <!-- section left -->
        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

        	<ul class="grid-lod effect-2" id="grid">

               <?php
                    foreach ($experience as $key => $value) {

                        if($value['section_type'] == 1)
                        {
                             echo '<li>
                                <figure class="effect-oscar">
                                    <div class="post-date">
                                        '.$value['created_date_project'].'
                                    </div>
                                    <img src="'.base_url().$value['header_image'].'" alt="" class="img-responsive"/>
                                    <figcaption>
                                            <h2><span>'.$value['title'].'</span></h2>
                                            
                                            <a href="'.base_url().'experience/detail/'.$value['experience_id'].'">View Detail</a>
                                    </figcaption>
                                </figure>
                            </li>';
                        }
                    }
                ?>
            </ul>

        </section>

        
        <!-- section right -->
        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

        	<ul class="grid-lod effect-2" id="grid">
                 <?php
                    foreach ($experience as $key => $value) {

                        if($value['section_type'] == 2)
                        {
                             echo '<li>
                                <figure class="effect-oscar">
                                    <div class="post-date"> 
                                        '.$value['created_date_project'].'
                                    </div>
                                    <img src="'.base_url().$value['header_image'].'" alt="" class="img-responsive"/>
                                    <figcaption>
                                            <h2><span>'.$value['title'].'</span></h2>
                                            
                                            <a href="'.base_url().'experience/detail/'.$value['experience_id'].'">View Detail</a>
                                    </figcaption>
                                </figure>
                            </li>';
                        }
                    }
                ?>
            </ul>

        </section>

        <div class="clearfix"></div>

    </div>

</main>

<!-- main -->

       