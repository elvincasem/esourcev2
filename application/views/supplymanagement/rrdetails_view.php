
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
<input type="hidden" id="typeaheadvalue" value="<?php echo $typeahead;?>">
	
	<!--rightsidebar here-->
	<?php //$this->load->view('rightsidebar_view'); ?>
	
	<!--main sidebar here -->
	<?php $this->load->view('leftsidebar_view'); ?>

	<!-- Main Container -->
	<div id="main-container">
		  <?php $this->load->view('subheader_view'); ?>

		<!-- Page content -->
		<div id="page-content">
			<?php $this->load->view('inc/subnav_view'); ?>
<!-- Tables Row -->
<div class="row">
	   <div class="col-lg-12">
				<!-- Partial Responsive Block -->
				<!-- generate po modal -->
				<!-- Regular Modal Print PR-->
                <div id="printinspection" class="modal bg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								
                                
                            </div> 
                            <div class="modal-body" id="poprintbody">
                                
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->
              <style>

tr.noBorder td{
	border:0;
}
</style>

<div style="text-align:right;">Appendix 62</div>
<div style="text-align:center;">INSPECTION AND ACCEPTANCE REPORT</div>
<br>
<div>Entity Name:__________________________________<span style="padding-left:100px;">Fund Cluster:_________________</span></div><br>
<table border="1" style="border:solid 2px; width:800px;">

	<tr><td colspan="6"></td></tr>
	
	<tr class="noBorder">
		<td colspan="4">Supplier: <u><?php echo $deliverydetails['supName']?></u></td>
		<td colspan="2">IAR No.: ____________________</td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="400">APR No. <u><?php echo $deliverydetails['aprno']?></u></td>
		
		<td colspan="2">Date: ____________________</td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="400">PO No. <u><?php echo $deliverydetails['pono']?></u></td>
		
		<td colspan="2">Invoice No: <u><?php echo $deliverydetails['invoiceno']?></u></td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="">Requisitioning Office/Dept.:<u> CHED Region 1</u></td>
		
		<td colspan="2">Date: ____________________</td>
		
	</tr>
	<tr  class="noBorder">
		<td colspan="4"  width="400">Responsibility Center Code:____________________</td>
		
		<td colspan="2"></td>
		
	</tr>
	
	
	
		
	<tr style="text-align:center;font-weight:bold;">
	<td style="width:90px;">Stock/ Property No.</td>
	<td colspan="3">Description</td>
	<td>Unit</td>
	<td>Quantity</td>
	</tr>
	<!-- items here -->
	<?php
									
				$totalamount=0;
				foreach ($dr_list_items as $drlistitems):
				$amount = $drlistitems['qty'] * $drlistitems['unitcost'];
				$totalamount=$totalamount+$amount;
				echo "<tr style='text-align:center;'>";
				echo "<td>".$drlistitems['itemNo']."</td>";
				echo "<td   colspan='3'>".$drlistitems['description']."</td>";
				echo "<td>".$drlistitems['unit']."</td>";
				echo "<td>".$drlistitems['qty']."</td>";
			
				
				echo "</tr>";
				
				endforeach;
				
				?>

	
	<tr ><td colspan="3" style="text-align:center;font-weight:bold;">INSPECTION</td><td style="text-align:center;font-weight:bold;" colspan="3">ACCEPTANCE</td></tr>
	
	
	<tr ><td colspan="3" style="text-align:center;font-weight:bold;">
	Date Inspected: ______________________<br><br>
	<style>#rectangle{
    width:20;
    height:20px;
    background:white;
	border: 1px solid;
	float:left;
}</style>
	<div style="text-align:left;"><div id="rectangle"></div>Inspected, verified and found in order as to quantity and specifications</div>
	
	<u>ANGELICA Q. DOLORES</u><br>
	Inspection Officer/Inspection Committee
	</td><td style="text-align:center;font-weight:bold;" colspan="3">
	Date Received: ______________________<br>
	<div style="text-align:left;"><div id="rectangle"></div> Complete</div>
	<br>
	<div style="text-align:left;"><div id="rectangle"></div> Partial (pls. specify quantity)</div>
	<u>MYRELLE FAITH D. MINA</u><br>
	Supply and/or Property Custodian
	
	</td></tr>
	
	
	
	
