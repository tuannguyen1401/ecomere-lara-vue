<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dự án Laravel của Ba')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Vite Assets (Dùng chung cho cả site) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Chỗ để các trang con chèn thêm CSS riêng nếu có -->
    @stack('styles')
</head>

<body class="bg-light">

    <!-- Header / Navbar dùng chung -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-rocket me-2"></i>My App</a>
        </div>
    </nav>

    <!-- NỘI DUNG CHÍNH CỦA TỪNG TRANG SẼ ĐỔ VÀO ĐÂY -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chỗ để các trang con chèn thêm JS riêng -->
    @stack('scripts')
</body>

</html>