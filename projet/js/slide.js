$(function(){
	// ��ȡ�ñ�Ҫ��Ԫ�؁K�� jQuery ���b
	// �ف�ȡ�� $block �ĸ߶ȼ��O���Ӯ��r�g
	var $block = $('#affiche'),
		$slides = $block.find('ul.abgne-list'),
		_width = $block.width(),
		$li = $slides.find('li'),
		$control = $block.find('.abgne-control'),
		_animateSpeed = 600;
 
	// �O�� $slides �Č�(���˲�׌ li ���D)
	$slides.css('width', ($li.length + 1) * _width);
	// �a�� li �x�
	var _str = '';
	for(var i=0, j=$li.length;i<j;i++){
		// ÿһ�� li �����Լ��� className = playerControl_̖�a
		_str += '<li class="abgne-player-control_' + (i+1) + '">' + (i+1) + '</li>';
	}
 
	// �a�� ul �K�� li �x헼ӵ�����
	var $number = $('<ul class="numbers"></ul>').html(_str).appendTo($control),
		$numberLi = $number.find('li');
 
	// �K�� .numbers li ���� click �¼�
	$numberLi.click(function(){
		var $this = $(this);
		$this.addClass('current').siblings('.current').removeClass('current');
		// �Ƅ�λ�õ���������̖�a
		$slides.stop().animate({
			left: _width * $this.index() * -1
		}, _animateSpeed);
 
		return false;
	}).eq(0).click();
 
	// �� .arrows li ���� click �¼�
	$control.find('ul.arrows li').click(function(){
		var _index = $numberLi.filter('.current').index();
		$numberLi.eq((this.className.indexOf('next')>-1?_index+1:_index-1+$numberLi.length)%$numberLi.length).click();
 
		return false;
	});
 
	// �������Ƶ� $control li �ϕr, ���� .hover Ч��
	// ��֮�t�Ƴ�
	$control.find('li').hover(function(){
		$(this).addClass('hover');
	}, function(){
		$(this).removeClass('hover');
	});
});
