<section id="categoriesShop">
        <div class="container-fluid cate">
          <div class="row cate">
            <div class="col-12">
              <h2><span>S</span>hop <span>A</span>rticle</h2>
            </div>
            <?php
                foreach($article as $result){
            ?>
            <div class="col-12 col-md-4 col-lg-3 cate centre">
              <?php
                echo" <a href='?id=".$result['id_article']."'><button class='btn btncate' style='background:url('".$result['img_article']."');'><h3>".$result['name_article']."</h3></button></a>";
              ?>
            </div>
            <?php
                }
            ?>

          </div>
        </div>
</section>