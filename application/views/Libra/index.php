<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEGO Building Instructions Dashboard</title>
    <!-- Add your CSS links here -->
</head>
<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-dark position-absolute w-100"></div>
    
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar Section -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-white" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav>

                <!-- Navbar Right Section -->
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <!-- Search Bar -->
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Main Content Section -->
        <div class="container-fluid py-4">
            <!-- Search Section -->
            <div class="row mb-4">
                <div class="col-12">
                    <!-- Search Bar -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <input class="border border-gray-300 rounded p-2 w-64" placeholder="Search" type="text">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                                Search this collection
                            </button>
                        </div>
                        <a class="text-blue-500" href="#">Advanced Search</a>
                    </div>

                    <!-- Search Options -->
                    <div class="flex items-center space-x-4 mb-4">
                        <div>
                            <input checked id="metadata" name="search" type="radio">
                            <label for="metadata">Search metadata</label>
                        </div>
                        <div>
                            <input id="text-contents" name="search" type="radio">
                            <label for="text-contents">Search text contents</label>
                        </div>
                    </div>

                    <!-- Sort Options -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span>Sort by:</span>
                            <select class="border border-gray-300 rounded p-2">
                                <option>Weekly views</option>
                                <option>Title</option>
                                <option>Date published</option>
                                <option>Creator</option>
                            </select>
                        </div>
                        <div class="flex space-x-2">
                            <button class="p-2">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="p-2">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Items Grid Section -->
            <div class="row">
                <div class="col-12">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <!-- Item Template - Repeat for each item -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Simple & Powered Machines Set - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/JKlAL4pLS3y-lKIytMaHwk7SOSpotxovH6oStwBcnlI.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                9686 - Simple & Powered Machines Set - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>150</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>2</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Titanic - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/16vlvXtXc2FR6F8m59_iTnuseaWuEXZsbjEkwPmCKeg.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                10294 - Titanic - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>72</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>5</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="LEGO® MINDSTORMS® EV3 - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/GHhrgejRyWELR3blT8vLrCpMpU4ajAjXvh_RmwfPpyA.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                31313 - LEGO® MINDSTORMS® EV3 - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>57</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>1</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Porsche 911 RSR - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/Hcwk6J1G44CIM4I4SA4S4DpKnvFSyBhWv8bmDRxW4KA.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                42096 - Porsche 911 RSR - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>52</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>1</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Optimus Prime - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/ZTrQmx91Lct8RUlaa9fwBXOfDVI4yp1Nab--0ASuo-c.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                10302 - Optimus Prime - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>40</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>1</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Ferrari Daytona SP3 - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/2esNj8qnYxM3b_O2YgAH-PeAFumH1nBTQsWgzZWoh0s.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                42143 - Ferrari Daytona SP3 - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>40</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>1</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Holiday Main Street - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/7uNuBgYSUoNxSTOR-yIJQM4PPQQ6Ypipx3WYMqNpTlc.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                10308 - Holiday Main Street - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>37</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>0</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 8 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Bugatti Chiron - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/z-dq_hYwa8mwWK1rwoLVMRsozj6UlGXr9d9TEvvic0Q.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                42083 - Bugatti Chiron - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>34</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>0</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 9 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Great Pyramid of Giza - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/46ETpwVVf1Xc6NBKRLd68ysnMP53AEmdheU8jgGaAMc.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                21058 - Great Pyramid of Giza - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>29</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>0</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 10 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Disney 100th Celebration - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/4BRekQeeGJqCvjEvvb6SZIKjRTxlrP2hG4eMsykvSIc.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                40622 - Disney 100th Celebration - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>28</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>0</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 11 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Eiffel tower - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/6jB89VDO_dB6vP-lW_d3MKQM6Hxjd5LNjSMQ56ulwSw.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                10307 - Eiffel tower - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>27</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>2</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>

                        <!-- Item 12 -->
                        <div class="bg-white border rounded p-4">
                            <img alt="Porsche 911 - Building Instructions" 
                                 class="w-full h-40 object-cover mb-2" 
                                 src="https://storage.googleapis.com/a1aa/image/_gJNEa0fjbHUkStIbrzUEE_fnsbvicnpgbPf0NX_UB8.jpg">
                            <h3 class="text-lg font-semibold mb-2">
                                10295 - Porsche 911 - Building Instructions
                            </h3>
                            <div class="flex items-center justify-between text-gray-500 text-sm">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>25</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-star"></i>
                                    <span>2</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-comment"></i>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Add your JavaScript links here -->
</body>
</html>