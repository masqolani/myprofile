<!-- main -->

<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header" style="padding-left: 10px">
        <a href="<?php //echo base_url().'experience';?>">
            <button type="button" class="btn btn-default navbar-btn pull-left">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </button>
        </a>
      <div class="navbar-text navbar-brand-centered"><h3>Experience Detail</h3></div>
    </div>
  </div>
</nav> -->

<main role="main-inner-wrapper" class="container">

        <!-- work details -->

        	<div class="work-details">

                <div class="row">

                	<div class="col-xs-12 col-sm-12 col-md-4">

                    	<header role="work-title">

                            <a href="<?php echo base_url().'experience';?>">
                                <button type="button" class="btn btn-default navbar-btn pull-left">
                                    <span class="glyphicon glyphicon-chevron-left">BACK</span>
                                </button>
                            </a>

                        	<h2><?php echo $experience[0]['title']; ?></h2>

                        </header>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8">

                    	<section>

                            <article class="about-content">
                        	   <p><?php echo $experience[0]['description'];?></p>
                            </article>
                        </section>                    

                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="work-images grid">

                    <ul class="grid-lod effect-2" id="grid">

                        <?php 
                        foreach($experience_image as $key => $value)
                        {                        
                            echo '<li>
                                <img src="'.base_url().$value['experience_image'].'" alt="" class="img-responsive"/>
                            </li>';
                        }
                        ?>
                    </ul>

                </div>                

            </div>

        <!-- work details -->

</main>

<!-- main