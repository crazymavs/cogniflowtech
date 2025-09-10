    <!-- main-area -->
    <main class="main-area fix">


        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="assets/img/bg/breadcrumb__bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Our Services</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?= $asset_base; ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Our Services</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <?php
            include_once 'php/partials/_services1.php';
            include_once 'php/partials/_filler2.php';
            include_once 'php/partials/_testimonials.php';
            include_once 'php/partials/_clients.php';
        ?>


    </main>