<?php
	include	'header.php';
	menu('gallery');
?>
<br><br><br>
<?php
    include '../new/gallery_new.php';
?>

<br><br><br>
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
