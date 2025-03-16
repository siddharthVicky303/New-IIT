
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
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
  <!-- Navbar -->
  <?php include 'nav.php';?>
        
        <div class="search-icon mt-5 text-center">
          <img id="searchIcon" src="img\icon1.png" alt="Search" class="search-icon">
          <input type="text" id="searchInput" class="form-control search-input" placeholder="Type to search...">
      </div>
      </div>
    </div>
  </nav>  
  <h5 style="text-align: center;">MA English (Literature and Linguistics)  </h5>
    <!--  Start Text Box  -->
  <div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
          <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Overview </h4><br>
           <p style="text-align: left;"> 
           Admission to this programme is open exclusively to GATE Humanities and Social Sciences (HSS) qualified candidates. Applicants must hold a three-year or four-year undergraduate degree in a relevant area of humanities to be eligible. Humanities and Social Sciences graduates must also have a valid GATE HSS score in either English (XH C2) or Linguistics (XH C3).
            Due to the rigorous nature of the programme, only 10 seats are available, ensuring a highly focused and enriching learning experience. Additionally, IIT Indore will conduct an interview as part of the selection process for the shortlisted candidates
           </p>
           <p style="text-align: left;"> 
           For international students, eligibility requires a valid TOEFL or IELTS score along with a GRE score. With its commitment to academic excellence and interdisciplinary innovation, the School of Humanities 
           and Social Sciences at IIT Indore invites aspiring scholars from India and beyond to be part of this pioneering initiative.
           </p>
          
         <div style="margin-left:7% ">   
   </div>
           </p></h6>
              
        </div>
    </div>
</div>     
<!-- Text box  end  -->
      <!--  Start Text Box  -->
      <div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
          <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Year 1: Semester I </h4><br>         
         <div style="margin-left:7% ">   
  <?php include 'MA_Program_sem1.php';?>
  </div>
   </p></h6> 

         </div>
    </div>
</div>     
<!-- Text box  end  -->
  

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
      </body>
</html>