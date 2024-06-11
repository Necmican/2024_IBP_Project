<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #000000;
            color: #fff;
            padding: 30px;
            border-radius: 0.25rem;
            margin-bottom: 15px;
            text-align: center;
        }
        .card-title {
            margin-bottom: 0;
            font-size: 36px;
        }
        .table {
            background-color: #fff;
            border-radius: 0.25rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .table th,
        .table td {
            padding: 15px;
        }
        .table th {
            background-color: #000000;
            color: #fff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
        }
    </style>
    <title>Kahve Zinciri Duyurular Listesi</title>
</head>
<body>

    <div class="container mt-5">
        <div class="card-header">
            <h3 class="card-title">Kahve Zinciri Duyurular Listesi</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Açıklama</th>
                        <th>İçerik</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announcements->sortBy('role') as $announcement)
                        <tr>
                            <td>{{ $announcement->title }}</td>
                            <td>{{ $announcement->description }}</td>
                            <td>{{ Str::substr($announcement->content, 0, 150) }}...</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
