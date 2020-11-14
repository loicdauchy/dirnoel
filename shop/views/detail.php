<section id="categoriesShop">
        <div class="container-fluid cate">
          <div class="row cate">
            <div class="col-12" style="margin-bottom:100px;">
              <h2><span>D</span>étails <span>A</span>rticle</h2>
            </div>
            
            <div class='col-12 col-md-6'>
              
            <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item article active" data-interval="3000">         
                  <img src="<?=$detail['img_article']?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item article" data-interval="3000">
                  <img src="<?=$detail['img_article']?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item article" data-interval="3000">
                  <img src="<?=$detail['img_article']?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            </div>
            
            <div class="col-12 col-md-6 d-flex" style="min-height:100%;">
                <div class="contactDiv column" style="min-height:100%; color:white; padding:  50px;">
              <?php
                echo "<h3>".htmlspecialchars($detail['name_article'])."</h3>
                      <div class='text-center'>".htmlspecialchars($detail['description_article'])."</div>
                   <div class='column'><i class='bx bxl-amazon' style='font-size:40px; color:gold;'></i><a style='color:gold;' href='".$detail['link_article']."'target='_blank'>".htmlspecialchars($detail['link_article'])."</a></div>";
              ?> 
                </div>               
            </div>
            
<div style="margin-top:100px; width:100%;"></div>
          </div>
        </div>
</section>