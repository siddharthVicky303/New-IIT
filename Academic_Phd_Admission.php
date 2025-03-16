
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
    .container2 {
  height: 100px;
  position: relative;
 }

.vertical-center {
    background-color: #8C65F7; /* Purple color similar to your example */
  color: white;
  padding: 12px 30px;
  font-size: 16px;
  font-weight: 500;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
  margin-left: 42%;

  }
  .vertical-center:hover {
  background-color: #7450E8; /* Slightly darker on hover */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}
</style>
        <link rel="stylesheet" href="css/mod-css/footer.css">
    <link rel="stylesheet" href="css/mod-css/heading_para.css">
  </head>
  <body>
    
 <!-- Navbar -->
  <!-- Navbar -->
  <?php include 'nav.php';?>

 
       <!--  Start Text Box  -->
      <div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">
          <h6 class="card-title"><p class="card-text">  <h4 style="text-align: center;"> MS Admission, March 2025 </h4><br>  
          <h4 style="text-align: center;"> Applications are invited for the MS program in the School of HSS in the following disciplines: </h4><br>     
      <P style="text-align: center;" >English, Linguistics, Economics, and Psychology</p>
      <div class="container2 ">
      <button type="button" class="vertical-center " href="#" style="align: center;">Apply Here</button>
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