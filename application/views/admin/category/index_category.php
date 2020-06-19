<div class="card shadow">
    <div class="card-header">
        <h3><?php echo $title; ?></h3>
        <hr>
        <?php include "create_category.php"; ?>
    </div>
    <div class="card-body">
        <?php
        //Notifikasi
        if ($this->session->flashdata('message')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('message');
            echo '</div>';
        }
        echo validation_errors('<div class="alert alert-warning">', '</div>');

        ?>


        <div class="table-responsive">
            <table class="table table-bordered zero-configuration" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Kategori</th>
                        <th>Tanggal Buat</th>
                        <th>Tanggal Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($category as $category) { ?>
                        <tr>
                            <td><?php echo $category->category_name; ?></td>
                            <td><?php echo date('D, d F Y', $category->date_created); ?> <?php echo date('H:i', $category->date_created); ?></td>
                            <td><?php echo date('D, d F Y', $category->date_updated); ?> <?php echo date('H:i', $category->date_updated); ?></td>
                            <td>
                                <?php include "update_category.php"; ?>
                                <?php include "delete_category.php"; ?>
                            </td>
                        </tr>

                    <?php }; ?>


                </tbody>
            </table>
        </div>
    </div>
</div>