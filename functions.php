<?php
if ($_POST != null){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "user";

// Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);
    $file = $_FILES['file']['name'];

//uploading image
    if (isset ($_FILES['file'])){
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    }




    $sql = "INSERT INTO user (user_name, mail, text, picture)
VALUES ('".$_POST['user_name']."', '".$_POST['mail']."', '".$_POST['text']."', '".$file."')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }






    $conn->close();

}


    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "";


    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'job_user');

    // define how many results you want per page

    $results_per_page =3;

    // find out the number of results stored in database

    $sql='SELECT * FROM user';
    $result = mysqli_query($con, $sql);
    $number_of_results = mysqli_num_rows($result);

    // determine number of total pages available

    $number_of_pages = ceil($number_of_results/$results_per_page);

    // determine which page number visitor is currently on

    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    // determine the sql LIMIT starting number for the results on the displaying page

    $this_page_first_result = ($page-1)*$results_per_page;

    // retrieve selected results from database and display them on page

    $sql='SELECT * FROM user LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($con, $sql);

    echo

        '<div class="container" style="margin-top: 100px;">
                <div class="row">
            
                          <table  id="myTable" class="table table-stripped table-bordered">'.
                            '<thead class="thead-inverse">
                                  <th>User Name</th>'.
                                '<th>E-mail</th>
                                  <th>Text</th>
                                  <th>Image</th>
                          </thead>';

    while($row = mysqli_fetch_array($result)) {
        echo
            '<tr>'.
                '<td>'
                . $row['user_name'] . ' ' .
                '</td>'.
                '<td>'.
                 $row['mail'].
                '</td><td>'. $row['text'] .
            '<td><img src="images/'. $row['picture']. '"></td>'.

            '</td></tr>';
    }

                    echo '</table>';

// display the links to the pages

        echo '</div>';
            echo '<div class="pagination">';
            for ($page=1;$page<=$number_of_pages;$page++) {
                echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
            }

            echo'      </div>';


echo '</div>';





?>
