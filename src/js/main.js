$.getJSON("council.json",function(data){
	putjsondata(data,'senior','seniordisp');
	putjsondata(data,'junior','juniordisp');
	putjsondata(data,'coord','coorddisp');
        putjsondata(data,'staff','staffdisp');
	
});
function putjsondata(data,src,dst)
{
	var rawTemplate= document.getElementById(src).innerHTML;
	var compliedTemplate = Handlebars.compile(rawTemplate);
	var ourGeneratedHTML = compliedTemplate(data);
	var menuContainer = document.getElementById(dst);
	menuContainer.innerHTML=ourGeneratedHTML;
}