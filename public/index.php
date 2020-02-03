<?php include '../includes/header2.php'; ?>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li id="noPrint"><a href="#">Home</a><span>«</span></li>
									
									<li id="noPrint">Cases</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

<div class="inner_content_w3_agile_info two_in">
<h2 class="w3_inner_tittle">My Cases</h2>
<!-- tables -->
        
<div class="agile-tables">
<div class="w3l-table-info agile_info_shadow">
<input type="text" id="myInput" placeholder="Search..." title="Type in  something" class="noPrint" >
<button type="button" class="btn btn-primary btn-flat btn-pri" onclick="window.print()" id="noPrint"><i class="fa fa-print" aria-hidden="true"></i> Print</button>

<table id="table-two-axis" class="two-axis">
<thead>
    <tr>
    
                        <th>Case No</th>
                        <th>Accused ID</th>
                        <th>Judge</th>
                        <th>Court Room</th>
                        <th>Reg Date</th>
                        <th>Case Type</th>
                        <th>Summary</th>
                        <th>Rulling</th>
                        <th>Added By</th>
                        <th>Cleared</th>
 
    </tr>
</thead>
<tbody id="myTable">
        
<?php
                      $national_id = $_SESSION['national_id'];
                      $count = 1;
                      $sel_query = "SELECT * FROM case_  WHERE national_id = $national_id; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>

                      <tr>
                        
                        <td><?php echo $row["case_id"]; ?></td>
                        <td><?php echo $row["national_id"]; ?></td>
                        <td><?php echo $row["judge"]; ?></td>
                        <td><?php echo $row["court_room"]; ?></td>
                        <td><?php echo $row["reg_date"]; ?></td>
                        <td><?php echo $row["case_type"]; ?></td>
                        <td><?php echo $row["summary"]; ?></td>
                        <td><?php echo $row["rulling"]; ?></td>
                        <td><?php echo $row["added_by"]; ?></td>
                        <td><?php echo $row["cleared"]; ?></td>
                        
                
                
                      </tr>
                       <?php $count++;
                    } ?>
                </tr>
            </tbody>
            </table>


        </div>
</div>
<!-- //tables -->

</div>
<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019-<?php echo date("Y"); ?>Kibera Law Court. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#table').basictable();

$('#table-breakpoint').basictable({
breakpoint: 768
});

$('#table-swap-axis').basictable({
swapAxis: true
});

$('#table-force-off').basictable({
forceResponsive: false
});

$('#table-no-resize').basictable({
noResize: true
});

$('#table-two-axis').basictable();

$('#table-max-height').basictable({
tableWrapper: true
});
});
</script>
<!-- //js -->
<script src="js/screenfull.js"></script>
<script>
$(function () {
$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

if (!screenfull.enabled) {
return false;
}



$('#toggle').click(function () {
screenfull.toggle($('#container')[0]);
});	
});
</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>