<?php
     
     if (!isset($_SESSION)) {
        session_start();
    }

    $conn = mysqli_connect("localhost","root","","openlibrary");
    
    function query($query){

        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;

    }

    function tambah($data){
        global $conn;
        $name = htmlspecialchars($data ["name"]);
        $sid  = htmlspecialchars($data ["sid"]);
        $code = htmlspecialchars($data ["codebook"]);
        $title = htmlspecialchars($data ["title"]);
        $duration = htmlspecialchars($data ["duration"]);   
        $price = $duration * 1500;
        $deposit = $price;
        $status = htmlspecialchars($data ["status"]);

        $query = "INSERT INTO borrow VALUES('','$name','$sid','$code','$title','$duration','$deposit','$status')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

   
    function regis($data){
    
        global $conn;
        // nampung ke database
        $nama = $data["nama"];
        $username = $data["username"];
        $sid = $data["sid"];
        $email = $data["email"];
        $password = mysqli_real_escape_string($conn, $data["password"]);
        

        // nampung session data
        $_SESSION["nama"] = "$nama";
        $_SESSION["username"] = "$username";
        $_SESSION["sid"] = "$sid";
        $_SESSION["email"] = "$email";
        $_SESSION["password"] = "$password";

        mysqli_query($conn, "INSERT INTO users VALUES('','$nama','$username','$sid','$email','$password')");


        return mysqli_affected_rows($conn);

        

    }

    function login($data)
    {
    global $conn;

    $username = $data['username'];
    $password = $data['password'];

    // cek email
    $usernameCek = "SELECT * FROM users WHERE username = '$username'";
    $select = mysqli_query($conn, $usernameCek);

    if (mysqli_num_rows($select) == 1) {
        $result = mysqli_fetch_assoc($select);

        // cek password
        if ($password == ($result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['sid'] = $result['sid'];
            
            if($password == "admin"){
                header("Location: admin.php");
                exit;
            }

            // set cookie
            if (is_null($data['remember'])) {
                setcookie('username', '', time() - 1);
                setcookie('password', '', time() - 1);
                setcookie('remember', '', time() - 1);
            } else {
                setcookie("username", $username);
                setcookie("password", $password);
                setcookie("remember", "checked");
            }

            $_SESSION['message'] = 'Berhasil Login';
            header("Location: welcome.php");
        }
    }
}


    function hapus($id) {
        global $conn;
        mysqli_query($conn,"DELETE FROM borrow WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {

        global $conn;
        $id = $data["id"];
        $name = htmlspecialchars($data ["name"]);
        $sid  = htmlspecialchars($data ["sid"]);
        $code = htmlspecialchars($data ["codebook"]);
        $title = htmlspecialchars($data ["title"]);
        $duration = htmlspecialchars($data ["duration"]);
        $price = $duration * 1500;
        $deposit = $price;
        $status = htmlspecialchars($data ["status"]);

        $query = "UPDATE borrow SET 
                    name = '$name',
                    sid = '$sid',
                    codebook = '$code',
                    title = '$title',
                    duration = '$duration',
                    deposit = '$deposit',
                    status = '$status'

                    WHERE id = $id
                    ";
                    

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>