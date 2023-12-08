<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Tambahkan CSS atau CDN Bootstrap jika diperlukan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Atur margin untuk form */
        form {
            margin-top: 50px;
            max-width: 500px; /* Lebar maksimum form */
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Profil Pengguna</h1>
        <!-- Tambahkan form untuk menampilkan dan mengupdate data user -->
        <!-- Form disesuaikan dengan kebutuhan, termasuk field nama, email, alamat, foto profil -->
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}" required>
            </div>

            <div class="mb-3">
                <label for="profile_picture" class="form-label">Foto Profil:</label>
                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
            </div>

            <button type="submit" class="btn btn-primary">Update Profil</button>
        </form>
    </div>

    <!-- Tambahkan script JavaScript atau CDN Bootstrap jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
