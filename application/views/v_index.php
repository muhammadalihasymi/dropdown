<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>assets/24.png" type="image/png">
    <title>
        <?php echo $tittle; ?>
    </title>
    <link href="<?= base_url(''); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(''); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/css/admin.css" rel="stylesheet">
    <style>
        .vertical-menu {
            width: 200px;
        }

        .vertical-menu a {
            background-color: #eee;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: #4CAF50;
            color: white;
        }

        input,
        select {
            margin-left: 20px
        }
    </style>
</head>

<body id="page-top">

    <div class="wrapper2">
        <h2 style=" text-align: center ; margin-bottom: 50px; font-weight: bold; color: rgb(0, 128, 192)">Add Hardware</h2>

        <!-- CONTENT HERE -->
        <div class="container">
            <form action="<?php echo base_url() . 'cInv_hard/tambah_aksi'; ?>" method="post">
                <div class="form-group">
                    <select name="mie" id="mie" class="form-control input-lg">
                        <option value="">===Pilih Mie===</option>
                        <?php
                        foreach ($mie as $row) {
                            echo '<option value="' . $row->id_mie . '">' . $row->mie . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <br />
                <div class="form-group">
                    <select name="rasa" id="rasa" class="form-control input-lg">
                        <option value="">===Pilih Rasa===</option>
                    </select>
                </div>
                <br />
            </form>
        </div>
    </div>

    <!-- Logout Modal-->
</body>





<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(''); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(''); ?>assets/js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#mie').change(function() {
            var id_mie = $('#mie').val();
            if (id_mie != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>cSimpan/fetch_rasa",
                    method: "POST",
                    data: {
                        id_mie: id_mie
                    },
                    success: function(data) {
                        $('#rasa').html(data);
                    }
                });
            } else {
                $('#rasa').html('<option value="">===Pilih Rasa===</option>');
            }
        });

        $('#rasa').change(function() {
            var id_rasa = $('#rasa').val();
            if (id_rasa != '') {
                $.ajax({
                    method: "POST",
                    data: {
                        id_rasa: id_rasa
                    },
                });
            }
        });

    });
</script>

</html>