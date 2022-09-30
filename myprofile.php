<?php include 'header-2.php'; ?>
 <style type="text/css">
        body{
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-body">
<!--Inner Home Banner Start-->
      <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
              <div class="wt-innerbannercontent">
              <div class="wt-title"><h2> My Profile</h2></div>
              <ol class="wt-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="wt-active">My Profile</li>
              </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <!-- Button to Open the Modal -->
         <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i>
            Edit Profile
          </button>
         <!-- The Modal -->
      <div class="modal" id="myModal">
      <div class="modal-dialog">
      <div class="modal-content">
          <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> Edit Profile </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="col-sm-3">
            <h4 class="mb-0">Nama : </h4>
            </div>        
      <input type="text" class="form-control" placeholder="Masukan Nama..." name="text1">
      <div class="col-sm-3">
        <br>
            <h4 class="mb-0">Username : </h4>
            </div>        
      <input type="text" class="form-control" id="Username" placeholder="Masukan Username..." name="Username">
      <div class="col-sm-3">
        <br>
            <h4 class="mb-0">Kelamin : </h4>
            </div>        
      <input type="text" class="form-control" placeholder="Masukan Jenis Kelamin..." name="text1">
      <div class="col-sm-3">
        <br>
            <h4 class="mb-0">TTL :</h4>
            </div>        
      <input type="text" class="form-control" id="Tanggal" placeholder="Masukan TTL.." name="Tanggal">
      <div class="col-sm-3">
        <br>
            <h4 class="mb-0">No Hp : </h4>
            </div>        
      <input type="number" class="form-control" placeholder="Masukan No Hp..." name="number">
      <div class="col-sm-3">
        <br>
            <h4 class="mb-0">Email : </h4>
            </div>        
      <input type="text" class="form-control" id="Email" placeholder="Masukan Email..." name="text1">
      <div class="col-sm-3">
        <br>
            <h4 class="mb-0">Alamat : </h4>
            </div>        
      <input type="text" class="form-control" placeholder="Masukan Alamat..." name="text1">
    </div>
   <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
            </div>
        </div>
            </div>
              </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Nama</h5>
                    </div>
                        <h5 class="col-sm-9 text-secondary">
                      Kenneth Valdez
                  </h5>
              </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Username </h5>
                    </div>
                    <h5 class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </h5>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Jenis Kelamin </h5>
                    </div>
                    <h5 class="col-sm-9 text-secondary">
                      Laki - Laki
                    </h5>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Tanggal Lahir </h5>
                    </div>
                    <h5 class="col-sm-9 text-secondary">
                      12/06/1999
                    </h5>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Handphone </h5>
                    </div>
                    <h5 class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </h5>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Email </h5>
                    </div>
                    <h5 class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </h5>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Alamat </h5>
                    </div>
                    <h5 class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </h5>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
<?php include 'footer-2.php'; ?>