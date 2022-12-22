<?php 
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $name = $_POST['email'];
        $name = $_POST['pesan'];
        $name = $_POST['noWa'];
        header("location:https//api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20$%DEmail:%20$email%20%DPesan:%20$pesan");
    } else {
        echo "
            <script>
                window.location=history.go(-1);
            </script>
        ";
    }
?>