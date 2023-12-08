<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lopasa - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Styling untuk sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color: #333;
            color: #fff;
            padding-top: 50px;
        }
        
        /* Styling untuk konten utama */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        
        /* Styling untuk link menu sidebar */
        .sidebar a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .sidebar a:hover {
            background-color: #555;
        }

        .navbar {
            border-bottom: 1px solid #ccc; /* Atur garis tipis dengan warna abu-abu (#ccc) */
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" >
        <a href="" style="padding-left: 30px">Produk</a>    {{-- {{ route('admin.stores.index') }} --}}
        <a href="" style="padding-left: 30px">Toko</a>
        <a href="" style="padding-left: 30px">Pengguna</a>
        <a href="" style="padding-left: 30px">Kelola Pesanan</a>
        <a href="" style="padding-left: 30px">Keluar</a>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="/asets/logo/logo.png" alt="Logo Admin" height="50" class="d-inline-block align-top">
                </a>
    
                <!-- Tombol Log Out -->
                <a class="btn btn-danger" href="">Keluar</a>
            </div>
        </nav>
        
        <!-- Konten lainnya... -->
        <h1 style="margin-top: 20px; margin-left: 30px">Selamat Datang di Dasbor Admin</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
