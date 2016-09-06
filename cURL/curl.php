<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Edc extends SiteFront_controller {
	public function __construct() {
        parent::__construct();
        error_reporting(1);
    }

    public function edc_folder() {
        
        if ($_REQUEST['foldername'] != '') {
            $folder = $_REQUEST['foldername'];        
            $remoteurl = '<folder_url>' . $folder;
            $subfolder = 'root';

            $data['result'] = $this->curl_data($remoteurl);
            $data['subfolder'] = 'root';
            
            $this->load->view('edc/curl_ajax',$data);
        }
    }

    public function edc_subfolder() {
        if (isset($_REQUEST['subfolder'])) {
            $folder = $_REQUEST['foldername'];
            $subfolder = $_REQUEST['subfolder'];
            $remoteurl = '<folder_url>' . $folder . '/' . $subfolder;
            $data['result'] = $this->curl_data($remoteurl);
            $data['subfolder'] = 'subdirectory';

            $this->load->view('edc/curl_ajax',$data);
        }
    }

    public function curl_data($url = NULL) {
        $ch = curl_init($url);
		$postData = 'edc';
        curl_setopt_array($ch, array(
			CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_FOLLOWLOCATION => true
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        if ($output === false) {
            $cerror = curl_error($ch);
            return FALSE;
        } else {
            $result = json_decode($output);
            return $result;
        }
    }
}
