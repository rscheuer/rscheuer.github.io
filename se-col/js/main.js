var HttpClient = function () {
	this.get = function (aUrl, aCallback) {
		var anHttpRequest = new XMLHttpRequest();
		anHttpRequest.onreadystatechange = function () {
		if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
            aCallback(anHttpRequest.responseText);
		}
		anHttpRequest.open("GET", aUrl, true);
		anHttpRequest.send(null);
	}
}

// GET BLOCKS

var channel = "se01";

var client = new HttpClient();
client.get('https://api.are.na/v2/channels/'+channel+'/contents', function(response) {
//	console.log(response);
	var obj = JSON.parse(response);
	
//	//set-most-recent-date
//	var dateStrI = obj.contents[0].updated_at;
//	var dateI = new Date(dateStrI);
//	var yearI = dateI.getFullYear();
//	var monthI = dateI.getMonth()+1;
//	var dtI = dateI.getDate();
//	monthI = dateI.toLocaleString('default', { month: 'short' });
//	dateI = dtI+' ' + monthI.toUpperCase() + ' '+yearI;
//	setLatestDate(dateI);
//	
	
	for(var i = 0; i < obj.contents.length; i++)
	{
	    var blocks = obj.contents[i];
		console.log(obj.contents[i].id);
		var type = obj.contents[i].class;
		if( type == "Link"){
			getLinkBlocks(obj.contents[i]);
		}
		else if (type == "Text") {
			getTextBlocks(obj.contents[i]);
		}
		else if (type=="Image") {
			getImgBlocks(obj.contents[i]);
		}
		
//		setLatestDate(formatDate(obj.contents[i].updated_at));
		setLatestDate(obj.contents[i].updated_at);
		
		
//		var num = i;
//		var title = obj.contents[i].title;
//		var dsc = obj.contents[i].description;
//		var url = obj.contents[i].source.url;
//		var dateStr = obj.contents[i].updated_at;
//		var date = new Date(dateStr);
//		var year = date.getFullYear();
//		var month = date.getMonth()+1;
//		var dt = date.getDate();
//		
//		month = date.toLocaleString('default', { month: 'short' });
//		
//		date = dt+' ' + month.toUpperCase() + ' '+year;
//		var user = obj.contents[i].connected_by_username;
//		var type = obj.contents[i].class;
//		insertData(num, title, url, dsc, date, user, type);
	}

});

function setLatestDate(date){
	document.getElementById('lastEdit').innerHTML = date;
}

function insertData(num, title, url, description, date, user, type) {
  var html_to_insert = "<a target='_blank' href='"+url+"'><div class='issue-item'><p class='item-meta'><span class='item-date'>"+date+"</span> by <span class='item-author'>"+user+"</span> <span class='item-type'>"+type+"</span></p><p class='item-info'><span class='item-name'>"+title+"</span> "+description+"</p></div></a>";
  document.getElementById('linkSection').insertAdjacentHTML('beforeend', html_to_insert);
}

function getLinkBlocks(obj){
		console.log(obj);
		var title = obj.title;
		var dsc = obj.description;
		var url = obj.source.url;
		var dateStr = obj.updated_at;
		var date = new Date(dateStr);
		var year = date.getFullYear();
		var month = date.getMonth()+1;
		var dt = date.getDate();
		var num = 0;
		month = date.toLocaleString('default', { month: 'short' });
		
		date = dt+' ' + month.toUpperCase() + ' '+year;
		var user = obj.connected_by_username;
		var type = obj.class;
		insertLinks(num, title, url, dsc, date, user, type);
}

function getTextBlocks(obj){
		console.log(obj);
		var title = obj.title;
		var dsc = obj.description;
		var date = formatDate(obj.updated_at);
		var user = obj.connected_by_username;
		var type = obj.class;
		var content = obj.content;
		insertText(title, dsc, date, user, content, type);
}

function getImgBlocks(obj){
		console.log(obj);
		var title = obj.title;
		var dsc = obj.description;
		var date = formatDate(obj.updated_at);
		var user = obj.connected_by_username;
		var type = obj.class;
		var thumb = obj.image.large.url;
		var url = obj.image.original.url;
		insertImage(title, dsc, date, user, thumb, url, type);
}


function insertImage(title, description, date, user, imgThumb, imgUrl, type) {
	var html_to_insert = "<a target='_blank' href='"+imgUrl+"'><div class='issue-item'><p class='item-meta'><span class='item-date'>"+date+"</span> by <span class='item-author'>"+user+"</span><span class='item-type'>"+type+"</span></p><p class='item-info'><img class='item-img' src="+imgThumb+"/></p></p class='item-info'>"+title+"<p></div></a>";
//  document.getElementById('linkSection').insertAdjacentHTML('beforeend', html_to_insert);
	$(html_to_insert).insertAfter('#'+type+'-section');
}

function insertText(title, description, date, user, content, type) {
	var html_to_insert = "<div class='issue-item'><p class='item-meta'><span class='item-date'>"+date+"</span> by <span class='item-author'>"+user+"</span> <span class='item-type'>"+type+"</span></p><p class='item-info'><span class='item-name'>"+title+"</span> "+content+"</p></div>";
//  document.getElementById('linkSection').insertAdjacentHTML('beforeend', html_to_insert);
	$(html_to_insert).insertAfter('#'+type+'-section');
}

function insertLinks(num, title, url, description, date, user, type) {
  var html_to_insert = "<a target='_blank' href='"+url+"'><div class='issue-item'><p class='item-meta'><span class='item-date'>"+date+"</span> by <span class='item-author'>"+user+"</span> <span class='item-type'>"+type+"</span></p><p class='item-info'><span class='item-name'>"+title+"</span> "+description+"</p></div></a>";
//  document.getElementById('linkSection').insertAdjacentHTML('beforeend', html_to_insert);
	$(html_to_insert).insertAfter('#'+type+'-section');
}

function formatDate(dateStr){
	var date = new Date(dateStr);
	var year = date.getFullYear();
	var month = date.getMonth()+1;
	var dt = date.getDate();
	var num = 0;
	month = date.toLocaleString('default', { month: 'short' });
	
	date = dt+' ' + month.toUpperCase() + ' '+year;
	return date;
}

       
       
// GET CHANNELS

var issues = new HttpClient();
issues.get('https://api.are.na/v2/channels/spiritualengineering_main/contents', function(response) {
	console.log(response);
	var obj = JSON.parse(response);
//	alert(obj.contents.length)
	
	for(var i = 0; i < obj.contents.length; i++)
	{
		console.log(obj.contents[i].id)
		var num = i+1;
		var title = obj.contents[i].title;
		var dsc = obj.contents[i].metadata.description;
		var date = obj.contents[i].added_to_at;
		insertIssue(num, title, dsc, date);
	}

});


function insertIssue(num, title, description, date) {
  var html_to_insert = "<div class='issue-item'><p class='item-meta'><span class='item-date'>"+date+"</span> by <span class='item-author'>Ryan Online</span> <span class='item-type'>TOOLS</span></p><p class='item-info'><a href='http://glyphdrawing.club'><span class='item-name'>Glyphdrawing.club</span></a> Free web-based pixel art editor</p></div>";
  document.getElementById('mydiv').insertAdjacentHTML('beforeend', html_to_insert);
}


function iterateThroughIssues(){
	for(issue in issues){
		let rawData = fs.readFileSync('./se-issues/'+issue+'/data.json');
		let data = JSON.parse(rawData);
		//build site
	}
}



    