<?php

require_once('admin/database.php');
require_once('admin/library.php');
/*
$cons= $_POST['track_code'];
$his_decode=null;
$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
$data = dbFetchAssoc($result);
extract($data);
$his_decode=json_decode($his_encode);
}
*/
global $his_decode;
if($his_decode){
$shipment_history.=<<<_END
<div class="row">
                <div class="col-sm-12">
               
               
               
<div id="trackinghead">
<h3>Shipment Travel History</h3>
</div>

<table width="100%" class="table table-striped table-hover table-responsive" style="padding:100px !important">
    <tr class="tr"> 
    <td style="font-size:18px;"><b>Date</b></td>  
    <td style="font-size:18px;"><b>Time</b></td>       
    <td style="font-size:18px;"><b>Activity</b></td> 
    <td style="font-size:18px;"><b>Location</b></td>
     <td style="font-size:18px;"><b>Details</b></td>
</tr>
_END;
foreach($his_decode as $history){
$shipment_history.=<<<_END
<tr> <td style="text-align:center; font-weight:bold; color:blue; font-size:20px"><span id="color">$history->his_date</span></td> 
<td style="text-align:center; font-weight:bold; color:blue; font-size:20px"><span id="color">$history->his_time</span></td> 
<td style="text-align:center; font-weight:bold; color:blue; font-size:20px"><span id="color">$history->his_activity</span></td> 
<td style="text-align:center; font-weight:bold; color:blue; font-size:20px"><span id="color">$history->his_location</span></td> 
<td style="text-align:center; font-weight:bold; color:blue; font-size:20px"><span id="color">$history->his_status</span></td> 
</tr>
_END;
}
$shipment_history.=<<<_END
</table>
               
</div>                
                </div><!-- /.col -->
            </div>
_END;
}
?>