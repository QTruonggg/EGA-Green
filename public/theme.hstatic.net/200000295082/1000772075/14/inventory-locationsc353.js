	$(document).ready(()=>{
		const locations = {}
		console.log(locations)
		$('.inv_location_list .inv_item').each(function(){
			const province = $(this).data('province')
			const district = $(this).data('district')
			const id = $(this).data('id')
			let localId = localStorage.getItem('inv_location_id')
			if(localId && localId == id){
				$('.inv_location_selected').text( $(this).text())
			} 
			if(!locations[province]){
				locations[province] = []
				$('.filter-province').append(`<option value="${province}">${province}</option>`)
			}
			locations[province].push(district)
		})
		$(document).on('change', '.filter-province',function(){
			const province = $(this).val()
			let options = `	<option value="null">- Chọn Quận/Huyện -</option>`


			if(province && province !== 'null'){
				locations[province].map((district)=>{
					options += `<option value="${district}">${district}</option>`
				})

				$(` .inv_item`).hide()
				$(` .inv_item[data-province="${province}"]`).show()
			}else{
				$(` .inv_item`).show()
			}
			$('.filter-district').html(options)
		})
			$(document).on('change', '.filter-district',function(){
			const province = 	$('.filter-province').val()
			const district = 	$(this).val()
			$(` .inv_item`).hide()
			if(district && district !== 'null'){
				$(` .inv_item[data-province="${province}"][data-district="${district}"]`).show()
			}else{
				$(` .inv_item[data-province="${province}"]`).show()
			}
		} )
		$(document).on('click','.inv_item', function(){
			const location_id = $(this).data('id') 
			localStorage.setItem('inv_location_id', location_id)
			$('.inv_location_selected').text( $(this).text())
			$.post('/location.js?locationId='+location_id).then(function(data){
				if(data.error == false){
					window.location.reload();
				}else{
					$('.inv_location').hide()
					$('.header-left .hotline').addClass('d-lg-flex')
					
				}
			})
		})
		  $(document).on('click', 'body', function(e) {
    if (!$(e.target).is('.inv_location'))
			$('.inv_location_dropdown').removeClass('open')
			$('body').removeClass('modal-open')
     })
		$('body').click(()=>{
		//	$('.inv_location_dropdown').removeClass('open')
			//$('body').removeClass('modal-open')
		})
		$(document).on('click', '.inv_location_dropdown' ,(e)=>{
			  e.stopPropagation();
		} )
		$(document).on('click', '.inv_location_header', (e)=>{
			  e.stopPropagation();
			$('.inv_location_dropdown').toggleClass('open')
			$('body').toggleClass('modal-open')
		})
		var location_id =		$('.inv_location_list .inv_item').eq(0).data('id') 
		
			$.post('/location.js?locationId='+location_id).then(function(data){
				if(data.error){
						$('.inv_location').hide()
					$('.header-left .hotline').addClass('d-lg-flex')
				}
			})
	})