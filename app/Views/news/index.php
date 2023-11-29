<!-- <h2><?= esc($title) ?></h2> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>News TidBits</title>
</head>


<div class="container">
<div class="row">

    <div class="col">
      <form action="<?=base_url()?>news/article" method="post">  
         <div class="form-group row">
            <div class="mb-3">
                    <label for="newstitle" class="form-label">News Title</label>
                    <input type="text" class="form-control" id="newstitle" name="newstitle">
            </div>
        </div>
        <div class="form-group row">
            <div class="mb-3">
                    <label for="newslug" class="form-label">News Slug</label>
                    <input type="text" class="form-control" id="newslug" name="newslug">
            </div>
        </div>
        <div class="form-group row">
            <div class="mb-3">
                    <label for="newsbody" class="form-label">News Body</label>
                    <textarea class="form-control" id="newsbody" rows="3" name="newsbody"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="mb-3">
                        <div class="text-center">
                                            <button name="submit" type="submit" class="btn btn-primary">Encode</button>
                        </div>
            </div>
        </div>
    </form>

    </div> <!-- col -->
    <div class="col">
    </div>
    <div class="col">
    </div>
</div> <!-- first row -->


<br />
<div class="row">
<?php if (! empty($news) && is_array($news)): ?>
  <div class="container">
        <div class="col">
        
         <?php foreach ($news as $news_item): ?>
            <div class="card" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title"><?= esc($news_item['title']) ?></h5>
                <p class="card-text"><?= esc($news_item['body']) ?></p>
                <a href="/news/<?= esc($news_item['slug'], 'url') ?>" class="btn btn-primary">View Article</a>
            </div>
            </div>
            <br />
          <?php endforeach ?>
        
         </div> <!-- col -->
    </div> <!-- container -->
<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
</div> <!-- row cards -->
</div> <!-- container -->