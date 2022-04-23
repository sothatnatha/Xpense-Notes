<?php
    include('pages/sql.php');
    include('pages/header.php');
    include('pages/add-expense.php');

    
?>
<div class="msg-wrapper container">
    <?php
        if(isset($_SESSION['msg']))
        {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['msg'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['msg']); 
        }   
    ?>
</div>

<?php

    include('pages/dataTables.php');
    include('pages/footer.php');

?>