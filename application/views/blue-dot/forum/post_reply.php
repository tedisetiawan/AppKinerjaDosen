
<script type="text/javascript" src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>
<td valign="top" bgcolor="#FFFFFF"><div id="RightContent">
      <div style="width:700px; float:right;">
	<ul id="crumbs">
		<li><a href="<?php echo base_url(); ?>">Home</a></li>
		<li><a href="<?php echo base_url(); ?>forum">Forum</a></li>
		<li>Post Reply Thread</li>
	</ul>
	<div class="cleaner_h10"></div>
	<div class="cleaner_h5"></div>
</div>


<table width="100%" border="0" cellspacing="1" cellpadding="10" bgcolor="#D4E5A1">
	<tr>
	  <td class="bg-gowesip" colspan="2"><span class="tittle-forum"><strong>POST REPLY THREAD</strong></span><span class="tittle-forum2"></span></td>
	</tr>
</table>
	
<form method="post" action="<?php echo base_url(); ?>forum/forum/save_reply">
<table  width="700" bgcolor="#cbe6ff" cellspacing="0" border="0" cellpadding="10">
<tr>
<td colspan="2"><input type="text" size="50" name="judul" style="width:660px; padding:5px; font-size:12px;" placeholder="Ketikkan judul thread..." required /></td>
</tr>

<tr>
<td colspan="2">
<textarea class="ckeditor" cols="40" name="isi" style="width:660px; height:220px; resize:none; outline:none; font-family:Arial; background-color:#FFFFFF; font-size:12px;" placeholder="Ketikkan isi thread..."></textarea>
</td>
</tr>
<tr>
	<td>Gambar Kode :</td>
	<td><?php echo $gbr_captcha; ?>
	</td>
</tr>
<tr>
	<td>Kode  :</td>
	<td>
	Salin kode di atas
	<div class="cleaner_h0"></div><input type="text" name="captcha" size="30" required style="width:400px; padding:5px; font-size:12px;" />
	<input type="hidden" value="<?php echo $param; ?>" name="id_forum"> 
</td>
</tr>
<tr>
	<td></td>
	<td><input type="reset" value="HAPUS" class="input-button" /><input type="submit" value="KIRIM" class="input-button" /></td>
</tr>
</table>
</form>

  </table>
  
  