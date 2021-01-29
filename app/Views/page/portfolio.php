<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- About-->
<section class="page-section bg-light" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary mt-0 font-weight-bold">Project yang telah kami kerjakan</h2>
                <p class="text-primary-50 mb-4">Perusahan-perusahaan ternama telah mempercayakan projectnya kepada kami</p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<section class="page-section" id="services">
    <div class="container">
        <div class="row d-flex mb-10 contact-info">
            <div class="col-md-10 mb-2">
                <h2 class="h2 text-primary font-weight-bold">Our Clients</h2>
            </div>
            <div id="portfolio">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="https://www.nike.com/id">
                                <img class="img-fluid" src="/assets/img/portfolio/thumbnails/nike.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Sports</div>
                                    <div class="project-name">Nike App</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="https://www.djarum.com">
                                <img class="img-fluid" src="/assets/img/portfolio/thumbnails/djarum.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Company</div>
                                    <div class="project-name">Djarum Website Development</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="https://www.basicinvite.com/wedding/wedding-invitations.html">
                                <img class="img-fluid" src="/assets/img/portfolio/thumbnails/sultan.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Wedding</div>
                                    <div class="project-name">Sultan Web Invitation</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="https://www.pertamina.com/">
                                <img class="img-fluid" src="/assets/img/portfolio/thumbnails/pertamina.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Goverment</div>
                                    <div class="project-name">AR Pertamina Project </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="https://persi.or.id">
                                <img class="img-fluid" src="/assets/img/portfolio/thumbnails/hospital.jpg" alt="" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Hospital</div>
                                    <div class="project-name">Persi App</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="https://sman1-jkt.sch.id/">
                                <img class="img-fluid" src="/assets/img/portfolio/thumbnails/sma.jpg" alt="" />
                                <div class="portfolio-box-caption p-3">
                                    <div class="project-category text-white-50">High School</div>
                                    <div class="project-name">Website High School Of 1 Jakarta</div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <hr class="divider-success my-4" />
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>