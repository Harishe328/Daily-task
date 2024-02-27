<?php
require("con.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="img" required>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]) && isset($_FILES["img"])){
    // print_r($_FILES["img"]);
    $img_name=$_FILES["img"]["name"];
    $img_tmpname=$_FILES["img"]["tmp_name"];
    $img_size=$_FILES["img"]["size"];
    $img_error=$_FILES["img"]["error"];

    if($img_error===0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
 
            $alloed_ex = array('png','jpg', 'jpeg', 'webp');
            if(in_array($img_ex_lc, $alloed_ex)){
                $new_img_name    = uniqid("IMG-").'.'. $img_ex_lc;
                $img_upload_path = 'imgupload/'. $new_img_name;
                move_uploaded_file($img_tmpname,$img_upload_path);
                
 
                //insert into db
                $stmt = $conn->prepare("UPDATE student SET image=? WHERE s_no=?");
                $stmt->bind_param('si', $new_img_name,$s_no );
                $stmt->execute();
                $stmt->close();
            }
    }
}
?>