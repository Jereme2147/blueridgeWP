<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRP Wordpres</title>
</head>
<body class="container">
    <!-- bill pay and contact top bar -->
<div class="quickNav"
     style="background-image: url(<?php echo get_template_directory_uri()?>/media/banner.jpg)">
         <button>
            <!-- link need changing to href -->
            <a to={"/contact"}>
             <h2>Become a Customer</h2>
            </a>
         </button>
         <button>
           <a to={"/billPay"}>
             <h2>Pay Your Bill</h2>
           </a>
         </button>
       </div>
    <nav class="nav">
        
    </nav>