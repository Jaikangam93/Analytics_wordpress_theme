


</body>
</html>

 <!-- Open Footer  -->
 <footer class="footer">
    <div class="container"> 
      <div class="row align-items-center justify-content-md-between">
        <!-- First Column -->
        <div class="col-md-3 col-sm-3">
          <div class="footer-logo">
            <!-- Logo here <img alt="image" src="./assets/img/brand/white.png"> -->
            <img alt="Chrmp Footer Logo" src="<?php echo get_template_directory_uri();?>/assets/images/brand/chrmp_original.png">
          </div>
        </div>
        <!-- Close First Column -->

        <!-- Second Column -->
        <div class="col-md-6 col-sm-6">
          <div class="text-center">
            Copyright &copy; 2019, CHRMP | All Rights Reserved
          </div>
        </div>
        <!-- Close Second Column -->

        <!-- Third Column -->
        <div class="col-md-3 col-sm-3">
          <div class="text-right">
            <a target="_blank" href="https://twitter.com/rippleschrmp" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" >
              <i class="fa fa-twitter"></i>
            </a>
            <a target="_blank" href="https://www.facebook.com/chrmp/" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg">
              <i class="fa fa-facebook-square"></i>
            </a>
            
          </div>
        </div>
        <!-- Close Third Column -->

      </div> <!-- Close row -->
    </div> <!-- Close Container  -->
  </footer>
  <!-- Close Footer  -->

  


  <!-- Core -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    function submitUserForm() {
        var response = grecaptcha.getResponse();
        if(response.length == 0) {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
            return false;
        }
        return true;
    }
    function verifyCaptcha() {
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
  </script>
  <?php wp_footer(); ?>
   
</body>

</html>
