<?php
     include '../root/Header.php';
?>
</head>

<body style="background-color: black;">
    <div class="box">

    </div>
    <div class="menu">
        
        <ul class="list-unstyled components ">
            <div id='forProfile' style='display: grid;margin: 0%;padding: 0%;'>
                <img src="photo_2024-09-08_21-28-39.jpg" alt="" id='forImg' style='width: 80px; height: 80px;border-radius: 50%; margin:auto'>
                <h5 style='color:green ; text-align:center'>Hm Leap</h5>
                <p style='color:white ; text-align:center; font-size:x-small' >CEO&ADMIN</p>
            </div>
            <li>
                <a href="../Dasborad/IndexDasbord.php" target="content"><i class="fa-solid fa-gauge" style="margin-right: 10px;"></i>Dasborad</a>
            </li>
            
            <!-- Set Up -->
            <li class="active">

                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog" aria-hidden="true" style="margin-right: 10px;"></i> Set Up</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" style="margin-left: 20px;">
                    <li>
                        <a href="../view/Menu/index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Menu</a>
                    </li>
                    <li>
                        <a href="../submenu/Index.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Footer</a>
                    </li>
                   
                </ul>
            </li>

            <!-- Product promotion -->
            <li class="active">
                <a href="#Order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-cart-plus" style="margin-right: 10px;"></i>Product Promotion</a>
                <ul class="collapse list-unstyled" id="Order" style="margin-left: 20px;">
                    <li>
                        <a href="../view/Hhome/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Home</a>
                    </li>
                    <li>
                        <a href="../view/Trending/Trdinterface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Trending</a>
                    </li>
                   
                    <li>
                        <a href="../view/New/NewInterface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>New</a>
                    </li>
                    <li>
                        <a href="../view/Discount/DisInterface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Discount</a>
                    </li>
                </ul>
            </li>
            <!-- Product management -->
            <li class="active">
                <a href="#Orderx" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-cart-plus" style="margin-right: 10px;"></i>Product Management</a>
                <ul class="collapse list-unstyled" id="Orderx" style="margin-left: 20px;">
                    <li>
                        <a href="../view/Book/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Book</a>
                    </li>
                    <li>
                        <a href="../view/Game/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>GameBoard</a>
                    </li>
                   
                    <li>
                        <a href="../view/Fashion/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Fashion</a>
                    </li>
                    <li>
                        <a href="../view/Clothes/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Clothes</a>
                    </li>
                    <li>
                        <a href="../view/HouseStuff/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>HouseStuff</a>
                    </li>
                    <li>
                        <a href="../view/Freelance/interface.php" target="content"><i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-right: 10px;"></i>Freelane</a>
                    </li>
                </ul>
            </li>

            <!-- Manage User -->
            <li class="active">
                <a href="#User" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage User</a>
                <ul class="collapse list-unstyled" id="User" style="margin-left: 20px;">
                    <li>
                        <a href="../AddUserAdmin/index.php" target="content">User Admin</a>
                    </li>
                    <li>
                        <a href="../AddNormalUser/index.php" target="content">User</a>
                    </li>
                </ul>
            </li>

            <!-- Report -->
            <li class="active">
                <a href="#Report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Report</a>
                <ul class="collapse list-unstyled" id="Report" style="margin-left: 20px;">
                    <li>
                        <a href="Customer/index.php" target="content">Sale Product</a>
                    </li>
                    <li>
                        <a href="Customer/index.php" target="content">Stock Product</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
   
</body>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        // $('#sidebarCollapse').on('click', function () {
        //     $('#sidebar, #content').toggleClass('active');
        //     $('.collapse.in').toggleClass('in');
        //     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        // });
    });
</script>
</html>