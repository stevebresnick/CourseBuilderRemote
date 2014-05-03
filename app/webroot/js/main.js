// main.js
var clip = new ZeroClipboard( document.getElementById("copy-button"), {
  moviePath: "/files/ZeroClipboard.swf"
} );

clip.on( "load", function(client) {
  // alert( "movie is loaded" );

  client.on( "complete", function(client, args) {
    // `this` is the element that was clicked
    this.style.display = "none";
    alert("Copied text to clipboard: " + args.text );
  } );
} );