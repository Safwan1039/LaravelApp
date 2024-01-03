<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"
      rel="stylesheet"
    />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
        body {
            /* display: flex;
            align-items: center;
            justify-content: center; */
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            
            width: 618px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            height: 300px;
        }

        .card-header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .card-body p {
            margin-bottom: 15px;
            color: #333;
        }

        .card-footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #217dbb;
        }
    </style>
</head>
<body style = "font-family: 'Poppins';">
<div class = "container mt-5">
<div class="card">
    <div class="card-header">
        <h2>ID Card</h2>
    </div>
    <div class="card-body">
        <img src="{{URL('image/avatar-659652_1280.png')}}" alt="" width="137px">
        <p style = "position: relative;
    left: 276px;
    bottom: 132px;">Name: {{$user->Name ?? ''}}</p>
        <p style = "position: relative;
    left: 276px;
    bottom: 132px;">Email: {{$user->Email ?? ''}}</p>
        <p style = "position: relative;
    left: 276px;
    bottom: 132px;">Username: {{$user->Username ?? ''}}</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn">Read More</a>
    </div>
</div>
</div>
</body>
</html>