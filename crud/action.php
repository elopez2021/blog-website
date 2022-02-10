<?php
session_start();
include 'config.php';

if(isset($_POST['add'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $image=$_POST['image'];
    $category=$_POST['category'];
    $created_by=$_POST['created_by'];

    $idUnico = time();
    $photo= $idUnico . "-" . $_FILES['image']['name']; 
    //$photo=$_FILES['image']['name'];
    $file_store="uploads/".$photo;

    $query="INSERT INTO post(title,content,image,category,created_by)VALUES(?,?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("sssss",$title,$content,$file_store,$category,$created_by);
    $stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $file_store);
    
    header('location:index.php');
    $_SESSION['message']="Added!";
    $_SESSION['response']="Post Added Successfully!";
    $_SESSION['res_type']="success";

    $stmt->close();
    $conn->close();
}


if(isset($_GET['edit'])){
    $id=$_GET['edit'];

    $query="SELECT * FROM post WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $id=$row['id'];
    $title=$row['title'];
    $content=$row['content'];
    $image=$row['image'];
    $category=$row['category'];
    
    $stmt->close();
    $conn->close();
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $oldimage=$_POST['oldimage'];
    $category=$_POST['category'];

    if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
        $idUnico = time();
        $photo= $idUnico . "-" . $_FILES['image']['name'];
        $newimage="uploads/".$photo;
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
    }
    else{
        $newimage=$oldimage;
    }
    $query="UPDATE post SET title=?,content=?,image=?,category=? WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssssi",$title,$content,$newimage,$category,$id);
    $stmt->execute();

    $_SESSION['message']="Updated!";
    $_SESSION['response']="Post Updated Successfully!";
    $_SESSION['res_type']="success";
    header('location:index.php');

    $stmt->close();
    $conn->close();
}


if(isset($_GET['delete'])){
    $id=$_GET['delete'];

    //we have to first unlink the image and then delete the record
    $sql="SELECT image FROM post WHERE id=?";
    $stmt2=$conn->prepare($sql);
    $stmt2->bind_param("i",$id);
    $stmt2->execute();
    $result2=$stmt2->get_result();
    $row=$result2->fetch_assoc();

    $imagepath=$row['image'];
    unlink($imagepath);

    $query="DELETE FROM post WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    header('location:index.php');
    $_SESSION['message']="Deleted!";
    $_SESSION['response']="Successfully Deleted!";
    $_SESSION['res_type']="success";

    $stmt->close();
    $conn->close();
}

/*
https://www.hackedu.com/blog/how-to-prevent-sql-injection-vulnerabilities-how-prepared-statements-work
*/

?>