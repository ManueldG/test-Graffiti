function main(){
    console.log("cio");

    console.log(document.getElementsByClassName('rows'));


    array = document.getElementsByClassName('rows');
/*
    for (elem of array) {
        if (elem.id!="10")
            elem.hidden=true;
    }*/
}

function clicked(event){ // scorro l'array ed elimino gli elementi non cliccati
    array = document.getElementsByClassName('rows');
    id = event.parentElement.id;
    
        for (elem of array) {  
            console.log(elem.id)             
            if (elem.id!=id){  
                elem.remove();
            }                
        }


}