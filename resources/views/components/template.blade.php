<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        #dropdown {
            display: none !important;
            position: absolute !important;
        }

        #category:hover .dropdown-menu {
            display: block !important;
        }

        #people {
            width: 100%;
            height: 30vw !important;
            object-fit: cover;
        }

        #headernih {
            margin-bottom: 0 !important;
        }

        #courseimage {
            border: 10px;
            margin: 0 !important;
            padding: 0 !important;
            padding-right: 200px;
            width: 720px;
            object-fit: cover;
            overflow: hidden;
        }

        body {
            overflow-x: hidden;
        }

        #primary {
            margin-left: auto;
            width: 300px;
            border-radius: 100px;
            height: 70px;
        }

        #footer {
            text-align: center;
            background-color: #0d6efd;
            height: 5vw;
            margin-top: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        #courseImage{
            border-radius: 20px !important;
            overflow: hidden;
            object-fit: contain;
            align-items: center;
            width: 620px;
            height: 620%;
        }

        .courseContainer{
            padding-left: 50px;
            padding-right: 50px;
        }

        .courseContainer div{
            margin-top: 50px;
        }

        #courseImageContainer{
            width: 650px;
            overflow: hidden;
            border-radius: 20px !important;
        }
    </style>

</head>

<body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" id="headernih">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Edu Fun</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="#" class="nav-link {{ $activePage == 'home' ? 'active' : '' }}" aria-current="page">Home</a>
            </li>

            <!-- Dropdowns -->
            <li class="nav-item" id="category">
                <a href="#" class="nav-link {{ $activePage == 'category' ? 'active' : '' }}">Category</a>
                <ul class="dropdown-menu position-static d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px" id="dropdown" data-bs-theme="light">
                    <li><a class="dropdown-item rounded-2" href="#">Interactive Multimedia</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item rounded-2" href="#">Software Engineering</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link {{ $activePage == 'writers' ? 'active' : '' }}">Writers</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ $activePage == 'about' ? 'active' : '' }}">About Us</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link {{ $activePage == 'popular' ? 'active' : '' }}">Popular</a>
            </li>
        </ul>
    </header>

    {{ $slot }}

    <div id="footer">
        © EduFun 2024 | Web Programming | Ali Hadi Musawa | 2602151494
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
