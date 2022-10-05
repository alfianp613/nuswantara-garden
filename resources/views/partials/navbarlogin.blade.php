<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <style>
            /* CSS NAVBAR */
            /* color navbar n toggler */
            .navbar {
                background-color: #2c4a44;
            }
            /* 3 lines inside toggler */
            .custom-toggler .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(179,187,153, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }
            /* border toggler */
            .custom-toggler.navbar-toggler {
                border-color: #b3bb99;
            }
            /* color text */
            .navbar-brand {
                color: #b3bb99;
                font-weight: bold;
            }
            .navbar-brand:hover {
                color: #ece3d4;
            }
            .nav-link {
                color: #b3bb99;
            }
            .nav-link:hover {
                color: #ece3d4;
            }
            /* CSS NAVBAR END */
        </style>
        <nav class="navbar navbar-expand-lg">
            <!-- navbar-light bg-light -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">NUSWANTARA</a>
                <button
                    class="navbar-toggler custom-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarNavAltMarkup"
                >
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">LINK A</a>
                        <a class="nav-link" href="#">LINK B</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->