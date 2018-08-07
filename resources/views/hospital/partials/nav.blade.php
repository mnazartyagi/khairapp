
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html">Natukair</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="{{route('hospital.dashboard')}}">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
              <a class="nav-link" href="{{route('hospital.getprofile')}}">
                <i class="fa fa-user"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Document">
              <a class="nav-link" href="{{route('hospital.getdocuments')}}">
                <i class="fa fa-file"></i>
                <span class="nav-link-text">Document</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Document">
                <a class="nav-link" href="{{route('hospital.getupdates')}}">
                  <i class="fa fa-file"></i>
                  <span class="nav-link-text">Updates</span>
                </a>
              </li>
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payment">
              <a class="nav-link" href="#">
                <i class="fa fa-credit-card"></i>
                <span class="nav-link-text">Payment</span>
              </a>
            </li>-->
          </ul>
          <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
              <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
          </ul>
        </div>
      </nav>