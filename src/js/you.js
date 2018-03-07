$.getJSON('youtubenew.json', function(data) {
    	console.log(data);
    	putjsondata(data,'youtubeputsrc','youtubeput');
    	
    });
    
    
function putjsondata(data,src,dst)
{
	var rawTemplate= document.getElementById(src).innerHTML;
	var compliedTemplate = Handlebars.compile(rawTemplate);
	var ourGeneratedHTML = compliedTemplate(data);
	var menuContainer = document.getElementById(dst);
	menuContainer.innerHTML=ourGeneratedHTML;
}