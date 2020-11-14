<section id="categoriesShop">
        <div class="container-fluid cate">
          <div class="row cate">
            <div class="col-12">
              <h2><span>S</span>hop <span>C</span>atégories</h2>
            </div>
            <?php
                foreach($categories as $cate){
            ?>
            <div class="col-12 col-md-4 col-lg-3 cate centre">
              <?php
                echo" <a href='?ida=".$cate['id_categories']."'><button class='btn btncate' style='background:url('".$cate['img_categories']."');'><h3>".$cate['name_categories']."</h3></button></a>";
              ?>
            </div>
            <?php
                }
            ?>

          </div>
        </div>
</section>