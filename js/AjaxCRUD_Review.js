

$(document).ready(function(){
	
	$('#dbtable td.crud a.review').click(function (e){

			loadItem(this.hash);
			console.log(this.hash);
			
	});
	
});


function loadItem(anID)
{
    var xmlhttp;
    
    //Get a XHR object
    try
    {
	    if (window.XMLHttpRequest)
	        {// code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp=new XMLHttpRequest();
	        }
	    else
	        {// code for IE6, IE5
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }
    }
    catch(e)
    {
    	console.log("XHR creation issue");
    }
    
    
    xmlhttp.onreadystatechange=processXHRreturn;
    
    //GET THE PAGE
  	var url="reviewItem.php";
    
	url=url+"?iid="+anID.replace('#','');
	url=url+"&r="+Math.random();
	
	//console.log(url);

    xmlhttp.open("GET",url,true);
    xmlhttp.send(null);
    
	function processXHRreturn()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
            document.getElementById("ReviewForm").innerHTML="<p>"+xmlhttp.responseText+"</p>";
	   
	    }   
	}

}
