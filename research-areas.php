  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IIT INDORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mod-css/navbar.css">
    <link rel="stylesheet" href="css/mod-css/logo.css">
    <link rel="stylesheet" href="css/mod-css/image.css">
    <link rel="stylesheet" href="css/mod-css/anim1.css">
    <link rel="stylesheet" href="css/mod-css/footer.css">
    <link rel="stylesheet" href="css/mod-css/btn.css">
<style>
    body{
        background-color:#AA71D7;
    }
</style>
        <link rel="stylesheet" href="css/mod-css/footer.css">
    <link rel="stylesheet" href="css/mod-css/heading_para.css">
  </head>
  <body>
 
 <!-- Navbar -->
 <?php include 'nav.php';?>

   <h1 class="h1_Research">Research Areas</h1><br>
   <p class="p1_Research">The established research groups and their works span different disciplines and areas of intellectual<br>
    discourse. For the Doctoral and MS (Research) programmer the school offers a wide range of research<br>
    and teaching areas to choose from. The following focused research groups are active within the school:</p><br>
   <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
       <h1 class="h2_Research">Economics</h1> 
<p class="p1_Research">Agricultural & Resource Policy Studies</p>
<ul style="list-style-type:none; text-align: left; color: #fff;">
  <li>• Climate Change and Development </li>
  <li>• Innovation Studies</li>
  <li>• Sustainability Studies Lab</li>
</ul>  
      </div>
      <div class="col">
        <h1 class="h2_Research">Sociology</h1> 
        <p class="p1_Research">Religion and Faith Healing </p>
        <ul style="list-style-type:none; text-align: left; color: #fff;">
          <li>• Climate Change and Development </li>
          <li>• Innovation Studies</li>
          <li>• Sustainability Studies Lab</li>
        </ul> 
      </div>
      <div class="col">
        <h1 class="h2_Research">English </h1> 
        <p class="p1_Research"> Digital Humanities and Publishing Lab </p>
        <ul style="list-style-type:none; text-align: left; color: #fff;">
          <li>• Climate Change and Development </li>
          <li>• Innovation Studies</li>
          <li>• Sustainability Studies Lab</li>
        </ul> 
      </div>
    </div>
  </div><br>
  <p class="p1_Overview"> </p><br>
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
       <h1 class="h2_Research">Psychology      </h1> 
<p class="p1_Research">Cognitive Experimental Laboratory</p>
<ul style="list-style-type:none; text-align: left; color: #fff;">
  <li>• Human Factors and Applied Cognition   (HFAC) </li>
   
</ul>  
      </div>
      <div class="col">
        <h1 class="h2_Research">History
        </h1> 
         <ul style="list-style-type:none; text-align: left; color: #fff;">
          <li>•  History of Modern India </li>
        
        </ul> 
      </div>
      <div class="col">
        <h1 class="h2_Research">Philosophy        </h1> 
         <ul style="list-style-type:none; text-align: left; color: #fff;">
          <li>• Philosophy of Ethics Studies</li>
       
        </ul> 
      </div>
    </div>
  </div>
<script>
    // Smooth scroll to the "Contact Us" section
    document.getElementById('ho_link').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default anchor click behavior

      const targetSection = document.querySelector('home');
      targetSection.scrollIntoView({ behavior: 'smooth' }); // Smoothly scroll to the section
    });
  </script>
    <script>
        // Smooth scroll to the "Contact Us" section
        document.getElementById('contact-link').addEventListener('click', function(event) {
          event.preventDefault(); // Prevent default anchor click behavior
    
          const targetSection = document.querySelector('#contact-us');
          targetSection.scrollIntoView({ behavior: 'smooth' }); // Smoothly scroll to the section
        });
      </script>     
  <script>
    // Scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>  
<script>
  document.getElementById("searchIcon").addEventListener("click", function() {
      var input = document.getElementById("searchInput");
      var icon = document.getElementById("searchIcon");

      input.style.display = "inline-block"; // Show input field
      input.focus(); // Focus input field
      icon.style.display = "none"; // Hide search image
  });

  document.getElementById("searchInput").addEventListener("blur", function() {
      var input = document.getElementById("searchInput");
      var icon = document.getElementById("searchIcon");

      if (input.value === "") { // Hide input if empty
          input.style.display = "none";
          icon.style.display = "inline-block";
      }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
      </body>
</html>