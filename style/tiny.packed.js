/* scripts from http://www.leigeber.com/ */
var TINY={};

/* tinyfader */
function T$(i){return document.getElementById(i)}function T$$(e,p){return p.getElementsByTagName(e)}TINY.fader=function(){function fade(n,p){this.n=n;this.init(p)}fade.prototype.init=function(p){var s=T$(p.id),u=this.u=T$$('li',s),l=u.length,i=this.l=this.c=this.z=0;if(p.navid&&p.activeclass){this.g=T$$('li',T$(p.navid));this.s=p.activeclass}s.style.overflow='hidden';this.a=p.auto||0;this.p=p.resume||0;for(i;i<l;i++){if(u[i].parentNode==s){u[i].style.position='absolute';this.l++;u[i].o=p.visible?100:0;u[i].style.opacity=u[i].o/100;u[i].style.filter='alpha(opacity='+u[i].o+')'}}this.pos(p.position||0,this.a?1:0,p.visible)},fade.prototype.auto=function(){this.u.ai=setInterval(new Function(this.n+'.move(1,1)'),this.a*1000)},fade.prototype.move=function(d,a){var n=this.c+d,i=d==1?n==this.l?0:n:n<0?this.l-1:n;this.pos(i,a)},fade.prototype.pos=function(i,a,v){var p=this.u[i];this.z++;p.style.zIndex=this.z;clearInterval(p.si);clearInterval(this.u.ai);this.u.ai=0;this.c=i;if(p.o>=100&&!v){p.o=0;p.style.opacity=0;p.style.filter='alpha(opacity=0)'}if(this.g){for(var x=0;x<this.l;x++){this.g[x].className=x==i?this.s:''}}p.si=setInterval(new Function(this.n+'.fade('+i+','+a+')'),20)},fade.prototype.fade=function(i,a){var p=this.u[i];if(p.o>=100){clearInterval(p.si);if((a||(this.a&&this.p))&&!this.u.ai){this.auto()}}else{p.o+=5;p.style.opacity=p.o/100;p.style.filter='alpha(opacity='+p.o+')'}};return{fade:fade}}();

