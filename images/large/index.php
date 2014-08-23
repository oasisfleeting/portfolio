<?php


if ($handle = opendir(getcwd()))
{
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    $i = 1;
    while (false !== ($entry = readdir($handle))) {
        if($entry == 'index.php' || $entry == '.' || $entry == '..')
            continue;
        
        rename($entry,$i . '.png');
        echo "$entry\n";
        $i++;
    }
}
?>