document.addEventListener('DOMContentLoaded', () => {
    const bookList = document.querySelector('.top-book-list');

    // To ensure the animation restarts properly after hover/focus
    bookList.addEventListener('animationend', () => {
        // This handler can be used to restart the animation if it's paused or stopped,
        // but since we are using 'infinite' in CSS, this is mainly for debugging or complex control.
    });

    // Optional: Pause the animation when the user hovers over the books
    bookList.parentElement.addEventListener('mouseenter', () => {
        bookList.style.animationPlayState = 'paused';
    });

    bookList.parentElement.addEventListener('mouseleave', () => {
        bookList.style.animationPlayState = 'running';
    });

    // Note: The continuous scroll logic is primarily handled by the CSS `@keyframes` and the
    // duplication of the book-card elements in the HTML. The JavaScript here is for
    // enhancing user experience (like pausing on hover).

});
// Vous pouvez insérer ce script à la fin de votre corps HTML (avant </body>)

document.addEventListener('DOMContentLoaded', (event) => {
    let showButton = document.getElementById('show-section-form-btn');
    let sectionContainer = document.getElementById('add-section-form-container');
try {
    showButton.addEventListener('click', () => {
        sectionContainer.style="flex";
    });
} catch (error) {  
}
});
let formdajoute = document.querySelector("form")
let submitbtn = document.getElementsByName("submitbtn")[0];
submitbtn.addEventListener("click", e =>{
    const coursename = document.getElementsByName("title")[0];
    const coursedescription = document.getElementsByName("description")[0];
    const courselevel = document.getElementsByTagName("select")[0].value ;
    let flag = true ;
    e.preventDefault();
    if(coursename.value.trim()==""){
        coursename.style.border="1px solid red";
        flag = false ;
    }
    if(flag == false){
        e.preventDefault();
    }
})