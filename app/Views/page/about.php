<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="text-white text-center mt-0 font-weight-bold">Kami Keluarga Baru Di Kantor</h2>
                <p class="text-white-50 text-center mb-4">Kami Merupakan Keluarga Baru yang terdiri dari beberapa divisi siap membantu pembuatan website anda</p>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="about">
    <div class="container">
        <h2 class="mb-4 text-primary text-left font-weight-bold">Our Team</h2>
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="card" style="width: 18rem; padding: 10px; margin: 40px;">
                    <img src="/img/ilham.svg" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h4 class="text-left mt-0 font-weight-bold">M Ilham Makarim</h4>
                        <h6 class="h5 mb-0 text-primary"> Founder Yardim</h6>
                        <p class="card-text text-left">Mending bodoh sementara daripada bodoh selamanya</p>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card" style="width: 18rem; padding: 10px; margin: 40px;">
                    <img src="/img/123.jpg" class="img-fluid" alt="Responsive image">
                    <div class="card-body">
                        <h4 class="text-left mt-0 font-weight-bold">Hutama Dewangga M</h4>
                        <h6 class="h5 mb-0 text-primary"> Co-Founder Yardim</h6>
                        <p class="card-text text-left">Jangan lupa saling membantu dengan yang membutuhkan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>