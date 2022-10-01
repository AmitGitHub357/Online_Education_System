<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">States</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="<?php echo base_url().'index.php/State/AddState/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add State</a>

                </div>
            </div>
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-data2">
                    <thead>
                        <tr class="tr-shadow">
                            <th>State Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($States as $State) {
                            ?>
                            <tr class="tr-shadow">

                                <td><?php echo $State['State_Name'] ?></td>

                                <td>
                                    <div class="table-data-feature">

                                        <a href="<?php echo base_url()."index.php/State/UpdateState/".$State['State_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit" style="color: blue"></i>
                                        </a>
                                        <a href="<?php echo base_url()."index.php/State/StateStatus/".$State['State_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top">
                                            <i class="zmdi zmdi-delete" style="color: red"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
                            </div>
                </div>
            </div>
        </div>

    </div>

    