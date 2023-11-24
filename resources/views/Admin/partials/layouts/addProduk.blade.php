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

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="header-title">Tambah Produk</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/addProduk') }}" method="post" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Nama Produk</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Nama Produk" name="namaProduk" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Harga</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="20.000,00" name="harga" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Stok</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="200"
                                        name="stok" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid Kuantity.
                                    </div>
                                </div>

                                <button class="add-product-btn" type="submit" name="submit">Tambah</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->


            </div>
        </div>

    </div>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
</body>
