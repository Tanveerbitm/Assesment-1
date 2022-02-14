<?php include ("header.php");
include ("navbar.php"); ?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">

                    <hr/>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6"><h3 class="pl-3">All User Info</h3></div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover no-gutters">
                                <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>email</th>
                                    <th>password</th>
                                </tr>

                                </thead>
                                <tbody>
                                <?php
                                if(count($allUser)<1){
                                    echo "<tr><td>No Result Found</td></tr>";
                                }else{
                                    foreach ($allUser as $data) {?>
                                        <tr>
                                            <td><?php echo $data['name'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                            <td><?php echo $data['password'];?></td>
                                        </tr>
                                    <?php } }?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include ("footer.php")?>
