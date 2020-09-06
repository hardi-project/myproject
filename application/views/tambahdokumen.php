
<div class="modal-header">
  <h3 class="modal-title" align="left">Tambah Dokumen</h3>

  <div class="form-group">


  </div>

  <body>
<form action="<?php echo base_url().'upload/upload_image'?>" method="post" enctype="multipart/form-data" name="myform">
       Pilih Jumlah File

       <select name="jumfile" onchange="show()" id="jum">
           <option value="0">0</option>
           <option value="2">1</option>
           <option value="3">2</option>
           <option value="4">3</option>
           <option value="5">4</option>
           <option value="6">5</option>
       </select>

       <br><br>


       <div id="selectfile">

       </div>
   <br>
   <input type="hidden" name="n" />
   <input type="submit" name="submit" value="Upload" onmouseover="cek()"/>
   </form>
</body>
<div class="modal-footer">
				<button class="close" data-dismiss="modal">
					&times;
				</button>
</div>

<script type="text/javascript">
function show()
{
		 var n = document.myform.jumfile.value;
		 var i;
		 var string = "";

		 for (i=1; i<=n-1; i++)
			{
					string = string + "Pilih File: <input name=\"nama_dokumen"+ i + "\" type=\"file\"><br>";
			}

					 document.getElementById('selectfile').innerHTML = string;
					 document.myform.n.value = n;
			 }

function cek()
{
  	var jum = document.getElementById('jum').value;
  	if(jum=="0")
	  {
	 		alert('file belum dipilih..!');
  	}
 }
 </script>
