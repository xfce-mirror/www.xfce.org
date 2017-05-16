var s_timeout=10000;
var s_timer=window.setInterval(s_adv,s_timeout);
var slider=document.getElementById('slide');
var slides=slider.getElementsByTagName('div');
var buttonhtml='';
var s_cur=0;
for(var i=0;i<slides.length;i++) {
	buttonhtml+='<a onclick="s_adv('+i+')"></a>';
}
document.getElementById('slidenav').innerHTML=buttonhtml;
var navitems=document.getElementById('slidenav').getElementsByTagName('a');
navitems.item(s_cur).className='current';
function s_adv(pos){
	var cur=slider.getElementsByClassName('current').item(0);
	if(cur==null){
		cur=slides.item(0);
		if(pos==0){
			return;
		}
	}
	navitems.item(s_cur).className='';
	if(pos!=null){
		next=slides.item(pos);
		window.clearTimeout(s_timer);
		s_timer=window.setInterval(s_adv,s_timeout);
		s_cur=pos;
	} else {
		next=cur.nextElementSibling;
		s_cur+=1;
		if(next==null) {
			next=slides.item(0);
			s_cur=0;
		}
	}
	cur.className='prev';
	next.className='current';
	navitems.item(s_cur).className='current';
}
