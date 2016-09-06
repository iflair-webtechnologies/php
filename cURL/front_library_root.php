<!--CONTENT PAGE START-->
<div class="inner-banner-bg-top"></div>
<div class="inner-image-main">
    <div class="inner-image">

    </div>
</div>
<div class="main-width">
    <div class="inner-page-main-heding">
        <h1><span>
                
        </h1>
    </div>
</div>
<div class="main-width">
    <div class="right-section-inner-page">
            <div class="full-width folder-str-mrg">
                <div class="folder-str-col1">
                    <a href="<?php echo base_url('library/' . $library_data[$i]['folder_name']); ?>">
                        <div class="folder-str-icon">
                            <img src="<?php echo base_url() ?>gallery/admin/images/folder.gif" class="folder-str-icon-mrg "/>
                        </div>

                        <div class="folder-str-name "><?php echo $library_data[$i]['folder_display_name'] ?></div>

                    </a>
                </div> 
                <?php if (isset($library_data[$i + 1]['folder_name'])) { ?>

                    <div class="folder-str-col2">
                        <a href="<?php echo base_url('library/' . $library_data[$i + 1]['folder_name']); ?>">
                            <div class="folder-str-icon">
                                <img src="<?php echo base_url() ?>gallery/admin/images/folder.gif" class="folder-str-icon-mrg "/>
                            </div>
                            <div class="folder-str-name "><?php echo $library_data[$i + 1]['folder_display_name'] ?></div>
                        </a>
                    </div> 
                <?php } ?>
                <?php if (isset($library_data[$i + 2]['folder_name'])) { ?>
                    <div class="folder-str-col3">
                        <a href="<?php echo base_url('library/' . $library_data[$i + 2]['folder_name']); ?>">
                            <div class="folder-str-icon">
                                <img src="<?php echo base_url() ?>gallery/admin/images/folder.gif" class="folder-str-icon-mrg "/>
                            </div>
                            <div class="folder-str-name "><?php echo $library_data[$i + 2]['folder_display_name'] ?></div>
                        </a>
                    </div> 
                <?php } ?> 
            </div>
            <?php
            $i = $i + 3;
        }
        ?> 
        <?php
        /* edc Module sorcode */
        $this->load->view('edc/curl');
        /* End of the edc Module sorcode */
        ?>
    </div>
</div>