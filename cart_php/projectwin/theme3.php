<?php

$theme =  $_POST['num'];
$select_ = mysqli_query($conn, "SELECT stylesheet FROM `template` WHERE  = '$theme' ") or die('query failed');


$result = $conn->query($select_);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($select_);
    if ($row['num']== '1'){
        echo '<link rel="stylesheet" href="' .  $row["stylesheet"] . '">';
    }
    elseif ($row['num']== '2'){
        echo '<link rel="stylesheet" href="' .  $row["stylesheet"] . '">';
    }
    elseif ($row['num']== '3'){
        echo '<link rel="stylesheet" href="' .  $row["stylesheet"] . '">';
    }
    elseif ($row['num']== '4'){
        echo '<link rel="stylesheet" href="' .  $row["stylesheet"] . '">';
    }

    
    }else {
    echo "0 results";
}


?>

<div class="flex">
<div class= "toggle">
            <button class= "togglebtn">Choose color</button>
            <div class= "toggle-content">
                <p>Link 1</p>
                <p>Link 2</p>
                <p>Link 3</p>
                <p>Link 4</p>
            </div>
         </div>
</div>
