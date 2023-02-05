<!DOCTYPE html>
<html>

<head>
  <title>History System</title>

  <style type="text/css">
    .styled-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      margin-left: auto;
      margin-right: auto;
    }

    .styled-table thead tr {
      background-color: #009879;
      color: #ffffff;
      text-align: center;
    }

    .styled-table th,
    .styled-table td {
      padding: 12px 15px;
    }

    .styled-table tbody tr {
      border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
      border-bottom: 2px solid #009879;
    }

    @page {
      margin: 20px 20px 20px 20px !important;
      padding: 20px 20px 20px 20px !important;
    }
  </style>
</head>

<body>
  <h2 style="text-align: center;font-family:sans-serif;">Riwayat Penggunaan SPDP Kambing</h2>
  <div class="table-responsive col-lg-12">
    <table class="styled-table">
      <thead>
        <tr>
          <th scope="col" style="text-align:center;">No.</th>
          <th scope="col" style="text-align:center;">Nama</th>
          <th scope="col" style="text-align:center;">Umur</th>
          <th scope="col" style="text-align:center;">Penyakit</th>
          <th scope="col" style="text-align:center;">Waktu</th>
        </tr>
      </thead>
      <tbody>
        @foreach($histories as $history)
        <tr>
          <td align="center">{{ $loop->iteration }}</td>
          <td align="left">{{ $history->peternak->nama }}</td>
          <td align="right">{{ $history->peternak->umur }} Tahun</td>
          <td align="left">{{ $history->penyakit->penyakit }}</td>
          <td align="right">{{ $history->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>