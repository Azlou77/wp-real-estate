
<!-- Cards with pictures horizontales -->
<div class="container bcontent">
    <div class="card" style="width: 1000px;">
        <div class="row no-gutters">
            <div class="col-sm-5">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="card-img">
            </div>       
            <div class="col-sm-7">
              <div class="card-body">
                  <h5 class="card-title"><?php the_title()?></h5>
                    <p class="card-text"><?php the_content() ?></p>
              </div>
            </div>
        </div>
    </div>
</div>
  