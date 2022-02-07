<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dynamic Dependent</title>
        <!--ajax cdn link-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--bootstrap 4 cdn link-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h4 class="text-uppercase text-center my-5">Please select the program and Framework to continue</h4>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="">
                        <div class="form-content">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">PROGRAM</span>
                                </div>
                                <select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip"
                                        title="Please Select Your Fav Lang" onchange="mylang(this.value)">
                                    <option value="">Select Here</option>
                                    <option value="PHP">PHP</option>
                                    <option value="JAVASCRIPT">JAVASCRIPT</option>
                                    <option value="PYTHON">PYTHON</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2">FRAMEWORK</span>
                                </div>
                                <select class="form-control" aria-describedby="basic-addon2"  id="frameworklist">
                                    <option value="">Select Here</option>
                                </select>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


        <script>
            function mylang(date)
            {
                window.alert(date);

                $req = new XMLHttpRequest();
                $req.open('GET','http://localhost/aJAX/ajaxcrudoperation/getdata.php?value='+date, true);
                $req.send();
                $req.onreadystatechange = function ()
                {
                    if($req.readyState == 4 && $req.status == 200)
                    {
                        document.getElementById("frameworklist").innerHTML = $req.responseText;
                    }
                }

            }
        </script>
    </body>
</html>
