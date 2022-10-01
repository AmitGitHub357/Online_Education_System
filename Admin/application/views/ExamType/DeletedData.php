<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Deleted Exam Types</h3>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>Exam Type</th>
                        <th>Exam Type Entry Date</th>
                        <th>Exam Type Update Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($ExamTypes as $ExamType) {
                      ?>
                      <tr>
                         <td><?php echo $ExamType['Exam_Type'] ?></td>
                         <td><?php echo $ExamType['Exam_Type_Entry_Date'] ?></td>
                         <td><?php echo $ExamType['Exam_Type_Update_Date'] ?></td>

                         <td>
                            <div class="table-data-feature">

                                <a href="<?php echo base_url()."index.php/ExamType/DeleteExamType/".$ExamType['Exam_Type_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete" class="zmdi zmdi-delete" style="color: red"></i>
                                </a>
                                <a href="<?php echo base_url()."index.php/ExamType/ExamTypeStatus/".$ExamType['Exam_Type_id']."/Active" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="fas fa-upload"></i></a>
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

    