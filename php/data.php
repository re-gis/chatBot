<?php
     while( $row = mysqli_fetch_assoc( $sql ) ) {
        $output .= '<a href="ChatappArea.php?user_id='.$row['user_id'].'">
                    <div class="content">
                        <img src="php/images/'. $row['image'] .'" alt="">
                        <div class="details">

                            <span>'. $row['fname'] ." ". $row['lname'] .'</span>
                            <p>Test message</p>
                        </div>

                    </div>
                    </a>';
    } 
?>