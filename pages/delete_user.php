<?php

include "connect.php";
if(isset($_POST['deletebtn_user'])){
session_start();

$deleteid = $_POST['deleteid'];


$sql = "DELETE FROM `tbl_user` WHERE `id`=$deleteid";
$result = $conn->query($sql);
header("Location: tables.php?error=success_delete");
	

}

if(isset($_POST['deletebtn'])){
    session_start();
    
    $deleteid = $_POST['deleteid'];
    
    
    $sql = "DELETE FROM `tbl_items` WHERE `item_id`=$deleteid";
    $result = $conn->query($sql);
    header("Location: tables2.php?error=success_delete");
        
    
    }

    if(isset($_POST['deletebtn_customer'])){
        session_start();
        
        $deleteid = $_POST['deleteid'];
        
        
        $sql = "DELETE FROM `customer_table` WHERE `customer_id`=$deleteid";
        $result = $conn->query($sql);
        header("Location: tables3.php?error=success_delete");
            
        
        }

    if(isset($_POST['deletebtn_stock'])){
        session_start();
        
        $deleteid = $_POST['deleteid'];
        
        
        $sql = "DELETE FROM `tbl_item_stock` WHERE `item_id`=$deleteid";
        $result = $conn->query($sql);
        header("Location: tables4.php?error=success_delete");
            
        
        }

        if(isset($_POST['deletebtn_order'])){
            session_start();
            
            $deleteid = $_POST['deleteid'];
            
            
            $sql = "DELETE FROM `tbl_transation_header` WHERE `invoice`=$deleteid";
            $result = $conn->query($sql);
            header("Location: tables5.php?error=success_delete");
                
            
            }
    
    
