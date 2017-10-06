<!-- main -->
<main role="main-inner-wrapper" class="container">
    <section style="margin-left: -10px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <article role="pge-title-content">

            <header>

                    <h2><span>My Skills</span></h2>

                </header>

            <?php 

            foreach ($skill as $key => $value) {
                echo '<div id="resumeProficienciesTop">'.$value['title'].'</div>

            <div id="resumeProficienciesBottom">
                <div class="progress">
                    <div class="'.$value['title'].' progress-bar progress-bar-info" role="progressbar" style="width: 0%"></div>
                </div>
            </div>';    
            }
            ?>
            
           
        </article>
    </section>
</main>

<!--main-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.Android').css('width', '85%');
        $('.PHP').css('width', '100%');
        $('.JQuery').css('width', '85%');
        $('.HTML').css('width', '100%');
        $('.CSS').css('width', '100%');
        $('.XML').css('width', '80%');
        $('.Javascript').css('width', '85%');
        $('.CodeIgniter').css('width', '90%');
        $('.Lumen').css('width', '90%');
        $('.Laravel').css('width', '85%');
        $('.MySQL').css('width', '90%');
        $('.MongoDB').css('width', '85%');
        $('.MSSQLServer').css('width', '85%');
    });
</script>

