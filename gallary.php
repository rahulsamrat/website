<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<!--my-css-->
	<link rel="stylesheet" href="starter.css">
    <title>SILIKA - Stable Isotope Lab IISER KOLKATA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="compact-gallery.css">
</head>
<body>
	<?php include 'navbar.php'; ?>
    <section class="gallery-block compact-gallery">
        <div class="container">
            <div class="heading">
				<br>
  
			<h2>Gallery</h2>
			<hr>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic1.jpg">
                        <img class="img-fluid image" src="img/pic1.jpg">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic4.JPG">
                        <img class="img-fluid image" src="img/pic4.JPG">
                        
                    </a>
                </div>
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic2.jpg">
                        <img class="img-fluid image" src="img/pic2.jpg">
                        
                    </a>
                </div>
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic3.jpg">
                        <img class="img-fluid image" src="img/pic3.jpg" style="width: 100%;
    height: auto;">
                        
                    </a>
                </div>
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic5.jpeg">
                        <img class="img-fluid image" src="img/pic5.jpeg" style="width: 100%;
    height: 100%;">
                        
                    </a>
                </div>
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic6.jpg">
                        <img class="img-fluid image" src="img/pic6.jpg">
                        
                    </a>
                </div>
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic7.jpg" >
                        <img class="img-fluid image" src="img/pic7.jpg" style="width: 100%;
    height: 100%;">
                        
                    </a>
                </div>
				<div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/pic8.jpg">
                        <img class="img-fluid image" src="img/pic8.jpg" style="width: 100%;
    height: auto;">
                        
                    </a>
                </div>
                <br>
				<br>
				<br>
            </div>
        </div>
    </section>
	<br>
	<br>
	<br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>
	<?php include 'footer.php'; ?>
</body>
</html>