</table>



                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							
                                <button type="button" id="printpo" class="btn btn-effect-ripple btn-primary" onclick="printpo();" ><i class="fa fa-print"></i> Print</button>
								
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
				
				<!-- Print Voucher-->
                <div id="printvoucher" class="modal bg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								
                                
                            </div> 
                            <div class="modal-body" id="voucherprintbody">
                                
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->
               <style>

tr.noBorder td{
	border:0;
}

table { page-break-inside:auto }
   tr    { page-break-inside:avoid; page-break-after:auto }
@media print {
    thead { display: table-header-group; }
    tfoot { display: table-footer-group; }
}
@media screen {
    /*thead { display: block; }
    tfoot { display: block; }*/
}
</style>
<style>.rectangle{
    width:20;
    height:20px;
    background:white;
	border: 1px solid;
	float:left;
}</style>

<div style="text-align:center;font-weight:bold;">PETTY CASH VOUCHER</div>
<br>

<table border="1" style="border:solid 1px; width:800px;">
	
<thead>
		

	
	
	
</thead>
	<tbody>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="4">Entity Name: COMMISSION ON HIGHER EDUCATION<BR>
Fund Cluster: 101	</td>
	<td colspan="2" style="width:30%;">Date:  <?php echo mdate('%F %d, %Y',strtotime($deliverydetails['receivedate']));?></td>
	</tr>
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="4" style="height:100px;">Payee/Office: _____________________<BR><BR>
Address: ________________________</td>
	<td colspan="2" style="width:30%;height:100px;">Responsibility Center Code:  </td>
	</tr>
	
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="3">I. To be filled out upon request</td>
	<td colspan="3">II. To be filled out upon liquidation</td>
	
	</tr>
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="3" valign="top">
		<table border="1" style="width:100%;">
		<tr>
				<td>Particulars</td><td>Amount</td>
			</tr>
		<?php
				$totalamount2=0;
				foreach ($dr_list_items as $drlistitems):
				if($drlistitems['status']>=1){
					$dis = "disabled";
				}else{
					$dis = "";
				}
				$amount = $drlistitems['qty'] * $drlistitems['unitcost'];
				$totalamount2=$totalamount2+$amount;
				echo "<tr  class='odd gradeX'>";

				echo "<td>".$drlistitems['description']."</td>";

				echo "<td style='text-align:center;'>".number_format($amount,2)."</td>";
	
				echo "</tr>";
				
				endforeach;
				
				
		?>
			
			<tr  style="text-align:center;">
				<td style="text-align:right; padding-right:10px;">Total Amount</td><td><?php echo $totalamount2;?></td>
			</tr>
		</table>
	
	</td>
	<td colspan="3">Total Amount Granted: _________________<br><br>
	Total Amount Paid per OR/Invoice No._____________________<br><br>
	Amount Refunded/(Reimbursed)____________
	
	</td>
	
	</tr>
	
	
	
	
	<tr style="text-align:center;font-weight:bold;">
	<td colspan="3">Requested by:
	
	<br>
	<br>
	<u id="print_requested_by1">MYRELLE FAITH D. MINA</u><br>
	Signature over Printed Name<br>
	Name of Requestor
	
	<br><br>
	Approved by:
	<br><br>
	
	<u id="print_approved_by">CHERRIE MELANIE A. DIEGO</u><br>
	Signature over Printed Name<br>
	Name of Immediate Supervisor
	</td>
	<td colspan="3"><div class="rectangle"  id="c1">X</div>Received Refund<br><br>
	<div class="rectangle"  id="c2"></div>Reimbursement Paid
	
	<br><br>
	
	_______________________________<br>
	EVELYN C. ADQUILEN<br>
	Administrative Officer III
	</td>
	
	</tr>
	
	<tr style="text-align:center;font-weight:bold;">
	<td colspan="3">Paid by:
	
	<br>
	<br>
	_______________________________<br>
	EVELYN C. ADQUILEN<br>
	Administrative Officer III
	
	<br><br>
	Cash Received by:
	<br><br>
	
	<u id="print_requested_by2">MYRELLE FAITH D. MINA</u><br>
	Signature over Printed Name<br>
	Payee<br><br>
	Date: <?php echo mdate('%F %d, %Y',strtotime($deliverydetails['receivedate']));?>
	</td>
	<td colspan="3"><div class="rectangle" id="d1">X</div>Liquidation Submitted<br><br>
	<div class="rectangle" id="d2"></div>Reimbursement Received by:
	
	<br><br>
	
	<u id="print_requested_by3">MYRELLE FAITH D. MINA</u><br>
	Signature over Printed Name<br>
	Payee<br><br>
	Date: <?php echo mdate('%F %d, %Y',strtotime($deliverydetails['receivedate']));?>
	</td>
	
	</tr>
	
	
	
	
	</tbody>
	<!-- ff -->
	<tfoot>

	
	<tfoot>
	
	
	
