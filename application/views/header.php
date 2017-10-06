<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">


        <title>Muhammad Asqolani</title>

		<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/asqo_icon.png" type="image/x-icon">



        <!-- style -->

        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- style -->

        <!-- GRAPH -->

        <link href="<?php echo base_url();?>assets/css/graph.css" rel="stylesheet" type="text/css">

        <!-- bootstrap -->

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- responsive -->

        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- font-awesome -->

        <link href="<?php echo base_url();?>assets/css/effects/set2.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url();?>assets/css/effects/normalize.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url();?>assets/css/effects/component.css"  rel="stylesheet" type="text/css" >

	</head>

    <body>

    	<!-- header -->

    	<header role="header">

        	<div class="container">

            	<!-- logo -->

                	<h1>

                    	<a href="home" title="M. Asqolani"><img style="width: 225px;" src="<?php echo base_url();?>assets/images/logo.png" title="M. Asqolani" alt="M. Asqolani"/></a>

                    </h1>

                <!-- logo -->

                <!-- nav -->

                <nav role="header-nav" class="navy">

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
                        <!--class="nav-active"-->

                    </ul>

                </nav>

                <!-- nav -->

            </div>

        </header>

        <!-- header -->

        <!-- Loading gif image
            1. css in style.css
            2. javascript in footer.php
         -->
        <div class="se-pre-con"></div>