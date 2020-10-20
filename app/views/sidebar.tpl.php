<aside class="col-lg-3">

  <!-- Search with #Bootstrap: https://getbootstrap.com/docs/4.1/components/input-group/ -->
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Rechercher"
      aria-label="Rechercher..." aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">Allez</button>
    </div>
  </div>

  <!-- List-Group with #Bootstrap : https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
  <div class="card">
    <h3 class="card-header">Menu</h3>
    <ul class="list-group list-group-flush">
      <?php
      // foreach ($dataInArray as $key => $value) :
      ?>
        <li class="list-group-item">
            <a href="#">
              Category 1
              <?php //$value ?>
            </a>
        </li>
        <li class="list-group-item">
            <a href="#">
              Category 2
            </a>
        </li>
        <li class="list-group-item">
            <a href="#">
              Category 3
            </a>
        </li>
    </ul>
  </div>

  
</aside>