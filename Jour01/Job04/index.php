<?php 

$bool = true;
$float = 0.3;
$int = 4;
$str = "Lila"
?>
<table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col"><?php echo $int;?></th>
            </tr>
            <tr>
                <th scope="col"><?php echo $str; ?></th>
            </tr>
            <tr>
                <th scope="col"><?php echo $bool; ?></th>
            </tr>
            <tr>
                <th scope="col"><?php echo $float; ?></th>
            </tr>
        </tbody>
</table>
