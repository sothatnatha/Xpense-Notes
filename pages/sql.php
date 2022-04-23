<?php
    session_start();
    include('configuration.php');

    // insert to database
    if(isset($_POST['btn-submit'])) 
    {
        $account_name = $_POST['txt-account'];
        $amout = $_POST['txt-amt'];
        $bank_types = $_POST['txt-choices'];
        $memo = $_POST['txt-memo'];
        $created_at = $_POST['txt-created-at'];

        $sql = "INSERT INTO `tbl_expense`(`account_name`, `amount`, `bank_type`, `memo`, `date`) VALUES ('$account_name','$amout','$bank_types','$memo','$created_at')";
        $res = mysqli_query($conn, $sql);
        
        if($res) 
        {
            $_SESSION['msg'] = "Data Inserted Successfully!";
            header('location: index.php');
        } 


    }
    // updated
    if(isset($_POST['btn-update'])) 
    {
        $id=$_POST['txt-id'];
        $account_name_update = $_POST['txt-account-updated'];
        $amout_update = $_POST['txt-amt-update'];
        $bank_types_updated =$_POST['txt-choices-updated'];
        $memo_update= $_POST['txt-memo-updated'];
        $created_at_update = $_POST['txt-created-at-updated'];

        $sql = "UPDATE tbl_expense SET account_name='$account_name_update', amount='$amout_update',`bank_type`='$bank_types_updated', memo='$memo_update', date='$created_at_update' WHERE id=$id";
        mysqli_query($conn, $sql);
        header('location: index.php');

    }
?>