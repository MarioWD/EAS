<div class="row col-mb-30">
  <div class="col dsk-12 tbt-12 mob-12 position-relative banner bg-pallette-3 text-center">
      <div class="row">
        <div class="col dsk-6 dsk-off-3 tbt-8 tbt-off-2 mob-10 mob-off-1">
          <span class="text-3em text-white text-bold block-inline col-mb-20">Worry free accounting services</span>
          <br>
          <span class="text-em-5 text-white block-inline">Let us take the hassle from your business allowing you to focus on what matters</span>
          <br>
          <a href="/contactus" class="btn transit btn-small block-inline text-em-5 col-mt-20 border-pallette-comp-2 font-pallette-comp-2 text-bold border-3">Consult us</a>
        </div>
      </div>
  </div>
</div>
<div class="row col-mt-30 col-mb-30">
  <div class="col dsk-12 tbt-12 mob-12 col-mt-30">
    <h1 class="title-underline-comp-2 text-center">About Us</h1>
  </div>
</div>
<div class="row col-mt-30 col-mb-30">
  <div class="col dsk-8 dsk-off-2 tbt-8 tbt-off-2 mob-10 mob-off-1 col-mb-30">
    <p class="text-center">
      Starting or running a business can be complicated and time consuming, our firm is providing the
      services you need to focus in growing your business.
      You need advice? Let’s talk
      Do you want to have a sole proprietorship or a corporation? Do you have employees? Do you need to
      apply for GST account?
    </p>
  </div>
</div>
<div class="services-section col-mb-30 parallax calc-pencil" style="overflow: hidden;">
  <div class="overlay quarter-black"></div>
  <div class="row col-mt-30 col-mb-20 pull-left">
    <div class="col dsk-12 tbt-12 mob-12 position-relative">
      <h1 class="text-center title-underline-comp-2 font-pallette-white">Services</h1>
    </div>
  </div>
  <div class="row col-mb-30 pull-left">
    <?php
    foreach($services as $serviceName => $service)
    { ?>
      <div class="col dsk-4 tbt-4 mob-12 col-mt-20 position-relative service-block <?=$bookEnds[$serviceName]?>">
        <div class="overlay half-black"></div>
        <h2 class="text-center name"><?=$serviceName?></h2>
        <p class="description"><?=$service?></p>
      </div>
      <?php
    } ?>
  </div>
</div>
