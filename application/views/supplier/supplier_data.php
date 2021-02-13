<section class="content-header">
    <h1> Supplier
        <small>Pemasok Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-truck"></i></a></li>
        <li class="activer">Supplier</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Supplier</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-resposive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) {
                        ?>
                        <tr>
                            <td style="width:5%;"><?= $no++ ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->description ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('supplier/edit/' . $data->supplier_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <a href="<?= site_url('supplier/del/' . $data->supplier_id) ?>" onclick="return confirm('Are you sure delete this data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>