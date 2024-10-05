<?php require_once 'core/dbConfig.php' ?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //FetchAll
        // $stmt = $pdo->prepare("select * from cars");

        // if ($stmt-> execute()){
        //     echo "<pre>";
        //     print_r($stmt->fetchAll());
        //     echo "<pre>";
        // }

    //Fetch
        // $stmt = $pdo->prepare("select * from cars
        //                                 where car_id = 2");

        // if ($stmt->execute()){
        //     echo "<pre>";
        //     print_r($stmt->fetch());
        //     echo "<pre>";
        // }

    //Insert
        // $stmt = $pdo->prepare("insert into cars (car_id, car_model, rental_price, movie_id) values (?,?,?,?)");

        // $executeq = $stmt->execute([26,"Toyota Vios",50,4]);
        // if ($executeq){
        //     echo "Insert complete";
        // }
        // else {
        //     echo "Insert failed";
        // }

    //Delete
        // $q = 'delete from cars 
        //       where car_model = "Toyota Vios"';

        // $stmt = $pdo->prepare($q);

        // $executeq = $stmt->execute();
        // if ($executeq){
        //     echo "Deletion complete";
        // }
        // else {
        //     echo "Deletion failed";
        // }

    //Update table
        // $q ='update customers
        //     set customer_name = ?
        //     where customer_id = 1'; 
        // $stmt = $pdo->prepare($q);

        // $executeq = $stmt->execute(["Luiz Chan"]);

        // if ($executeq){
        //     echo "Update success";
        // }
        // else{
        //     echo "Update failed";
        // }

    //Table
        $q = "select car_model, movie_id 
            from cars
            group by car_model";

        $stmt = $pdo->prepare($q);
        $executeQ = $stmt->execute();

        if ($executeQ){
            $carModel = $stmt->fetchAll();
        }
        else {
            echo "query failed";
        }    
    ?>
<table style = "width: 15%;" border="2px" >
    <tr>
        <th>Car model</th>
        <th>Movie ID</th>    
    </tr>
    <?php foreach ($carModel as $row) { ?>
        <tr>
            <td ><?php echo $row['car_model']; ?></td>
            <td ><?php echo $row['movie_id']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>