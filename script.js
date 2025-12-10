document.addEventListener('DOMContentLoaded', () => {
    const bookList = document.querySelector('.top-book-list');

    // To ensure the animation restarts properly after hover/focus
    try {
        bookList.addEventListener('animationend', () => {
            // This handler can be used to restart the animation if it's paused or stopped,
            // but since we are using 'infinite' in CSS, this is mainly for debugging or complex control.
        });
        
    } catch (error) {
        
    }
try {
    
    bookList.parentElement.addEventListener('mouseenter', () => {
        bookList.style.animationPlayState = 'paused';
    });
    
    bookList.parentElement.addEventListener('mouseleave', () => {
        bookList.style.animationPlayState = 'running';
    });
} catch (error) {
}
});

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
try {
    let formdajoute = document.getElementById("myform")
    formdajoute.addEventListener("submit", (e) =>{
        let coursename = document.getElementsByName("title")[0];
        let coursedescription = document.getElementsByName("description")[0];
        let courselevel = document.getElementsByTagName("select")[0] ;
        if(coursename.value.trim()==""){
            coursename.style.border="1px solid red"
            e.preventDefault();
            alert("Le titre est obligatoire");
        }
         if(coursedescription.value.trim()==""){
             coursedescription.style.border="1px solid red"
            e.preventDefault();
            alert("La description est obligatoire");
        }
        if(courselevel.value == ""){
            console.log(courselevel.value);
            e.preventDefault();
            courselevel.style.border="1px solid red" ;
            alert("level introuvable") ;
        }
        // if(courselevel.value != "Debutant" || courselevel.value != "Intermediaire"){
        //     console.log(courselevel.value);
        //     e.preventDefault();
        //     courselevel.style.border="1px solid red" ;
        //     alert("level introuvable") ;
        // }
    })
} catch (error) {
    
}
function permession(){


}