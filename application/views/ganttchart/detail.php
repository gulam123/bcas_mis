
<script>
$(function(){
	var urlDetail="<?=$this->urlDetail?>";
	
	$('#crudTable').on('click', '.detail-button', function () {
		var data = dCrudTable.row($(this).parents('tr')).data();
		console.log(data);
		location=urlDetail+"?id="+data.id;
	});
	
	
});
</script>