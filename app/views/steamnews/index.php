
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>King Penguin Studios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Questrial">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/stylize.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>




<style>
	body {
		background-color:#363b44 !important;
	}
  #content{
    font-size:20px;
  }
  .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
  top: 40px;
  right: 0;
  color: #72a3ff;
}

.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
  top: 40px;
  left: 0;
  color: #72a3ff;
}

.carousel-control.left, .carousel-control.right {
  background-image:none !important;
  filter:none !important;
  opacity:1;
}
.item{
  padding: 0px 30px 0px ;
}
.selected {
	background-color:#72a3ff;
}
#jumbaldo{
		background-color:#72a3ff;
}
.search-column1{
	height:60vh;
	overflow-y: scroll;
}
.search-column1::-webkit-scrollbar {
    width: 12px;
}

.search-column1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
}

.search-column1::-webkit-scrollbar-thumb {
	color:#72a3ff;
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
/*.search-column2{
	height:70vh;
	overflow-y: scroll;
}
.search-column2::-webkit-scrollbar {
    width: 12px;
}

.search-column2::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
}

.search-column2::-webkit-scrollbar-thumb {
	color:#72a3ff;
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
*/
</style>
</head>
<body class="bg-2">
	<div class="container">
  <div class="jumbotron" id="jumbaldo">
    <h1>Simple Steam News</h1>
    <p>A simple tool demonstrating Ajax calls, MySQL queries, and Web API interaction.</p>
  </div>
  <p>Type the name of a Steam title and then select an entry. For example try "Call of Duty"</p>
</div>

<div class="container">
  <div class="row">
	<div class="col-sm-3">

		<form action="queryapps" method="GET" id="search">
			<span>
        <input type="text" autocomplete="off" class="form-control" name="appname" id="stuff">
			  <button class="btn-primary" type="submit">Search</button>
      </span>
		</form>
		<div class="search-column1">
		<table class="table">
			<thead>
			<tr>
				<th>Title</th>
			</tr>
			</thead>
			<tbody id="dataset">
			</tbody>
		</table>
		</div>
		</div>
		<div class ="col-md-9 search-column2">
		<div id="content">
		  <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active" id = "thefirst"></div>
          <div class="item" id = "thesecond"></div>
          <div class="item" id = "thethird"></div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
		</div>
		</div>
	</div>
</div>
	</body>

<script>
$("#search").submit(function(event) {
	event.preventDefault();
	$( "#dataset" ).empty();
	let $form = $( this ),
  title = $form.find( "input[name='appname']" ).val(),
  url = $form.attr( "action" ) + "/" + title;

  if (title.length >= 4) {
	  let send = $.get(url);

	 	send.done(function( data ) {
      console.log(data);
	 		let p = JSON.parse(data);
	   	for (let i = 0; i< data.length; i++) {
	   		$("#dataset").append("<tr class='app'><td data-appid='" + p[i].appid + "'>" + p[i].label + "</td></tr>")
	 		}
  	});
  } else {
  	$("#dataset").append("<tr class='app'><td>Please enter at least four characters</td><td class='number'>0</td></tr>")
  }
});

</script>
<script>
$(document).ready(function() {
  $('#dataset').on('click', '.app', function() {
    $(this).addClass('selected').siblings().removeClass("selected");

		let origin = ["#thefirst","#thesecond","#thethird"];
		let appid = $(this).find('td').data('appid');

		console.log(appid);
		$.ajax({
		  url: "queryarticles" + "/" + appid,

		  dataType: "json",

		  success: function(response) {
		  	var json = response;

				if (!jQuery.isEmptyObject(json)) {
					newsarray = json['appnews']['newsitems'];
				};

        for (let i = 0; i < 3; i++) {
			  	if (!jQuery.isEmptyObject(json) && newsarray[i] != null) {
				  	$(origin[i]).html("<h1>" + newsarray[i]['title'] + "</h1>" + newsarray[i]['contents']);
		   		} else {
				    $(origin[i]).html("<h1>No news for this entry</h1>");
		   		}
	   		}
		  },

		  error: function(xhr) {
  		  for (let i = 0; i < 3; i++) {
  			  $(origin[i]).html("<h1>No news for this entry</h1>");
		    }
			}
		});
	});
});
</script>
</html>
