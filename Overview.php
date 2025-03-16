 
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

 
  <h1 class="h1_Overview">
    The School of Humanities and Social Sciences started functioning since July 2009 at IIT Indore.
    The School has grown rapidly along with the</br>  Institute in this period. 
    Some of the key highlights of this trajectory are the following:
  </h1>
  <h1 class="h2_Overview">
    ➢ The School comprises of 18 faculty members, in the disciplines of Economics, English,History, Philosophy, Psychology and Sociology.<br>
    ➢ The School contributes to the B. Tech Programme of the institute by offering three compulsory courses along with the Minors in Economics <br>and Liberal Arts, spread across the four year spectrum. The faculty members have been offering introductory as well elective courses for the UG students.<br>
    ➢ The doctoral programme of the School, started in July 2010, currently enrolls 63 students while 29 of our students have graduated.<br>
    ➢ Many of our graduates hold academic positions at IIMs, IITs, and several Central Universities of India.<br>
    ➢ The publications by our faculty members and students number approximately 400, including more than 6 books published by faculty members.<br>
    ➢ The school has been awarded 24 sponsored research projects (completed and ongoing) worth 13.5 cr.
  </h1>
 <h1 class="h3_Overview">
  The School of Humanities and Social Sciences at IIT Indore is an exciting and vibrant place for research and pedagogy. We have 18 faculty members<br>
  and about 63 PhD research students working on exciting projects and research problems. The faculty members of the school are an eclectic mix of<br>
  affiliations, each of the faculty members is engaged in specialised areas of research and write, publish, and speak about their work.<br>
 </h1>
 <p class="p1_Overview"> </p>
 <h1 class="h4_Overview">
  <u>The interdisciplinary nature of the research within the School is reflected in two ways:</u>
 </h1>
 <h1 class="h5_Overview">
  We therefore have a vibrant PhD programme that comprises of rigorous coursework and closely monitored progress of dissertations and project work.<br> Our students have won prestigious national and international scholarships, fellowships, and awards. We are not only very proud of their
  achievements<br> while they are a part of the school, but also of our graduating students who have gone on to excel further in their respective careers.<br> Over the years, the School has hosted seminars, conferences, invited talks and lectures, and our students have been actively involved <br>in every one of
  those events, often leading from the front in organizing and facilitating them.. </h1>
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