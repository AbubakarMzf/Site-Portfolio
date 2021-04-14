<?php require_once 'view_begin.php'?>
<link rel="stylesheet" href="../content/css/more.css">

<div id='title'>
<h1>

<?= e($proj[0]['projects_title'])?>
</h1>
</div>


<div class="slideshow-container">


  <div class="mySlides fadeSlide">
    <div class="numbertext">1 / 5</div>
    <img src="../content/images/projects/<?=e($id)?>-1.png" style="width:100%">
  </div>

  <div class="mySlides fadeSlide">
    <div class="numbertext">2 / 5</div>
    <img src="../content/images/projects/<?=e($id)?>-2.png" style="width:100%">
  </div>

  <div class="mySlides fadeSlide">
    <div class="numbertext">3 / 5</div>
    <img src="../content/images/projects/<?=e($id)?>-3.png" style="width:100%">
  </div>


  <div class="mySlides fadeSlide">
    <div class="numbertext">4 / 5</div>
    <img src="../content/images/projects/<?=e($id)?>-4.png" style="width:100%">
  </div>



  <div class="mySlides fadeSlide">
    <div class="numbertext">5 / 5</div>
    <img src="../content/images/projects/<?=e($id)?>-5.png" style="width:100%">
  </div>





  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>




<div class="text">

<div id="description">
<h2>Description</h2>
<p><?= e($proj[0]['projects_description'])?></p>
</div>


<div id="language">
<h2>Languages</h2>
<ul>
<?php foreach($languages as $l) : ?>
<li style="list-style:none"><img src="../content/images/logo/<?=strtolower(e($l['languages_name']))?>.png" alt="" class="imgText"><?= e($l['languages_name']) ?> </li>
<?php endforeach ?>
</ul>
</div>
<ul>

<?php if(sizeof($authors) > 0 ) : ?>

<h2>Contributor</h2>
<div id="contributor">
<?php foreach($authors as $a) : ?>
  <a href="<?= e($a['authors_contact'])?>" style="color: white;" target="blank"><li style="list-style:none"><img src="../content/images/logo/contact.png" alt="" class="imgText"><?= e($a['authors_name']) ?>  </a> </li>
<?php endforeach ?>
</ul>

</div>

<?php endif ?>

</div>





<script src="/content/js/more.js"></script>

<?php require_once 'view_end.php' ?> 