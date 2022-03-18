<?php
    session_start();
    unset($_SESSION['ID_Usuario']);
    if(isset($_SESSION['Pago'])){
        echo "Pago: ". $_SESSION['Pago'];
        unset($_SESSION['Pago']);
    }
?>

<script>
    alert("La sesion ha sido cerrada");
    <?php
        header("Location: ../tienda.php");
    ?>
</script>