</table>



                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<div style="text-align:left;">Requested By:<input class="form-control" type="text" id="requested_by" value="MYRELLE FAITH D. MINA"> <button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatevoucher_requestby();" > Update</button><br>
							Approved By:<input class="form-control" type="text" id="approved_by" value="CHERRIE MELANIE A. DIEGO"> <button type="button"  class="btn btn-effect-ripple btn-primary" onclick="updatevoucher_approvedby();" > Update</button>
							<br>
							<select id="selectc" class="form-control"><option value="1">Received Refund</option><option value="2">Reimbursement Paid</option></select> 
							<button type="button"  class="btn btn-effect-ripple btn-primary" onclick="updatevoucher_c1();" > Update</button>
							<br>
							<select id="selectd" class="form-control"><option value="1">Liquidation Submitted</option><option value="2">Reimbursement Received by</option></select>  
							<button type="button"  class="btn btn-effect-ripple btn-primary" onclick="updatevoucher_c2();" > Update</button>
							
							
							
							</div>
                                <button type="button" id="printpo" class="btn btn-effect-ripple btn-primary" onclick="printvoucher();" ><i class="fa fa-print"></i> Print</button>
								
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
				
				
				
				
			<div class="block full">
				<div class="block-title">
				
					<h5>Delivery Details</h5>
					 <div class="btn-group pull-right">
							<a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></a>
							<ul class="dropdown-menu text-left">
								<li>
									<a href="#" onclick="editrr();">
										<i class="fa fa-pencil pull-right"></i>
										Edit Delivery Details
									</a>
								</li>
								<li>
									<a href="#" onclick="updateinventory();">
										<i class="fa fa-pencil pull-right"></i>
										Update Inventory
									</a>
								</li>
								<li>
									<a href="#printinspection" data-toggle="modal">
										<i class="fa fa-cubes pull-right"></i>
										Print Inspection and Acceptance Report
									</a>
								</li>
								<li>
									<a href="#printvoucher" data-toggle="modal">
										<i class="fa fa-cubes pull-right"></i>
										Print Petty Cash Voucher
									</a>
								</li>
								
								
							</ul>
						</div>
						
					 
				</div>
				<form action="#" method="post" class="form-horizontal" onsubmit="return false;">
				<div class="form-group">
					<input type="hidden" id="deliveryid" name="state-normal" class="form-control" value="<?php echo $deliveryid;?>" >
					
						<label class="col-md-2 control-label" for="state-normal">Supplier</label>
                        <div class="col-md-2">
                            <select id="supplierid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							<?php
							foreach ($supplierlist as $supplier_list):
								
							if($supplier_list['supplierID']==$deliverydetails['supplierID']){
									$selectedsupplier = "selected='selected'";
								}else{
									$selectedsupplier = "";
								}
								echo "<option value='".$supplier_list['supplierID']."' $selectedsupplier>".$supplier_list['supName']."</option>";
							
							endforeach;
							?>
							</select>
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">DR No.</label>
                        <div class="col-md-2">
                            <input type="text" id="drno" class="form-control" value="<?php echo $deliverydetails['drno'];?>" disabled>
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">APR No.</label>
                        <div class="col-md-2">
                            <select id="aprid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<option value=""></option>
				<?php

							foreach ($aprlist as $apr_list):
							
							if($apr_list['aprid']==$deliverydetails['aprid']){
									$selectedapr = "selected='selected'";
							}
								echo "<option value='".$apr_list['aprid']."' $selectedapr>".$apr_list['aprno']."</option>";
							
							endforeach;
							
				?>
						</select>
							
                        </div>
						
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Received Date</label>
                        <div class="col-md-2">
                            <input type="text" id="receivedate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $deliverydetails['receivedate'];?>" disabled>
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">Status</label>
                        <div class="col-sm-2">
						<select id="status" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							<?php echo "<option value='".$deliverydetails['status']."'>".$deliverydetails['status']."</option>";?>
							<option value="PENDING">PENDING</option>
							<option value="RECEIVED">RECEIVED</option>
						</select>
                           
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">PO No.</label>
                        <div class="col-sm-2">
                            <select id="poid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
							
							<option value=""></option>
				<?php
							//echo "<option value='".$deliverydetails['poid']."'>".$deliverydetails['pono']."</option>";
						foreach ($polist as $po_list):
							if($po_list['poid']==$deliverydetails['poid']){
									$selectedpo = "selected='selected'";
							}
								echo "<option value='".$po_list['poid']."' $selectedpo>".$po_list['pono']."</option>";
							
							endforeach;
				?>
						</select>
                        </div>
						
						<div class="row"></div>
						<label class="col-md-2 control-label" for="state-normal">Invoice No.</label>
                        <div class="col-md-2">
                            <input type="text" id="invoiceno" class="form-control" value="<?php echo $deliverydetails['invoiceno'];?>" disabled>
                        </div>
						<label class="col-md-2 control-label" for="state-normal">Warehouse</label>
                        <div class="col-md-2">
						<select id="warehouseid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
                            <?php
							
							foreach ($warehouselist as $warehouses):
							if($warehouses['warehouseid']==$deliverydetails['warehouseid']){
									$selectedw = "selected='selected'";
							}else{
									$selectedw = "";
							}
								echo "<option value='".$warehouses['warehouseid']."' $selectedw>".$warehouses['warehouse_name']."</option>";
							
							endforeach;
							?>
						</select>
                        </div>
						<label class="col-md-2 control-label" for="state-normal">PR No.</label>
                        <div class="col-md-2">
                            <select id="prid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." disabled>
                            <?php
							
							foreach ($prlist as $pr_list):
							if($pr_list['prid']==$deliverydetails['prid']){
									$selectedpr = "selected='selected'";
							}else{
									$selectedpr = "";
							}
								echo "<option value='".$pr_list['prid']."' $selectedpr>".$pr_list['prno']."</option>";
							
							endforeach;
							?>
						</select>
                        </div>
						
						<label class="col-md-2 control-label" for="state-normal">Purpose</label>
                        <div class="col-md-2">
                            <input type="text" id="purpose" class="form-control" value="<?php echo $deliverydetails['purpose'];?>" disabled>
                        </div>
						
						<!--
						<label class="col-md-2 control-label" for="state-normal">PO Date</label>
                        <div class="col-md-2">
                            <input type="text" id="prdate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php //echo $prmaindetails['prdate'];?>" disabled>
                        </div>
						-->
						<div class="row"></div>
						 <div class="col-md-2 pull-right">
								<button id="savedrbutton" class='btn btn-primary' title='Save PR Details' onclick="updatedrdetails();" disabled><i class="fa fa-floppy-o"></i> Save</button>
						 </div>
						
						
						 
						   

                    </div>
				</form>
				
				
				
				<h4 class="sub-header"></h4>
				<div class="row">
			
					<div class="form-group">
					
						<label class="col-sm-1 control-label text-right" for="state-normal">Select Items</label>
						<div class="col-sm-3" id="item_list_form">
							
							<input type="text" id="itemlist" name="example-typeahead" class="form-control input-typeahead" autocomplete="off" placeholder="Search Item.." tabindex="0">
						</div>
						<label class="col-sm-1 text-right control-label" for="state-normal">QTY</label>
                        <div class="col-sm-1">
                            <input type="number" id="itemqty" name="state-normal" class="form-control" tabindex="0" value="1" tabindex="2">
                        </div>
						
						<label class="col-sm-1 text-right control-label" for="state-normal">UNIT</label>
                        <div class="col-sm-2">
                            <select id="itemunit" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one.." tabindex="0">
							
							<?php
							/*
							foreach ($unitofmeasure as $uom):
				
									echo "<option value='".$uom['unit_name']."'>".$uom['unit_name']."</option>";
			
							endforeach;
				*/
				?>
							</select>
                        </div>
						<label class="col-sm-1 text-right control-label" for="state-normal">Unit Price</label>
                        <div class="col-sm-1">
                            <input type="double" step="0.01" id="unitcost" name="state-normal" class="form-control" tabindex="0" value="0.00" tabindex="4">
                        </div>
						
						<button id="additemreceived" class="btn btn-primary" onclick="additemreceived();"><i class="fa fa-plus"></i></button>
						
					</div>
					
					
	
				</div>
				<div class="row"><br></div>
				
				<div class="row" id="suppliertabs">
				
				
		<!-- Block Tabs -->
		<div class="block full">
			<!-- Block Tabs Title -->
			<div class="block-title">
				<div class="block-options pull-right">
					<a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
				</div>
				<ul class="nav nav-tabs" data-toggle="tabs">
					<li class="active"><a href="#block-tabs-home">Item List</a></li>
					
					<?php
					/*
					foreach ($canvasslist as $canvass_list):
		
							echo "<li><a href='#tab".$canvass_list['supplierid']."'>".$canvass_list['supName']."</a></li>";
	
					endforeach;
					*/
					?>
					
					
					
				</ul>
			</div>
			<!-- END Block Tabs Title -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<div class="tab-pane active" id="block-tabs-home">
				
				<div class="table-responsive">
					 <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            
                                            <th>Stock No.</th>
											
                                            <th style="width: 420px;">DESCRIPTION</th>
											<th style="width: 120px;">Unit</th>
                                            <th style="width: 120px;">QTY</th>
											<th style="width: 120px;">Unit Price</th>
											<th style="width: 120px;">Amount</th>
                                            <th style="width: 320px;" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									
				$totalamount=0;
				foreach ($dr_list_items as $drlistitems):
				if($drlistitems['status']>=1){
					$dis = "disabled";
				}else{
					$dis = "";
				}
				$amount = $drlistitems['qty'] * $drlistitems['unitcost'];
				$totalamount=$totalamount+$amount;
				echo "<tr class='odd gradeX'>";
				echo "<td>".$drlistitems['itemNo']."</td>";
				echo "<td>".$drlistitems['description']."</td>";
				echo "<td>".$drlistitems['unit']."</td>";
				echo "<td>".$drlistitems['qty']."</td>";
				//echo "<td>".$drlistitems['unitcost']."</td>";
				
				
				echo "<td style='width:210px;'><input type='text' style='width:80px;text-align:center;' value='".$drlistitems['unitcost']."' id='unitprice-".$drlistitems['deliveryitemsid']."'> </td>";
				echo "<td>".number_format($amount,2)."</td>";
				//echo "<td><select class='form-control' id='availability-".$aprlistitems['pritemsid']."'><option value='".$aprlistitems['availability']."'>".$aprlistitems['availability']."</option><option value='NO'>NO</option><option value='YES'>YES</option></select> </td>";
				
			
				echo "<td class='center'> 
					
					<button  class='btn btn-primary' title='Save Price' onClick='saveunitprice(".$drlistitems['deliveryitemsid'].")'><i class='gi gi-floppy_saved'></i></button>
					
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deletedritem(".$drlistitems['deliveryitemsid'].");' $dis><i class='fa fa-times'></i></button>
				</td>";
				echo "</tr>";
				
				endforeach;
				
				?>
									</tbody>
					</table>
					 </div>
				
				
					<div class="row" id="totalamount">
					<h4 class="sub-header"></h4>
					<div class="col-md-9">
						<strong class="pull-right"><h2>Total Amount: <?php echo number_format($totalamount,2);?></h2></strong>
					</div>
					</div>
				</div>
				
				
		<?php
		/*
		//tabs for suppliers
			foreach ($canvasslist as $canvass_list):
				$supplierid = $canvass_list['supplierid'];
				$suppliername = $canvass_list['supName'];
				
					echo "<div class='tab-pane' id='tab".$canvass_list['supplierid']."'>";
					$canvassitems = $this->purchaserequest_model->getcanvasslist_items($supplierid,$prid);
					echo "<h4>$suppliername Price List</h4>";
					echo "<button class='btn btn-danger notification pull-right' onClick='removesupplier(".$supplierid.")'><i class='fa fa-times'></i> Remove Supplier</button>";
					echo "<table id='supplier-".$canvass_list['supplierid']."' class='table table-striped table-bordered table-vcenter'>";
					echo "<thead>
                                        <tr>
                                            
                                            <th>QTY</th>
											<th style='width: 120px;'>Unit of Issue</th>
                                            <th style='width: 420px;'>DESCRIPTION</th>
											<th style='width: 120px;'>Unit Price</th>
											<th style='width: 120px;'>Total Price</th>
                                            <th style='width: 320px;' class='text-center'><i class='fa fa-flash'></i></th>
                                        </tr>
                                    </thead>";
						echo "<tbody>";	
						$totalamount2 = 0;
			foreach ($canvassitems as $canvass_items):	
				$amount2 = $canvass_items['qty'] * $canvass_items['unitprice'];	
				$totalamount2=$totalamount2+$amount2;				
									echo "<tr class='odd gradeX'>";
				echo "<td>".$canvass_items['qty']."</td>";
				echo "<td>".$canvass_items['unit']."</td>";
				echo "<td>".$canvass_items['description']."</td>";
				echo "<td style='width:210px;'><input type='text' style='width:80px;text-align:center;' value='".$canvass_items['unitprice']."' id='unitprice-".$canvass_items['aocid']."'> </td>";
				echo "<td>".number_format($amount2,2)."</td>";
				echo "<td class='center'> 
					
					<button  class='btn btn-primary' title='Save Price' onClick='updatecanvassprice(".$canvass_items['aocid'].",".$canvass_items['supplierid'].")'><i class='gi gi-floppy_saved'></i></button>
					
					
				</td>";
				endforeach;
			echo "</tbody>";
						
						
		echo "</table>";
		
		echo "<div class='row' id='totalamount".$canvass_items['supplierid']."'>
					<h4 class='sub-header'></h4>
					<div class='col-md-9'>
						<strong class='pull-right'><h2>Total Amount:";
		echo number_format($totalamount2,2);
			echo "</h2></strong></div></div>";
		
		echo "</div>";

endforeach;
			*/
		?>
				
				
				
				
			<!-- END Tabs Content -->
		</div>
		<!-- END Block Tabs -->
					 
				
				</div><!-- end row-->
				
				
				
				
			</div> <!-- end block -->
	   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->

