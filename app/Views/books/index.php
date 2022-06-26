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
                            <div class="nav-link">Books/View</div>
                        </nav>
                    </div>
                </div>
        </div>

        <div class="container mt-4">
            <?php
                if( session()->getFlashdata('status')){
                    echo "<h4>".session()->getFlashdata('status')."</h4>";
                }
            
            ?>
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="<?= base_url('books/book-add')?>" class="btn btn-primary btn-sm">Add Book</a>
                </div>
            </div>
        </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <div class="card-header-title">Books</div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>Title</td>
                            <td>Author</td>
                            <td>ISBN No</td>
                            <td>Created_At</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach($books as $book ):?>
                        <tr>
                            <td><?= $book['id'] ?></td>
                            <td><?= $book['title'] ?></td>
                            <td><?= $book['author'] ?></td>
                            <td><?= $book['isbn_no'] ?></td>
                            <td><?= $book['created_at'] ?></td>
                            <td>
                                <a href="<?= base_url('books/book-edit/'.$book['id'])?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?= base_url('books/book-delete/'.$book['id'])?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
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