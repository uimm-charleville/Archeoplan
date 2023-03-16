// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption

let imagesDiv = document.querySelectorAll('div[id^=view_]')
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


imagesDiv.forEach((e) => {
  let children = e.children;
  let linkImg = children[0].children[0].getAttribute('src');
  let altImg  = children[0].children[0].getAttribute('alt');
  e.addEventListener("click" , function(){
    modal.style.display = "block";
    modalImg.src = linkImg;
    modalImg.alt = altImg;
    captionText.innerHTML = altImg;
  })
})
 
// When the user clicks on <span> (x), close the modal
modal.onclick = function() {
    img01.className += " out";
    setTimeout(function() {
       modal.style.display = "none";
       img01.className = "modal-content";
     }, 400);
    
 }    
