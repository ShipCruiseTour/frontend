<?php include 'include/header.php' ?>

<div class="from2">
    <form action="" method="POST">
        <label for="name">Your Name</label>
        <input type="text" required="required" name="name">
        <label for="email">Your Email</label>
        <input type="email" required="required" name="email">
        <label for="nombre">Your Nombre</label>
        <input type="numero" required="required" name="nombre">
        <label for="date">Date de Reservation</label>
        <input type="date" required="required" name="date">
        <input type="submit" class="btn btnMe btnMe2 btnMe3" name="reserver" value="RESERVER">
    </form>
</div>

<?php include 'include/footer.php' ?>