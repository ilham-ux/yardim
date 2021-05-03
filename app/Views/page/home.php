<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-center text-white font-weight-bold">Ayo Membuat Website Pribadi Anda Sekarang!!!</h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5"></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/page/contact/">Start Your Project</a>
            </div>
        </div>
    </div>
</header>

<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container">
        <h1 class="text-white mt-0 font-weight-bold">Our Services</h1>
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="col-sm-4">
                    <div class="card" style=" width: 18rem; padding: 10px; margin: 40px;">
                        <i class="fa fa-4x fa-laptop text-center text-primary mb-0 mt-3"></i>
                        <div class="card-body">
                            <h5 class=" mt-0 font-weight-bold text-secondary">Information System</h5>
                            <h6 class="h6 mb-0 text-dark "> Kami membantu website sistem informasi anda lebih bagus dan menarik</h6>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style=" width: 18rem; padding: 10px; margin: 40px;">
                        <i class="fa fa-4x fa-globe text-center text-primary mb-0 mt-3"></i>
                        <div class="card-body">
                            <h5 class=" mt-0  font-weight-bold text-secondary">Web Development</h5>
                            <h6 class="h6 mb-0 text-dark "> Pengembangan website sangat perlu karena untuk menarik customer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style=" width: 18rem; padding: 10px; margin: 40px;">
                        <i class="fa fa-4x fa-briefcase text-center text-primary mb-0 mt-3"></i>
                        <div class="card-body ">
                            <h5 class="mt-0 font-weight-bold text-secondary">Project Partner</h5>
                            <h6 class="h6 mb-0 text-dark"> Mau berkolaborasi langsung saja hubungi kami, siap memberi solusi untuk website anda</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mt-2">
                <a class="btn btn-secondary btn-xl js-scroll-trigger" href="/page/services/">Our Service</a>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-secondary" id="about">
    <div class="container">
        <h1 class="text-white mt-0 text-right font-weight-bold">Our Clients</h1>
        <div class="mt-5">
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/cuate.svg" alt="First slide" width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/page/contact/">Our Client</a>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/amico.svg" alt="Second slide" width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/page/contact/">Our Client</a>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <img class="d-block w-100" src="/img/amico-3.svg" alt="Third slide" width="600" height="600">

                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p>...</p>
                                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/page/contact/">Our Client</a>
                            </div>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>



<section class="page-section bg-light" id="about">
    <div class="container">
        <h1 class="text-primary mt-0 text-left font-weight-bold">Our Blog </h1>
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="card" style="width: 18rem;  padding: 10px; margin: 40px;">
                    <img src="/img/cuate.svg" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 text-primary font-weight-bold">Backend Developer</h5>
                        <h6 class="h6 mb-2 text-dark"> Suka duka menjadi Backend Developer untuk Fresh graduate</h6>

                        <a href="/page/blog/" type="button-sm" class="card-link card-center text-secondary font-weight-bold">Readmore</a>


                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card" style=" width: 18rem; padding: 10px; margin: 40px;">
                    <img src="/img/amico.svg" style="height:15 rem;" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">UI/UX Designer</h5>
                        <h6 class="h6 mb-2 text-dark"> Tips Menjadi UI/UX designer untuk pemula</h6>
                        <a href="/page/blog/" class="card-link card-center text-secondary  font-weight-bold">Readmore</a>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card" style="width: 18rem; padding: 10px; margin: 40px;">
                    <img src="/img/amico-3.svg" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">Frontend Developer</h5>
                        <h6 class="h6 mb-2 text-dark"> Menjadi Frontend Proffesioanal Kamu Siap? </h6>
                        <a href="/page/blog/" class="card-link card-center text-secondary font-weight-bold">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mt-2">
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/page/blog/">Our Blog</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>