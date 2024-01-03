<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            color: #fff;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        #content h2 {
            margin-bottom: 20px;
        }

        #content table {
            width: 100%;
            margin-top: 20px;
        }

        #content table th,
        #content table td {
            padding: 10px;
            text-align: left;
        }

        #content table th {
            background-color: #f8f9fa;
        }

        #navbar {
            background-color: #343a40;
            padding: 10px;
            color: #fff;
        }

        #navbar a {
            color: #fff;
            text-decoration: none;
        }

        #navbar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- ... (previous body content) ... -->

<div id="content">
    <nav id="navbar">
        <span>Welcome, Admin!</span>
        <span class="float-end"><a href="{{url('/')}}">Logout <i class="fas fa-sign-out-alt"></i></a></span>
    </nav>

    <div>
        <h2>Dashboard</h2>
        <p>Welcome to the admin dashboard. Here, you can manage various aspects of your application.</p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
         <tr>
            <td>{{$user->Id}}</td>
            <td>{{$user->Name}}</td>
            <td>{{$user->Email}}</td>
            <td>{{$user->Password}}</td>
            <td>{{$user->Username}}</td>
         
                <td>
                    <!-- Edit User Button (You can link this to your edit route) -->
                    <a href="{{ route('users.edit', $user->Id) }}" class="btn btn-warning btn-sm">
                        Edit <i class="fas fa-edit"></i>
                    </a>

                    <!-- Delete User Button (You can link this to your delete route) -->
                    <!-- <a href="{{route ('users.destroy', $user->Id)}}" class="btn btn-danger btn-sm">
                        Delete <i class="fas fa-trash"></i>
                    </a> -->
                    <!-- Delete User Button (You can link this to your delete route) -->
<form method="post" action="{{ route('users.destroy', $user->Id) }}" style="display:inline">
    @csrf
    @method('post')
    <button type="submit" class="btn btn-danger btn-sm">
        Delete <i class="fas fa-trash"></i>
    </button>
</form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Add User Modal -->


<!-- ... (previous script content) ... -->

</body>
</html>
<!-- Bootstrap JS and Font Awesome JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>

