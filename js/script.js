function main(){

    document.addEventListener("click", clicked);
    array = document.getElementsByClassName('rows');

}

function clicked(){
    array = document.getElementsByClassName('rows');
    
        for (elem of array) {
            if (elem.id!=this.activeElement.parentNode.id)
                elem.hidden=true;
        }

}