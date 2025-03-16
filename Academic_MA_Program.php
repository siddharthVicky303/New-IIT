
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

  <h5 style="text-align: center;">MA English (Literature and Linguistics)  </h5>
    <!--  Start Text Box  -->
  <div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
          <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Overview </h4><br>
           <p style="text-align: left;"> 
           The School of Humanities and Social Sciences proudly announces the launch of its flagship Master’s programme, MA English (Literature and 
           Linguistics), commencing in June 2025. This two- year postgraduate course is designed to address the evolving demands of academia and industry,offering an interdisciplinary approach that integrates literary studies, linguistic analysis, and emerging specializations such as Digital Humanities,
           Medical Humanities, Literature-Art and Performance Studies, Language Teaching, and Applied Linguistics 
           </p>
           <p style="text-align: left;"> 
           The students will benefit from mentorship by distinguished faculty with expertise in interdisciplinary research. 
           The vibrant academic environment fosters collaboration, engagement in innovative projects, and participation in international conferences, cultivating a dynamic community of scholars in the humanities and social sciences. 
           With access to world-class resources, students will be well- equipped for both academic and industry-oriented careers.
           </p>
           <p style="text-align: left;"> 
           The curriculum is designed to develop critical thinking, analytical, and research skills, ensuring graduates are both academically proficient and industry-ready. With a strong emphasis on both theoretical depth and practical application,
            the programme prepares students for diverse career paths in education, publishing, research, media, advertising, AI, language technology, public relations and policy, and international communications. Hands-on projects, internships, and interdisciplinary collaborations provide real-world exposure, 
            allowing students to engage with contemporary challenges in language and literature. By aligning with international advancements in these fields, the programme offers a globally relevant perspective on language studies, making it one of its kind in India.
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
   <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Year 1: Semester II   </h4><br>         
         <div style="margin-left:7% ">   
  <?php include 'MA_Program_sem2.php';?>
  </div>
   </p></h6>
   <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Year 2: Semester III   </h4><br>         
         <div style="margin-left:7% ">   
  <?php include 'MA_Program_sem3.php';?>
  </div>
   </p></h6>
   <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Year 2: Semester IV </h4><br>         
         <div style="margin-left:7% ">   
  <?php include 'MA_Program_sem4.php';?>
  </div>
   </p></h6>
   <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Department Elective I & II (Choose any two elective courses as mentioned below):
   </h4><br>         
         <div style="margin-left:7% ">   
  <?php include 'MA_Program_sem5.php';?>
  </div>
   </p></h6>
   <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;">Department Elective I & II (Choose any two elective courses as mentioned below):
   </h4><br>         
         <div style="margin-left:7% ">   
  <?php include 'MA_Program_sem6.php';?>
  </div>
   </p></h6>
   <p style="text-align: left;"> 
   * The student can also choose Institute Elective from other departments.

            </p>
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