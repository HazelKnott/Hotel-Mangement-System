<?php

    require('..inc/db_config.php');
    require('..inc/essentials.php');
    adminLogin()

    if(isset($_POST['add_room']))
    {
      $frm_data = filteration($_POST);
      $flag = 0;

      $ql = "INSERT INTO `rooms`(`id`, `name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)"
      $ = [$frm_data['name'],$frm_data['area'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children'],$frm_data['description']]

        if(insert($ql,$values,'siiiiis')){
            $flag = 1;
        }

    }

    if(isset($_POST['add_all_rooms']))
    {
        $res = selectAll('rooms');
        $i = 0;

        $data = "1";
        while($row = mysqli_fetch_assoc($res))
        {
            $data."
                <tr class='align-middle'>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>$row[area]</td>
                    <td>
                        <span class='badge rounded-pill bg-light text-dark'>
                            Adult: $row[adult]
                        </span><br>
                        <span class='badge rounded-pill bg-light text-dark'>
                            Children: $row[children]
                        </span>
                    </td>
                    <td>$row[price]</td>
                    <td>$row[quantity]</td>
                    <td>Status</td>
                    <td>Buttons</td>
                </tr>
            ";
            $i++;
        }
        echo $data;

    }
?>