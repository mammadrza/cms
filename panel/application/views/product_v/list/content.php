<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">

            Urun listesi
            <a href="" class="btn pull-right btn-outline btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni urun elave et</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">
            <?php if (empty($items)){ ?>
                <div class="alert alert-info text-center">

<!--                    <h5 class="alert-title">Qeyd bulunmadi!</h5>-->
                    <p>Burada qeyd olmadigi ucun hec bir netice tapilmadi. Qeyd elave etmek ucun <a href="">kecid edin</a>.</p>
                </div>

            <?php }else{ ?>
                <table class="table table-hover table-striped">
                    <thead>
                    <th>ID</th>
                    <th>URL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Yaranma tarixi</th>
                    <th>Status</th>
                    <th>Emeliyyatlar</th>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $item){ ?>
                        <tr>
                            <td><?php echo $item->id ?></td>
                            <td><?php echo $item->url ?></td>
                            <td><?php echo $item->title ?></td>
                            <td><?php echo $item->description ?></td>
                            <td><?php echo $item->createdAt ?></td>
                            <td>
                                <input type="checkbox" data-switchery data-color="#10c469" <?php echo ($item->isActive)? "checked" : "" ?> />
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>Yenile</></a>
                                <a href="" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i>Sil</></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            <?php } ?>


        </div><!-- .widget -->
    </div><!-- END column -->
</div>