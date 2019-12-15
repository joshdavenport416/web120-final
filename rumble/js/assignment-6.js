//add list item to 'A little more about me:'
var node = document.createElement("li");                 
var textnode = document.createTextNode("What can I say? I'm RAD!");
node.appendChild(textnode);
var position = document.getElementById("about-me");
position.appendChild(node);     

//remove second paragraph element from 'Our Beginnings'
var removeEl = document.getElementsByTagName('p')[1];
var containerEl = document.getElementsByTagName('main')[0];
containerEl.removeChild(removeEl);

/*change list item six's attributes in 'A little more about me:' to that 
of the about_blockquote's*/
var el1 = document.getElementById('six');
el1.className = 'about_blockquote';

//change text in h1 from "About Us" to "About Stephanie"
document.getElementById("h1").innerphp = "About Stephanie";  
  

