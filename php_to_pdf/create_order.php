<script type="text/javascript" src="<?php echo JS_FOLDER_WWW ?>jquery-1.8.3.js"></script>
<?php
   require_once("include/MPDF/mpdf.php");
   $toptile = "Xcel Energy - All Other Employees Group";
   $html='<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<style type="text/css">

    html,
    body{
        margin:0;
        padding:0;
        
    }
    body{
     margin-collapse:collapse;
        
    }
    .top_align td{
        vertical-align: top;
    }
    table{
        font-family:Arial;
        width:100%;
        border-collapse: collapse;
        border-spacing: 0; 
        font-size:11px;
        margin:0;
        table-layout:fixed;
        white-space: nowrap;  
    border-spacing: 0px;
    border-collapse: collapse;
    
    
    }

    td {
        border-collapse: collapse !important;
        border-spacing: 0!important; 
    }
    tr{
      display:table;
      width:100%;
    }
    td{
      
      
    }
    table p,
    table h1,
    table h2,
    table h3,
    table h4{
        margin: 0 0 10px 0 ;
        font-weight: normal;
    }
    .border_table{
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
        text-align: center;
    }
    .border_table tr td{
        border-left: 1px solid #000000;
        border-top: 1px solid #000000;
        padding: 6px 5px;
        vertical-align:top;
        line-height:normal;
    font-size:10px;
    }
    .border_none,
    .border_table .border_none{
        border: none;
    }
    tr.top_border_remove td{
        border-top: none;
    }
    .border_table  .border_top_0 {
        border-top: none;
    }

    .border_left_0,
    .border_table .border_left_0{
        border-left: 0;
    }
    .bigger_font{
        font-weight: bold;
    }
    .footer_table td{
        
    }
    .border_bottom_2{
        border-bottom: 1px solid #000;
    }
    .dark_table th {
     background-color:#000000;
     background-color:black;
    color: #ffffff;
    font-size: 10px;
    padding: 2px 5px 3px;
    font-weight:normal;
    border:1px solid #000;
    }
    .dark_table tr td{
     padding-top:2px;
     padding-bottom:2px;
     font-size: 11px;
     
    }
    .side_content{
    line-height:20px;
    font-size:11px;
    display:block;
    }
    .bottom_border_2{
    border-bottom:1px solid #000;
    }
    .listing-item tr td{
        padding:4px 5px;
    }
    .side_content td{
    border-bottom:1px solid #000;
    padding:6px 10px 7px;
    }
    
    @page{
        position:relative;
        margin:20px 15px;
        padding:0;
    }
    .ca{
        position:absolute;
        left:10px;
        top:0;
        width:20px; 
        height:100%;
        bottom:0;
        padding-top:600px;     
    }
    .ca1{
      position:absolute;
        left:0;
        top:160px;
        border-right:1px solid #000;
        width:20px; 
        bottom:165px
    }
    .border_0 td{
      border:none !important;
    }
  
    .relative-p{
       overflow: hidden;
    position: relative;
    }
    .poly_image{
     position: absolute;
    top: 0;
    }

