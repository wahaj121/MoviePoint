<div id="connectionErrorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Error</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Unable to Sign up,<br>Please try again later.</p>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
$host="localhost";
$username="root";
$password="";
$database="movies";

$connection=mysqli_connect($host,$username,$password,$database);
error_reporting(0);
if (!$connection) {
  echo '<script type="text/javascript">
    $(document).ready(function() {
    $("#connectionErrorModal").modal("show");
    });
    </script>';
}
?>
