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
    </title>

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
                        foreach ($data_mie as $mie) {
                            echo '<option value="' . $mie->id_mie . '">' . $mie->mie . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <br />
                <div class="form-group">
                    <select name="rasa" id="rasa" class="form-control input-lg load-rasa">
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
<script src="<?= base_url(''); ?>assets/js/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("select[name='mie']").change(function(e) {
            idMie = $(this).val()
            if (idMie != '') {
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('mie/fetch_rasa/option') ?>",
                    data: {
                        mie_id: idMie
                    },
                    dataType: "html",
                    success: function(response) {
                        $(".load-rasa").html(response)
                    }
                });
            } else {
                $(".load-rasa").html(`<option value="">===Pilih Rasa===</option>`)
            }
        })
    });
</script>

</html>