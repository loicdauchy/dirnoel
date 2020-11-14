<section id="categoriesShop">
        <div class="container-fluid cate">
          <div class="row cate">
            <div class="col-12">
              <h2><span>D</span>étails <span>A</span>rticle</h2>
            </div>
            <div class='centre' style='margin-top:100px; margin-bottom:100px; width:100%; min-height:100%;'>
            <?php
           echo" <div class='col-12 col-md-6 cate centre contactDiv' style='background:url(".$detail['img_article']."); background-size:cover;'>
              
            </div>";
            ?>
            <div class="col-12 col-md-6 cate d-flex">
                <div class="contactDiv column" style="min-height:100%; color:white; padding:80px;">
              <?php
                echo "<h3>".htmlspecialchars($detail['name_article'])."</h3>
                      <div class='text-center'>".htmlspecialchars($detail['description_article'])."</div>
                      <a href='".$detail['link_article']."'target='_blank'>".htmlspecialchars($detail['link_article'])."</a>";
              ?> 
                </div>               
            </div>
            </div>
            

          </div>
        </div>
</section>