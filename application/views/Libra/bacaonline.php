<main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom px-4">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://openlibrary.org/static/images/openlibrary-logo-tighter.svg" alt="Open Library" height="30" class="me-2">
            </a>

            <!-- Toggle (for mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Left side links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Books</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="browseDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Browse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="browseDropdown">
                            <li><a class="dropdown-item" href="#">Subjects</a></li>
                            <li><a class="dropdown-item" href="#">Authors</a></li>
                            <li><a class="dropdown-item" href="#">Collections</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Search -->
                <form class="d-flex align-items-center me-3">
                    <select class="form-select form-select-sm me-2" style="max-width: 80px;">
                        <option selected>All</option>
                        <option>Books</option>
                        <option>Authors</option>
                    </select>
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <!-- Barcode icon -->
                    <button class="btn btn-light btn-sm ms-2" type="button" title="Scan Barcode">
                        <i class="fas fa-barcode"></i>
                    </button>
                </form>

                <!-- Login & Sign Up -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-sm" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Your page content starts here -->
    <div class="container mt-4">
        <iframe></iframe>
        <h1>Selamat datang di opera van java</h1>
        <div class="container mt-4">
            <h1>Trending Books</h1>
            <div class="row">
                <div class="row" id="trending-books">

                    <!-- Buku dari API akan ditampilkan di sini -->
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button id="prevBtn" class="btn btn-outline-primary me-2" disabled>Previous</button>
                    <span id="pageIndicator" class="align-self-center">Page 1</span>
                    <button id="nextBtn" class="btn btn-outline-primary ms-2">Next</button>
                </div>

            </div>
        </div>
</main>