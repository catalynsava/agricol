<?php
    if(isset($_GET['req']))
    {
        $req = $_GET['req'];
    }
    else
    {
        die('No request.');
    }

    if($req == 'doSomething')
    {
        // do something
    }
    else if($req == 'doSomethingElse')
    {
        // do something else
    }
    else if($req == 'doSomethingDifferent')
    {
        // do something different
    }
    else if($req == 'doSomethingMore')
    {
        // do something more
    }
?>