<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Style Play</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Mehedi Hasan">
	<meta name="description" content="Aim is to make people more fashionable. The Designs are elegant than other brands of Europe. Moreover, we are going to offer one of the best quality in a very cheap price. Hopefully our products will bring new fashion in our society">
	<meta name="robots" content="all">
	<meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
	<meta http-equiv="pragma" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="../css/spacelab-bootstrap-min-css/spacelab-bootstrap-min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="css/my-bootstrap-min.css">
!-->
	<script type="text/javascript" src="../js/bootbox.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap3.2-js-bootstrap-min.js"></script>
	<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       Admin Panel is Under Construction. <br>Thank you for visiting our site. 
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
    </div>
  </div>
</div>
 
<!-- sometime later, probably inside your on load event callback -->
<script>
    $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   // just as an example...
            $("#myModal").modal('hide');     // dismiss the dialog
        });
    });
 
    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
        $("#myModal a.btn").off("click");
    });
    
    $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
        $("#myModal").remove();
    });
    
    $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
      "backdrop"  : "static",
      "keyboard"  : true,
      "show"      : true                     // ensure the modal is shown immediately
    });


</script>

</body>
</html>
