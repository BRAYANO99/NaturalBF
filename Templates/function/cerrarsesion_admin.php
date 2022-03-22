<?php
    session_start();
    unset($_SESSION['Admin']);
?>

<script>
    alert("La sesion de administrador ha sido cerrada");
    <?php
        header("Location: ../tienda.php");
    ?>
</script>
