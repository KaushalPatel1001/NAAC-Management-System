<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="\NAAC\assets\css\global.css" rel="stylesheet" />
    <link href="\NAAC\assets\css\index.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Iowan Old Style:wght@400&display=swap" rel="stylesheet"/>
  </head>
  <body>
    <main class="desktop-1" id="homepage" data-animate-on-scroll>
      <header class="quality-assurance-for-naac-res-parent">
        <div class="quality-assurance-for">
          QUALITY ASSURANCE FOR NAAC RESPORITORY
        </div>
        <div class="group-child"></div>
        <div class="group-item"></div>
        <div class="hi-dr">Hello, <?php echo $_SESSION['user_name'];?> </div> 
      </header>
      <div class="qarn">QARN</div>
      <div class="rectangle-parent">
        <div class="group-inner"></div>
        <img class="image-1-icon" alt="" src="\NAAC\public\image-1@2x.png" />
      </div>
      <div class="rectangle-group">
        <div class="rectangle-div"></div>
        <img class="ellipse-icon" alt="" src="\NAAC\public\profile2.png" />

        <div class="dr-pooja-sapra"><?php echo $_SESSION['user_name'];?></div>
      
        <div class="hod-it-dept">IT DEPARTMENT</div>
      </div>
      <div class="vector-parent">
        <img class="rectangle-icon" alt="" src="\NAAC\public\rectangle-3.svg"/>
        <div class="dropdown">
          <button class="dropbtn">CRITERIA 1</button>
          <div class="dropdown-content">

            <a href="\project\Criteria\Criteria 1\1.1.ET">External Theory</a>
            <a href="\project\Criteria\Criteria 1\1.1.EP.php">External Practical</a>
            <a href="\project\Criteria\Criteria 1\1.1.IP.php">Internal Practical</a>
            <a href="\project\Criteria\Criteria 1\1.1.IM1.php">Internal - MID-1</a>
            <a href="\project\Criteria\Criteria 1\5.3.3.html">Internal - MID-2</a>
            <a href="\project\Criteria\Criteria 1\5.3.3.html">Internal - MID-3</a>
            <a href="\project\Criteria\Criteria 1\5.3.3.html">Weekly</a>
            <a href="\project\Criteria\Criteria 1\5.3.3.html">Assignment-1</a>
            <a href="\project\Criteria\Criteria 1\5.3.3.html">Assignment-2</a>
            <a href="\project\Criteria\Criteria 1\5.3.3.html">Assignment-3</a>




          </div>
      </div>
      
      


      

    </main>

    <script>
      var scrollAnimElements = document.querySelectorAll("[data-animate-on-scroll]");
      var observer = new IntersectionObserver(
        (entries) => {
          for (const entry of entries) {
            if (entry.isIntersecting || entry.intersectionRatio > 0) {
              const targetElement = entry.target;
              targetElement.classList.add("animate");
              observer.unobserve(targetElement);
            }
          }
        },
        {
          threshold: 0.15,
        }
      );
      
      for (let i = 0; i < scrollAnimElements.length; i++) {
        observer.observe(scrollAnimElements[i]);
      }
      </script>
  </body>
</html>

