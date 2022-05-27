<?php
            $conn = mysqli_connect('localhost', 'root', '', 'medihand');
            $query = "SELECT * FROM request";
            $readquery = mysqli_query($conn, $query);
            if($readquery->num_rows > 0){
                $rd=mysqli_fetch_assoc($readquery);
                    $reqid = $rd['id'];
                    $fname = $rd['fname'];
                    $contact = $rd['contact'];
                    $city = $rd['city'];
                    $reqtype = $rd['reqtype'];
            }
        ?>


<?php
            $conn = mysqli_connect('localhost', 'root', '', 'medihand');
            $query = "SELECT COUNT(*) FROM request";
            $readquery = mysqli_query($conn, $query);
            $rd = mysqli_fetch_array($readquery);
            $reqid = $rd[0];

        ?>