</style>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" rotate="-90|-90"  >
<tr>
    <td width="25" height="100%" style="padding-top:140px; padding-right:3px;">
      <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td height="100%" valign="bottom" align="right"><img style="border-right:1px solid #000;" src="'.ROOT_WWW.'images/spacer.jpg" height="580" width="1" /><br><img src="'.ROOT_WWW.'images/ca.jpg" width="15" /></td>
        </tr>
    </table>  
    </td>

    <td width="100%"><table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td width="580" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
              <tr>
                <td style="border-right:1px solid #000;" width="100%"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="top_align" style="font-size:14px;">
                    <tr>
                      <td width="30%" align="left"><img width="50" src="'.ROOT_WWW.'images/essilor-logo.png"/></td>
                      <td width="40%" align="center" style="font-size:11px;"> Please Fax ENTIRE Form To: <br>
                        <strong style="padding-top:3px; font-size:13px;">800-553-1730</strong><br>
                        <strong>Twin City Optical - Minneapolis, MN</strong></td>
                      <td width="30%" align="center" style="font-size:11px;">INDUSTRIAL <br>
                        PRESCRIPTION</td>
                    </tr>
                    <tr>
                      <td colspan="3"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="top_align" style="font-size:11px;">
                          <tr>
                            <td width="100%" colspan="5"><img src="'.ROOT_WWW.'images/spacer.jpg" height="2" width="1" /></td>
                          </tr>
                          <tr>
                            <td width="50"><strong>Account#: </strong></td>
                            <td width="" style="border-bottom:1px solid #000;"><strong>0510012349</strong></td>
                            <td width=""><strong>&nbsp;</strong></td>
                            <td width="" align="right"><strong>Date: </strong></td>
                            <td width="50" style="border-bottom:1px solid #000;">&nbsp;'.$emp_date.'</td>
                          </tr>
                          <tr>
                            <td width="100%" colspan="5"><img src="'.ROOT_WWW.'images/spacer.jpg" height="2" width="1" /></td>
                          </tr>
                          <tr>
                            <td width="100%" colspan="5"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="top_align">
                                <tr>
                                  <td width="100"><strong>Employee Name:</strong></td>
                                  <td width="470" style="border-bottom:1px solid #000;"><strong style="font-size:13px;">'.$emp_name.'</strong></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="" colspan="5"><img src="'.ROOT_WWW.'images/spacer.jpg" height="10" width="1" /></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td style="border-right:1px solid #000;" width="100%"><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;">
                    <tr>
                      <td width="70%"><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:11px;">
                          <tr>
                            <td width="245"><strong>Order #: </strong><strong style="font-size:13px;">'.$order_id.'</strong></td>
                            <td width="" align="right"><strong>Secure ID#: </strong><strong style="font-size:13px;">'.$secure_id.'</strong></td>
                          </tr>
                          <tr>
                            <td width="" colspan="2"><img src="'.ROOT_WWW.'images/spacer.jpg" height="3" width="1" /></td>
                          </tr>
                        </table></td>
                      <td width="30%" valign="top">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td width="100%"><table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td valign="top" style="border-bottom:1px solid #000;" width="70%"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="border_table"  style="font-size:13px;">
                          <tr>
                            <td width="7%" class="border_none">&nbsp;</td>
                            <td width="20%">Sphere</td>
                            <td width="25%">Cylinder</td>
                            <td width="20%">Axis</td>
                            <td width="28%" style="padding:0;" rowspan="3" align="center">
                <table width="100%" cellspacing="0" cellpadding="0" border="0" class="">
                                <tr class="">
                                  <td  class="border_none" colspan="4" width="100%">Prescribed Prism</td>
                                </tr>
                                <tr class="">
                                  <td style="padding-left:0; padding-right:0; font-size:11px; text-align:center;" class="border_left_0 border_b_n" width="25%">In</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px; text-align:center;" width="25%">Out</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px; text-align:center;" width="25%">Up</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px; text-align:center;" width="25%">Down</td>
                                </tr>
                <tr class="">
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" class="border_left_0 border_b_n" width="25%">&nbsp;</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" width="25%">&nbsp;</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" width="25%">&nbsp;</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" width="25%">&nbsp;</td>
                                </tr>
                <tr class="">
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" class="border_left_0 border_b_n" width="25%">&nbsp;</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" width="25%">&nbsp;</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" width="25%">&nbsp;</td>
                                  <td style="padding-left:0; padding-right:0; font-size:11px;" width="25%">&nbsp;</td>
                                </tr>
                              </table>
            </td>
                          </tr>
                          <tr>
                            <td width="10%" class="">R</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                           
                          </tr>
                          <tr>
                            <td width="10%" class="">L</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                           
                          </tr>
                          <tr>
                            <td width="10%" class="">&nbsp;</td>
                            <td width="20%">Add</td>
                            <td width="20%">Height</td>
                            <td width="20%" rowspan="3" bgcolor="#C0C0C0">&nbsp;</td>
                            <td width="30%" style="padding:0;"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="border_table border_none">
                                <tr class="">
                                  <td class="border_none" colspan="2" width="100%">Dist - <strong>PD</strong> -Near</td>
                                </tr>
                
                              </table></td>
                          </tr>
                          <tr>
                            <td width="10%" class="">R</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                            <td width="30%" rowspan="2" style="padding:0;"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="border_table border_none" height="100%">
                                <tr class="top_border_remove">
                                  <td class="border_none" height="68" width="50%" style="border-right:1px solid #000;">&nbsp;</td>
                                  <td class="border_none" >&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="10%" class="">L</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="10%" class="">&nbsp;</td>
                            <td width="20%">Base Curve </td>
                            <td width="20%">OC Height</td>
                            <td width="30%" style="padding:0;" colspan="2"  rowspan="2"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="border_table border_none">
                                <tr class="top_border_remove">
                                  <td width="100%" colspan="4" class="border_none" align="center"><strong>Bifocals</strong><br>
                                    (Please Indicate Style) <br>
                                    <h3>ST28</h3></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="10%" class="">R</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="10%" class="">L</td>
                            <td width="20%">&nbsp;</td>
                            <td width="20%">&nbsp;</td>
                            <td width="30%" style="padding:0;"  colspan="2"  rowspan="2"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="border_table border_none">
                                <tr class="top_border_remove">
                                  <td width="100%" colspan="4" class="border_none"><strong>Trifocals</strong><br>
                                    (Please Indicate Style) <br>
                                    <h3>ST7x28</h3></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="10%" class=""  rowspan="2">Circle One</td>
                            <td width="20%">Supply Frame</td>
                            <td width="20%">Frame Enclosed</td>
                          </tr>
                          <tr>
                            <td width="20%">Frame to Follow</td>
                            <td width="20%"> Lenses Only</td>
                            <td width="20%" rowspan="3" colspan="2"><strong>Progressives</strong><br>
                              (Please Indicate Style) <br>
                              <h3>Brillenz <br>
                                Ideal <br>
                                Ideal Short</h3></td>
                          </tr>
                          <tr>
                            <td width="20%" colspan="3" align="left"><strong>Frame Name</strong> <br> &nbsp;<br> &nbsp;<br> &nbsp;</td>
                          </tr>
                          <tr>
                            <td width="20%" colspan="3" align="left"><strong>Frame Color</strong><br> &nbsp;<br> &nbsp;<br> &nbsp;</td>
                          </tr>
                          <tr>
                            <td width="20%" class="" colspan="2" align="left"><strong>Eye Size</strong><br> &nbsp;</td>
                            <td width="20%"><strong>Bridge </strong></td>
                            <td width="20%" style="padding-left:0;padding-right:0; font-size:9px;"><strong>Tpl Lngth</strong><br> &nbsp;<br> &nbsp; <br> &nbsp;</td>
                            <td width="30%" align="center" style="padding-left:0;padding-right:0; font-size:9px;">
                            <strong>Sideshields</strong><br>Perm/Integrated</td>
                          </tr>
                          <tr>
                            <td width="" height="85" class="" colspan="5" align="left" style="line-height:20pt;"><strong> Special Instructions</strong>
              </td>
                          </tr>
                        </table></td>
                      <td width="173" valign="top" style="border:1px solid #000;"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="side_content">
                          <tr>
                            <td width="10%" class="" align="left"><strong>Lens Options</strong> 
                              <br>&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="center"><strong>Lens Materials</strong></td>
                          </tr>
                          <tr>
                             <td width="10%" align="center"><img src="'.ROOT_WWW.'images/ploy1.jpg" width="170"  /></td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="center"><strong>Coatings</strong></td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="center" style="font-size:12px;">
                            <br>
                            Optifog/TD2
                            <br> <br>
                            OR
                            &nbsp;
                            <br> <br>
                            Sharpview+
                            &nbsp;
                            <br>
                            (Anti-Reflective)
                            &nbsp;
                            <br>
                            &nbsp;
                            

                            </td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="center">Tints/Photochromics</td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="left">#1,2,3 Tint <br>
                              Transitions® VII 
                              <br>
                              &nbsp;
                              <br>
                              &nbsp;
                              <br>
                            &nbsp;
                            <br>
                            &nbsp;
                              </td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="center"><strong>Items Not Allowed</strong></td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="center"><strong>Glass & Plastic Lenses <br>
                              Detachable Sideshields </strong>
                              <br>
                              &nbsp;
                              <br>
                &nbsp;
                              
                              </td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="left">For Lab Use Only</td>
                          </tr>
                          <tr>
                            <td width="10%" class="" align="left" style="padding-bottom:12px; border:none;"><strong style="font-size:15px; line-height:20px;">
                              Ship To: ________ <br>
                              Bill to: 12349 <br></strong><br><br> </td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td width="100%"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="top_align" style="font-size:12px;">
                    <tr>
                      <td width="100%" colspan="2" height="" style="padding-bottom:7px;"><strong>Ask your eyecare professional about: <br>
                        </strong></td>
                    </tr>
                    <tr>
                      <td width="50%" align="center"><img src="'.ROOT_WWW.'images/new-l1.jpg" width="80" /></td>
                      <td width="50%" align="center"><img src="'.ROOT_WWW.'images/new-l2.jpg" width="80" /></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td width="100%">
                  <table width="560" cellspacing="0" cellpadding="0" border="0" class="footer_table" style="font-size:11px;">
                      <tr>
                        <td width="80%" class="border_bottom_2"><strong>Office Name:</strong></td>
                        <td width="20%" class="border_bottom_2"><strong>Phone</strong></td>
                      </tr>
                      <tr>
                        <td width="" style="padding-top:10px;" class="border_bottom_2" colspan="2"><strong>Address:</strong></td>
                      </tr>
                      <tr>
                        <td style="padding-top:10px;" width="100%" class="border_bottom_2" colspan="2"><strong>City/State/Zip</strong></td>
                      </tr>
                      <tr>
                        <td width="100%" class="" height="" colspan="2" align="center"><strong style="font-size:11px; font-weight:normal;">Safety glasses must meet ANSI Z87.1-200 standards</strong></td>
                      </tr>
                    </table>
                  </td>
              </tr>
            </table></td>
          <td width="580" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
              <tr>
                <td width="100%"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="top_align" style="font-size:11px;">
                    <tr>
                      <td width="40%" align="left" style="padding-left:10px;"><p>Price List - Group 1207<br>
                          Split Bill to Company & Eyecare Provider <br> &nbsp;</p></td>
                      <td width="30%" align="left">&nbsp;</td>
                      <td width="30%" align="right"><p>Effective Date - 6/15/2015</p></td>
                    </tr>
                    <tr>
                      <td height="44" colspan="3" align="center"><h4 style="font-size:18px; line-height:20px; padding-top:0px; padding-bottom:0px;"><strong>'.$toptile.' </strong><br>
                          <span style="font-size:14px;">National Locations</span></h4></td>
                    </tr>
                    <tr>
                      <td colspan="3" align="center" style="font-size:10px; padding-bottom:2px;"><em>If you have any questions regarding this program, call the Essilor Safety Eyewear Customer Service at 800-553-9705.</em></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td width="100%"><table width="580" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                      <td width="" valign="top" style="font-size:11px;"><table width="400" cellspacing="0" cellpadding="0" border="0" class="border_table dark_table">
                          <tr>
                            <th width="40%" align="left">Frame options</th>
                            <th width="30%" align="left">Allowed </th>
                            <th width="30%">Not Alllowed</th>
                          </tr>
                          <tr>
                            <td align="left">Basic</td>
                            <td style="text-align:left;"><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Thrifty</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Economy</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Fashion</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Deluxe</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Premium 1</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Premium 2</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                           <tr>
                            <th align="left" width="">Lens Styles</th>
                            <th width="" >Allowed </th>
                            <th width="">Not Alllowed</th>
                          </tr>
                          <tr>
                            <td align="left">Single Vision</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
						   <tr>
                            <td align="left">Eyezen+</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Bifocal  - ST28</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Trifocal - ST7X28</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Progressive - Brillenz</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Progressive - Ideal</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Progressive - Ideal Short</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <th align="left" width="">Lens Material</th>
                            <th width="" >Allowed </th>
                            <th width="">Not Alllowed</th>
                          </tr>
                          <tr>
                            <td align="left">Polycarbonate</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /> REQUIRED</td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Plastic</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Glass</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                          </tr>
                          <tr>
                            <th align="left" width="">Coatings</th>
                            <th width="" >Allowed </th>
                            <th width="">Not Alllowed</th>
                          </tr>
                          <tr>
                            <td align="left">TD2® w/OptiFog™</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Sharpview +</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <th align="left" width="">Lens Color</th>
                            <th width="" >Allowed </th>
                            <th width="">Not Alllowed</th>
                          </tr>
                          <tr>
                            <td align="left">Solid Tint</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left">Transitions® VII</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <th align="left" width="">Miscellaneous</th>
                            <th width="" >Allowed </th>
                            <th width="">Not Alllowed</th>
                          </tr>
                          <tr>
                            <td align="left">Dispensing Fee $ 25.00</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                            <td bgcolor="#bebebe">&nbsp;</td>
                          </tr>                       
                          <tr>
                            <td align="left">Perm Sideshields</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/checked.jpg" /> REQUIRED</td>
                            <td><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                          </tr>
                          <tr>
                            <td align="left" style="padding-bottom:4px;">Detach Sideshields</td>
                            <td style="text-align:left;" align=""><img src="'.ROOT_WWW.'images/unchek.jpg" /></td>
                            <td><img src="'.ROOT_WWW.'images/checked.jpg" /></td>
                          </tr>
                        </table></td>
                      <td width="210" valign="top" style="border: 1px solid #000000; border-left:none; font-size:10px; line-height:13px;" ><table width="100%" cellspacing="0" cellpadding="5" border="0" class="">
                          <tr>
                            <td width="100%" align="left" class=""><strong>Instructions</strong><br>
