		$(function(){
			//$(".photosgallery-std").sliderkit();

			$('.photosgallery-std').sliderkit({
				//mousewheel:true,
				shownavitems:3,
				//navfx:"none",
				//panelbtnshover:true
			});

			//$(".photosgallery-std").sliderkit();

			$( ".cross" ).hide();
			$( ".mobile_menu" ).hide();
			$( ".hamburger" ).click(function() {
					$( ".mobile_menu" ).slideToggle( "slow", function() {
						$( ".hamburger" ).hide();
						$( ".cross" ).show();
					});
			});

			$( ".cross" ).click(function() {
				$( ".mobile_menu" ).slideToggle( "slow", function() {
					$( ".cross" ).hide();
					$( ".hamburger" ).show();
				});
			});
		});

		function show_z(id,title,img){
			$('.zaya [name=id]').val(id)
			if (nomer[id])
				var num=nomer[id];
			else
				var num=id;
			if (title) $('.zaya .title').text(title+' (#'+num+')')
			if (img) $('.zaya .img img').attr('src',img)
			$('.zaya').show();
			return false;
		}


		$(function(){
			// инициализация верхний слайдер
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});

			if ($('.spec_out .viewport li').length<13) $('.spec_out .viewport').height(262)

			if (0) $('#number').submit(function(){//alert($('input[type=text]',this).val());
				if ($('input[type=text]',this).val())
					location='index.php?id='+parseInt($('input[type=text]',this).val());
				return false;
			});

			$('.cc .reset').click(function(){

					$(this).parents('.cc').prev('.check').find('label input').removeAttr('checked')
					$(this).parents('.cc').hide();
					//$('.check label:first-child input').change();
			});

			$('.check input.all').live('change',function(){
			//console.log($(this).parent().siblings().find('input'))
				if ($(this).attr('checked'))
					{
					//$('.check input').not('.all').click();
					$(this).parents('li').first().find('input').not(':checked').attr('checked','checked');
					//$(this).parents('li').first().find('input').not(':checked').not(this).click();

					}
				else
				{
				$(this).parents('li').first().find('input').removeAttr('checked');
				}
					//$(this).parents('li').first().find('input').removeAttr('checked');
			})

			$('.check input').live('change',function(){
				if ($(this).parents('li').first().find('input:checked').not('.all').length)
					{
					$(this).parents('li').first().find('.count').text($(this).parents('li').first().find('input:checked').not('.all').length);
					$(this).parents('li').first().find('.count').parent().show();
					}
				else
					{
					$(this).parents('li').first().find('.count').parent().hide();
					}
			});
			$('.check label:last-child input').change();
			//$('.rayon').parents('fieldset').first().appendTo($('.center_main'));
			//$('.shosse').parents('fieldset').first().appendTo($('.center_main'));

			if ($('.cont_map').length)
				{
				$('.rayon_f').appendTo($('.center_main'));
				$('.shosse_f').appendTo($('.center_main'));
				}

			//if(!$('.add').length)
			//$('body').append('<a href="index.php?id=66" class="add_fixed"><span>Д о б а в и т ь <br/><br/> о б ъ е к т </span></a>');

			$('header').after('<div class="h_replacer" style="height:'+$('header').height()+'px;-display:none;"></div>');

			$flag=0;

			//$('.podbor_more_wrapper').after('<div class="p_replacer" style="-height:'+$('.podbor_more_wrapper').height()+'px;-display:none;">'+$('.podbor_more_wrapper').html()+'</div>');
			//if (!$('.p_replacer .polosa.first').hasClass('minimal'))
			$('.p_replacer .polosa .check').jScrollPane({'verticalDragMinHeight':50,'verticalDragMaxHeight':50});
			//{
			//	//
			//}
			try{
			$top_flag=0;
			if ($('.podbor_more_wrapper .polosa.first.minimal').length)
			{
			$top=$('.podbor_more_wrapper').offset().top-$('#header').height()+$('.podbor_more_wrapper').height()-71;
			$top_flag=1;
			}
			else
			$top=$('.podbor_more_wrapper').offset().top-$('#header').height()+$('.podbor_more_wrapper').height()+20//-122;
			}catch(e){}
			$(window).scroll(function(){
			/* if ($(window).scrollTop())
				{
				$('header').addClass('fixed');
				$('.h_replacer').show();
				}
			else
				{
				$('header').removeClass('fixed');
				$('.h_replacer').hide();
				} */

			//$(function(){
			try{

			//});
				if ($top_flag)
					$top=$('.podbor_more_wrapper').offset().top-$('#header').height()+$('.podbor_more_wrapper').height()-71;
				else
					$top=$('.podbor_more_wrapper').offset().top-$('#header').height()+$('.podbor_more_wrapper').height()+20;
				$width=$('.podbor_more_wrapper').width();
			if ($(window).scrollTop()>=$top)
				{
				$height=$('.podbor_more_wrapper').height();
				if (( !$flag/*  || $('.podbor_more_wrapper').css('position')=='relative' */) && !$('.podbor_more .polosa.first.minimal').length)
					{
					//$speed='slow'

					//$('.p_replacer .close_panel').click();
					$flag=1;
					$height=71;
					}
//					$speed='slow'
//					if ($('.podbor_more_wrapper').css('position')!='fixed') $('.p_replacer').height($height)

					$('.p_replacer').css({'z-index':900,'position':'fixed',top:$('#header').height(),width:$width})//addClass('fixed_search')

					if ($top_flag)
					$('.p_replacer').show()
					else
					$('.p_replacer').fadeIn(200)
				}
			else{
				$speed=''
				if ($top_flag)
					$('.p_replacer').hide()
				else
					$('.p_replacer').fadeOut(200)
				//$('.podbor_more_wrapper').css({'position':'relative',top:'auto'})//addClass('fixed_search')
			}
			}
			catch(e){}
			});

			$(window).scroll();

			$('.result_nav .right a').click(function(){
			if (this.className=='active')
				$('.podbor_more_wrapper .order').val(0);
			else
				$('.podbor_more_wrapper .order').val(this.id);

				$('.podbor_more_wrapper form').submit()
			});

			$('.pages a').click(function(){
				if ($(this).attr('href') != '#') return;
				if (typeof page_get=='undefined')
				{
				$('.podbor_more_wrapper .page').val($(this).text());

				$('.podbor_more_wrapper form').submit()
				return false;
				}
			});

				$('input, select, textarea',$('.podbor_more_wrapper')).change(function(){
					$('.podbor_more_wrapper .page').val(0);
				});

			/* $('.zajavka2').click(function(){
				$('.zaya').show();
				return false;
			}) */

			/* 			$('.zajavka2').click(function(){
				show_z($(this).siblings('.z_id').text(),$(this).siblings('.title').text(),$(this).siblings('.img').find('img').attr('src'))
			}); */
			$('.zajavka').click(function(){

				//alert($(this).siblings('.z_id').text());
				if ($(this).siblings('.img').find('img').length)
					var img=$(this).siblings('.img').find('img').attr('src');
				else
					var img=$(this).parents('li').first().find('img').attr('src')
				//if($(this).siblings('.z_id').text())
				if($(this).parents('li').first().find('.z_id').text())
					show_z($(this).parents('li').first().find('.z_id').text(),$(this).parents('li').first().find('.title').text(),img)
				return false;
			});

			$('.zaya .close').click(function(){$('.zaya').hide()})

			$('.zaya form').submit(function(){

				$.ajax({	type:'POST',
								url: "/mail.php",
								data: { name: $('.zaya form [name=fb-name]').val(),
									email: $('.zaya form [name=fb-mail]').val(),
									phone:$('.zaya form [name=fb-phone]').val(),
									message:$('.zaya form [name=fb-message]').val(),
									id:$('.zaya form [name=id]').val(),
									link:links[$('.zaya form [name=id]').val()],
									nomer:nomer[$('.zaya form [name=id]').val()],
									captcha:$('.zaya form [name=fb-kapcha]').val(),
									policy:$('.zaya form [name=policy]:checked').length
								}
							}).done(function( msg ) {
									if (msg==1)
											{
											alert( "Ваше сообщение отправлено" );
											$('.zaya').fadeOut();
											$('.zaya .data img').attr('src','/captcha.php?rand='+Math.random());
											}
										else if (msg==0)
											alert( "При отправке произошла ошибка. Попробуйте еще раз" );
										else
											alert(msg);
								})
				return false;
			});



			$('.pages_with_map a').click(function(){
				$('.search-form form #p').val($(this).text());
				$('.search-form form').submit()
				return false;
			});



		});
