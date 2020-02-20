<title>Dashboard || E-Pilketos</title>
<!-- Content Header (Page header) -->
<section class="content-header" id="dashHead">
  <h1 style="float: left; margin-top: -3px">
    Dashboard
  </h1>&nbsp;&nbsp;
  <p style="display: inline;">Real time</p>
  <div class="btn-group" id="realtime" data-toggle="btn-toggle" style="margin-top: 2px">
    <button type="button" class="btn btn-default btn-xs" data-toggle="on" onclick="start()">On</button>
    <button type="button" class="btn btn-default btn-xs active" data-toggle="off" onclick="clearInterval(realtime)">Off</button>
  </div>
  <div id="box"></div>
  <ol class="breadcrumb" id="subBox">
    <li><a href="#" style="color: #1c58c7"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content" id="view-dashboard">

  <!-- Your Page Content Here -->
  

</section>
<!-- /.content -->

<script>
    function start() 
    {
      realtime = setInterval(function(){
        $('#view-dashboard').load('ajax/dashboard-view.php');
      }, 5000); 
    }
</script>