<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Simple POS Login</title>
</head>

<body>
    <div class="container">

    <div class="row">
            <div class="mt-4 p-5 bg-primary text-white rounded">
                    <h1>News TidBits Login</h1> 
            </div>
            </div>
            <br>  
        <div class="row">
            <div class="col-sm">
        
            </div>
            <div class="col-sm">
                    <form action="<?=base_url()?>login"  method="post">
                            <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name</label> 
                                <div class="col-8">
                                <input id="username" name="username" type="text" class="form-control">
                                </div>
                            </div>
                            <br >
                            <div class="form-group row">
                                <label for="password" class="col-4 col-form-label">Password:</label> 
                                <div class="col-8">
                                <input id="password" name="password" type="password" class="form-control">
                                </div>
                            </div>
                    
                            <br />
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <div class="text-center">
                                        <button name="submit" type="submit" class="btn btn-primary">Sign In</button>
                                
                                    </div>
                                </div>    
                            </div>
                    </form>
                </div>
                <div class="col-sm">
                
                </div>


        </div>
    </div>
</body>
</html>