// инициализация нижний слайдер
		$(document).ready(function(){
			if (typeof $('#slider1').tinycarousel != 'undefined') {
				$('#slider1').tinycarousel({ pager: true, interval: false, display: 2, controls: false  });
				var carousel = $('#slider1 .viewport');
				var width = carousel.innerWidth();
				 if (width <= 600) {
                    $('#slider1').tinycarousel({ pager: true, interval: false, display: 1, controls: false  });
                }
				//if ($('#slider1 li').length>12)$('#slider1  .viewport').height(586)
			}
		});
// прячем расширеную форму
        $(document).ready(function(){$speed='';
			$(".close_panel, .polosa.first .title").click(function(){$speed='slow';
				if (!$('.check .jspDrag',$(this).parents('.form_wrapper')).length)
					{
					setTimeout(function(){
					$('.polosa .check').jScrollPane({'verticalDragMinHeight':50,'verticalDragMaxHeight':50});//
					},300)
					}

				if (	$(".polosa.first").hasClass('minimal'))
					{
					setTimeout(function(){
					$('.polosa .check').each(function(){$(this).data('jsp').reinitialise()})
					},300)

					}
				var parent;
				if ($(this).parents('.p_replacer').length)
					parent='.p_replacer';
				else
					parent='.podbor_more_wrapper';
				if ($('.podbor_more_wrapper').css('position')=='fixed')
					$flag=1;
				$(".spoilers",$(this).parents(parent)).dequeue().stop().toggle($speed?$speed:"fast");
				//$speed='';
				$(this).toggleClass("active");
				$(".polosa.first",$(this).parents(parent)).toggleClass("minimal");
				$(".onliminimal",$(this).parents(parent)).toggleClass("active");
				return false;
				});
			});


		$(function(){
		if (!$('.podbor_more_wrapper .polosa.first').hasClass('minimal'))
		$(".podbor_more_wrapper  .close_panel").click()

shosse={};

	$('#main #sort_search2').live('change',function(){
		if ($(this).val() && !shosse[$(this).val()]){//.in_array(metro)){
		//check(state[$('.zayavka .metro select').val()],$('.zayavka .metro select').val(),1,'.zayavka ','metro')

		/*$('.shosse_f td').append('<span class="vid"><span class="n">'+$(this).val()+'</span><input type="hidden" value="'+$(this).val()+'" name="shosseF[]"><span class="x">x</span></span>')

		shosse[$(this).val()]=1;
			*/
					//metro.push($('.zayavka .metro select').val());


		//console.log('.cont_map area[class^='+lines2[$(this).val()]+']');
		if ($('.cont_map').length)
				{
				$('.cont_map area[class^='+lines2[$(this).val()]+']').first().mouseover().click();

				//console.log('.cont_map area[class^='+state[$('.rayon select').val()]+']');
				/* if (!$('.rayon .'+state[$(this).val()]).length)
					$('.cont_map area[class^='+state[$(this).val()]+']').first().mouseover().click(); */

				}
		else
				{
					//check(lines[$(this).val()],$(this).val(),1)
					add_shosse2($(this).val())

				}


				$(this).val('')
		}
	})


	$('.shosse_f span.x').live('click',function(){/*
		shosse[$(this).parent().find('.n').text()]=0;
		//console.log($(this).parent().find('.n').text());
		$(this).parent().remove()
		*/

		//console.log('.cont_map area[class^='+lines2[$(this).parent().find('.n').text()]);
		$('.cont_map area[class^='+lines2[$(this).parent().find('.n').text()]+']')/* .filter('.line_act') */.first().click().mouseout();

		//$(this).parent().remove()
		//console.log('.cont_map area[class^='+lines2[$(this).parent().find('.n').text()]+']');
						//$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
	})	;


shosse={};

	$('.podbor_more #s_shosse').live('change',function(){
		if ($(this).val() && !shosse[$(this).val()]){//.in_array(metro)){
		//check(state[$('.zayavka .metro select').val()],$('.zayavka .metro select').val(),1,'.zayavka ','metro')
		add_shosse($(this).val());

		}
				$(this).val('')
	})


	$('.podbor_more .shosse span.x').live('click',function(){
		delete_shosse(this);
		//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
						//$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
	})	;
function add_metro(val){

	$('.podbor_more .shosse').append('<span class="vid"><span class="n">'+val+'</span><input type="hidden" value="'+val+'" name="shosseF[]"><span class="x">x</span></span>')
	shosse[val]=1;
}
function delete_metro(obj)
{
		shosse[$(obj).parent().find('.n').text()]=0;
		//console.log($(this).parent().find('.n').text());
		$(obj).parent().remove()
}
$('.right_main .podbor .rayon select, .center_main #sort_search, .right_main .podbor #sort_search').live('change',function(){
	if ($(this).val()){
		if (!$('.cont_map').length)
			{
			/* check(state[$('.podbor .rayon select').val()],$('.podbor .rayon select').val(),1,'.podbor ')
			$('.podbor .rayon select').val(0) */
			check(state[$(this).val()],$(this).val(),1) /* ,'.podbor ' */
			$(this).val()
			}
		else
			{
			//check(state[$('.rayon select').val()],$('.rayon select').val(),1)
			//console.log('.cont_map area[class^='+state[$('.rayon select').val()]+']');
			if (!$(' .rayon .'+state[$(this).val()]).length)
				$('.cont_map area[class^='+state[$(this).val()]+']').first().mouseover().click();
				//$('.rayon select').val(0)
			}

		}
});

$('#vibor').submit(function(){
	if (polygon) {
		$('#selected_coordinates').val(polygon.getPath().getArray());
	}
	else {
		$('#selected_coordinates').val('');
	}
	$(this).append($('.rayon > span').clone().hide());
	$(this).append($('.shosse > span').clone().hide());
	$('.disabled input:checked',this).removeAttr('checked');
//	return false;
})

$('.right_main .podbor  .rayon .x, .center_main .rayon  .x').live('click',function(){//$(this).parent().remove()
//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
	if (!$('.cont_map').length)
		{
		$(this).parent().remove()
		}
	else
		{
		//console.log($('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']'));
		$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
		//$(this).parent().remove()
		}

})	;

$('.right_main .podbor  .shosse .x, .center_main .shosse  .x').live('click',function(){//$(this).parent().remove()
//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
	if (!$('.cont_map').length)
		{
		$(this).parent().remove()
		}
	else
		{
		//console.log($('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']'));
		//$('.cont_map area[class^='+lines2[$(this).parent().find('.n').text()]+']').first().click().mouseout();
		//$(this).parent().remove()
		}

})	;


$('.podbor_more .rayon select').change(function(){
	if ($(this).val()){
	check(state[$('.rayon select').val()],$('.rayon select').val(),1)
	$('.podbor_more .rayon select').val('')
	//console.log('.cont_map area[class^='+state[$('.rayon select').val()]+']');
	/* if (!$('.rayon .'+state[$(this).val()]).length)
		$('.cont_map area[class^='+state[$(this).val()]+']').first().mouseover().click(); */

	}
});
$('.podbor_more  .rayon .x').live('click',function(){$(this).parent().remove()

//console.log('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']');
	//$('.cont_map area[class^='+state[$(this).parent().find('.n').text()]+']').first().click().mouseout();
})	;


//$('.polosa .check').tinyscrollbar();//jScrollPane();//



$(window).load(function(){
$(function(){

$('.cont_map').fadeIn(300);


$('.polosa').not('.minimal').each(function()
	{
	//$('.polosa .check').data('jsp').reinitialise()
	$('.check',this).each(function(){
		if (typeof $(this).data == 'function') if($(this).data('jsp')) $(this).data('jsp').reinitialise()
	})

	//$('.polosa .check').jScrollPane({'verticalDragMinHeight':50,'verticalDragMaxHeight':50});//
	//$('.polosa .check').jScrollPane({'verticalDragMinHeight':50,'verticalDragMaxHeight':50});//
	})

})
});

$('.podbor [type=reset], .podbor_more [type=reset]').click(function(){
radio_enable();

	//$('.rayon span',this.form).remove();
	$('.rayon span.x',this.form).click();

	//?
	$('.ot,.do',this.form).val('');
	$('[type=text]',this.form).val('');
	//?

	//alert('asdasd');
	 $(':checked',this.form).removeAttr('checked');
	$('.check  label:first-child input').change();
	//$(':checked',this.form).click();
	$('.rayon_f span.x').click();
	$('.shosse_f span.x').click();
	$('.shosse span.x').click();
	$('.metro_f span.x').click();

	$('.all_shose').removeClass('all_shose_act');
	/*$("#slider",this.form).slider('values',0,1); // sets first handle (index 0) to 50
$("#slider",this.form).slider('values',1,100);
	$("#slider-range2, #slider-range",this.form).slider('values',0,0); // sets first handle (index 0) to 50
$("#slider-range2, #slider-range",this.form).slider('values',1,100000);
*/
//$('#spisok',this.form).hide();



$('input[type=radio]',this.form).removeAttr('checked');
$(".niceRadio",this.form).removeClass('radioChecked');
$(".cusel",this.form).each(function(){$('.cuselText',this).text($('.cusel-scroll-pane span',this).first().text());})
 /* var params = {
        refreshEl: "#sort_search",
    }

//cuSelRefresh(params); */
/*
if ($("#slider-range2").length)
{
	$("input[name='num4_1']").val($("#slider-range2").slider("values", 0));
	$("input[name='num5_1']").val($("#slider-range2").slider("values", 1));
}

if ($("#slider-range").length)
{
	$("input[name='num1_1']").val($("#slider-range").slider("values", 0));
	$("input[name='num2_1']").val($("#slider-range").slider("values", 1));
}

if ($("#slider").length)
	{
	$("input[name='num3_1']").val($("#slider").slider("values", 0));
	$("input[name='num3_2']").val($("#slider").slider("values", 1));
	}

 */

})



$('.tovar_page ul.nedavno li .title, ul.spec.nedavno li .title, #_main .left_main ul.nedavno li .title, #slider1 .overview li .title, ul.grbx li .title').ellipsis(/*'',{'ellipsis':' ...'}*/)



$('#jqsp-show').click(function(){$(this).next().slideToggle()})


$('.zajavka').click(
	function(){

		yaCounter21711481.reachGoal('ostavitzayavku');
	}
)



$('.zajavka2').click(
	function(){
		yaCounter21711481.reachGoal('ostavitzayavku-karta');
	}
)


$('.zaya #submit').click(
	function(){
		yaCounter21711481.reachGoal('otpravka');
	}
)


})