/* tinybox */
function T$(i){return document.getElementById(i)}TINY.box=function(){var p,m,b,fn,ic,iu,iw,ih,ia,f=0;return{show:function(c,u,w,h,a,t){if(!f){p=document.createElement('div');p.id='tinybox';m=document.createElement('div');m.id='tinymask';b=document.createElement('div');b.id='tinycontent';document.body.appendChild(m);document.body.appendChild(p);p.appendChild(b);m.onclick=TINY.box.hide;window.onresize=TINY.box.resize;f=1}if(!a&&!u){p.style.width=w?w+'px':'auto';p.style.height=h?h+'px':'auto';p.style.backgroundImage='none';b.innerHTML=c}else{b.style.display='none';p.style.width=p.style.height='100px'}this.mask();ic=c;iu=u;iw=w;ih=h;ia=a;this.alpha(m,1,80,3);if(t){setTimeout(function(){TINY.box.hide()},1000*t)}},fill:function(c,u,w,h,a){if(u){p.style.backgroundImage='';var x=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');x.onreadystatechange=function(){if(x.readyState==4&&x.status==200){TINY.box.psh(x.responseText,w,h,a)}};x.open('GET',c,1);x.send(null)}else{this.psh(c,w,h,a)}},psh:function(c,w,h,a){if(a){if(!w||!h){var x=p.style.width,y=p.style.height;b.innerHTML=c;p.style.width=w?w+'px':'';p.style.height=h?h+'px':'';b.style.display='';w=parseInt(b.offsetWidth);h=parseInt(b.offsetHeight);b.style.display='none';p.style.width=x;p.style.height=y}else{b.innerHTML=c}this.size(p,w,h)}else{p.style.backgroundImage='none'}},hide:function(){TINY.box.alpha(p,-1,0,3)},resize:function(){TINY.box.pos();TINY.box.mask()},mask:function(){m.style.height=TINY.page.total(1)+'px';m.style.width='';m.style.width=TINY.page.total(0)+'px'},pos:function(){var t=(TINY.page.height()/2)-(p.offsetHeight/2);t=t<10?10:t;p.style.top=(t+TINY.page.top())+'px';p.style.left=(TINY.page.width()/2)-(p.offsetWidth/2)+'px'},alpha:function(e,d,a){clearInterval(e.ai);if(d==1){e.style.opacity=0;e.style.filter='alpha(opacity=0)';e.style.display='block';this.pos()}e.ai=setInterval(function(){TINY.box.ta(e,a,d)},20)},ta:function(e,a,d){var o=Math.round(e.style.opacity*100);if(o==a){clearInterval(e.ai);if(d==-1){e.style.display='none';e==p?TINY.box.alpha(m,-1,0,2):b.innerHTML=p.style.backgroundImage=''}else{e==m?this.alpha(p,1,100):TINY.box.fill(ic,iu,iw,ih,ia)}}else{var n=Math.ceil((o+((a-o)*.5)));n=n==1?0:n;e.style.opacity=n/100;e.style.filter='alpha(opacity='+n+')'}},size:function(e,w,h){e=typeof e=='object'?e:T$(e);clearInterval(e.si);var ow=e.offsetWidth,oh=e.offsetHeight,wo=ow-parseInt(e.style.width),ho=oh-parseInt(e.style.height);var wd=ow-wo>w?0:1,hd=(oh-ho>h)?0:1;e.si=setInterval(function(){TINY.box.ts(e,w,wo,wd,h,ho,hd)},20)},ts:function(e,w,wo,wd,h,ho,hd){var ow=e.offsetWidth-wo,oh=e.offsetHeight-ho;if(ow==w&&oh==h){clearInterval(e.si);p.style.backgroundImage='none';b.style.display='block'}else{if(ow!=w){var n=ow+((w-ow)*.5);e.style.width=wd?Math.ceil(n)+'px':Math.floor(n)+'px'}if(oh!=h){var n=oh+((h-oh)*.5);e.style.height=hd?Math.ceil(n)+'px':Math.floor(n)+'px'}this.pos()}}}}();TINY.page=function(){return{top:function(){return document.documentElement.scrollTop||document.body.scrollTop},width:function(){return self.innerWidth||document.documentElement.clientWidth||document.body.clientWidth},height:function(){return self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},total:function(d){var b=document.body,e=document.documentElement;return d?Math.max(Math.max(b.scrollHeight,e.scrollHeight),Math.max(b.clientHeight,e.clientHeight)):Math.max(Math.max(b.scrollWidth,e.scrollWidth),Math.max(b.clientWidth,e.clientWidth))}}}();

/* start slideshow */
var slideshow=new TINY.fader.fade('slideshow',
{
  id:'slides',
  auto:5,
  visible:true,
  position:Math.floor(Math.random()*4),
  resume:true
});

/* slide click events */
var content1 = '<img src="http://cdn.xfce.org/frontpage/intro-1.png" width="900" height="600" alt="" />';
T$('intro1').onclick = function(){TINY.box.show(content1,0,900,600,0)}

var content2 = '<img src="http://cdn.xfce.org/frontpage/intro-2.png" width="900" height="600" alt="" />';
T$('intro2').onclick = function(){TINY.box.show(content2,0,900,600,0)}

var content3 = '<img src="http://cdn.xfce.org/frontpage/intro-3.png" width="900" height="600" alt="" />';
T$('intro3').onclick = function(){TINY.box.show(content3,0,900,600,0)}

var content4 = '<img src="http://cdn.xfce.org/frontpage/intro-4.png" width="900" height="600" alt="" />';
T$('intro4').onclick = function(){TINY.box.show(content4,0,900,600,0)}
