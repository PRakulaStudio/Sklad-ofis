$(function(){
	
	$('.zayavka .cusel:lt(5), .zayavka select:lt(5)').width(280);
	/* $('.zayavka [type=text] ').not('#vericode').width(290)
	$('.zayavka textarea').width(300) */
	/* $('.metro_tr .cusel').width());
	alert($('.metro_tr select').width()); */
	//$('.zayavka tbody.h').height(0);
	//$('.toggle td').attr('colspan','2');
	$('.toggle').click(function(){
/* 		if (	$(this).parent().next().css('display')!='none') {		$(this).parent().next().css('display','block'); flag11=0}
		else {flag11=1; $(this).parent().next().css({'height':0,'display':'block'}) } */
	
	
		$(this).parent().next().slideToggle(0)
	})
	
	rayon={};
	
	$('.zayavka2 #s_rayon').live('change',function(){
		if ($(this).val() && !rayon[$(this).val()]){
		//check(state[$('.zayavka .rayon select').val()],$('.zayavka .rayon select').val(),1,'.zayavka ')
		$('.zayavka .rayon').append('<span class="vid"><span class="n">'+$(this).val()+'</span><div style="display: none;"><input type="checkbox" value="'+$(this).val()+'" name="rayon[]"></div><span class="x">x</span></span>')
			rayon[$(this).val()]=1;
	
		//console.log('.cont_map area[class^='+state[$('.rayon select').val()]+']');
		/* if (!$('.rayon .'+state[$(this).val()]).length)
			$('.cont_map area[class^='+state[$(this).val()]+']').first().mouseover().click(); */
			
		}
					$(this).val('')
	});
 	$('.zayavka2  .rayon .x').live('click',function(){
	rayon[$(this).parent().find('.n').text()]=0;
	$(this).parent().remove()
	//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
		//$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
	})	;
	/* */
	
 	String.prototype.in_array = function(array) {
		for(var i = 0, l = array.length; i < l; i++)	{
			if(array[i] == this) {
				return true;
			}
		}
		return false;
	}
	
	 
	shosse={};metro={};
	
	$('.zayavka2 #s_metro').live('change',function(){
		if ($(this).val() && !metro[$(this).val()]){//.in_array(metro)){
		//check(state[$('.zayavka .metro select').val()],$('.zayavka .metro select').val(),1,'.zayavka ','metro')
		
		$('.zayavka .metro').append('<span class="vid"><span class="n">'+$(this).val()+'</span><div style="display: none;"><input type="checkbox" value="'+$(this).val()+'" name="metro[]"></div><span class="x">x</span></span>')
		
		//metro.push($('.zayavka .metro select').val());
		metro[$(this).val()]=1;
		
	
		//console.log('.cont_map area[class^='+state[$('.rayon select').val()]+']');
		/* if (!$('.rayon .'+state[$(this).val()]).length)
			$('.cont_map area[class^='+state[$(this).val()]+']').first().mouseover().click(); */
		
		}
				$(this).val('')
	});
	
	
	$('.zayavka2 #s_shosse').live('change',function(){
		if ($(this).val() && !shosse[$(this).val()]){//.in_array(metro)){
		//check(state[$('.zayavka .metro select').val()],$('.zayavka .metro select').val(),1,'.zayavka ','metro')
		
		$('.zayavka .shosse').append('<span class="vid"><span class="n">'+$(this).val()+'</span><div style="display: none;"><input type="checkbox" value="'+$(this).val()+'" name="shosse[]"></div><span class="x">x</span></span>')
		
		//metro.push($('.zayavka .metro select').val());
		shosse[$(this).val()]=1;
			
	
		//console.log('.cont_map area[class^='+state[$('.rayon select').val()]+']');
		/* if (!$('.rayon .'+state[$(this).val()]).length)
			$('.cont_map area[class^='+state[$(this).val()]+']').first().mouseover().click(); */
		
		}
				$(this).val('')
		
	});
	
	$('.zayavka2 .metro span.x').live('click',function(){
		metro[$(this).parent().find('.n').text()]=0;
		//console.log($(this).parent().find('.n').text());
		$(this).parent().remove()
		//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
			//$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
	})	;
	
	
	$('.zayavka2 .shosse span.x').live('click',function(){
		shosse[$(this).parent().find('.n').text()]=0;
		//console.log($(this).parent().find('.n').text());
		$(this).parent().remove()
		//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
						//$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
	})	;
	
	$('.zayavka select[name=vidobjektaF]').change(function(){
		$('.zayavka tr').show();
		/* 
		if (this.value!='Склад')
			{
			$('.predp_sklad_tr').hide()
			}
		
		if (this.value!='Офис' && this.value!='Здание')
			{
			//$('.predp_ofis_tr').hide()
			$('.ploshyad_mezozina_tr').hide()
			
			}
		
		if (this.value!='Склад' && this.value!='Производство' && this.value!='Торговые площади (ПСН)')
			{
			$('.nagruzka_na_pol_tr').hide()
			$('.kol_dokov_tr').hide()
			
			} */
			
	});
	$('.zayavka select[name=vidobjektaF]').change();
	
	var params = {
			changedEl: ".zayavka select",
	        visRows: 10,
			scrollArrows: true
		}
		
		cuSel(params);
		
	$('#form1').submit(function(e){
	
		err=0;
	/* 	$('span.red',this).each(function(){
			if (!$(this).parent().next().find('input').val())
				$(this).parent().next().find('input')
		}); */
		//alert('asd');

		if (!$('#vidobjektaF').val())
			{
			err=1;
			$('html,body').animate({'scrollTop':($('#vidobjektaF').parents('.cusel').offset().top-100-$('header').height())})
			$('#vidobjektaF').parents('tr').first().addClass('err')
			}
		else{
			$('#vidobjektaF').parents('tr').first().removeClass('err')
		}
		if (err) return false
		if (!$('#vidoperaciiF').val())
			{

			$('html,body').animate({'scrollTop':($('#vidoperaciiF').parents('.cusel').offset().top-100-$('header').height())})
			err=1;
			$('#vidoperaciiF').parents('tr').first().addClass('err')
			}
		else{
			$('#vidoperaciiF').parents('tr').first().removeClass('err')
		}
		if (err) return false
	if (!admin){
		if (!$('[name=fio]').val())
			{
			if (!err)
			$('html,body').animate({'scrollTop':($('[name=fio]').offset().top-100-$('header').height())})
			err=1;
			$('[name=fio]').parents('tr').first().addClass('err')
			}
		else{
			$('[name=fio]').parents('tr').first().removeClass('err')
		}
		if (err) return false
		if (!$('[name=email]').val() || !/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,4}$/i.test($('[name=email]').val()))
			{
			if (!err)
			$('html,body').animate({'scrollTop':($('[name=email]').offset().top-100-$('header').height())})
			err=1;
			$('[name=email]').parents('tr').first().addClass('err')
			}
		else{
			$('[name=email]').parents('tr').first().removeClass('err')
		}
		if (err) return false
		if (!$('[name=telefon]').val())
			{
			if (!err)
			$('html,body').animate({'scrollTop':($('[name=telefon]').offset().top-100-$('header').height())})
			err=1;
			$('[name=telefon]').parents('tr').first().addClass('err')
			}
		else{
			$('[name=telefon]').parents('tr').first().removeClass('err')
		}
		if (err) return false
		if ($('[name=captcha]').length)
		if (!$('[name=captcha]').val())
			{
			if (!err)
			$('html,body').animate({'scrollTop':($('[name=captcha]').offset().top-100-$('header').height())})
			err=1;
			$('[name=captcha]').parents('tr').first().addClass('err')
			}
		else{
			$('[name=captcha]').parents('tr').first().removeClass('err')
		}
		if (err) return false
		if ($('[name=vericode]').length)
		if (!$('[name=vericode]').val())
			{
			if (!err)
			$('html,body').animate({'scrollTop':($('[name=vericode]').offset().top-100-$('header').height())})
			err=1;
			$('[name=vericode]').parents('tr').first().addClass('err')
			}
		else{
			$('[name=vericode]').parents('tr').first().removeClass('err')
		}
	}
		
		if (err) return false
		
	})
})