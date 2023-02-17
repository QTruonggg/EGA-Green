function egaFlashSale (){
	// call product ajax
	// init countdown
	if(!window.falshSale) return

	Date.prototype.addDays = function(days) {
		var date = new Date(this.valueOf());
		date.setDate(date.getDate() + days);
		return date;
	}
	Date.prototype.addHours = function(hours) {
		this.setTime(this.getTime() + ((hours)*60*60*1000));
		return this; 
	}
	const getDays = (times) => Math.floor((times / (1000 * 60 * 60 * 24))) 
	const getHours =  (times) => Math.floor((times % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	const getMinutes  = (times) => Math.floor((times % (1000 * 60 * 60)) / (1000 * 60));
	const getSeconds = (times) => Math.floor((times % (1000 * 60)) / 1000);

	function renderCountDown(distance) {
		// Time loop from settings
		let html = [];
		let days = getDays(distance) 
		let hours = `<div class="ega-badge-ctd__item ega-badge-ctd__h">${getHours(distance) >= 10 ? getHours(distance) : `0${getHours(distance)}`}</div>`
		let minutes = `	<div class="ega-badge-ctd__item  ega-badge-ctd__m">${getMinutes(distance) >= 10 ? getMinutes(distance) : `0${getMinutes(distance)}`}</div>`
		let seconds = `<div class="ega-badge-ctd__item ega-badge-ctd__s">${ getSeconds(distance) >= 10 ? getSeconds(distance) : `0${getSeconds(distance)}`}</div>`
		html = [hours,minutes,seconds]
		if(days > 0 ) html.unshift(`	<div class="ega-badge-ctd__item ega-badge-ctd__d">${days >= 10 ? days : `0${days}`}</div>`)
		return `<div class="ega-badge-ctd">
${html.join(`	<div class="ega-badge-ctd__colon" > : </div>`)}

</div>`;
	}
	function calcCountDown(startTime, endTime){
		let distance = 0
		let now = new Date().getTime()
		//console.log(now >= startTime , now <= endTime )
		if(now >= startTime && now <= endTime ){
			distance = (endTime - now);

			return distance
		}
		return distance
	}
	let now = new Date()
	let {type, 
		 dateStart, 
		 dateFinish,
		 hourStart,
		 hourFinish,
		 dayLoop, 
		 activeDay,
		 finishAction,
		 finishLabel
		} = window.falshSale
	let distance = 0, startTime, endTime;
	if(type === 'hours' && ( new Date().getDay() === +activeDay || +activeDay === 7 ) ){
		// expireTime
		hourStart = hourStart.split(':')
		// check is start time valid
		// convert start time to time stamp
		startTime = new Date().setHours(hourStart[0] != '24' ? hourStart[0] : '00' ,hourStart[1] || '00','00')
		endTime =  new Date(startTime).addHours(+hourFinish).getTime()
		//check is flash sale started || finished
	}
	if(type === 'days' ){
		var pattern = /(\d{2})\/(\d{2})\/(\d{4})/;
		startTime = new Date(dateStart.replace(pattern,'$3-$2-$1'))
		startTime = startTime.setHours('00','00','00')
		// check valid date
		endTime =  new Date(startTime).addDays(+dateFinish).getTime()

	}
	distance = calcCountDown(startTime, endTime);
	if(	distance > 0){
		setInterval(function(){
			distance = calcCountDown(startTime, endTime);
			$(`.flashsale__countdown`).html(renderCountDown(distance))
		},1000)
		let dotAnimation = `<span class="ega-dot"><span class="ega-ping"></span></span>`
		//$(`.flashsale__title`).prepend(dotAnimation)
		$(`.flashsale__countdown`).html(renderCountDown(distance))
		$(`.flashsale__countdown-label`).show()
	}else{
		if(finishAction == 'show' ){
			$(`.flashsale__countdown`).html('') 
			$(`.flashsale__countdown-label`).html(finishLabel).show()

		}
		finishAction == 'hide' && $(`.flashsale`).remove()
	}

}
var is_load = 0

function handleWithChange(mq){
		if(mq.matches){
		$('.slick-new').removeClass('row')
		$('.slick-new').slick({
			autoplay: false,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				}
			]
		})
		
	let productItem = $('.slick-pro-banner .item_product_main').length;
	let productLimit = window.innerWidth < 992 ? 2  : 3
	let slidetoscroll = productItem >= productLimit ? productLimit : productItem
	let slidetoscrollMD = productItem >= productLimit ? productLimit : productItem
	 $('.slick-pro-banner').slick({
			autoplay: false,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: slidetoscroll,
			slidesToScroll: slidetoscroll,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: slidetoscroll,
						slidesToScroll: slidetoscroll
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: slidetoscroll,
						slidesToScroll: slidetoscroll
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: slidetoscroll,
						slidesToScroll: slidetoscroll
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: slidetoscroll,
						slidesToScroll: slidetoscroll
					}
				}
			]
		})
		
		$('.home-news-slider').slick({
		lazyLoad: 'ondemand',
		autoplay: false,
		autoplaySpeed: 3000,
		fade: true,
		cssEase:'linear',
		dots: false,
		arrows: true,
		infinite: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					arrows: false,
				}
			}
		]
	});
		let brandsItem =  $('.section_brand .row .item').length
		$('.section_brand .row').slick({
			autoplay: false,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: brandsItem,
			slidesToScroll: brandsItem,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: brandsItem,
						slidesToScroll: brandsItem
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				}
			]
		});
	}
	}
function load_after_scroll(){
	if(is_load) return 
	is_load = 1
	$('.home-slider').slick({
		lazyLoad: 'ondemand',
		autoplay: false,
		autoplaySpeed: 3000,
		fade: false,
		cssEase:'linear',
		dots: true,
		arrows: true,
		infinite: true,
		autoplay: true,
  		autoplaySpeed: 2000,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					arrows: false,
				}
			}
		]
	});
	
	$('[data-coll]').one('touchstart mouseover',function(){
		if($(this).hasClass('js-loaded')) return
		let id = $(this).attr('data-tab')
		let tabContent = $(`#${id}`).find('.row')
		let collHandle = $(this).data('coll')
		let limit = +$(this).data('limit')
			tabContent.find('.item_skeleton').remove()
		$.ajax({
			url: `/collections/${collHandle}?view=home_tab`,
			success: function(data){
				tabContent.html(data)
				productsCallback()
			}
		})
	})
	$('[data-coll]').mouseover()
	egaFlashSale()
	$('[data-section]').each(function(){
		let sectionName =	$(this).data('section')
		$(this).find('.item_skeleton').remove()
		let content = $(this).find('[data-template]')
		$(this).append(content.html())
		content.remove();
		productsCallback()
	})
	
	const mq = window.matchMedia('(min-width: 768px)')
	mq.addListener(handleWithChange)
	handleWithChange(mq)


}

$(document).ready(function ($) {
	!is_load && setTimeout(load_after_scroll, 5000)
	$(window).on('scroll click mousemove touchstart',load_after_scroll)
});




