<?php
    require "./database.php";


    //GET Comment
    function get_list_comment()
    {
        $database = new database();
        $select = "SELECT * FROM comment";
	    $data = $database->SelectAll($select);
        return $data;
    }


    //GET Post bài viết
    function get_list_post()
    {
        $database = new database();
        $select = "SELECT * FROM blog_post";
	    $data = $database->SelectAll($select);
        return $data;
    }




    function insert_comment($name2,$email2,$website2,$message2)
    {
        $database = new database();
        $sql = "INSERT INTO comment(name, email, website, message) VALUES ('$name2', '$email2', '$website2', '$message2')";
		$database->ExecuteSQL($sql);
    }
    
    function insert_subscribe($email)
    {
        $database = new database();
        $sql = "INSERT INTO subscribe(email) VALUES ('$email')";
		$database->ExecuteSQL($sql);
    }
?>