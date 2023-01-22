<?php

require_once 'db_connect.php';

function addUser($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user (username, email, password, contact_no, type, members)
VALUES (:username, :email, :password, :contact_no, :type, :members)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':contact_no' => $data['contact_no'],
            ':type' => $data['type'],
            ':members' => $data['members']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function addUser2($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into owner (name,email,password,contact)
VALUES (:name, :email, :password, :contact)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':contact' => $data['contact']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function addproperties($data, $image)
{
    $conn = db_conn();
    $selectQuery = "INSERT into property_details (house_no,street,area,thana,district,floor,room,price,image,latitude,longitude,owner_id)
VALUES (:house_no, :street, :area, :thana,:district, :floor, :room, :price, :image, :latitude, :longitude, :owner_id)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':house_no' => $data['house_no'],
            ':street' => $data['street'],
            ':area' => $data['area'],
            ':thana' => $data['thana'],
            ':district' => $data['district'],
            ':floor' => $data['floor'],
            ':room' => $data['room'],
            ':price' => $data['price'],
            ':image' => $image,
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude'],
            ':owner_id' => $data['id']
        ]);
        /* $last_id = $conn->lastInsertId();
        return $last_id; */
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function interested_properties($data, $p_id)
{
    $conn = db_conn();
    $selectQuery = "INSERT into interested_property (p_details_id, user_id ,owner_id)
    VALUES (:p_details_id , :user_id, (SELECT owner_id from property_details WHERE id= $p_id ))";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':p_details_id' => $data['p_id'],
            ':user_id' => $data['user_id']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}




function loginUser($data)
{

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE username = :username AND password = :password";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            'username' => $data['username'],
            'password' => $data['password']
        ]);
        $count = $stmt->rowCount();

        session_start();

        if ($count > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                /* $n=$stmt->fetch();
            print_r($n); */
                $_SESSION["id"] = $row['id'];
                //echo $_SESSION["id"]. "<br>";

                $_SESSION["username"] = $data["username"];
                $_SESSION["password"] = $data["password"];

                echo "<script>location.href='welcome.php'</script>";
            }
        } else {
            echo "<script>alert('uname or pass incorrect!')</script>";
            echo "<script>location.href='../registration.php'</script>";

            $message = '<label>Wrong Data</label>';
            echo $message;
        }
        // return $count;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function admin_login($data)
{

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` WHERE username = :user_name AND password = :password";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            'user_name' => $data['user_name'],
            'password' => $data['password']
        ]);
        $count = $stmt->rowCount();
        echo $count;
        session_start();
        if ($count > 0) {

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $_SESSION["id"] = $row['id'];
                $_SESSION["user_name"] = $data["user_name"];
                $_SESSION["password"] = $data["password"];
                echo "success";

                echo "<script>location.href='./welcome3.php'</script>";
            }
        } else {
            echo "<script>alert('uname or pass incorrect!')</script>";
            echo "<script>location.href='../admin.php'</script>";

            $message = '<label>Wrong Data</label>';
            echo $message;
        }
        // return $count;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}



function loginUser2($data)
{

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `owner` WHERE name = :name AND password = :password";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            'name' => $data['name'],
            'password' => $data['password']
        ]);
        $count = $stmt->rowCount();

        session_start();

        if ($count > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                /* $n=$stmt->fetch();
            print_r($n); */
                $_SESSION["id"] = $row['id'];
                //echo $_SESSION["id"]. "<br>";

                $_SESSION["name"] = $data["name"];
                $_SESSION["password"] = $data["password"];

                echo "<script>location.href='welcome2.php'</script>";
            }
        } else {
            echo "<script>alert('uname or pass incorrect!')</script>";
            echo "<script>location.href='../registration2.php'</script>";

            $message = '<label>Wrong Data</label>';
            echo $message;
        }
        // return $count;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}



function property_info()
{
    $conn = db_conn();
    $selectQuery = "SELECT property_details.*,owner.email,owner.contact FROM `property_details`INNER JOIN `owner` on property_details.owner_id=owner.id WHERE property_details.approve ='yes'  ORDER BY `id` DESC";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}
function property_info_admin_page()
{
    $conn = db_conn();
    $selectQuery = "SELECT property_details.*,owner.email,owner.contact FROM `property_details`INNER JOIN `owner` on property_details.owner_id=owner.id WHERE property_details.approve ='yes'  ORDER BY `id` DESC";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function search_properties($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where area LIKE '$data%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}
function search_properties_By_area_and_price($data, $price1, $price2)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where area LIKE '$data%' AND price BETWEEN '$price1%' AND '$price2%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}
function search_properties_By_area_and_room($data, $room1, $room2)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where area LIKE '$data%' AND room BETWEEN '$room1%' AND '$room2%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}
function search_properties_By_area_and_price_and_room($data, $price1, $price2, $room1, $room2)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where area LIKE '$data%' AND price BETWEEN '$price1%' AND '$price2%' AND room BETWEEN '$room1%' AND '$room2%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}
function search_properties_By_price_and_room($price1, $price2, $room1, $room2)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where price BETWEEN '$price1%' AND '$price2%' AND room BETWEEN '$room1%' AND '$room2%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}
function search_properties_By_price($price1, $price2)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where price BETWEEN '$price1%' AND '$price2%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}
function search_properties_By_room($room1, $room2)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` Where room BETWEEN '$room1%' AND '$room2%' AND approve='yes'";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $rows;
}

