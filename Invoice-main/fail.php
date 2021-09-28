<?php
date_default_timezone_set('Asia/Calcutta');
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="pdf.js"></script>

    <title>Invoice..!</title>
</head>

<body>

    <div class="my-5 page" size="A4" id="invoice">
    <div class="col-md-12 text-right mb-3">
                <button style="margin-top:10px;" class="btn btn-primary" id="download"> download pdf</button>
    </div>
        <div class="p-5">
            <section class="top-content bb d-flex justify-content-between">
                <div class="logo">
                  <h1 style="color:#FF0000" >Transaction-Failed</h1>
                </div>
                <div class="top-left">
                    
                    <div class="position-relative">
                        
                    </div>
                </div>
            </section>

            <section class="store-user mt-5">
                <div class="col-10">
                    <div class="row bb pb-3">
                        <div class="col-7">
                            <p></p>
                            <h2>Offspring Foundation</h2>
                            <p class="address">Office: Apex Tower, Meerut</p>
                            <div class="txn mt-2">TXN: #<?php echo rand(100,1000)?></div>
                        </div>
                        
                    </div>
                    <div class="row extra-info pt-3">
                        <div class="col-7">
                            <p>Payment Method: <span>Paytm</span></p>
                            <p>Order Number: <span>#<?php echo rand(10000,99999999)?></span></p>
                        </div>
                        <div class="col-5">
                            <p>Deliver Date: <span><?php echo $today = date("F j, Y, g:i a") ?></span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <td>Name</td>
                            <td>E-Mail</td>
                            <td>Amount</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color:#FF0000"><?php echo $_SESSION["name"];?></td>
                            <td style="color:#FF0000"><?php echo $_SESSION["email"];?></td>
                            <td style="color:#FF0000"><?php echo $_SESSION["message"];?></td>
                            <td style="color:#FF0000">Failed</td>
                        </tr>
                        
                    </tbody>
                </table>
            </section>

            <section class="balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold"> Note: </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus, adipisci vero est dolore praesentium.</p>
                    </div>
                    

                        <!-- Signature -->
                        <div class="col-12">
                            <img style="width: 100px;" src="signature.png" class="img-fluid" alt="">
                            <p class="text-left m-0"> Director Signature </p>
                        </div>
                    </div>
                </div>
            </section>

            
           
            <footer>
                <hr>
                <p class="m-0 text-center">
                    If you are having any query then drop us a mail - <a href="mailto:tusharmunnu@gmail.com">tusharmunnu@gmail.com</a>
                </p>
                <div class="social pt-3">
                    <span class="pr-2">
                        <i class="fas fa-mobile-alt"></i>
                        <span>/8864881056</span>
                    </span>
                    <span class="pr-2">
                        <i class="fas fa-envelope"></i>
                        <span>/tusharmunnu.com</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-facebook-f"></i>
                        <span>/Tushar Garg</span>
                        </span>
                    <span class="pr-2">
                        <i class="fab fa-github"></i>
                        <span>/tushar5588</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-instagram"></i>
                        <span>/_garg_tushar_22</span>
                    </span>
                </div>
                </hr>
            </footer>
        </div>
    </div>










</body>

</html>