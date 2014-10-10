var x;
function fn1(e)
{
    if (!e) e = window.event;
    var keyCode = e.keyCode || e.which;
    if (keyCode == '13')
	{
	var a = document.getElementById("searchbox");
    //alert(a.value);
	ajaxrequest('exp.php')  
    
	}
  }
  
  //..............................................................
  // create the XMLHttpRequest object, according browser
function get_XmlHttp() {
  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
  var xmlHttp = null;

  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
    xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  return xmlHttp;
}//varible returned
// sends data to a php file, via POST, and displays the received answer
function ajaxrequest(php_file) {
  var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance

  // create pairs index=value with data that must be sent to server
  var  the_data = 'test='+document.getElementById('searchbox').value;
  

  request.open("POST", php_file, true);			// set the request

  // adds  a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
   request.onreadystatechange = function() {
    if (request.readyState == 4) {
     // document.getElementById("display").innerHTML = request.responseText;
    //document.write(request.responseText);
	x=request.responseText;
	alert(x);
	//window.location.assign("profile_search.php");
	//document.getElementById("oname").innerHTML=request.responseText;
	//document.write("hello");
	
	}
  } 
}
function tryfun()
{
document.write(x);
}