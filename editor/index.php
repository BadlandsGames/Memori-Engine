<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript">
            <?php
                $current_project = "Start Page";
                $current_project_fs = array();
                $in_project = false;
                $filename = "";
                if($in_project) {
                    if(end(str_split($filename)) == "json") {
                        $newfile_open = fopen($filename, "r") or die("Unable to open file.");
                        $project_info = json_decode(fread($newfile_open, filesize($newfile_open)), true);
                        fclose($newfile_open);
                        $current_project = $project_info["name"];
                        $current_project_fs = $project_info["filesystem"];
                    } else {
                        die("File must be a JSON file.");
                    }
                }
            ?>
        </script>
        <title><?php echo "Memori Engine - " . $current_project; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    </body>
</html>