* Current Prescription Required (within 2 yrs. of prescription date & prior to expiration date, if listed)<br>
* Bring written prescription to give to eyecare provider<br>
*  Eyecare provider must order, dispense and fit glasses.<br>
<br>
<strong>Special Instructions</strong><br>
*  Xcel Energy will pay the total cost of safety glasses<br>
<br>
<strong>Lens Material Note</strong><br>
*  Xcel Energy requires and Essilor strongly recommends the use of 
polycarbonate for the best protection.<br>
<strong>*  Note:  Standard plastic and glass lenses are "Basic Impact 
Rated" protection only and do not 
meet the "High Impact Rated" 
requirements of ANSI Z87.1-2010.</strong><br>
<br>
<strong>Ordering/Shipping</strong><br>
*  Shipping paid by company.<br>
*  Eyecare provider will order glasses and will receive completed glasses. <br>
*  Employee needs to be fit properly by eyecare provider.<br>
<br>
<strong>Misc. Fees</strong><br>
*  Essilor will bill Xcel  Energy $25 toward the dispensing fee.  Essilor will reimburse the eyecare provider  $25.<br>
*  Eyecare provider will collect any exam fees directly from the employee or any insurance, if applicable. </td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td width="100%" align="center"><h3 style="padding-top:15px; font-size:15px;">&nbsp;<br> ONLY ITEMS MARKED AS ALLOWED CAN BE ORDERED.</h3></td>
              </tr>
            </table>
          </td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>';
