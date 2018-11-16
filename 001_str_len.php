<?php 
function word_count($string){
     echo str_word_count($string);
    echo "<br>-------------------<br>";
    echo strlen($string);
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
                if(isset($_POST['btn'])){
                   echo  word_count($_POST['name']);
                }
                
                ?>
            </td>
        </tr>
    </table>
</form>