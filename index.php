<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <title>CRUD AJAX PHP dengan jQuery</title>
  <style>
  .list-group-item {
    position: relative;
  }
  .list-group-item p {
    margin: 0;
  }
  .list-group-item button {
    position: absolute;
    right: 0;
    bottom: 0;
  }
  </style>
</head>
<body>
  
<main>

<div class="container">
  <div class="row mt-5">
    <div class="col-12">

      <div class="row">

        <div class="col-sm-12 col-md-5">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Input Your Comment</h4>
              <form action="comment-ajax.php" method="POST">
                <div class="form-group">
                  <label for="userid">User ID</label>
                  <input type="number" name="userid" class="form-control">
                </div>
                <div class="form-group">
                  <label for="textarea">Content</label>
                  <textarea class="form-control" id="textarea" name="textarea" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" id="submit" value="Submit">
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="col-sm-12 col-md-7">
          <div class="card">
            <div class="card-body">
              <h4 class="card-titlle">Ajax Comment Result</h4>
              <div id="result">
                <?php include_once 'show-comments.php'; ?>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- .row -->

    </div>
  </div>
</div>

</main>

<script src="assets/js/script.js"></script>
</body>
</html>