var selectedSortby;
var tt = 'Thứ tự';

var filter = new Haravan.SearchFilter()

if(colId > 0){
	filter.addValue("collection", "collectionid", `product=${colId}`, "&&");
}else{
	filter.addValue("collection", "collectionid", 'product=0', "!");
}
function toggleFilter(e) {
	_toggleFilter(e);
	renderFilterdItems();
	resortby(selectedSortby);
	doSearch(1);
}
function _toggleFilterdqdt(e) {

	var $element = $(e);
	var group = 'Khoảng giá';
	var field = 'price';
	var operator = '||';	 
	var value = $element.attr("data-value");	

	filter.deleteValuedqdt(group, field, value, operator);
	filter.addValue(group, field, value, operator);
	renderFilterdItems();
	doSearch(1);
}

function _toggleFilter(e){
	var $element = $(e);
	var group = $element.attr("data-group");
	var field = $element.attr("data-field");
	var text = $element.attr("data-text");
	var value = $element.attr("value");
	var operator = $element.attr("data-operator");
	var filterItemId = $element.attr("id");


	if (!$element.is(':checked')) {
		filter.deleteValue(group, field, value, operator);
	}
	else{
		filter.addValue(group, field, value, operator);
	}

	$(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
}

function renderFilterdItems() {
	var $container = $(".filter-container__selected-filter-list ul");
	$container.html("");

	$(".filter-container input[type=checkbox]").each(function(index) {
		if ($(this).is(':checked')) {
			var id = $(this).attr("id");
			var name = $(this).closest("label").text();

			addFilteredItem(name, id);
		}
	});

	if($(".filter-container input[type=checkbox]:checked").length > 0)
		$(".filter-container__selected-filter").show();
	else
		$(".filter-container__selected-filter").hide();
}
function addFilteredItem(name, id) {
	var filteredItemTemplate = "<li class='filter-container__selected-filter-item badge badge-pill for='{3}'><a href='javascript:void(0)' onclick=\"{0}\">{1} <i class='fa fa-times'></i> </a></li>";
	filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
	filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
	filteredItemTemplate = filteredItemTemplate.replace("{3}", id);
	var $container = $(".filter-container__selected-filter-list ul");
	$container.append(filteredItemTemplate);
}
function removeFilteredItem(id) {
	$(".filter-container #" + id).trigger("click");
}

function doSearch(page, options) {
	if(!options) options = {};
	//NProgress.start();
	$('.aside.aside-mini-products-list.filter').removeClass('active');
	awe_showPopup('.loading');
	filter.search({
		view: selectedViewData,
		page: page,
		sortby: selectedSortby,
		success: function (html) {
			var $html = $(html);
			// Muốn thay thẻ DIV nào khi filter thì viết như này
			var $categoryProducts = $($html[0]); 


			$(".category-products").html($categoryProducts.html());
			pushCurrentFilterState({sortby: selectedSortby, page: page});
			awe_hidePopup('.loading');				  
			awe_lazyloadImage();
			if(window.BPR)
				return window.BPR.initDomEls(), window.BPR.loadBadges();
			$('.add_to_cart').click(function(e){
				e.preventDefault();
				var $this = $(this);						   
				var form = $this.parents('form');						   
				$.ajax({
					type: 'POST',
					url: '/cart/add.js',
					async: false,
					data: form.serialize(),
					dataType: 'json',
					error: addToCartFail,
					beforeSend: function() {  
						if(window.theme_load == "icon"){
							awe_showLoading('.btn-addToCart');
						} else{
							awe_showPopup('.loading');
						}
					},
					success: addToCartSuccess,
					cache: false
				});
			});
			$('html, body').animate({
				scrollTop: $('.bg_collection').offset().top
			}, 0);

			resortby(selectedSortby);



		}
	});		

}

function sortby(sort) {			 
	switch(sort) {
		case "price-asc":
			selectedSortby = "price:product=asc";					   
			break;
		case "price-desc":
			selectedSortby = "price:product=desc";
			break;
		case "alpha-asc":
			selectedSortby = "title:product=asc";
			break;
		case "alpha-desc":
			selectedSortby = "title:product=desc";
			break;
		case "created-desc":
			selectedSortby = "created_at:product=desc";
			break;
		case "created-asc":
			selectedSortby = "created_at:product=asc";
			break;
		default:
			selectedSortby = "";
			break;
	}

	doSearch(1);
}

function resortby(sort) {
	switch(sort) {				  
		case "price:product=asc":
			tt = "Giá tăng dần";
			break;
		case "price:product=desc":
			tt = "Giá giảm dần";
			break;
		case "title:product=asc":
			tt = "Tên A → Z";
			break;
		case "title:product=desc":
			tt = "Tên Z → A";
			break;
		case "created_at:product=desc":
			tt = "Hàng mới nhất";
			break;
		case "created_at:product=asc":
			tt = "Hàng cũ nhất";
			break;
		default:
			tt = "Mặc định";
			break;
	}			
	$(`#sort-by [data-sort="${sort}"]`).addClass('active')
	$('#sort-by > ul > li > span').html(tt);
}


function _selectSortby(sort) {
	resortby(sort);
	switch(sort) {
		case "price-asc":
			selectedSortby = "price_min:asc";
			break;
		case "price-desc":
			selectedSortby = "price_min:desc";
			break;
		case "alpha-asc":
			selectedSortby = "name:asc";
			break;
		case "alpha-desc":
			selectedSortby = "name:desc";
			break;
		case "created-desc":
			selectedSortby = "created_on:desc";
			break;
		case "created-asc":
			selectedSortby = "created_on:asc";
			break;
		default:
			selectedSortby = sort;
			break;
	}
}

function toggleCheckbox(id) {
	$(id).click();
}

function pushCurrentFilterState(options) {
	resortby(selectedSortby);
	if(!options) options = {};
	var url = filter.buildSearchUrl(options);
	var queryString = url.slice(url.indexOf('?'));			  
	if(selectedViewData == 'data_list'){
		queryString = queryString + '&view=list';	
		$('.button-view-mode').removeClass('active');
		$('.button-view-mode.view-mode-list').addClass('active');
	}
	else{
		queryString = queryString + '&view=grid';	
		$('.button-view-mode').removeClass('active');
		$('.button-view-mode.view-mode-grid').addClass('active');
	}

	pushState(queryString);
}

function pushState(url) {
	window.history.pushState({
		turbolinks: true,
		url: url
	}, null, url)
}
function switchView(view) {			  
	switch(view) {
		case "list":
			$('.button-view-mode').removeClass('active');
			$('.button-view-mode.view-mode-list').addClass('active');
			selectedViewData = "data_list";					   
			break;
		default:
			$('.button-view-mode').removeClass('active');
			$('.button-view-mode.view-mode-grid').addClass('active');
			selectedViewData = "data";
			break;
	}			   
	var url = window.location.href;
	var page = getParameter(url, "page");
	if(page != '' && page != null){
		doSearch(page);
	}else{
		doSearch(1);
	}
}

function selectFilterByCurrentQuery() {
	var isFilter = false;
	var url = window.location.href;
	var queryString = decodeURI(window.location.search);
	console.log(queryString)
	var priceFilter = []
	var removeCollString = queryString
	removeCollString = removeCollString.split('&&').slice(1,removeCollString.length).join('&&')
	 removeCollString = removeCollString.replace(/\(\(.*?\)\)/g, (str)=>{
         if(!str.includes('collectionid')){
            priceFilter.push(str)
            return ''
         }
         return str
	})
	var filters = queryString.match(/\(.*?\)/g);
	var cuPage = 1
	if(queryString) {
		isFilter = true;
		$.urlParam = function(name){
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}
		
		page = $.urlParam('page');
		cuPage = $.urlParam('page');

	}
	if(filters && filters.length > 0 ) {
		filters.forEach(function(item) {
			let type = item.indexOf(':') > -1 ? item.replace("(",'').split(':')[0]:''
			item = item.replace(/\(\(/g, "(").split(':')[1].replace(')', "");
			var element = type ? $(`.aside-content input[value="${item}"][data-field="${type}"]`) :  $(`.aside-content input[value="${item}"]`);
			element.attr("checked", "checked");
			_toggleFilter(element);
		});
		
		isFilter = true;
	}
    if(priceFilter.length){

        priceFilter.forEach(function(item) {
        let type = item
        type = type.indexOf(':') > -1 ? type.replace("((",'').split(':')[0]:''
        item = item.substr(1,item.length - 2)
        console.log(item)


        var element = type ? $(`.aside-content input[value="${item}"][data-field="${type}"]`) :  $(`.aside-content input[value="${item}"]`);
        element.attr("checked", "checked");
        _toggleFilter(element);
    });
    isFilter = true;
    }
	var sortOrder = getParameter(url, "sortby");
	if(sortOrder) {
		_selectSortby(sortOrder);
	}
	if(isFilter) {
		doSearch(cuPage);
		renderFilterdItems();

	}
}


var maxx = 100000000/10;
/**
var slider = $('#slider');
if (slider ){
	slider.slider({
		min: '0',
		max: maxx,
		range: true,
		values: [0,100000000],
		slide: function(event, ui) {
			if(ui.values[0] >= ui.values[1]) {
				if(ui.handle == $("#slider a")[0]) {
					$("#slider").slider("values", 1, ui.value);
					ui.values[0] = ui.value;
					ui.values[1] = ui.value;
				} else {
					$("#slider").slider("values", 0, ui.value);
					ui.values[0] = ui.value;
					ui.values[1] = ui.value;
				}
			}			

			var uimax =ui.values[1]+1;	
				
			if(ui.values[0] > 0){
				var v1 = Haravan.formatMoney(ui.values[0], "₫");
											}else{
											var v1 = ui.values[0];
											}
											var v2 = Haravan.formatMoney((ui.values[1]+1), "₫");

				

				$('#start input').val(v1);
				$('#stop input').val(v2);
				var uimin =ui.values[0]-1;
				var uimax =ui.values[1]+2;
				$('#filter-value').attr('data-value','(>'+uimin+' AND <'+uimax+')');
			}
		});
		$(document).on('change','#start',function(e){
		var val = parseInt($('#start input').val())-1;
		var val2 = parseInt($('#stop input').val())+1;

		$("#slider").slider("values",0,parseInt(val));
		$('#filter-value').attr('data-value','(>'+val+' AND <'+val2+')');
	});
	$(document).on('change','#stop',function(e){
		var val = parseInt($('#start input').val())-1;
		var val2 = parseInt($('#stop input').val())+1;

		$("#slider").slider("values",1,parseInt(val2));
		$('#filter-value').attr('data-value','(>'+val+' AND <'+val2+')');
	});
}
**/
function getParameter(url, name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(url);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$( document ).ready(function() {
	selectFilterByCurrentQuery();
	$('.filter-group .filter-group-title').click(function(e){
		$(this).parent().toggleClass('active');
	});
	$('.filter-mobile').click(function(e){
		$('.aside.aside-mini-products-list.filter').toggleClass('active');
	});

	$('#show-admin-bar').click(function(e){
		$('.aside.aside-mini-products-list.filter').toggleClass('active');
	});

	$('.filter-container__selected-filter-header-title').click(function(e){
		$('.aside.aside-mini-products-list.filter').toggleClass('active');
	});
				$('body').on('click', '.page-link', (e)=> e.preventDefault())

});





$('.filter-item--check-box input').change(function(e){
	var $this = $(this);
	toggleFilter($this);
})
$('a#filter-value').click(function(e){
	var $this = $(this);
	_toggleFilterdqdt($this);
})
$('.dosearch').click(function(e){
	var $data = $(this).attr('data-onclick');
	doSearch($data);
})
$('.awe_sortby').on('click',function(e){
	var $data = $(this).attr('data-onclick');
	sortby($data);

})
function filterItemInList(object) {
	q = object.val().toLowerCase();
	object.parent().next().find('li').show();
	if (q.length > 0) {
		object.parent().next().find('li').each(function() {
			if ($(this).find('label').attr("for").indexOf(q) == -1)
				$(this).hide();
		})
	}
}

/*Sắp xếp trang collection*/
$('#sort-by .ul_col li span').click(function(e){

	$('.content_ul').css('display', 'block');
	e.preventDefault();

});
$('#sort-by .ul_col .content_ul li').click(function(e){

	$(".content_ul").css('display', 'none');
	e.preventDefault();

});

$('.filter-item-toggle').click(function(){
	$(this).toggleClass('show')
	let overflowItem = $(this).parent().find('.overflow-item')
	overflowItem.toggleClass('show')
	let text = !$(this).hasClass('show') ? 'Xem thêm <i class="fas fa-chevron-down "></i>' : 'Thu gọn <i class="fas fa-chevron-down "></i>'  
	$(this).html(text)
})