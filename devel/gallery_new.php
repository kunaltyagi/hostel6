<?php
	include	'header.php';
	menu('gallery');
?>
<?php
    include '../new/gallery_new.php';
?>
<?php
	include 'footer.php'
?>
<script language="javascript">
window.onload = function(){

    $("a.prevent-default").click(function(event) {
         event.preventDefault();
          });

  };


</script>
