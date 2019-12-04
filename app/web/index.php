<?php include_once("header.php"); ?>
<?php if(!isset($_SESSION["usuario"]))
{
    header ("Location: login.php");
} 
?>
<main>
  <!--Quadro de noticias-->
  <div class="wide-article-link">
  <div class="row">
    <div class="small-12 medium-9 columns">
      <h4 class="article-title">
        <a href="#">
          Honing its dynamic pricing formula, Vacasa wants to make homeowners more cash than Airbnb
        </a>
      </h4>
      <p class="article-author"><em>by <a href="#">TechCrunch</a></em></p>
      <p class="article-elipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat longshoreman... <a href="#" class="read-more">Read more</a></p>
      <div class="article-social">
        <a href="#" class="button social comments">
          <i class="fa fa-comments-o" aria-hidden="true"></i> 0
        </a>
        <a href="#" class="button social facebook">
          <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
        </a>
        <a href="#" class="button social twitter">
          <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
        </a>
        <a href="#" class="button social linkedin">
          <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
        </a>
        <a href="#" class="button social google-plus">
          <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="small-12 medium-3 columns flex-container align-middle">
      <img src="https://www.contabeis.com.br/assets/img/news/a_5755_ba84d9ed0e2c391714dd41620490d8db.jpg">
    </div>
  </div>
</div>


</main>
<?php include_once("footer.php"); ?>