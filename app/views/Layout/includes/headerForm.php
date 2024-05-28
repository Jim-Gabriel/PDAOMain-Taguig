

<div class="container w-60 container-bg mt-5 rounded-top-4 shadow">
    <div class="row align-items-center">
        <div class="col-4 d-flex justify-content-end">
            <div class="pt-4 pb-4">
                <!--<img class="img-fluid" src="assets/images/pdao_logo.png" alt="Logo Image" style="max-width: 150px;"> -->
                <img src="<?php echo ROOT_ASSETS .'/images/pdao_logo.png'; ?>" alt="header-image1" class="img-fluid footer-img" style="max-width: 150px">
            </div>
        </div>
        <div class="col-4 text-white text-center">
            <div class="pt-4 pb-4">
                <h1 class="header-text fw-semibold">PDAO TAGUIG REGISTRATION</h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pt-4 pb-4">
                <img src="<?php echo ROOT_ASSETS .'/images/taguig_seal.png'; ?>" alt="header-image1" class="img-fluid footer-img" style="max-width: 150px">
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 custom-bg-line-1">
        </div>
    </div>
</div>
<div class="container shadow p-3">
        <h2 class="fw-bold text-center pt-3">Application Form para sa ID Card na may Diskwento</h2>
        <h4 class="fst-italic text-black-50 text-center">Application form of ID Card for Discount</h4>
        <br />
        <h3 class="text-center">(0-59 Taong Gulang Lamang)</h3>
        <h5 class="fst-italic text-black-50 text-center">0-59 years old only</h5>
        
    <?php $this->view($name,$data); ?>

</div>