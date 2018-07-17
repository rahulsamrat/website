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
    <head>
      <style>
      html, body {
      margin: 0;
      padding: 0;
      font-family: Helvetica, sans-serif;
    }

    section#timeline {
      width: 80%;
      margin: 20px auto;
      position: relative;
    }
    section#timeline:before {
      content: '';
      display: block;
      position: absolute;
      left: 50%;
      top: 0;
      margin: 0 0 0 -1px;
      width: 2px;
      height: 100%;
      background: #c4b5e2;
    }
    section#timeline article {
      width: 100%;
      margin: 0 0 20px 0;
      position: relative;
    }
    section#timeline article:after {
      content: '';
      display: block;
      clear: both;
    }
    section#timeline article div.inner {
      width: 40%;
      float: left;
      margin: 5px 0 0 0;
      border-radius: 6px;
    }
    section#timeline article div.inner span.date {
      display: block;
      width: 60px;
      height: 60px;
      padding: 5px 0;
      position: absolute;
      top: 0;
      left: 50%;
      margin: 0 0 0 -32px;
      border-radius: 50%;
      font-size: 12px;
      font-weight: 900;
      text-transform: uppercase;
      background: #673AB7;
      color: rgba(247, 247, 247, 1);

      box-shadow: 0 0 0 7px #673AB7;
    }
    section#timeline article div.inner span.date span {
      display: block;
      text-align: center;
    }
    section#timeline article div.inner span.date span.day {
      font-size: 10px;
    }
    section#timeline article div.inner span.date span.month {
      font-size: 18px;
    }
    section#timeline article div.inner span.date span.year {
      font-size: 10px;
    }
    section#timeline article div.inner h2 {
      padding: 15px;
      margin: 0;
      color: #fff;
      font-size: 20px;
      text-transform: uppercase;
      letter-spacing: -1px;
      border-radius: 6px 6px 0 0;
      position: relative;

    }
    section#timeline article div.inner h2:after {
      content: '';
      position: absolute;
      top: 20px;
      right: -5px;
      	width: 10px;
    	  height: 10px;
      -webkit-transform: rotate(-45deg);

    }
    section#timeline article div.inner p {
      padding: 15px;
      margin: 0;
      font-size: 14px;
      background: #fff;
      color: #656565;
      border-radius: 0 0 6px 6px;
    }
    section#timeline article:nth-child(2n+2) div.inner {
      float: right;
    }
    section#timeline article:nth-child(2n+2) div.inner h2:after {
      left: -5px;
    }
    section#timeline article:nth-child(1) div.inner h2 {
      background: #e74c3c;
    }
    section#timeline article:nth-child(1) div.inner h2:after {
      background: #e74c3c;
    }
    section#timeline article:nth-child(2) div.inner h2 {
      background: #2ecc71;
    }
    section#timeline article:nth-child(2) div.inner h2:after {
      background: #2ecc71;
    }
    section#timeline article:nth-child(3) div.inner h2 {
      background: #e67e22;
    }
    section#timeline article:nth-child(3) div.inner h2:after {
      background: #e67e22;
    }
    section#timeline article:nth-child(4) div.inner h2 {
      background: #1abc9c;
    }
    section#timeline article:nth-child(4) div.inner h2:after {
      background: #1abc9c;
    }
    section#timeline article:nth-child(5) div.inner h2 {
      background: #9b59b6;
    }
    section#timeline article:nth-child(5) div.inner h2:after {
      background: #9b59b6;
    }
      </style>


</head>
<body>
	<?php include 'navbar.php'; ?>
<div>
 <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://getbootstrap.com/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Updates</h6>
          <small>Since 2017</small>
        </div>
      </div>
      <section id="timeline">
        <article>
          <div class="inner">
            <span class="date">
              <span class="day">26<sup>th</sup></span>
              <span class="month">June</span>
              <span class="year">2018</span>
            </span>
            <h2>Monsoon @ IISER-k</h2>
            <iframe width="405" height="300" align="right" src="https://www.youtube.com/embed/npfP9o_BI0s?controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
        </article>
        <article>
          <div class="inner">
            <span class="date">
              <span class="day">1<sup>th</sup></span>
              <span class="month">Feb</span>
              <span class="year">2018</span>
            </span>
            <h2>Sayak et al. 2018 Paleo3 paper Highlights</h2>
            <br>
            <ul>
              <li>The δ18Ocarbonate value based 75 ka rainfall record from western India.</li>
              <li>Climatic fluctuations during the late Quaternary varied at basinal scale.</li>
              <li>Comparison between Arabian sea and Bay of Bengal components of ISM during the late Quaternary.</li>
              <li>Fluvial architecture in western India was shaped by ISM rainfall.</li>
              <li>Vegetation composition (C3-C4) was determined by ISM rainfall amount.</li>
            </ul>
          </div>
        </article>
        <article>
          <div class="inner">
            <span class="date">
              <span class="day">15<sup>th</sup></span>
              <span class="month">Jan</span>
              <span class="year">2018</span>
            </span>
            <h2>Lab members</h2>
            <iframe width="404" height="300" align="right" src="https://www.youtube.com/embed/SdInvb865HA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
        </article>

        <article>
          <div class="inner">
            <span class="date">
              <span class="day">19<sup>th</sup></span>
              <span class="month">Mar</span>
              <span class="year">2017</span>
            </span>
            <h2>Science Talk</h2>
            <iframe width="405" height="300" align="right" src="https://www.youtube.com/embed/6EGj5BTR8D0?controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <p>Prof Parsanta Sanyal interview on Eureka Rajya Sabha TV</p>
        </article>
      </section>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
</div>


<?php include 'footer.php'; ?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/resume.min.js"></script>
