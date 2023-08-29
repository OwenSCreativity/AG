          <!-- Footer -->
          <footer class="text-center text-lg-start   " style="background-color: black;color: rgb(207, 155, 22);">
     <!-- Section: Social media -->
     <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
       <!-- Left -->
       <div class="me-5 d-none d-lg-block">
         <span>Get connected with us on social networks:</span>
       </div>
       <!-- Left -->
   
       <!-- Right -->
       <div>
         <a href="" class="me-4 text-reset">
           <i class="fab fa-facebook-f"></i>
         </a>
         <a href="" class="me-4 text-reset">
           <i class="fab fa-twitter"></i>
         </a>
         <a href="" class="me-4 text-reset">
           <i class="fab fa-google"></i>
         </a>
         <a href="" class="me-4 text-reset">
           <i class="fab fa-instagram"></i>
         </a>
         <a href="" class="me-4 text-reset">
           <i class="fab fa-linkedin"></i>
         </a>
         <a href="" class="me-4 text-reset">
           <i class="fab fa-github"></i>
         </a>
       </div>
       <!-- Right -->
     </section>
     <!-- Section: Social media -->
   
     <!-- Section: Links  -->
     <section class="">
       <div class="container text-center text-md-start mt-5">
         <!-- Grid row -->
         <div class="row mt-3">
           <!-- Grid column -->
           <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
             <!-- Content -->
             <h6 class="text-uppercase fw-bold mb-4">
               <i class="fas fa-gem me-3"></i>Company name
             </h6>
             <p>
               Here you can use rows and columns to organize your footer content. Lorem ipsum
               dolor sit amet, consectetur adipisicing elit.
             </p>
           </div>
           <!-- Grid column -->
   
          
   
           <!-- Grid column -->
           <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
             <!-- Links -->
             <h6 class="text-uppercase fw-bold mb-4">
               Useful links
             </h6>
             <p>
               <a href="#!" class="text-reset">Pricing</a>
             </p>
             <p>
               <a href="#!" class="text-reset">Settings</a>
             </p>
             <p>
               <a href="#!" class="text-reset">Orders</a>
             </p>
             <p>
               <a href="#!" class="text-reset">Help</a>
             </p>
           </div>
           <!-- Grid column -->
           <div class="text-center">
               
             </div>
             <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Opening hours</h5>
    
              <table class="table text-center text-white">
                <tbody class="font-weight-normal">
                  <tr>
                    <td>Sunday 1st Service:</td>
                    <td>7am - 9:30am</td>
                  </tr>
                  <tr>
                    <td>Sunday 2nd Service:</td>
                    <td>9:30am - 11am</td>
                  </tr>
                  <tr>
                    <td>Tuesday:</td>
                    <td>5pm - 6pm</td>
                  </tr>
                </tbody>
              </table>
            </div>
    
           <!-- Grid column -->
           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
             <!-- Links -->
             <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
             <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
             <p>
               <i class="fas fa-envelope me-3"></i>
               info@example.com
             </p>
             <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
             <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
           </div>
           <!-- Grid column -->
         </div>
         <!-- Grid row -->
       </div>
     </section>
     <!-- Section: Links  -->
   
     <!-- Copyright -->
     <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.829);">
       © 2021 Copyright:
       <a class="text-reset fw-bold" href="godaa.web.online">GodAA</a>
     </div>
     <!-- Copyright -->
   </footer>
   <script>
          var myVar;
          
          function myFunction() {
            myVar = setTimeout(showPage, 0);
          }
          
          function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
          }
          </script>
          <script>
          var slideIndex = 0;
          showSlides();
          
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("ag-slide-agMySlide");
            var dots = document.getElementsByClassName("ag-slide-dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
          }
          </script>
          <script>
          /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;
          
          for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
            });
          }
          </script>
          <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            document.getElementById("main").style.padding = "20px";
           
          }
          
          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
            document.getElementById("main").style.padding = "0px";
          }
          </script>
              <script>window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".modal").style.display = "block";
        },
        500
    )
});
</script>
<script>window.addEventListener("load", function(){
    setTimeout(
        function close(event){
            document.querySelector(".modal").style.display = "none";
        },
        16000
    )
});
</script> 