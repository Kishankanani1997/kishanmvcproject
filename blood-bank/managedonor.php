<!--CONTENT START-->
        <nav class="mx-5 mt-3" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $mainurl; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account-ManageProfile</li>
            </ol>
        </nav>
<div class="container bg-info text-black mt-4 p-3">

    <h2 class="text-center"><strong>SHOWING BLOOD DONOR DATA</strong></h2>

    <div class="col-md-12">   
        <div class="bg-white text-danger mt-3 p-1 text-center"><h5>Managing Donor Data</h5></div>


        <div class="table table-responsive">
        <table class="table-stripped table-bordered mt-2" id="pagination">
            <thead>
            <tr class="text-black bg-white text-center">
                <th>#</th>
                <th>Name</th>
                <th>Mob No</th>
                <th>Email</th>
                <th>Password</th>
                <th>Blood Group</th>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach($showdata as $row)
                {
                ?>
                <tr>
                    <td><?php echo $row["user_id"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["number"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["password"];?></td>
                    <td><?php echo $row["bloodgroup"];?></td>
                    <td><?php echo $row["state_id"];?></td>
                    <td><?php echo $row["city_id"];?></td>
                    <td>
                    <a href="<?php echo "./";?>?readdata=<?php echo $row["user_id"]; ?>" class="btn btn-success" onclick="return confirm('Are you sure you want to read data?')"><i class="bi bi-eye-fill"></i></a> |
                    <a href="<?php echo "./"; ?>?editdata=<?php echo $row["user_id"]; ?>" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit the data?')"><i class="bi bi-pencil-fill"></i></a> |
                    <a href="<?php  echo"./";?>?deletedata=<?php echo $row["user_id"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the data?')"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>

    
<script>
    $(document).ready(function () {
    $('#pagination').DataTable();
    });
</script>

   