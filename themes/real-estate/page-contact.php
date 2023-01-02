<?php get_header(); ?>
<!-- Form contact page -->
    <!-- Title -->
    <h2 class="d-flex justify-content-center form-title">Contact us</h2>
        <p class="d-flex justify-content-center">Les champs marqués d'une astérisque &nbsp;<b>*</b>&nbsp; sont obligatoires</p>
        <form action="" class="form-page" method="post">
        <!--First row -->
        <div class="row">
            <!--Firstname -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Ex:John"></div>
                </div>

            <!--Lastname -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Ex:Doe"></div>
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
            <!--Subject-->
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="your-subject" class="form-control"></div>
                </div>
    
        <!--Fourth row -->
            <!--Message-->
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" rows="3" class="form-control"></textarea>
                </div>
               
        <!--Submit button-->
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-outline form-submit">Envoyer</button>
        </div>
    </div>  
         
</form>