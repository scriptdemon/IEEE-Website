$.getJSON("events_get.php",function(data){
	console.log(data);
	var eventarr = [];
	var evententer = {data};
	eventarr.push(evententer);
	console.log(eventarr[0]);
	putjsondata(eventarr[0],'event','all');
	localStorage.setItem("events",JSON.stringify(eventarr[0]));
}).catch(function(){
console.log("error caught");
});
function putevents(ref)
{
	var today = new Date();
	var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
	var d1 = Date.parse(date);
	var str = ref.href;
	var i;
	str=str.substring((ref.href.indexOf("#"))+1,str.length);
	var recievedata=JSON.parse(localStorage.getItem("events"));
	console.log(recievedata.data.length);
	var data = [];
	if (str != 'all')
	{
		var flag=0;
		for (i=0;i<recievedata.data.length;i++)
		{
			if(recievedata.data[i].event_type == str )
			{
				flag=flag+1;
				//console.log("yo");
				data.push(recievedata.data[i]);
			}
			if(str=="mega" && recievedata.data[i].is_mega=='1' )
			{
				flag=flag+1;
				data.push(recievedata.data[i]);
			}
			//console.log(i);
			var d2 = Date.parse(recievedata.data[i].event_start);
			if(str=="up" && d2 > d1 )			
			{
				flag=flag+1;
				data.push(recievedata.data[i]);
			}
		}
		if(flag>0)
		{
		var passevent = {data};
		console.log(passevent);
		putjsondata(passevent,'event',str);
		}
		else
		{
			document.getElementById(str).innerHTML=`
			<h1 class='text-center' style='padding:100px;'>Coming Soon...</h1>
			`;
		}
	}
	else if (str == 'all')
	{
		putjsondata(recievedata,'event',str);
	}
}
function puttextmodal(ref)
{
	console.log(ref.parentNode.id);
	var data = JSON.parse(localStorage.getItem("events"));
	console.log(data.data[ref.parentNode.id-1].event_id);
	var modaltext = document.getElementById("modaltext");
	data=data.data[ref.parentNode.id-1];
	console.log(data);
	var eventarr = [];
	var evententer = {data};
	eventarr.push(evententer);
	console.log(eventarr[0]);
	putjsondata(data,'modaltextsrc','modaltext');
}

function putjsondata(data,src,dst)
{
	var rawTemplate= document.getElementById(src).innerHTML;
	var compliedTemplate = Handlebars.compile(rawTemplate);
	var ourGeneratedHTML = compliedTemplate(data);
	var menuContainer = document.getElementById(dst);
	menuContainer.innerHTML=ourGeneratedHTML;
}
