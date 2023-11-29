<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>News TidBits</title>
</head>
<body>



  <div class="container-fluid">


         <div class="row">
            <div class="mt-4 p-5 bg-danger text-white rounded">
                    <h1>News TidBits</h1>
                    <p>Your input contain(s) error(s) please check the description below.

                    </p>
            </div>
        </div>


            <div class="row">
                        <table class="table table-hover table-error  table-striped">
                            <tr>
                                <th>Field name</th>
                                <th>Error Description</th>
                            </tr>
                            <tr>
                                <?php foreach($errors as $key => $value): ?>
                                        <tr>
                                            <td>
                                                <?=$key?>
                                            </td>
                                            <td>
                                            <?=$value?>
                                            </td>
                                        </tr>

                                <?php endforeach; ?>
                            </tr>
                        </table>
            </div>

            <div class="row">
                    <a  class="btn btn-info" href="<?=base_url()?>/news" role="button">Back</a>
            </div>

    </div>
</body>
</html>