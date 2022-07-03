<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4>Panggil Ambulans</h4>
				<table id="tabel_ambulan" class="table">

				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function loadKonten(url) {
		$.ajax(url, {
			type: 'GET',
			success: function(data, status, xhr) {
				var objData = JSON.parse(data);

				$('#tabel_ambulan').html(objData.konten);
			},
			error: function(jqXHR, textStatus, errorMsg) {
				alert('Error : ' + errorMsg);
			}
		})
	}

	loadKonten('http://localhost/backend_ambulan/ambulan/list_ambulan');
</script>
