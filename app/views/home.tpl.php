<h1>Personnages de Sonic</h1>

  <section class="products-grid">
    <div class="container-fluid">
      <div class="row">
        <!-- product-->
        <?php foreach ($charactersArray as $id => $currentCharacter) : ?>
        <div class="product col-xl-3 col-lg-4 col-sm-6">
          <div class="product-image">
            <a href="detail.html" class="product-hover-overlay-link">
              <img src="<?= $_SERVER['BASE_URI'] ?>/assets/images/<?= $charactersArray[$id]['picture'];?>" alt="product" class="img-fluid" style="width:auto; height:200px;margin-bottom:20px">
            </a>
          </div>
          <div class="product-action-buttons">
            <a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
          </div>
          <div class="py-2">
            <p class="text-muted text-sm mb-1"><?= $charactersArray[$id]['type_name'];?></p>
            <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark"><?= $charactersArray[$id]['name'];?></a></h3>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- /product-->

      </div>
      
    </div>
  </section>