<?php

function search_text($data) {
    $array = array("php", "java", "c", "html");
    if (in_array($data, $array)) {
        echo "$data is found";
    } else {
        echo "not found";
    }
}
?>


<h1>counting range calculator</h1>
<form action="" method="post">

    <table>
        <tr>
            <td> inter text   </td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="btn" /></td>
        </tr>
        <tr>
            <td>Rasult:</td>
            <td>
                <?php
//                echo '<pre>';
//                print_r($_POST);
//                exit();
//                
                if (isset($_POST['btn'])) {
                    echo search_text($_POST['name']);
                }
                ?>
            </td>
        </tr>
    </table>
</form>