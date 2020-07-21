const mdal = document.getElementById("result");
const modal = document.querySelector(".rmodal");
const overlay = modal.querySelector(".rmodal__overlay")




const opmdal = () => {
    modal.classList.remove("hidden");
}
const clmdal = () => {
    modal.classList.add("hidden");
}



if(mdal){
mdal.addEventListener("click", opmdal);

}

if(overlay){
overlay.addEventListener("click",clmdal);
}