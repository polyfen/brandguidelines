<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Brand Guidelines | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

  </head>

  <body>
    <nav>
        <h2 class="caption">Table of Contents</h2>
        <ul>
            <li><a href="#" class="caption">Brand Guidelines</a></li>
            <li><a href="#download-assets" class="caption">1. Download assets</a></li>
            <li><a href="#market-research" class="caption">2. Market research</a></li>
            <li><a href="#brand-strategy" class="caption">3. Brand strategy</a></li>
            <li><a href="#visual-identity" class="caption">4. Visual identity</a></li>
        </ul>
    </nav>
    <main>
        <section id="cover">
          <img src="imgs/polyfen-logo.svg" alt="Polyfen" height="80px" width="auto">
          <h1 class="title-2">Brand Guidelines</h1>
          <h2 class="caption"><br><br>The Polyfen Group LLC<br><br>
          Est. 2018</h2>
        </section>
        <hr>
        <!-- INCLUDE OVERVIEW.PHP start -->
        <?php include 'content/download-assets.php';?>
        <!-- INCLUDE OVERVIEW.PHP end -->
        <hr>
        <!-- INCLUDE OUR-GOAL.PHP start -->
        <?php include 'content/market-research.php';?>
        <!-- INCLUDE OUR-GOAL.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/brand-strategy.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-BRANDS.PHP start -->
        <?php include 'content/visual-identity.php';?>
        <!-- INCLUDE OUR-BRANDS.PHP  end -->
        <hr>
        <!-- INCLUDE OUR-TEAM.PHP start -->
        <?php include 'content/our-team.php';?>
        <!-- INCLUDE OUR-TEAM.PHP end  -->
        <hr>
    </main>
  </body>
</html>