 <!-- footer -->
        <footer role="footer">

            <!-- logo -->

              <!--   <h1>

                    <a href="index.html" title="m.asqolani"><img src="<?php //echo base_url();?>assets/images/logo.png" title="m.asqolani" alt="m.asqolani"/></a>

                </h1> -->

            <!-- logo -->

            <!-- nav -->

            <nav role="footer-nav">

            	<ul>

                    <?php
                        /* Attempt MySQL server connection. Assuming you are running MySQL
                        server with default setting (user 'root' with no password) */
                        $link = mysqli_connect("localhost", "root", "", "myportofolio");                             

                        // Check connection
                        if($link === false){

                            die("ERROR: Could not connect. " . mysqli_connect_error());

                        }                             

                        // Attempt select query execution
                        $sql = "SELECT * FROM menu";

                        if($result = mysqli_query($link, $sql))
                        {
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo ' <li><a href="'.base_url().$row['menu_action'].'" title="'.$row['menu_title'].'">'.$row['menu_title'].'</a></li>';
                                }
                            }
                        }
                    ?>

                </ul>

            </nav>

            <!-- nav -->

            <ul role="social-icons">

            	<li><a href="https://www.instagram.com/m.asqolani/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                <li><a href="https://www.linkedin.com/in/muhammad-asqolani-385881b1" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

            </ul>

            <p class="copy-right"> Muhammad Asqolani - 2017</p>

        </footer>

        <!-- footer -->

    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>

        <!-- custom -->

		<script src="<?php echo base_url();?>assets/js/nav.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/custom.js" type="text/javascript"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/effects/masonry.pkgd.min.js"  type="text/javascript"></script>

		<script src="<?php echo base_url();?>assets/js/effects/imagesloaded.js"  type="text/javascript"></script>

		<script src="<?php echo base_url();?>assets/js/effects/classie.js"  type="text/javascript"></script>

		<script src="<?php echo base_url();?>assets/js/effects/AnimOnScroll.js"  type="text/javascript"></script>

        <script src="<?php echo base_url();?>assets/js/effects/modernizr.custom.js"></script>

        <!-- jquery.countdown -->

        <script src="<?php echo base_url();?>assets/js/html5shiv.js" type="text/javascript"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });

        </script>
        

    </body>

</html>