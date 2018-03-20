<?php
    //parent items (in the table , there are 4 of such entries)
    $sql = "SELECT * FROM categories WHERE parent = 0";
    //$pquery is made into an object
    // DB Connection: $db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    //returns the query
    $pquery = $db->query($sql);
?>


<!--|||$parent||| holds an ARRAY of main categories with the parent = 0 ===> Men, Women, Boys, Girls-->

    <!--Top Nav Bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img src="./images/headerlogo/pier3imports.png" style="height: 150%;">
<!--               <span style="display: inline-block;">Pier3Imports</span> -->
            </a>
            <ul class="nav navbar-nav">
                <!--the function turns pquery to an array-->
                <?php while($parent = mysqli_fetch_assoc($pquery)) : ?> <!--This replicates the dropdown accouding to the query & conditions -->
                    <?php 
                        $parent_id = $parent['id']; //<!--This makes an array of ID where 'id' is the value, 'category' is the key -->
                        $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
                        $cquery = $db->query($sql2);
                    ?> 
                    <!-- Creates Drop Downs -->
                    <li class="dropdown">    
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['category']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
                                <li><a href="#"><?php echo $child['category']; ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </nav>