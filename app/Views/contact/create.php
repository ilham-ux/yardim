<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?= $this->section('content'); ?>



<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container h-100">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="text-white mt-0 font-weight-bold">Hubungi saja kami</h2>
                <p class="text-white-50 mb-4">Tunggu sebentar pesanmu akan kami balas</p>
            </div>
        </div>
</section>
<section class="page-section" id="career">
    <div class="container">
        <div class="row d-flex mb-10 contact-info">
            <div class="col-md-10 mb-2">
                <h2 class="h2 text-primary font-weight-bold">Talk Now</h2>
            </div>
            <div class="w-100"></div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Adress">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>