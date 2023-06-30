const text = document.querySelector(".second-text");

const textloand = () =>{
    setTimeout(() => {
        text.textContent = "HTML";
    },0);
    setTimeout(() => {
        text.textContent = "css";
    },4000);

    setTimeout(() => {
        text.textContent = "javascript";
    },8000);
    
}
textloand();
setInterval(textloand,120000)




