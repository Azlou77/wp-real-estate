<?php get_header(); ?>
<!-- Form login page -->
    <!-- Title -->
    <h2 class="d-flex justify-content-center form-title">Login form</h2>
        <p class="d-flex justify-content-center">Les champs marqués d'une astérisque &nbsp;<b>*</b>&nbsp; sont obligatoires</p>
        <form action="" class="form-page" method="post">
        <!--First row -->
        <div class="row">
            <!--Email-->
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Ex: johndoe@gmail.com">
                </div>
    
        <!--Second row -->
            <!--Password-->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"></div>
            </div>  
               
        <!--Submit button-->
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-outline form-submit">Register</button>
        </div>
    </div>  
    
    <!-- Create new account  -->
    <p class="text-center text-muted mt-5 mb-0">Want new account? 
      <a href="http://localhost/wordpress/register/"class="fw-bold text-body">
        <u>Register here</u>
      </a>
    </p>

</form>