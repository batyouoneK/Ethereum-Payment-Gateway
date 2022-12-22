
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@metamask/legacy-web3@latest/dist/metamask.web3.min.js"></script>
    <!-- Right Panel -->
    <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ETH Payment</title>

  <!-- Custom fonts for this template-->
  <link href="all.min.css" rel="stylesheet" type="text/css">
  <link href="sb-admin-2.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ETH <sup>Payment</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
    

      <!-- Nav Item - Pages Collapse Menu -->
    

      <!-- Nav Item - Utilities Collapse Menu -->
    



      <!-- Heading -->
   

   

      <!-- Nav Item - Charts -->
      

    

      <!-- Divider -->


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                 
                  <?php 
                        $place = "";
						
						if(empty($payments)) {
							
						} else {
							
							foreach($payments as $payment) {
                        $place = ++$place;
                      ?>
                        
                        <tr>

							<td>
							<?php if($payment->status == 0) : ?>

							<?php else: ?>
							
								<?php if($payment->status == 100) : ?>
								
                  <div>
                    <div class="small text-gray-500"><?php echo $payment->deposit_date; ?></div>
                    <span class="font-weight-bold">Your <?php echo $payment->value; ?> Dogecoin deposit has been created !</span>
                  </div>
									<button type="button" class="btn btn-success btn-sm">Complete</button>
								
								<?php else: ?>
								
								<?php endif; ?>

							<?php endif; ?>
							</td>
						</tr>
                        
                      <?php } ?> 
							
						<?php } ?>
                </tbody>
            </table>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->







                   
                  <!--                                                      Javascript Proje Başlangıcı                                                                 --> 
<div class="row">

    <div class="col-xs-12 col-md-12 text-center">
    
        <h1>Top Up Balance</h1>
        <br>
        
    </div>
    <br>
    <div class="col-xs-12 col-md-12 col-12">
   

<?php 
 if ($_POST) {
     $deger = $_POST['price'];
     Global $deger;
     ?> 
<style>
.btn1 {
  background:green;
}
.btn2 {
  background:#187207;
}
  </style>
 <div id="status"></div>
<button class="pay-button btn btn-info btn-block btn1">Accept</button>

<script type="text/javascript">


window.addEventListener('load', async () => { 
  if (window.ethereum) {
    window.web3 = new Web3(ethereum); // Ethereum kütüphanesi kullanılarak web3 üzerinde bir etheruem pencere isteği oluşturdum .
    try {
      await ethereum.enable();  // Kullanıcı - Metamask vb gibi hangi soğuk cüzdanı kullanıyorsa - o cüzdan uygulamasına bir cüzdanına giriş yap paneli açma talebinde bulunuldu .
      initPayButton() 
    } catch (err) {
      $('#status').html('Cüzdana giriş kullanici tarafindan sağlanamadi', err) // Kullanıcı cüzdan girişini yapmadıysa hata aldı .
    }
  } else if (window.web3) {
    window.web3 = new Web3(web3.currentProvider) // Eğer Web3(ethereum) çağrısı kullanılarak açılamadıysa cüzdan PopUp'ı başka bir yöntem deniyoruz . ( Totalde 40 dan farklı soğuk cüzdan uygulaması vardır , aralarından birkaç tanesi düz ethereum çağrısına tepki vermezler ).
    initPayButton()
  } else { 
    $('#status').html('Metamask ya da başka soğuk cüzdan bulunamadi , lütfen yükleyip tekrar deneyiniz .') // Hiçbir çağrı yöntemine cevap alınamadıysa , kullanıcıda herhangi bir soğuk cüzdan kurulu değildir .
  }
})

const initPayButton = () => {
  $('.pay-button').click(() => {
    // paymentAddress değişkeni kullanıcıların satın alım sonucu varlıklarının gönderileceği yönetici cüzdan adresinidir .
    const paymentAddress = '0xF01b04e803D305aed27124f41eA94cC17b69362D'
    const amountEth = <?php echo $deger ?> // Soğuk cüzdana Web3 üzerinden çağrı yapılması üzerine belirlenen ( kullanıcının yatırmak istediği ethereum miktarını ) gösteren değişkendir . Bu miktar yönetici cüzdanına kullanıcı onayı sonrası aktarılır .

    web3.eth.sendTransaction({ // Ethereum(web3) kütüphanesi ile eth.sendTransaction yani bir çağrı gönder , to: bu cüzdan adresine ++
      to: paymentAddress,
      value: web3.toWei(amountEth, 'ether') // Value değeri toWei yani (gwei) değişkenini alır , çünkü bir çağrı gönderebilmek için göndermek istediğiniz ethereum miktarını "gwei" cinsinden belirtmeniz gereklidir . Bu da her bir gwei 0,000000001 ETH yani 1 üzeri -9 ETH'ye eşittir.
      
    }, (err, transactionId) => {
      if  (err) {
        console.log('Ödeme başarisiz.', err) // Kullanıcıya yukarı bölümde gönderilen çağrı eğer kullanıcı tarafından onaylanmazsa kod bloğu bu bölümü gösterir .
        $('#status').html('Ödeme başarisiz.')
      } else { // Eğer ödeme başarısız değil ve kullanıcı tarafından ağa paymentAddress değişkeninde belirlenen cüzdan adresine amountEth değerindeki kadar ETH transferi yapılmasına onay verildiyse :
        console.log('Ödeme başarili', transactionId)
        document.getElementById("transid").innerHTML = "Aşağida bulunan işlem hash'ini bu link'in devamini kullanarak sorgulatabilirsiniz. https://testnet.bscscan.com/tx/" + "<br> " + transactionId; // Blockchain üzerinde gerçekleşen her işlemin bir hash id'si vardır , buna da transactionId adı verilir . Bu ID'yi çıktı olarak gösteriyoruz.
        $('#status').html('<?php $b = 1;?>')
        $('#status').html('<?php $a = "Payment Successfull !"; echo $a;?> <form action="get.php" method="post"> <input type="hidden" name="deneme" value="<?php echo $deger?>"><button type="submit" class="btn btn-info btn-block btn2">Claim Your Balance</button><br></form>')
      }
    })
  })
}
</script>

<?php } ?>
<!--                                                      Javascript Proje Bitişi                                                                 --> 












        <div class="card">
            <div class="card-header">
                <strong class="card-title">You can top up the balance by entering the amount of ETH in the space below.</strong>
            </div>
            <div class="card-body">
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Top up Balance with ETH</h3>
                        </div>
                        <hr>
                        <form method="post">
               
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Deposit amount with ETH</label>
                                <input id="amount" name="price" type="text" class="form-control" placeholder="ETH Amount">
                            </div>

                            <div>
                            <button type="submit" class="btn btn-info btn-block">
                            <img src="metamask.png" style="width:35px;height:35px;"/>&nbsp;
                                <span id="payment-button-amount">Top up with Metamask</span>
                            </button>
                            </div>
                        </form>
                        
                    </div>
                    
                    <p id="transid"></p>
                </div>
            </div>
        </div>
        
    </div>

</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

