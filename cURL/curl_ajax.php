<hr />
<div style="clear:both">
    <div style="margin-bottom: 3%;" class="page-width">
        <span>
            <a href="javascript:;" onClick="history.go(0)">

                <img style="vertical-align: middle;" width="16" height="16" src="<?php echo base_url('gallery/admin/images/folder_16.gif'); ?>"> Main
            </a>
        </span>

    </div>
</div>
<?php

if ($subfolder == 'root') {
    $no = 1;
    $i = 0;
    foreach ($validated_dir AS $single) {
        $ex = explode('/', $single);
        if (($ex[1] == $result->folder_name->folder_display_name) && !isset($ex[3])) {
            $dir_list[] = trim($ex[2]);
        }
    }
    foreach ($result->folder_data as $files) {
        if (!in_array(trim($files->alt_name), $dir_list)) {
            ?>
            <?php
            $callfunction = '';
            if ($files->document_flag == 1) {
                $doc_url = "javascript:;";
                $target = '';
                $IMG = 'folder.gif';
                $NAME = $files->alt_name;


                $callfunction = "onclick=subpassvalue('{$result->root_folder_id}','{$files->document_name}')";
            } else {
                $IMG = 'pdf_icon.png';
                $NAME = $files->alt_name;
                $target = 'target="_blank"';

                $doc_url = EDC_LIBRARY . $result->folder_name->folder_name . "/" . $files->document_name;
            }
            if ($i == 0) {
                ?>
                <div class="full-width folder-str-mrg"><?php } $i++; ?>
                <div class="folder-str-col<?php echo $no; ?>">
                    <a href="<?php echo $doc_url; ?>" <?php
                    echo $callfunction;
                    echo $target;
                    ?>>
                        <div class="folder-str-icon">
                            <img src="<?php echo base_url() ?>gallery/admin/images/<?php echo $IMG; ?>" class="folder-str-icon-mrg "/>
                        </div>

                        <div class="folder-str-name "><?php echo $NAME ?></div>

                    </a>
                </div>
                <?php
                if ($no == 3) {
                    $no = 1;
                    echo '</div><div class="full-width folder-str-mrg">';
                } else {
                    $no++;
                }
                ?> 


                <?php
            }
        }
        echo '</div>';
    } else {

        foreach ($validated_dir AS $single) {
            $ex = explode('/', $single);
            if (($ex[1] == $result->folder_name->folder_display_name) && ($ex[2] == $result->subfolder_name->folder_display_name)) {
                $dir_list[] = trim($ex[3]);
            }
        }

        $no = 1;
        $i = 0;
        foreach ($result->subfolder_data as $files) {
            if (!in_array(trim($files->file_display_name), $dir_list)) {
                $callfunction = '';
                if ($files->document_flag == 1) {
                    $doc_url = "javascript:;";
                } else {
                    $doc_url = EDC_LIBRARY . $result->folder_name->folder_name . "/" . $result->subfolder_name->folder_name . "/" . $files->file_name;
                }
                // echo $callfunction;
                if ($i == 0) {
                    ?>
                    <div class="full-width folder-str-mrg"><?php } $i++; ?>
                    <div class="folder-str-col<?php echo $no; ?>">
                        <a href="<?php echo $doc_url; ?>" <?php echo $callfunction; ?> target="_blank">
                            <div class="folder-str-icon">
                                <img src="<?php echo base_url() ?>gallery/admin/images/pdf_icon.png" class="folder-str-icon-mrg "/>
                            </div>

                            <div class="folder-str-name "><?php echo $files->file_display_name; ?></div>

                        </a>
                    </div>
                    <?php
                    if ($no == 3) {
                        $no = 1;
                        echo '</div><div class="full-width folder-str-mrg">';
                    } else {
                        $no++;
                    }
                    ?> 


                    <?php
                }
                echo ' </div>';
            }
        }
        ?>
