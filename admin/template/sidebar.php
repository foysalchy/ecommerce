

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="../index.php">
          <?php
            $result=$site->getLogo();
            if($result){
              while($value=$result->fetch_assoc()){
          ?>
          <img src="<?php echo $value['logo'];?>" class="navbar-brand-img" alt="...">
          <?php }}?>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-bullet-list-67 text-primary"></i>Site Option</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Logo.php">Logo Change</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Front-Logo.php">Home Logo Change</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="cmdetails.php">Company Details</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="social.php">Social Link</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="features.php">Features</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="footer-info.php">Footer</a></li>
              </ul>
            </li>
            <li class="nav-item">
            
            <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-single-02 text-primary"></i>User</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="auser-list.php">Active User</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="duser-list.php">Deactive User</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="bank.php">Bank Details</a></li>
                 <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="eligible.php">Eligible User</a></li>
            </ul>
          </li>
            <li class="nav-item">
            
                <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-tag text-primary"></i>Category</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                    <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Add-Category.php">Add New Category</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Category-List.php">Category List</a></li>
                </ul>
            </li>
            <li class="nav-item">
            
            <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-world text-primary"></i>State</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Add-State.php">Add New State</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="State-List.php">State List</a></li>
            </ul>
          </li>
          <li class="nav-item">
            
            <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-world text-primary"></i>Countries</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Add-Country.php">Add New Country</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Country-List.php">Country List</a></li>
            </ul>
          </li>
            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-shop text-primary"></i>Shop</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Add-Product.php">Add New Product</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Product-List.php">Product List</a></li>
                  
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="add-cupon.php">Add Cupon</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="cupon-list.php">Cupon List</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="order-list.php">Order List</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="invoice.php">Invoice List</a></li>
                  
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-image text-primary"></i>Slider</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Add-Slider.php">Add New Slider</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Slider-List.php">Slider List</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-credit-card text-primary"></i>Cash History</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="bonuse-history.php">Bonuse History</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Cashin.php">Cash In</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="withdraw-history.php">Withdraw History</a></li>
                  
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kyc.php">
                <i class="ni ni-badge text-primary"></i>
                <span class="nav-link-collection">KYC</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="About.php">
                <i class="ni ni-single-copy-04 text-primary"></i>
                <span class="nav-link-collection">About Us</span>
              </a>
            </li>

            
          </ul>
        </div>
      </div>
    </div>
  </nav>