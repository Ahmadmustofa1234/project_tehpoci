@include('Admin\partials\layouts\head')

<body>

    <div class="wrapper">
        {{-- navbar start --}}
        @include('admin.partials.navbar')
        {{-- navbar end --}}

        {{-- sidebar start --}}
        @include('admin.partials.sidebar')
        {{-- sidebar end --}}

        <div class="content-page">

            <div class="content">

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card">
                                <header>
                                    <h1>Katalog Produk</h1>
                                </header>
                                <div class="card-body">
                                    <form action="{{ url('/add_katalog') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Title</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" name="title" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Deskripsi</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                placeholder="" name="description" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Gambar</label>
                                            <input type="file" class="form-control" id="validationCustom03"
                                                placeholder="" name="image" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid Image.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Jumlah</label>
                                            <h2>ambil dari DB</h2>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Harga</label>
                                            <h2>ambil dari DB</h2>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom03">Diskon</label>
                                            <input type="text" class="form-control" id="validationCustom03"
                                                placeholder="" name="dis_price" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid Discount.
                                            </div>
                                        </div>


                                        <button class="add-product-btn" type="submit" name="submit">Tambah</button>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        {{-- kolom ke 2 --}}
                        <div class="col-lg-6">
                            <div class="card">
                                <header>
                                    <h1>Tabel Katalog</h1>
                                </header>
                            </div>
                        </div> <!-- end col 2 -->
                    </div>
                </div>

            </div>
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
