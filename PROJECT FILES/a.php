<?php
    $connection=mysqli_connect("localhost","root","");
    if(!$connection)
    {
        die('Could not connect!'.mysqli_error());
    }
    mysqli_select_db($connection,"snp");
    $cat = $_POST['name'];
    //Main categories
    if($cat=="all"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products");
    }
    elseif($cat=="men"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Men'");
    }
    elseif($cat=="women"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Women'");
    }
    elseif($cat=="girls"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Girls'");
    }
    elseif($cat=="boys"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Boys'");
    }
    elseif($cat=="kids"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Boys' and category='Kids Girls'");
    }
    elseif($cat=="kboys"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Boys'");
    }
    elseif($cat=="kgirls"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Girls'");
    }
    //sub categories
    //men
    elseif($cat=="mshirts"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Men' and type='Shirts'");
    }
    elseif($cat=="mbottoms"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Men' and type='Bottoms'");
    }
    elseif($cat=="mtracks"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Men' and type='Tracks'");
    }
    elseif($cat=="msports"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Men' and type='Sports'");
    }
    //women
    elseif($cat=="wtops"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Women' and type='Tops'");
    }
    elseif($cat=="wsarees"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Women' and type='Sarees'");
    }
    elseif($cat=="wleggins"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Women' and type='Leggins'");
    }
    elseif($cat=="wdresses"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Women' and type='Dresses'");
    }
    //girls
    elseif($cat=="gtops"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Girls' and type='Tops'");
    }
    elseif($cat=="gjeans"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Girls' and type='Jeans'");
    }
    elseif($cat=="gshorts"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Girls' and type='Shorts'");
    }
    elseif($cat=="gskirts"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Girls' and type='Skirts'");
    }
    //boys
    elseif($cat=="btshirts"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Boys' and type='Shirts'");
    }
    elseif($cat=="bjeans"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Boys' and type='Jeans'");
    }
    elseif($cat=="bshirts"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Boys' and type='Shirts'");
    }
    elseif($cat=="bshorts"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Boys' and type='Shorts'");
    }
    //kboys
    elseif($cat=="kbethnic"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Boys' and type='Ethnic Wear'");
    }
    elseif($cat=="kbwinter"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Boys' and type='Winter Wear'");
    }
    //kgirls
    elseif($cat=="kgethnic"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Girls' and type='Ethnic Wear'");
    }
    elseif($cat=="kgwinter"){
        $result= mysqli_query($connection,"select prod_id,name,brand,img1,img2,img3,img4,stock,cost,category,type from products where category='Kids Girls' and type='Winter Wear'");
    }
    while ($row=mysqli_fetch_array($result)) {
        $img1=$row['img1'];
        $name=$row['name'];
        $id=$row['prod_id'];
        $brand=$row['brand'];
        $stock=$row['stock'];
        $cost=$row['cost'];
        $off=$cost+$cost*0.4;
        echo "
            <a href=\"prodmain.php?pid=$id\"  >
            <div class=\"floating-box w3-animate-opacity\" style=\"text-align:center;padding:1px;\">
            <img src =$img1 alt=\"some\"  height=\"70%\" style=\"float:top\" /><br><br>
            <div style=\"font-size:20px\">$name</div>
            <b style=\"font-size:18px;color:blue\">Brand : $brand</b><br>
            <b style=\"font-size:15px\">Stock : $stock items </b><br>
            <b style=\"font-size:22px\">Rs. $cost </b><strike style=\"color:grey\"> Rs. $off </strike><b style=\"font-size:12px;color:green\" >&nbsp 40% off </b>
            </div>
            </a>
        ";
    }
    echo "
    
    ";
    mysqli_close($connection);
?>
