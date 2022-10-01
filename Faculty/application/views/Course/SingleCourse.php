<div class="col-md-12">
    <div class="card">
        <div style="float: left; margin-left: 25%">
            <img class="card-img-top" src="<?php echo base_url().'../Admin/'.$Course['Course_Image'] ?>" alt="Card image cap" style="width: 500px; float: left;">
        </div>
        <div class="card-body">
            <h4 class="card-title mb-3"><?php echo $Course['Course_Name'] ?></h4>

            <p>
                <b>Time Period</b>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo($Course['Course_Period']) ?> Months
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;

                <b> Fees</b>
                &nbsp;&nbsp;&nbsp;&nbsp;
                ₹<?php echo($Course['Course_Fees']) ?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                
                <b> Category</b>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo($Course['Category_Name']) ?>
                
            </p>
            <br><br>
            <p class="card-text">
                <?php echo $Course['Course_Description'] ?>
            </p>
            
        </div>
    </div>
</div>