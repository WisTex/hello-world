<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta style="font:Georgia;">
</head>


<body>

<h1>Heading</h1>

<p><b>A test document for GitHub.</b></p>

<p>This is a test.</p>

<p><?php echo "something" . $test; ?></p>

<p>Should we commit this change to GIT?</p>

<p>Making another change.</p>


<?php

    $test = "test";
    echo $test;
    if ($test == "something") {
        echo "something";
    }

?>

<p>Something posted here.</p>

<input type="button" value="something" name="somthing_name" />


<p><?php echo "Making yet another change" ?></p>

<P><?php echo $_SERVER['SERVER_NAME']; ?></P>  
  
</body>

</html>



