<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Exam Type</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="<?php echo base_url().'index.php/ExamType/AddExamType/' ?>" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Add Exam Type</a>

                </div>
            </div>
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Exam Type</th>
                            <th>Exam Type Entry Date</th>
                            <th>Exam Type Update Date</th>
                            <th></th>
                        </tr>
                    </thea0d>
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

                                    <a href="<?php echo base_url()."index.php/ExamType/UpdateExamType/".$ExamType['Exam_Type_id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit" style="color: blue"></i>
                                    </a>
                                    <a href="<?php echo base_url()."index.php/ExamType/ExamTypeStatus/".$ExamType['Exam_Type_id']."/Deactive" ?>" class="item" data-toggle="tooltip" data-placement="top"><i class="zmdi zmdi-delete" style="color: red"></i></a>
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

    