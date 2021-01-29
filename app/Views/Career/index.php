<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Career-->
<section class="page-section bg-primary" id="career">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">We've got what you need!</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="career">Get Started!</a>
            </div>
        </div>
    </div>
</section>

<div class="card-body">
    <h5 class="card-title"><?= $career['judul']; ?></h5>
    <p class="card-text"> <b>Penulis : </b><?= $career['penulis']; ?></p>
    <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $career['penerbit']; ?> </small></p>

    <a href="/komik/edit/<?= $career['slug']; ?>" class="btn btn-warning">Edit</a>

    <form action="/komik/<?= $career['id']; ?>" method="post" class="d-inline">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger" onclick="return confirm
                                ('apakah anda yakin?');">Delete</button>
    </form>

    <br></br>
    <a href="/career"> Kembali ke daftar komik</a>
</div>

<div class="container">
    <div class="row justify-content-left">
        <div class="col-lg-4 text-left">
            <h2 class="text-black mt-0">Career</h2>
            <div class="list-group" class="col-6 col-sm-4">
                <a href="#" class="list-group-item list-group-item-action active">
                    Career Ilham Makarim
                </a>
                <a href="#" class="list-group-item list-group-item-action">IT Support</a>
                <a href="#" class="list-group-item list-group-item-action">Backend Developer</a>
                <a href="#" class="list-group-item list-group-item-action">Frontend Developer</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Quality Assurance</a>
            </div>
        </div>
    </div>
</div>
<!-- Career-->
<section class="page-section bg-primary" id="career">
    <div class="container">
        <div class="row justify-content-right">
            <div class="col-lg-12 text-right">
                <h2 class="text-white mt-0">Tell about your Project</h2>
                <hr class="divider light my-10" />
                <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row justify-content-left">
        <div class="col-lg-4 text-left">
            <h2 class="text-black mt-0">Career</h2>
            <div class="list-group" class="col-6 col-sm-4">
                <a href="#" class="list-group-item list-group-item-action active">
                    Career Ilham Makarim
                </a>
                <a href="#" class="list-group-item list-group-item-action">IT Support</a>
                <a href="#" class="list-group-item list-group-item-action">Backend Developer</a>
                <a href="#" class="list-group-item list-group-item-action">Frontend Developer</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Quality Assurance</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>