function init_scrolls ()
{//alert($('.polosa.first').hasClass('minimal'));



if (!$('.podbor_more_wrapper .polosa.first').hasClass('minimal'))
{
//alert('asd');
$('.podbor_more_wrapper .polosa .check').jScrollPane({'verticalDragMinHeight':50,'verticalDragMaxHeight':50});//
}

//if (!$('.p_replacer .polosa.first').hasClass('minimal'))
//$('.p_replacer .polosa .check').jScrollPane({'verticalDragMinHeight':50,'verticalDragMaxHeight':50});


}

$(document).ready(function() {
var pageUrl = $(location).attr('href');
var pos= 0;

  var b = $('#header').find('a[href!="/"]');
  b.each(function(){
  var menuLinkb = $(this).attr('href');
  var strb = pageUrl.indexOf(menuLinkb, pos);
  if(strb >= 0) {
  $(this)//.removeAttr('href')
  			.addClass('active-menu');
  };
});
	var a = $('.link__head').find('a');
  a.each(function(){
  var menuLinkb = $(this).attr('href');
  var strb = pageUrl.indexOf(menuLinkb, pos);
  if(strb >= 0) {
  $(this).removeAttr('href')
  			.addClass('active-menu');
  };
});
	var c = $('.top_nav').find('a[href="/"]');
	c.each(function(){
  if( pageUrl === 'http://sklad-ofis.ru/'){
  $(this).removeAttr('href')
  			.addClass('active-menu');
  };
  });
	var d = $('.logo');
	d.each(function(){
  if( pageUrl === 'http://sklad-ofis.ru/'){
  $(this).removeAttr('href')
  			.addClass('active-menu');
  };
  });

});
