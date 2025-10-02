<div class="container-fluid main">
    <div class="row">
        <div class="col-md-2 col-sm-12 top-left m-0 p-0" style="background-color: #dfdff8ff;">

            <div class="logo-area">
                <img src="/E-Commerce/Home/Images/logos.png" alt="..." height="90px" width="130px">
                <span class="fas fa-bars" id="bars" onclick="bars()"></span>
            </div>
            <hr>

            <div class="das_icon" id="navi">
                <nav>
                    <a href="../Index/index.php"
                        style="background-color: #081414ff; color: #efeff3ff; margin-right: 14px; border-radius: 5px;">
                        <i class="fas fa-th-large" style="margin-right: 13px; color: #4649FF; padding-left: 10px;"></i>
                        Dashboard
                    </a>

                    <a href="#" style="margin-top: 10px;" onclick="show()">
                        <i class="fab fa-product-hunt" style="margin-right: 13px;"></i> Products 
                        <i class="fas fa-angle-right" id="drop1"></i>
                    </a>
                    <div id="submenu">
                        <a href="../Index/Add_Product.php"><i class="fas fa-plus"></i> Add</a>
                        <a href="../Index/view.php"><i class="fas fa-eye"></i> View</a>
                    </div>

                    <a href="#" onclick="show1()">
                        <i class="fas fa-shopping-cart" style="margin-right: 12px;"></i> Orders 
                        <i class="fas fa-angle-right" id="drop2"></i>
                    </a>
                    <div id="submenu2">
                        <a href="../Index/orderview.php"><i class="fas fa-eye"></i> View</a>
                    </div>

                    <a href="#" onclick="show3()">
                        <i class="fas fa-user-friends" style="margin-right: 11px;"></i> Customers 
                        <i class="fas fa-angle-right" id="drop3"></i>
                    </a>
                    <div id="submenu3">
                        <a href="../Index/customerview.php"><i class="fas fa-eye"></i> View</a>
                    </div>

                    <a href="#" onclick="show4()">
                        <i class="fas fa-sticky-note" style="margin-right: 16px;"></i> Transactions
                        <i class="fas fa-angle-right" id="drop4"></i>
                    </a>
                    <div id="submenu4">
                        <a href="../Index/transactview.php"><i class="fas fa-eye"></i> View</a>
                    </div>

                    <!-- ✅ Reviews Section -->
                    <a href="#" onclick="show5()">
                        <i class="far fa-star" style="margin-right: 14px;"></i> Reviews
                        <i class="fas fa-angle-right" id="drop5"></i>
                    </a>
                    <div id="submenu5">
                        <a href="../Index/reviews.php"><i class="fas fa-eye"></i> View</a>
                    </div>

                </nav>
            </div>

        </div>
