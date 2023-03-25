<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COUNTRIES-DATA</title>
</head>

<body>
    <h1>
        <ul>
            <li>Countries And Theirs Capital-City</li>
        </ul>
    </h1>
    <?php
    $c_data = array(
        'India' => array('New Delhi'),
        'USA' => array('Washington DC'),
        'UK' => array('London'),
        'China' => array('Beijing')
    );

    ?>
    <center>
        <table cellspacing="10px" style="font-size:1.5rem;">
            <thead>
                <tr>
                    <th>S.no.</th>
                    <th>
                        Country
                    </th>
                    <th>
                        Capital-City
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        1
                    </th>
                    <td>
                        India
                    </td>
                    <td>
                        <?php
                        echo $c_data['India'][0];
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        2
                    </th>
                    <td>
                        USA
                    </td>
                    <td>
                        <?php
                      echo   $c_data['USA'][0];
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        3
                    </th>
                    <td>
                        UK
                    </td>
                    <td>
                        <?php
                     echo    $c_data['UK'][0];
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        4
                    </th>
                    <td>
                        China
                    </td>
                    <td>
                        <?php
                        echo $c_data['China'][0];
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>

</body>

</html>