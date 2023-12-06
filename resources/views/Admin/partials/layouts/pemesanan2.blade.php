<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
    <title>Dashboard | Tehpoci - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f4f4f4;
      }

      .content-page {
          padding-top: 60px; /* Adjusted padding for header */
      }

      table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
          border-radius: 10px;
          overflow: hidden;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
          background-color: #ffffff;
      }

      th,
      td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
      }

      th {
          background-color: #4CAF50;
          color: white;
      }

      .edit-btn,
      .delete-btn,
      .promo-btn {
          padding: 8px 16px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }

      .edit-btn {
          background-color: #008CBA;
          color: white;
          margin-right: 10px;
      }

      .delete-btn {
          background-color: #f44336;
          color: white;
          margin-right: 10px;
      }

      .promo-btn {
          background-color: #4CAF50;
          color: white;
      }

      .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0, 0, 0);
          background-color: rgba(0, 0, 0, 0.4);
          padding-top: 60px;
      }

      .modal-content {
          background-color: #fefefe;
          margin: 5% auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
          border-radius: 10px;
      }

      .close {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
      }

      form {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
      }

      label {
          margin-bottom: 8px;
      }

      input {
          padding: 8px;
          margin-bottom: 16px;
          width: 100%;
      }

      button {
          background-color: #4CAF50;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }

      button:hover {
          background-color: #45a049;
      }

      /* Gaya untuk ikon edit dan delete */
      .ri-pencil-line,
      .ri-delete-bin-line {
          font-size: 20px;
          color: #ffffff;
          cursor: pointer;
          margin-right: 10px;
      }
  </style>

</head>

<body>
  <div class="content-page">
      <div class="content">
          <div class="container-fluid">

            <div class="row">
              <div class="col-12">
                  <div class="page-title-box">
                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Teh Poci</a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Pemesanan</a></li>
                              <li class="breadcrumb-item active">Selamat Datang!</li>
                          </ol>
                      </div>
                      <h4 class="page-title">Selamat Datang!</h4>
                  </div>
              </div>
          </div>

  <section>
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">S.N.</th>
          <th class="text-center">Product Name</th>
          <th class="text-center">Promo Type</th>
          <th class="text-center">Start Date</th>
          <th class="text-center">End Date</th>
          <th class="text-center" colspan="2">Action</th>
        </tr>
      </thead>
      <!-- Data promo Teh Poci akan ditampilkan di sini -->
      <tr>
        <td class="text-center">1</td>
        <td class="text-center">Teh Poci Hijau</td>
        <td class="text-center">Cashback</td>
        <td class="text-center">2023-01-01</td>
        <td class="text-center">2023-01-31</td>
        <td class="text-center">
          <button class="edit-btn">Edit</button>
          <button class="delete-btn">Delete</button>
        </td>
      </tr>
      <!-- Data promo lainnya -->
    </table>
<br>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
      Add Promo
    </button>

    <!-- Modal -->
    <div class="modal" id="myModal">
      <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>New Promo for Teh Poci</h2>
        <form action="#" method="POST">
          <label for="productName">Product:</label>
          <select id="productName" name="productName">
            <option value="teh-poci-hijau">Teh Poci Hijau</option>
            <!-- Add other product options as needed -->
          </select>

          <label for="promoType">Promo Type:</label>
          <select id="promoType" name="promoType">
            <option value="cashback">Cashback</option>
            <option value="discount">Discount</option>
            <option value="buy1get1">Buy 1 Get 1</option>
          </select>

          <label for="startDate">Start Date:</label>
          <input type="date" id="startDate" name="startDate" required>

          <label for="endDate">End Date:</label>
          <input type="date" id="endDate" name="endDate" required>

          <button type="button" onclick="addPromo()" class="btn btn-secondary" style="height:40px">Add Promo</button>
        </form>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function closeModal() {
      document.getElementById('myModal').style.display = 'none';
    }

    function addPromo() {
      // Implementasi logika untuk menambahkan promo
      alert('Promo has been added!');
      closeModal();
    }
  </script>
  