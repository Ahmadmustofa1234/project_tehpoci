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

          <h1>ini pemesanan</h1>
        </div>
    </div>


    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>
