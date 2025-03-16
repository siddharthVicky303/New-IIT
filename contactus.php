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
  
      <!-- Navbar -->
      <?php include 'nav.php';?>

<div class="header"></div>

   
  <!-- Demo content -->
 <div class="body">
<h1 class="h1_contact_1">Address</h1></br>
<h1 class="h1_para_1">Indian Institute of Technology Indore,</br>
    Khandwa Road, Simrol</br>
    Indore 453552</br>
    India</h1>
    <h1 class="h2_contact_1">Contact Information</h1></br>
    <h1 class="h2_para_1">Phone: +91-731-2438700 (Ext.-953)</br>
        Email: hosh@ iiti.ac.in</br>
        Website: www.hss.iiti.ac.in</br>
        </h1>
 
        <h1 class="h3_contact_1">Location </h1></br>
        <img src="img/qr.png" class="qr-image"> 
 
    </div>


 </div>
 <h1 class="h3_para">scscscscs</h1>
 
 
 
  
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
      </body>
</html>