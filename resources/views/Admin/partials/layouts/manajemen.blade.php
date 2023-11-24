@include('Admin\partials\layouts\head')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1em;
    }

    section {
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: white;
    }

    .add-product-btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-bottom: 20px;
        cursor: pointer;
    }
</style>

<body>
    <div class="wrapper">

        {{-- navbar start --}}
        @include('admin.partials.navbar')
        {{-- navbar end --}}

        {{-- sidebar start --}}
        @include('admin.partials.sidebar')
        {{-- sidebar end --}}

        <div class="content-page">
            <header>
                <h1>Manajemen Produk Teh Poci - Admin</h1>
            </header>

            <section>
                <a href="#" class="add-product-btn">Tambah Produk</a>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data produk akan ditampilkan di sini -->
                        <tr>
                            <td>1</td>
                            <td>Teh Poci Hijau</td>
                            <td>Rp 20,000</td>
                            <td>50</td>
                            <td>
                                <button>Edit</button>
                                <button>Hapus</button>
                            </td>
                        </tr>
                        <!-- Data produk lainnya -->
                    </tbody>
                </table>
            </section>
        </div>
    </div>


    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard App js -->
    <script src="assets/js/pages/dashboard.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>