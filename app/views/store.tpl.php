<section>
    <div class="container-fluid">
      
        <!-- first row -->

        <div class="row mx-0">

            <div class="col-md-6">
                <div class="card border-0 text-white text-center">
                    <img src="<?= $viewVars["baseURL"] ?>/images/plant_bg.jpeg" alt="" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4">
                                Item 1
                            </h2>
                            <a href="#" class="btn btn-light">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 text-dark text-center">
                    <img src="<?= $viewVars["baseURL"] ?>/images/green_blur.jpeg" alt="" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4">
                                Item 2
                            </h2>
                            <a href="#" class="btn btn-light">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 2nd row -->

        <div class="row mx-0">
            
            <div class="col-lg-4">
            <div class="card border-0 text-center text-dark">
                <img src="<?= $viewVars["baseURL"] ?>/images/green_blur_2.jpeg"
                alt="Card image" class="card-img">
                <div class="card-img-overlay d-flex align-items-center">
                <div class="w-100">
                    <h2 class="display-4 mb-4">
                        Item 3
                    </h2>
                    <a href="category.html" class="btn btn-link text-dark">
                        Lorem ipsum
                    <i class="fa-arrow-right fa ml-2"></i></a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 text-center text-dark">
                <img src="<?= $viewVars["baseURL"] ?>/images/green_blur_3.jpeg"
                    alt="Card image" class="card-img">
                <div class="card-img-overlay d-flex align-items-center">
                    <div class="w-100">
                    <h2 class="display-4 mb-4">
                        Item 4
                    </h2>
                    <a href="category.html" class="btn btn-link text-dark">
                    Lorem ipsum
                        <i class="fa-arrow-right fa ml-2"></i>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="card border-0 text-center text-white">
                <img src="<?= $viewVars["baseURL"] ?>/images/plant_bg.jpeg"
                alt="Card image" class="card-img">
                <div class="card-img-overlay d-flex align-items-center">
                <div class="w-100">
                    <h2 class="display-4 mb-4">
                        Item 5
                    </h2>
                    <a href="category.html" class="btn btn-link text-white">
                    Lorem ipsum
                    <i class="fa-arrow-right fa ml-2"></i></a>
                </div>
                </div>
            </div>
            </div>
            
        </div>

        <div class="intro-text left-0 text-center p-3 rounded">
            <h3 class="mb-4">Opening Hours</h3>
            <?php
            foreach ($viewVars["openingHours"] as $day => $hours) : ?>

            <p class="<?=($day === date('l')) ? "today" : ""?>"><?=$day?> : <?=$hours?></p>

            <?php 
            endforeach;
            ?>
        </div>
       

    </div>
  </section>