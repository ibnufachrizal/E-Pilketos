<?php
$no = 1;
foreach (adminTampil() as $data) {
?>
<li>
	<a data-toggle="collapse" href="#<?=$no; ?>" aria-expanded="false">
	  <img src="../assets/img/avatar.jpg" class="menu-icon img-responsive">

	  <div class="menu-info">
	    <h4 class="control-sidebar-subheading" id="nama-<?=$no; ?>"><?=$data['nama']; ?></h4>

	    <p id="mail-<?=$no; ?>"><?=$data['email']; ?></p>
	    <input type="hidden" value="<?=$data['id']; ?>" id="id-<?=$no; ?>">
	    <input type="hidden" value="<?=$data['username']; ?>" id="user-<?=$no; ?>">
	  </div>
	</a>
</li>

<li>
	<a href="javascript:void(0)">
	  	<form action="" method="post">
			<input type="submit" name="out" value="Sign Out" class="btn ripple" style="background: #f71945; color: white; border-radius: 7px; outline: none">
		</form>
	</a>
</li>

<div class="collapse pull-right" id="<?=$no; ?>" style="position: absolute; margin-left: 110px; margin-top: -38px; border-radius: 10px; box-shadow: 1px 2px 10px rgba(000,000,000, .2);">
	<button class="btn btn-success btn-flat btn-xs" style="border-radius: 5px; outline: none" data-toggle="modal" data-target="#edit" onclick="editAdmin(<?=$no; ?>)">
		<i class="fa fa-edit"></i>&nbsp;Edit
	</button>
	<button class="btn btn-danger btn-flat btn-xs" style="border-radius: 5px; outline: none" data-toggle="modal" data-target="#hapus" onclick="hapusAdmin(<?=$no; ?>)">
		<i class="fa fa-trash"></i>&nbsp;Hapus
	</button>
</div>

<?php $no++; } ?>

<script>
	
function editAdmin(no) {
  var id   = $('#id-'+no).val();
  var nama = $('#nama-'+no).html();
  var user = $('#user-'+no).val();
  var mail = $('#mail-'+no).html();

  $('#idAdmin').val(id);
  $('#nameAdmin').val(nama);
  $('#username').val(user);
  $('#email').val(mail);
}

function hapusAdmin(no){
  $('#load').hide();
  var id = $('#id-'+no).val();
  $('#id-val').val(id);
}

</script>