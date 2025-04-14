<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <style>
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 270px;
            background-color: #343a40;
            color: white;
            flex-shrink: 0;
        }

        .sidebar .nav-link {
            color: #ccc;
        }

        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background-color: #495057;
            color: white;
        }

        .main-content {
            flex-grow: 1;
            padding: 30px;
        }

        .card {
            margin-right: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
        }

        /* Profile Styling */
        .profile-info {
            background-color: #2d3238;
            border-radius: 10px;
            padding: 20px 15px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profile-info img {
            border-radius: 50%;
            width: 90px;
            height: 90px;
            object-fit: cover;
            border: 2px solid #fff;
            margin-bottom: 10px;
        }

        .profile-info h4 {
            color: #fff;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .profile-info a {
            display: inline-block;
            font-size: 0.9rem;
            color: #0d6efd;
            text-decoration: none;
        }

        .profile-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar d-flex flex-column p-3" style="height: 100vh;">
        <div class="profile-info">
        <img src="{{ asset('images/profile.png') }}" alt="Profile Picture">

            {{-- User Name --}}
            <h4>{{ Auth::user()->name }}</h4>

            {{-- Update Profile Link --}}
            <a href="{{ route('profile.edit') }}">
                <i class="fas fa-user-edit me-1"></i> Update Profile
            </a>
        </div>

        <hr>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('stock.index') }}" class="nav-link"><i class="fa fa-cogs me-2"></i>Inventory</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('products.view') }}" class="nav-link"><i class="fa fa-box me-2"></i>Products</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('stockin.view') }}" class="nav-link"><i class="fa fa-arrow-down me-2"></i>Stock In</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('stockout.view') }}" class="nav-link"><i class="fa fa-arrow-up me-2"></i>Stock Out</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reports.index') }}" class="nav-link"><i class="fa fa-chart-line me-2"></i>Reports</a>
            </li>

            {{-- Logout --}}
            <li class="nav-item mt-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-start w-100">
                        <i class="fa fa-sign-out-alt me-2"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
    {{-- Main Content --}}
<div class="main-content">
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <p>This is your admin dashboard. Manage your inventory features from the sidebar.</p>
    <div class="d-flex">
        <div class="card text-center flex-fill">
            <div class="card-header">📦 Inventory</div>
            <div class="card-body">
                <h3>{{ $totalStock }}</h3>
                <p>Total stock</p>
            </div>
        </div>
        <div class="card text-center flex-fill">
            <div class="card-header">⬇️ Stock In</div>
            <div class="card-body">
                <h3>{{ $totalStockIn }}</h3>
                <p>Total stockin</p>
            </div>
        </div>
        <div class="card text-center flex-fill">
            <div class="card-header">⬆️ Stock Out</div>
            <div class="card-body">
                <h3>{{ $totalStockOut }}</h3>
                <p>Total stockout</p>
            </div>
        </div>
    </div>
</div>


</body>
</html>
