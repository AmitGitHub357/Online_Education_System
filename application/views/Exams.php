<body class="event-01">

	<?php 
 $this->load->view("header1");
 ?>
 <!-- Event Area section -->
 <section class="events-list-03">
   <div class="container">
      <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead style="background-color: yellow">
                        <tr>
                            <th>Course Name</th>
                            <th>Exam Name</th>
                            <th>Exam Date</th>
                            <th>Exam Time</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php 
                    foreach ($Exams as $Exam) {
                       $datetime = explode(" ", $Exam['Exam_Date']);
                       ?>
                       <tbody>
                        <tr>
                            <td><?php echo $Exam['Course_Name'] ?></td>
                            <td><?php echo $Exam['Exam_Type'] ?></td>
                            <td><?php echo $datetime[0] ?></td>
                            <td><?php echo $datetime[1] ?></td>
                            <td>
                               <?php 
                                   $EndDate = date('Y-m-d H:i:s',strtotime('+3 hours',strtotime($Exam['Exam_Date'])));
                                   // echo $Exam['Exam_Date']." < ".date('Y-m-d H:i:s')." < ".$EndDate;
                                   if ($Exam['Exam_Date']<=date('Y-m-d H:i:s') and date('Y-m-d H:i:s') <= $EndDate){ 
                               ?>
                                   <a href="<?php echo base_url().'index.php/Exam/GiveExam/'.$Exam['Exam_id'] ?>">Give Exam</a>
                               <?php } ?>
                            </td>
                       </tr>
                   </tbody>
                   <?php
               }
               ?>
           </table>
       </div>
       <!-- END DATA TABLE-->
   </div>
</div>
</div>
</section>
<!-- ./ End Event Area section --> 