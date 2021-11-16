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

function clicked(event){
    array = document.getElementsByClassName('rows');
    id = event.parentElement.id;
    console.log("event",event.parentElement);
        for (elem of array) {            
            
            if (elem.id!=id){  
                elem.outerHTML="";
            }
                
        }


}