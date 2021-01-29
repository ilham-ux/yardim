<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="page-section bg-light" id="about">
    <div class="container">
        <h1 class="text-primary mt-0 text-left font-weight-bold">Our Blog </h1>
        <div class="row justify-content-center">
            <div class="card-deck">

                <div class="card" style="width: 20rem;  padding: 10px; margin: 40px;">
                    <img src="/img/adc.png" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 text-primary font-weight-bold">Backend Developer</h5>
                        <h6 class="h6 mb-2 text-dark"> Suka duka menjadi Backend Developer untuk Fresh graduate</h6>
                        <a href="page/blog" class="card-link card-center text-primary font-weight-bold">Readmore</a>
                    </div>

                </div>
            </div>
            <div class="card-deck">

                <div class="card" style=" width: 20rem; padding: 10px; margin: 40px;">
                    <img src="/img/cuate.jpg" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">UI/UX Designer</h5>
                        <h6 class="h6 mb-2 text-dark"> Tips Menjadi UI/UX designer untuk pemula</h6>
                        <a href="/page/blog" class="card-link card-center text-primary font-weight-bold">Readmore</a>
                    </div>

                </div>
            </div>
            <div class="card-deck">
                <div class="card" style="width: 20rem; padding: 10px; margin: 40px;">
                    <img src="/img/amico.png" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">Frontend Developer</h5>
                        <h6 class="h6 mb-2 text-dark"> Menjadi Frontend Proffesioanal Kamu Siap? </h6>
                        <a href="/page/blog" class="card-link card-center text-primary font-weight-bold">Readmore</a>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card" style="width: 20rem; padding: 10px; margin: 40px;">
                    <img src="/img/rafiki.png" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">Quality Assurance</h5>
                        <h6 class="h6 mb-2 text-dark"> Belajar QA Enginer darimana?fgfdgdfgfdhfh </h6>
                        <a href="/page/blog" class="card-link card-center text-primary font-weight-bold">Readmore</a>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card" style="width: 20rem; padding: 10px; margin: 40px;">
                    <img src="/img/cuate 5.png" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">Project Manager</h5>
                        <h6 class="h6 mb-2 text-dark"> Ingin magang sebagai project manager dengan yardim house </h6>
                        <a href="/page/blog" class="card-link card-center text-primary font-weight-bold">Readmore</a>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card" style="width: 20rem; padding: 10px; margin: 40px;">
                    <img src="/img/amico2.png" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="text-left mt-0 font-weight-bold text-primary">Marketing</h5>
                        <h6 class="h6 mb-2 text-dark">Tips menjadi Marketing proffesional pada dunia IT</h6>
                        <a href="/page/blog" class="card-link card-center text-primary font-weight-bold">Readmore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mt-2">
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="/page/contact/">Our Blog</a>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection(); ?>