<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="registration.php" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registration Form</h3>
                <!-- <p>Please enter your user information.</p> -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nick" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" name="password" type="password" required="true" placeholder="Password" autocomplete="off">
                </div>
                <!-- code for multiple div in sign up-->
                <div class="form-group btn-group-sm">
                    <input class="form-control form-control-lg" id="tank_no" name="tank_no" type="number" required="true" placeholder="Number of Tanks"></br>
                    <input class="btn btn-primary" type="button" value="Register Tank" onclick="register_tank()"/></br>
                </div>   

                <!-- <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Confirm">
                </div> -->
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-success" type="submit">Register My Account</button>
                </div>
                
                <!-- <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div> -->
                <!-- <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div> -->
            <!-- </div> -->
            <div class="card-footer bg-white">
                <p>Already member? <a href="index.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>
<script type="text/javascript">
    function register_tank() 
    {
        let number=document.getElementById("tank_no").value;
        if(number=='' || number==0)
        {
            alert("Enter a valid value greater than 0.");
        }
        else
        {
            let arr=[];
            const code_len=10;
            for (var i = 0; i < number; i++) {
                let tank_id=prompt("Enter Tank ID "+(i+1));
                if(tank_id.length==code_len)
                {
                    arr.push(tank_id);   
                }
                else
                {
                    while(tank_id.length != code_len)
                    {
                        alert("Enter 10 digit Tank ID Code..")
                        tank_id=prompt("Enter Tank ID "+(i+1));
                        if (tank_id.length==code_len)
                         {
                            arr.push(tank_id);
                         }
                    }
                }
                
            }
            // console.log(arr);
        }
    }
</script>
 
</html>