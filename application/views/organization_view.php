<!-- main -->

<main role="main-inner-wrapper" class="container">  

    <div class="row">   

      <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <article role="pge-title-content">

              <header>

                  <h2><span>My Organization</span></h2>

                </header>

            </article>

        </section>
        

        <div class="clearfix"></div>

      <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <?php 
          foreach ($organization as $key => $value) {
             echo '<div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h4 class="mb-1">'.$value['organization_name'].'</h4>
                    </div>
                    <p class="mb-1">'.$value['organization_year'].'</p>
                  </a>
                </div>';
          }
        ?>
      </section>

    </div>
</main>