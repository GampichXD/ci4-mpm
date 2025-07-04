<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit Data</title>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert"></div>
                    <?php echo $validation->listErrors() ?>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('post/update/'.$post['id']) ?>" method="POST">
                            <div class="form-group">
                                <label for="">TITLE</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $post['title'] ?>" placeholder="Masukkan Title">
                            </div>
                            <div class="form-group">
                                <label for="">KONTEN</label>
                                <textarea class="form-control" name="content" rows="4" placeholder="Masukkan Konten" id=""><?php echo $post['content'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>