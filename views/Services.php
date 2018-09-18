<?php
foreach($services as $serviceName => $description)
{ ?>
  <h1 class="title-underline-comp-2 text-center col-mt-30 col-mb-30"><?=$serviceName?></h1>

  <div class="row col-mt-30 col-mb-30">
    <div class="col dsk-8 dsk-off-2 tbt-10 tbt-off-1 mob-12">
      <p class="text-center"><?=$description?></p>
    </div>
  </div>
  <?php
} ?>
