<?php
    $conn = mysqli_connect('localhost', 'root', '', 'medihand');
    if(isset($_GET['delete'])){
        $reqid = $_GET['delete'];
        $query = "DELETE FROM request WHERE id = {$reqid}";
        $deletequery = mysqli_query($conn, $query);
        // if($deletequery){
        //     echo "Data removed successfully";
        // }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediHand-a medical volunteering platform</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


<div class="container py-5 col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in-left" data-aos-offse="200">
        
        <form action="" method="POST">

        <!-- <?php
            $conn = mysqli_connect('localhost', 'root', '', 'medihand');
            if(isset($_GET['update'])){
                $reqid = $_GET['update'];
                $query = "SELECT * FROM request";
                $getdata = mysqli_query($conn, $query);
                while($rd = mysqli_fetch_assoc($getdata)){
                    $reqid = $rd['id'];
                    $fname = $rd['fname'];
                    $contact = $rd['contact'];
                    $city = $rd['city'];
                    $reqtype = $rd['reqtype'];
              
        
        ?>
        <input type="text" class="form-control mb-2" value="<?php $fname; ?>" aria-label="First name" name="name">
        <input type="text" class="form-control mb-2" value="<?php $contact; ?>" aria-label="First name" name="contact">
        <select id="inputState" class="form-select mb-2" value="<?php $city; ?>" name="city">
          <option selected>Choose your city</option>
          <option value="City">City</option>
          <option value="Uttara">Uttara</option>
          <option value="Rampura">Rampura</option>
          <option value="Badda">Badda</option>
          <option value="Dhanmondi">Dhanmondi</option>
          <option value="Chandpur">Chandpur</option>
          <option value="Cumilla">Cumilla</option>
          <option value="Ambarkhana">Ambarkhana</option>
        </select>

        <select class="form-select" aria-label="Default select example" value="<?php $reqtype; ?>" name="reqtype">
          <option selected>Select an assistence</option>
          <option value="Ambulance">Ambulance</option>
          <option value="Oxygen cylinder">Oxygen cylinder</option>
          <option value="Fast aid">Fast aid</option>
          <option value="Nutritional support">Nutritional support</option>
          <option value="Emergency medicine">Emergency medicine</option>
          <option value="Primary treatment">Primary treatment</option>
        </select>
        <input type="submit" value="Update" name="update_btn" class="my-2 btn btn-primary">
        <!--<button type="submit" class="btn btn-primary my-4" value="Update" name="update_btn">Update</button> -->
        <?php }} ?> -->

        </form>

</div>

<div class="container">
    
    <table class="table table-bordered">
        <tr>
            <th>request id</th>
            <th>name</th>
            <th>contact</th>
            <th>city</th>
            <th>request type</th>
        </tr>

        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'medihand');
            $query = "SELECT * FROM request";
            $readquery = mysqli_query($conn, $query);
            if($readquery->num_rows > 0){
                while($rd=mysqli_fetch_assoc($readquery)){
                    $reqid = $rd['id'];
                    $fname = $rd['fname'];
                    $contact = $rd['contact'];
                    $city = $rd['city'];
                    $reqtype = $rd['reqtype'];

        ?>

        <tr>
            <td><?php echo $reqid; ?></td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $contact; ?></td>
            <td><?php echo $city; ?></td>
            <td><?php echo $reqtype; ?></td>
            <td><a href="show.php?update=<?php echo $reqid; ?>" class="btn btn-info">Update</a></td>
            <td><a href="show.php?delete=<?php echo $reqid; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php }}else{
            echo "no data to show";
        } ?>
    </table>
</div>



<!--Javascript library tagging-->







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>