<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .sidebar {
            background-color: #0c0c0c;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu-item {
            border-bottom: 1px solid #e5e5e5;
        }

        .sidebar-menu-link {
            display: block;
            padding: 12px 20px;
            color: #f5e8e8;
            text-decoration: none;
        }

        .sidebar-menu-link:hover {
            background-color: #1a1717;
        }



        .submenu {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .submenu li a {
            display: block;
            padding: 8px 20px;
            color: #ede2e2;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-item has-submenu">
                <a href="#" class="sidebar-menu-link">Items


                </a>
                <i class="bi bi-menu-up"></i>
                <ul class="submenu">
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Sub category</a></li>
                    <li><a href="#">Add a product</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="container" style="margin-left: 250px">
        <h1>Main content</h1>
        @yield('main')
    </div>
    <script>
        const submenus = document.querySelectorAll(".has-submenu .submenu");


        document.querySelectorAll(".has-submenu > .sidebar-menu-link").forEach(link => {
            link.addEventListener("click", (e) => {

                e.preventDefault();

                const submenu = e.target.parentNode.querySelector(".submenu");

                if (submenu.style.display === "block") {
                    submenu.style.display = "none";
                } else {
                    submenu.style.display = "block";
                }
            });
        });
    </script>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</body>

</html>
