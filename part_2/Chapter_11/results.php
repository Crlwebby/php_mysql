<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book-O-Rama Search Results</title>
</head>
<body>
    <h1>Book-O-Rama search Results</h1>
    <?php
        $searchtype=$_POST['searchtype'];
        $searchterm=trim($_POST['searchterm']);
        //trim(string,charlist)，从string中删除charlist内容；如果省略，则移除\0、\t、\n、\r、空格等；


        if(!$searchterm||!$searchtype){
            echo '<p>You hava not entered search details.<br/> Please go back and try again.</p>';
            exit;
        }

        switch($searchtype){    //whitelist filter
            case 'Title':
            case 'Author':
            case 'ISBN':
                break;
            default:
                echo '<p>That is not a valid search type.<br/>
                Please go back and try again.</p>';
                exit;
        }


        $db = new mysqli('localhost','root',NULL,'books');
        if(mysqli_connect_errno()){
        //mysqli_connect_errno() will return error code, 0 represent success and not 0 represent fault;
            echo '<p>Error: Could not connect to database<br/>
            Please try again later.</p>';
            exit;
        }

        $query="select isbn,author,title,price from books where $searchtype=?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('s',$searchterm);
        $stmt->execute();
        $stmt->store_result();

        $stmt->bind_result($isbn,$author,$title,$price);

        echo "<p>Number of books found:".$stmt->num_rows."</p>";

        while($stmt->fetch()){
            echo "<p><strong>Title: ".$title."</strong></p>";
            echo "<br/>Author: ".$author;
            echo "<br/>ISBN: ".$isbn;
            echo "<br/>Price: \$".number_format($price,2)."</p>";
        }

        $stmt->free_result();
        $db->close();


    ?>



</body>
</html>