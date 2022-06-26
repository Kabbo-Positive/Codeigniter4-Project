<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="<?php //echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min">

    <title>Codeigniter-4 CRUD Application</title>
</head>
<body>
    
    <div class="container-fluid bg-info shadow-sm">
        <div class="container pb-2 pt-2">
                <h4 class="text-white text-center">Simple Codeigniter 4 CRUD Application </h4>
        </div>
    </div>

        <div class="bg-white shadow-sm">
                <div class="container">
                    <div class="row">
                        <nav class="nav nav-underline">
                            <div class="nav-link">Books/Edit</div>
                        </nav>
                    </div>
                </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12 text-right">
                <a href="<?= base_url('books')?>" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
        </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <div class="card-header-title">Edit Book</div>
                </div>
                <div class="card-body">

                    <form action="<?= base_url('books/book-update/'.$books['id'])?>"  method="POST">
                    <input type="hidden" name="_method" value="PUT" />

                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" placeholder="Enter Book Title" name="title" value="<?= $books['title'] ?>" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label for="">ISBN No</label>
                        <input type="text" placeholder="Enter Book ISBN Number" name="isbn_no" value="<?= $books['isbn_no'] ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Author</label>
                        <input type="text" placeholder="Enter Book Author Name" name="author" value="<?= $books['author'] ?>" class="form-control"  required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Update</button>

                    </form>

                </div>
            </div>
            </div>
        </div>
    </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" ></script>
</body>
</html>