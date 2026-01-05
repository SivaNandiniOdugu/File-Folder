function CookNow(){
    console.log("Getting Started!")
}
let likecount=0;
let Dislikecount=0;
function LikeCount(){
    likecount++;
    document.getElementById("like-count").textContent=likecount;
}
function DislikeCount(){
    Dislikecount++;
    document.getElementById("dislike-count").textContent=Dislikecount;

}

const searchInput=document.querySelector('.search');
const thumbnails=document.querySelectorAll('.Thumnails');
searchInput.addEventListener('input',function(){
    const query=searchInput.value.toLocaleLowerCase();
    thumbnails.forEach(thumbnail=>{
        const recipeName=thumbnail.querySelector('.recipe-content p span + span, .recipe-content p').textContent.toLocaleLowerCase();
   if(recipeName.includes(query)){
    thumbnail.style.display='';

   }
   else{
    thumbnail.style.display='none';
   }
    })
})




























































