function popup($page){
	$.popupWindow($page,{
		width:500,
		height:800,
		center:'parent'
	});
}
$(function(){
	$(".btn-nav").click(function(){
		var alamat = $(this).attr("data-url");
			// alert(alamat);
			$.ajax({
				type:"post",
				url:alamat,
				success:function(data){
					// alert(data);	
					var a = data.lenght;
					if(data.substring(a-4,a)==='.php')
					{
						$("#konten").empty();
						$("#konten").load(data);
					}
					else
					{
						$("#konten").empty();
						$("#konten").html(data);
					}
				},
				error:function(){

					$("#konten").html("");
				}
			});
		});

// 	$("#frm-input").submit(function(){
// 		var data = $(this).serialize();
// 		var url = $(this).attr("data-url");
// 		alert(data);
// 		$.ajax({
// 			type:"post",
// 			url:url,
// 			data:data,
// 			success:function(data){
// 				alert(data);
// 				$("#konten").empty();
// 				$("#konten").load(data);
// 			}
// 		});
// 	});
});
function ofrmuser(){
	$("#modal-frm-user").modal("show");
}
function tfrmuser(){
	$("#modal-frm-user").modal("hide");
}
function ofrmtempat(){
	$("#modal-frm-tempat").modal("show");
}
function tfrmtempat(){
	$("#modal-frm-tempat").modal("hide");
}

function ofrmkelompok(){
	$("#modal-frm-kelompok").modal("show");
}
function tfrmkelompok(){
	$("#modal-frm-kelompok").modal("hide");
}


