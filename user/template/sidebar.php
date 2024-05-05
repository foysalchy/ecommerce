

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
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem2" data-toggle="dropdown"><i class="ni ni-bullet-list-67 text-primary"></i>Menu</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem2">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="../index.php">Home </a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="../shop.php">Shop</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="../contact.php">Contact Us</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="../cart.php">Cart</a></li>
              </ul>
            </li> 

            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-bullet-list-67 text-primary"></i>Team</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Join.php">Add Member</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="tree.php">Tree View</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Direct.php">My Direct</a></li>
                   <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Team.php">My Team</a></li>
              </ul>
            </li> 

            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-box-2 text-primary"></i>Product Details</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="order.php"> Order</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="invoice.php">Invoice</a></li>
              </ul>
            </li> 

            <li class="nav-item">
              <a href="#" class="dropdown-toggle nav-link" id="ddlmenuItem" data-toggle="dropdown"><i class="ni ni-money-coins text-primary"></i>Transaction</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="Cashin.php">Self Order</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="withdraw-history.php">Payout History</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" role="menuitem" tabindex="-1" href="withdraw.php">Bank Details</a></li>
              </ul>
            </li> 
            <li class="nav-item">
              <a class="nav-link active" href="kyc.php">
                <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">KYC Verify</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="shop.php">
                <i class="ni ni-box-2  text-primary"></i>
                <span class="nav-link-text">Buy Products</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>