?>
  <style type="text/css">
       .loader {
        position: fixed;
        overlay: black;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('images/loading.gif') 50% 50% no-repeat rgb(249,249,249);
    }
    </style>
    <?php
}
?>
<style type="text/css">
    .success_msg {
        color: green;
        font-size: 16px;
    } 
    .error_msg {
        color: red;
        font-size: 16px;
    }    .loginBox {
        background: #cCcCcC;
        border: 1px solid #e8e8e8;
        border-radius: 0;
        box-shadow: none;
        margin: 10px auto 0;
        min-height: 250px;
        width: 100%;
        max-width: 640px;
        float: none;
        display: block;
    }
    .content1 {
        background: none repeat scroll 0 0 #CCCCCC;
        margin: 20px auto 0;
        padding: 15px;
        width: 100%;
        max-width: 640px;
        box-sizing: border-box;
    } 
</style>
        <a id="pdf_down" href="<?php echo ROOT_WWW;?>downloapdf.php?id=<?php echo $_REQUEST['link_dis'];?>">Download Order PDF</a>
    
    <div class="loader"></div>     
    <style type="text/css">
       .loader {
        position: fixed;
        overlay: black;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('images/loading.gif') 50% 50% no-repeat rgb(249,249,249);
    }
    </style>
<div class="content1">
    
