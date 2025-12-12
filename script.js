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
const formdajoute = document.getElementById("myform")
try {
    formdajoute.addEventListener("submit", (e) =>{
        e.preventDefault();
        let coursename = document.getElementsByName("title")[0];
        let coursedescription = document.getElementsByName("description")[0];
        let courselevel = document.getElementsByTagName("select")[0] ;
        let isValid = true;
        if(coursename.value.trim()==""){
            coursename.style.border="1px solid red"
            alert("Le titre est obligatoire");
            isValid = false;
        }
         if(coursedescription.value.trim()==""){
             coursedescription.style.border="1px solid red"
            alert("La description est obligatoire");
            isValid = false;
        }
        if(courselevel.value.trim() == ""){
            console.log(courselevel.value);
            courselevel.style.border="1px solid red" ;
            alert("level introuvable") ;
            isValid = false;
        }
        if(courselevel.value != "Débutant" && courselevel.value != "Intermédiaire" && courselevel.value != "Avancé"){
            console.log(courselevel.value);
            courselevel.style.border="1px solid red" ;
            alert("level introuvable") ;
            isValid = false;
        }
        
        if(isValid){
            formdajoute.submit();
        }
    })
} catch (error) {
    
}
function permession(){
document.getElementById("permessionmodal").style.display="flex";
}