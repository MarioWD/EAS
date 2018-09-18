<?php use \classes\Config as Config; ?>
<script src="/js/eas.js" text="text/javascript"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?=Config::get("googleAPI");?>&callback=initMap"
type="text/javascript"></script>
</body>
</html>
<?php
