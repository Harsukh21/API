<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title>iPayTotal</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
</head>
<body style="background-color: #102963;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="#">
                    iPayTotal Form
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <?php
                            if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 'success') {
                        ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success!</strong> Your Transaction was processed successfully!!
                            </div>
                        <?php
                            unset($_SESSION["status"]);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['status']) && !empty($_SESSION['status']) && $_SESSION['status'] == 'fail') {
                        ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success!</strong> Your Transaction was not processed successfully!!
                            </div>
                        <?php
                            unset($_SESSION["status"]);
                            }
                        ?>
                        <div class="card card-default">
                            <div class="card-header">iPayTotal API Form</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="submit.php">
                                    <input type="hidden" name="merchant_id" value="287">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name" class="col-md-12 col-form-label">First Name</label>
                                                <div class="col-md-12">
                                                    <input id="first_name" type="text" class="form-control" name="first_name" value="" autofocus placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name" class="col-md-12 col-form-label">Last Name</label>
                                                <div class="col-md-12">
                                                    <input id="last_name" type="text" class="form-control" name="last_name" value="" autofocus placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address" class="col-md-12 col-form-label">Address</label>
                                                <div class="col-md-12">
                                                    <input id="address" type="text" class="form-control" name="address" value="" autofocus placeholder="Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="col-md-12 col-form-label">Country (Ex. US)</label>
                                                <div class="col-md-12">
                                                    <input id="country" type="text" class="form-control" name="country" value="" autofocus placeholder="Country (Ex. US)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state" class="col-md-12 col-form-label">State</label>
                                                <div class="col-md-12">
                                                    <input id="state" type="text" class="form-control" name="state" value="" autofocus placeholder="State">
                                                    <code>if your country US then use only 2 letter state code.</code>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city" class="col-md-12 col-form-label">City</label>
                                                <div class="col-md-12">
                                                    <input id="city" type="text" class="form-control" name="city" value="" autofocus placeholder="City">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="zip" class="col-md-12 col-form-label">Zip Code</label>
                                                <div class="col-md-12">
                                                    <input id="zip" type="text" class="form-control" name="zip" value="" autofocus placeholder="Zip Code">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="col-md-12 col-form-label">Email</label>
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email" value="" autofocus placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone_no" class="col-md-12 col-form-label">Phone No.</label>
                                                <div class="col-md-12">
                                                    <input id="phone_no" type="text" class="form-control" name="phone_no" value="" autofocus placeholder="Phone No.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="card_type" class="col-md-12 col-form-label">Select Card</label>
                                                <div class="col-md-12">
                                                    <select class="form-control" name="card_type">
                                                        <option selected disabled> -- Select Card -- </option>
                                                        <option value="1">Amex</option>
                                                        <option value="2">Visa</option>
                                                        <option value="3">Mastercard</option>
                                                        <option value="4">Discover</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="amount" class="col-md-12 col-form-label">Amount</label>
                                                <div class="col-md-12">
                                                    <input id="amount" type="text" class="form-control" name="amount" value="" autofocus placeholder="Amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="currency" class="col-md-12 col-form-label">Currency (Only support 3 digit currency code.)</label>
                                                <div class="col-md-12">
                                                    <input id="currency" type="text" class="form-control" name="currency" value="" autofocus placeholder="Currency (Only support 3 digit currency code.)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="card_no" class="col-md-12 col-form-label">Card No.</label>
                                                <div class="col-md-12">
                                                    <input id="card_no" type="text" class="form-control" name="card_no" value="" autofocus placeholder="Card No.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ccExpiryMonth" class="col-md-12 col-form-label">Select Month</label>
                                                <div class="col-md-12">
                                                    <select class="form-control" name="ccExpiryMonth">
                                                        <option selected disabled> -- Select Month -- </option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ccExpiryYear" class="col-md-12 col-form-label">Select Year</label>
                                                <div class="col-md-12">
                                                    <select class="form-control" name="ccExpiryYear">
                                                        <option selected disabled> -- Select Year -- </option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                        <option value="2034">2034</option>
                                                        <option value="2035">2035</option>
                                                        <option value="2036">2036</option>
                                                        <option value="2037">2037</option>
                                                        <option value="2038">2038</option>
                                                        <option value="2039">2039</option>
                                                        <option value="2040">2040</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cvvNumber" class="col-md-12 col-form-label">CVV</label>
                                                <div class="col-md-12">
                                                    <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="" autofocus placeholder="CVV">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-2 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary btn-block" id="submitForm" style="color: #fff; font-weight: bold; background-color: #091737">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#p_card_issuingbank').val('');
            $('#p_card_issuingbank').attr('readonly', false);
            $("#p_card_num").focusout(function() {
                var cardNo = $(this).val();
                var digit = cardNo.substring(0,6);
                console.log(digit);
                $.ajax({
                    url: 'https://lookup.binlist.net/'+digit,
                    type: 'post',
                    headers: {
                        'Accept-Version': '3'
                    },
                    success: function (data) {
                        if(data.bank.name) {
                            $('#p_card_issuingbank').val(data.bank.name);
                            $('#p_card_issuingbank').attr('readonly', true);
                        } else {
                            toastr.warning('Card Issueing Not Fount, Please Fill Manually...');
                            $('#p_card_issuingbank').attr('readonly', false);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
