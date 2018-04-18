// NOTE: You must run this file on a server.

var xhr = new XMLHttpRequest();                 // Create XMLHttpRequest object - remember object-oriented programming... If you don't, do some research!

xhr.onload = function() {                       // This will run when the ready state changes.
  if(xhr.status === 200) {                      // If the server sent a status of "OK" (this is what 200 stands for)
    responseObject = JSON.parse(xhr.responseText);	//Converts the returned JSON data (responseText) into a JavaScript object (parses it) and stores it in variable called responseObject. We will refer to responseObject to get the data from the JSON file

    // BUILD UP STRING WITH NEW CONTENT
    var newContent = ''; 	//Create empty variable to fill with HTML. This data will be used to fill the section with id of "content" in the HTML file
    for (var i = 0; i < responseObject.articles.length; i++) { // Loop through all events in the object
      newContent += '<div class="event">'; //add this HTML content to anything already in the newContent variable (+=)
      newContent += '<img src="' + responseObject.articles[i].urlToImage + '" '; //go to resPonseObject, find the thing called events, use the current one (i... designated by the loop), and pull the data from the "map" key.
      newContent += 'alt="' + responseObject.articles[i].title + '" />'; //set alt text using the value for the location key
      newContent += '<p><b>' + responseObject.articles[i].title + '</b><br>'; //place the value from the location key within <p> tags so we can display it directly
      newContent += '<a href="' + responseObject.articles[i].url + '" ';
       newContent += '<p><b>' + responseObject.articles[i].description + '</b><br>';
      newContent += responseObject.articles[i].publishedAt + '</p>'; //also place value from the date key within the <p> tags
      newContent += '</div>'; //close the div
    }

    // Update the page with the new content.
    document.getElementById('content').innerHTML = newContent;

  }
};

xhr.open('GET', 'https://newsapi.org/v2/top-headlines?q=trump&apiKey=00b3ae88769c4b8386a47032a0d365ba', true);        // Prepare the request
xhr.send(null);                                 // Send the request

// NOTE: You must run this file on a server.

var xhrr = new XMLHttpRequest();                 // Create XMLHttpRequest object - remember object-oriented programming... If you don't, do some research!

xhrr.onload = function() {                       // This will run when the ready state changes.
  if(xhrr.status === 200) {                      // If the server sent a status of "OK" (this is what 200 stands for)
    responseObject = JSON.parse(xhrr.responseText);	//Converts the returned JSON data (responseText) into a JavaScript object (parses it) and stores it in variable called responseObject. We will refer to responseObject to get the data from the JSON file

    // BUILD UP STRING WITH NEW CONTENT
    var newContent = ''; 	//Create empty variable to fill with HTML. This data will be used to fill the section with id of "content" in the HTML file
    for (var i = 0; i < responseObject.data.length;  i++) { // Loop through all events in the object
      newContent += '<div class="event">'; //add this HTML content to anything already in the newContent variable (+=)
    //newContent += '<img src="' + responseObject.data[i].url + '" '; //go to resPonseObject, find the thing called events, use the current one (i... designated by the loop), and pull the data from the "map" key.
      newContent += '<alt="' + responseObject.data[i].url + '" />'; //set alt text using the value for the location key
     newContent += '<a href="' + responseObject.data[i].url + '" />';



      newContent += '</div>'; //close the div
    }

    // Update the page with the new content.
    document.getElementById('poop').innerHTML = newContent;

  }
};

xhrr.open('GET', 'http://api.giphy.com/v1/gifs/search?q=trump&api_key=KzoBI80NdccXPn4oAIf2OoeQrFbtJi4y&limit=4', true);        // Prepare the request
xhrr.send(null);                                 // Send the request
