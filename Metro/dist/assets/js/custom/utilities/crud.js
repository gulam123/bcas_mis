$(function(){
	
	crud = {
		
		run : function(){
			
			dCrudTable = $('#crudTable').DataTable({
				"ordering": false,
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": urlDatatable,
					"type": "POST",
					"data":function (d) {
						d.cari = $("#inpSearch").val();
					}
				},
				"columns": column,
				select : true,
			});		
			
			crud.onEvent();
		},
		
	
		setForm : function(p){
			if( p.clear!=undefined ){
				$("#crudForm input").val("");
			}
			else{
				for (const [key, value] of Object.entries(p)) {
					//console.log(`${key}: ${value}`);
					$(`#${key}`).val(`${value}`);
				}
			}
		},
	
		save : function(p){
			//console.log(p.url);
			$.ajax({
				url:p.url,
				data:$("#crudForm").serialize(),
				type:"POST",
				beforeSend:function(){
				},
				success:function(response){
					dCrudTable.ajax.reload();
				},
				error:function(xhr,status,err){
					console.log(xhr.status+" : "+err);
				},
			});
			
		},
		
		onAdd : function(){
			crud.setForm({clear:true});
			$("#crudModal .fw-bolder").html(titleAdd);
			$("#crudModal").modal('show');
			$("#crudForm").unbind("submit").bind("submit",function(){
				crud.save({url:urlAdd});
				$("#crudModal").modal('hide');
			});
		},
		
		onEdit : function(data){
			crud.setForm({clear:true});
			$.ajax({
				url:urlGetById,
				data:{
					id:data["id"],
				},
				type:"POST",
				beforeSend:function(){
				},
				success:function(response){
					crud.setForm(response.data);
					$("#crudModal .fw-bolder").html(titleEdit);
					$("#crudModal").modal('show');
					$("#crudForm").unbind("submit").bind("submit",function(){
						crud.save({url:urlEdit});
						$("#crudModal").modal('hide');
					});
				},
				error:function(xhr,status,err){
					console.log(xhr.status+" : "+err);
				},
			});
		},
		
		onDel : function(data){
			crud.setForm({clear:true});
			$("#modalDel").modal("show");
			$("#btnConfirmDel").unbind("click").bind("click",function(){
				$.ajax({
					url:urlDel,
					data:{
						id:data["id"],
					},
					type:"POST",
					beforeSend:function(){
					},
					success:function(response){
						dCrudTable.ajax.reload();
						$("#modalDel").modal("hide");
					},
					error:function(xhr,status,err){
						console.log(xhr.status+" : "+err);
					},
				});
				
			});
			
		},
	
		onEvent : function(){
			
			$('#inpSearch').keydown(function (e) {
				if (e.keyCode == 13) {
					dCrudTable.ajax.reload();
				}
			})
			
			$('#btn_add').on('click', function () {
				crud.onAdd();
			});
			
			$('#crudTable').on('click', '.edit-button', function () {
				var data = dCrudTable.row($(this).parents('tr')).data();
				crud.onEdit(data);
			});
			
			$('#crudTable').on('click', '.delete-button', function () {
				var data = dCrudTable.row($(this).parents('tr')).data();
				crud.onDel(data);
			});
		},
		
	}
	
	
});