function image($p_id)
{
    $conn = db_conn();
    $selectQuery = "SELECT `image` FROM `property_details` WHERE id = $p_id ";
    try {
        $stmt = $conn->query($selectQuery);
        $count = $stmt->rowCount();
        if ($count > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $img["image"] = $row['image'];
            }
        }

        return $img["image"];
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function show_someone_interested_people()
{
    $conn = db_conn();
    $selectQuery = "SELECT p_details_id FROM `interested_property` WHERE confirm = 'no' ";
    try {
        $stmt = $conn->query($selectQuery);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        /*   $count=$stmt->rowCount();
        if($count > 0)
    {
        $number=$count;
    }   */

        return $rows;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
function find_interested_people($p_id, $owner_id)
{
    $conn = db_conn();
    $selectQuery = "SELECT user_id FROM `interested_property` WHERE p_id=$p_id and owner_id= $owner_id";
    try {
        $stmt = $conn->query($selectQuery);

        // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $count = $stmt->rowCount();
        if ($count > 0) {
            $number = $count;
        }

        return $number;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}



function autosearch($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT area FROM `property_details` Where area LIKE :area LIMIT 3";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute(['area' => '%' . $data . '%']);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        foreach ($result as $row) {
            echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['area'] . '</a>';
        }
    } else {
        echo '<p class="list-group-item border-1">No Record</p>';
    }
    /*        return $rows;
 */
}


function show_interested_people($owner_id)
{
    $conn = db_conn();
    $selectQuery = "SELECT user.*,interested_property.p_details_id,property_details.house_no,property_details.area,property_details.thana,property_details.floor,property_details.room FROM `interested_property` INNER JOIN `user` on interested_property.user_id=user.id INNER JOIN `property_details` on interested_property.p_details_id=property_details.id WHERE interested_property.owner_id=$owner_id AND interested_property.confirm ='no'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function property_info_owner($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` WHERE owner_id = '$id' AND approve = 'yes'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function property_reject_info_owner($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` WHERE owner_id = '$id' AND approve = 'rejected'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function property_info_admin()
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `property_details` WHERE approve = 'no' ORDER BY `id` DESC";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function user_id_interested_property($user_id)
{
    $conn = db_conn();
    $selectQuery = "SELECT user_id, p_details_id FROM `interested_property` WHERE user_id = '$user_id'";
    try {
        $stmt = $conn->query($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function show_confirm_interested_property($user_id)
{
    $conn = db_conn();
    $selectQuery = "SELECT property_details.house_no,property_details.area,property_details.thana,property_details.floor,property_details.room,interested_property.confirm FROM `interested_property` INNER JOIN `property_details` on interested_property.p_details_id=property_details.id WHERE interested_property.user_id = '$user_id'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



/*     function addproperties($latitude, $longitude, $p_id){
        $conn = db_conn();
        $selectQuery = "UPDATE property_details set latitude = ? ,  longitude = ? where  ID = ?";
        try{
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                $latitude, $longitude, $p_id
            ]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    } */
function change_status($status, $p_id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE property_details set status = ? where  ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $status, $p_id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function add_properties_details($user_id, $p_id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE property_details set user_id = ? where  ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $user_id, $p_id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function approved_properties($approved, $p_id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE property_details set approve = ? where  ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $approved, $p_id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function rejected_properties($approved, $p_id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE property_details set approve = ? where  ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $approved, $p_id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function confirm_interested_property($confirm,  $p_id, $owner_id, $user_id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE interested_property set confirm = ? where  p_details_id= ? AND owner_id = ? AND user_id= ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $confirm,  $p_id, $owner_id, $user_id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function check_email($email)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE email= '$email'";
    try {
        $stmt = $conn->query($selectQuery);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count > 0) {
            echo "<span style='color:red;''>" . "Email already exists" . "</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        } else {
            echo "<span style='color:red;''>" . "Email available for Registration" . "</span>";
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }

        //return $count;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
}


function check_user_name($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE username= '$user_name'";
    try {
        $stmt = $conn->query($selectQuery);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count > 0) {
            echo "<span style='color:red;''>" . "User Name already exists" . "</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        } else {
            echo "<span style='color:red;''>" . "User Name available for Registration" . "</span>";
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }

        //return $count;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
}

function check_email2($email)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `owner` WHERE email= '$email'";
    try {
        $stmt = $conn->query($selectQuery);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count > 0) {
            echo "<span style='color:red;''>" . "Email already exists" . "</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        } else {
            echo "<span style='color:red;''>" . "Email available for Registration" . "</span>";
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }

        //return $count;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
}



function check_owner_name($owner_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `owner` WHERE name= '$owner_name'";
    try {
        $stmt = $conn->query($selectQuery);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count > 0) {
            echo "<span style='color:red;''>" . "Owner Name already exists" . "</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        } else {
            echo "<span style='color:red;''>" . "Owner Name available for Registration" . "</span>";
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }

        //return $count;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
}




/*       function delete_properties($p_id){
            $conn = db_conn();
            $selectQuery = "INSERT into interested_property (p_details_id, user_id ,owner_id)
            VALUES (:p_details_id , :user_id, (SELECT owner_id from property_details WHERE id= $p_id ))";
            
            try{
                $stmt = $conn->prepare($selectQuery);
                $stmt->execute([
                    ':p_details_id' => $data['p_id'],
                    ':user_id' => $data['user_id']
                ]);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        
            $conn = null;
            return true;
        }
         */



function delete_properties($p_id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `property_details` WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$p_id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
