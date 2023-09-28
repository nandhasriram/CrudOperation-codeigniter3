<html>
    <head>
        <title>Display Information</title>
        <style>
            .result,.result td,.result th{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
                margin: auto;
                background-color: lightblue;
            }
            .result th{
                background-color: yellow;
            }
            </style>
    </head>
    <body>
        
    <?php
    if(isset($data)){
        
        ?>
    <center>
        <h2> UPDATE PAGE </h2>
        <form action="<?= base_url('register/update')?>" method="post">
        <table cellspacing="20">
            <tr>
                <td>Id</td>
                <td><input name="id" value="<?=$data[0]->id?>" readonly=""></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input name="name" value="<?=$data[0]->name?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" value="<?=$data[0]->email?>"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input name="city" value="<?=$data[0]->city?>"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input name="mobile" value="<?=$data[0]->mobile?>"></td>
            </tr>
            <tr>
                <td><button>Update</button></td>
                <td></td>
            </tr>
        </table>
    </form></center>     
        <?php
    }else{
        ?>
        <center><h2> RECORDS </h2></center>
        <table class="result">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Option</th>
            </tr>
        <?php
        if(isset($table)){
        foreach($table as $row) {
            ?>
            <tr>
                <td><?=$row->id?></td>
                <td><?=$row->name?></td>
                <td><?=$row->email?></td>
                <td><?=$row->city?></td>
                <td><?=$row->mobile?></td>
                <td><a href="<?=base_url('register/edit/'.$row->id)?>">edit</a> <break> <a href="<?=base_url('register/delete/'.$row->id)?>">delete</a></td>
            </tr>
            <?php
        }
        }
        ?>
        </table>
            <br><center><a href="<?= base_url('register/student')?>"> back </a></center>

        <?php
    }
    
    ?>


    </body>
</html>