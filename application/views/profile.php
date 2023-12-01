<?php $this->load->view($header); ?>
<section class="wrapper bg-gradient-primary">
    <div class="container p-2   pt-5 pb-10  pt-md-10 pb-md-20 ">
        <div class="card p-3" style="background-color:rgba(255, 255, 255, 0.8);">
            <div class="d-flex row ">
                <div class=" d-flex gap-10 ">
                    <div class="p-2 col ">
                        <div class="fw-bold">Polixyner</div>
                        <div class="fw-light mt-n2">bowo@gmail.com</div>
                    </div>
                    <div class="my-auto " >
                    <a href="<?=base_url()?>home/regisSupplier" class="btn btn-sm btn-sky " >Register as a supplier</a>
                    <button class="btn btn-sm btn-sky rounded-pill">Supplier</button>
                    </div>
                </div>
                
            </div>
            <!-- /.social -->
        </div>
        <!--/.card-body -->

        <!-- /.card -->
        <div class="row mt-3">
            <div class="col-lg-6 mb-3">
                <div class="card p-3 " >
                    <div class="d-flex justify-content-between ">
                        <h4 class="fw-light">Profile Information</h4>
                    <a href="<?=base_url()?>/Front/user/editprofile?" class="text-blue fw-light"><i class="uil uil-edit"></i>  profile</a>
                    </div>
                    
                    <div class="mb-2">
                        <span class="fw-bold">Full Name :</span><span class="text-muted m-2 fw-light"> Arif Setyo Wibowo</span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Phone :</span><span class="text-muted m-2 fw-light"> +62872827262</span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Email :</span><span class="text-muted m-2 fw-light"> Bowo@gmail.com</span>
                    </div>
                    <div class="mb-2">
                        <span class="fw-bold">Location :</span><span class="text-muted m-2 fw-light"> Indonesia</span>
                    </div>
                    <!-- /.social -->
                </div>
                <!--/.card-body -->
            </div>
            <div class="col-lg-6 ">
                <div class="card p-3 " >
                        <div class="d-flex justify-content-between ">
                            <h4 class="fw-light">Company Information</h4>
                            <a href="<?=base_url()?>/supplier/supplier" class="text-blue fw-light font-sm"><i class="uil uil-"></i> Manage company </a>
                        </div>
                        <div class="mb-2">
                        <img class="rounded  " style="height: 80px; width: 80px;" src="<?= base_url() ?>./assets/front/img/avatars/te1.jpg" srcset="<?= base_url() ?>./assets/front//avatars/te1@2x.jpg 2x" alt="" />
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">Company Name :</span><span class="text-muted m-2 fw-light"> PT Mencari Cinta Sejati</span>
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">About Company :</span><span class="text-muted m-2 fw-light"> We operate in the field of coconut agriculture and its derivatives. We aim to provide the best products for you.We operate in the field of coconut agriculture and its derivatives. We aim to provide the best products for you</span>
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">Products Owned :</span><span class="text-muted m-2 fw-light"> 12 product</span>
                        </div>
                        <div class="mb-2">
                            <span class="fw-bold">Location :</span><span class="text-muted m-2 fw-light"> Malang, Jawa Timur, Indonesia</span>
                        </div>
                        <div class="mb-2 row">
                            <div class="col">
                                <span class="fw-bold">Contact :</span>
                                <div class="">
                                    <li class="text-muted fw-light">cintasejati@gmail.com</li>
                                    <li class="text-muted  fw-light">+62 8988377363</li>
                                    
                                </div>
                            </div>
                            <div class="col">
                                <span class="fw-bold">Social Media :</span>
                                <nav class="nav social mb-0">
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                            </div>
                        </div>
                        <!-- /.social -->
                    </div>
                    <!--/.card-body -->
            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col mt-n19">
                <div class="card shadow-lg">
                    <div class="row gx-0 text-center">
                        <div class="col-lg-2 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm3.jpg">
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>
<?php $this->load->view($footer); ?>