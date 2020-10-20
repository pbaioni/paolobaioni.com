
<?php
// TODO : dynamic content

?>

<!-- Container with #Bootstrap : https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
    <div class="container">
        <!-- https://getbootstrap.com/docs/4.1/layout/grid/-->
        <div class="row"> 
          
            <!-- Main content displayed on 9 columns for large screens - #Bootstrap : https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
            <main class="col-lg-9">

                <!-- Item with #Bootstrap - card: https://getbootstrap.com/docs/4.1/components/card/ -->
                <article class="card">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="#">
                                Title H2 
                            </a>
                        </h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsa harum officia vitae sit non magnam, sequi rem atque perspiciatis, quasi quisquam facilis minima aliquam amet pariatur nulla. Est repellat quaerat nobis eius, error illo! Et officiis labore amet temporibus neque consequuntur, est corrupti quasi.
                        <p class="infos">
                            Posted by 
                            <a href="#" class="card-link">
                            Author
                            </a> 
                            the <time datetime="YYYY-MM-DD">DD/MM/AAAA</time> 
                            in 
                            <a href="#" class="card-link">
                            #Category
                            </a>
                        </p>
                    </div>
                </article>

                <article class="card">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="#">
                                Title H2 
                            </a>
                        </h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsa harum officia vitae sit non magnam, sequi rem atque perspiciatis, quasi quisquam facilis minima aliquam amet pariatur nulla. Est repellat quaerat nobis eius, error illo! Et officiis labore amet temporibus neque consequuntur, est corrupti quasi. 
                        </p>
                        <p class="infos">
                            Posted by 
                            <a href="#" class="card-link">
                            Author
                            </a> 
                            the <time datetime="YYYY-MM-DD">DD/MM/AAAA</time> 
                            in 
                            <a href="#" class="card-link">
                            #Category
                            </a>
                        </p>
                    </div>
                </article>

            </main>

            <?php
            // Display sidebar
            require __DIR__."/sidebar.tpl.php";
            ?>
        </div>
    </div>