$(document).ready(function(){

	$('.searchBtn').on('click',function(){
		var startDate = $('#startDate').val();
		var endDate = $('#endDate').val();

		// ajax
		$.ajax({
			type:'POST',
			url:'order_search.php',
			data:{
				start:startDate,
				end:endDate
			},
			success:function(response){
				// order_search ကနေ search လုပ်လို့ရတဲ့ result ကို 
				// $.each နဲ့ loop ပတ်မှာ
				var searchResults = JSON.parse(response);
				var ordersearchresultDiv = '';

				ordersearchresultDiv += `<h3 class="tile-title"> 
				${startDate} - ${endDate} Order List </h3>
						<div class="table-responsive">
                            <table class="table table-hover table-bordered 
                            searchdisplay">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th> Date </th>
                                      <th> Voucherno </th>
                                      <th> Total </th>
                                      <th> Status </th>
                                      <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>`;
                var a=1;
				$.each(searchResults,function(i,v){
					if (v) {
						var id = v.id;
						var voucherno = v.voucherno;
						var total = v.total;
						var status = v.status;
						var date = v.orderdate;

						if(status == "Order"){
							var actionBtn = `<a href="" class="btn btn-outline-info"> 
                                                <i class="icofont-info"></i>
                                            </a>

                                            <a href="orderstatus_change.php?id=${id}&status=0" class="btn btn-outline-success"> 
                                                <i class="icofont-ui-check"></i>
                                            </a>

                                            <a href="orderstatus_change.php?id=${id}&status=1" class="btn btn-outline-danger"> 
                                                <i class="icofont-close"></i>
                                            </a>`;
						}else{
							var actionBtn =`<a href="" class="btn btn-outline-info"> 
                                                <i class="icofont-info"></i>
                                            </a>`;
						}
						
						
						$('#todayorderlistDiv div.tile-body').hide();

						ordersearchresultDiv +=`<tr>
													<td> ${a++} </td>
													<td> ${voucherno} </td>
													<td> ${date} </td>
													<td> ${total} </td>
													<td> ${status} </td>
													<td> ${actionBtn} </td>
												</tr>`;
					}
				});
				
				ordersearchresultDiv += `</tbody>
										</thead>
										</table>
										</div>`;						

				$('#todayorderlistDiv').html(ordersearchresultDiv);
			}
		})

	});


});