</div>
<style type="text/css">
    #extens
    {
       margin: -20px 0 0;
       position: absolute;
    }
</style>
<div class="loginBox login-ordeer">
    <div class="success_msg" style="padding-left: 30px;">
       
    </div>
    <div class="error_msg" style="padding-left: 30px;">
       
    </div>
  

    <form name='frmEmployeeForm' method='post' action="" id='frmEmployeeForm'>
        <div class="success_msg" style="padding-left:25px">
            
        </div>
        <div class="loginBox-inner manage_employee">
            <div class="loginInputRow">
                <div class="loginInputRow-inner">
                    <label for="empoyee_type_id">Employee Type</label>
                    <select name="empoyee_type_id" id="empoyee_type_id">
                        <option value="0">Select</option>
                        
                            <option value="<?php echo $val['employee_type_id']; ?>"><?php echo $val['employee_type_name']; ?></option>
                    </select>
                </div>
            </div>


            <div class="loginInputRow">
                <div class="loginInputRow-inner">
                    <label for="empoyee_first_name">First Name</label>
                    <input name="empoyee_first_name" type="text" id="empoyee_first_name"/>
                </div>
            </div>

            <div class="loginInputRow">
                <div class="loginInputRow-inner">
                    <label for="empoyee_last_name">Last Name</label>
                    <input name="empoyee_last_name" type="text" id="empoyee_last_name"/>
                </div>
            </div>

            <div class="loginInputRow">
                <div class="loginInputRow-inner">
                    <label for="employee_number">Employee Number</label>
                    <input name="employee_number" type="text" id="employee_number" maxlength="14"/>
                </div>

            </div>
 

             <div class="loginInputRow">
                <div class="loginInputRow-inner">
                    <label for="employee_contact_phone">Phone No.</label>
                    <div style="width:100%; overflow:hidden;"> 
                      <div style="width:78.5%;float:left;">                      
                          <input style="width:99%;"  name="employee_contact_phone" type="text" id="employee_contact_phone"/>
                      </div>
                       <label id="extens" for="user_phone_ext">Extension</label>
                      <input style="width:20%;" name="employee_phone_ext" type="text" id="employee_phone_ext" placeholder="Ext" />
                    </div> 
                    <div style="clear:both;"></div>
                </div>
            </div>         
 
            <div class="loginInputRow last">
                <div class="loginInputRow-inner">
                    <div>
                         <input name="Submit" type="submit" value="Submit" id="lst_link"/>
                         <input name="Reset" type="reset" value="Reset"/>
                    </div>
                </div>
            </div>
        </div>
    </form>
 </div>
 <div class="clr"></div>
<div class="footer_bg">
 <div class="footer_bg">
        <div class="logobox">
            <a title="" href="#"> <img alt="" src="images/essilor_logo.jpg"></a>
            <a title="" href="#"> <img alt="" src="images/btm.png"></a>
        </div>
        
        <div id="footer">
            <div class="block block-block region-odd odd region-count-1 count-3" id="block-block-2">
                <div class="block-inner">
                    <div class="content">
                        <div class="fleft">
                            &copy; 2015 Essilor of America, Inc.
                        </div>
                        <div class="fright">
                            <span>Essilor PSE supports the</span>
                            <div class="region region-footer">
                                <div class="block block-menu" id="block-menu-menu-footer-menu">
                                    <div class="content">
                                        <ul class="menu">
                                            <li class="first leaf">
                                                <a title="" href="http://www.essilorvisionfoundation.org/" target="_blank">Essilor Vision Foundation</a>
                                            </li>
                                            <li class="last leaf">
                                                <a title="" href="http://essilorpse.com/legal-notifications">Legal Notifications</a>
                                            </li>
                                        </ul>  
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <br class="clear">
</div>
</div>