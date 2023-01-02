<?php get_header(); ?>
<!-- Form register page -->
    <!-- Title -->
    <h2 class="d-flex justify-content-center form-title">Registration form</h2>
        <p class="d-flex justify-content-center">Les champs marqués d'une astérisque &nbsp;<b>*</b>&nbsp; sont obligatoires</p>
        <form action="" class="form-page" method="post">
        <!--First row -->
        <div class="row">
            <!--Firstname -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Ex: John"></div>
                </div>

            <!--Lastname -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Ex: Doe"></div>
                </div>
            </div>
        </div>
        
        <!--Second row -->
        <div class="row">
            <!--Email-->
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Ex: johndoe@gmail.com">
                </div>
    
        <!--Third row -->
            <!--Password-->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"></div>
            </div>

        <!--Fourth row -->
            <!--Repeat password-->
            <div class="form-group">
                    <label for="rpassword">Repeat password</label>
                    <input type="password" name="rpassword" class="form-control">
            </div>

         <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>
  
               
        <!--Submit button-->
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-outline form-submit">Register</button>
        </div>
    </div>  
    
    <!-- Create new account  -->
    <p class="text-center text-muted mt-5 mb-0">Have already an account? 
      <a href="http://localhost/wordpress/login/" class="fw-bold text-body">
        <u>Login here</u>
      </a>
    </p>

</form>