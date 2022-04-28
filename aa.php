<!DOCTYPE html>
<html>
<body>

<?php 
    $a=5;
    $b=100;
?>

<?php if( $a>1 && $b < 100  ){ ?>
    <span> True </span>
<?php } ?>

<?php if( $a>1 && $b<100 ){ echo "<span> False </span>" } ?>


</body>
</html>