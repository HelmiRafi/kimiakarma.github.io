<?php
    
        $name =$_POST['name'];
        $ttl =$_POST['ttl'];
        $kelamin =$_POST['kelamin'];
        $umur =$_POST['umur'];
        $layanan =$_POST['layanan'];
        $no_wa=$_POST['noWa'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DTempat,Tanggal_Lahir:%20$ttl%20%0DKelamin:%20$kelamin%20%0DUmur:%20$umur%20%0DLayanan:%20$layanan");
   
?>