/*function main(){
    console.log("cio");

    console.log(document.getElementsByClassName('rows'));


    array = document.getElementsByClassName('rows');
/*
    for (elem of array) {
        if (elem.id!="10")
            elem.hidden=true;
    }
}

function clicked(event){ // scorro l'array ed elimino gli elementi non cliccati
   const array = document.getElementsByClassName('rows');
    console.log(document.getElementsByClassName('rows'));
    id = event.parentElement.id;
    
        for (elem of array) {  
            console.log(elem.id);      
            if (elem.id!=id){  
                elem.remove();
            }                
        }
    }
        */
    function main() {
        console.log(document.querySelectorAll(".rows"));
      }
      let array = document.querySelectorAll(".rows");
      
      const clicked = (e) => {
        let id = e.parentElement.id;
        array.forEach((e) => {
          console.log(e)
          if (e.id !== id) {
            e.remove();
          }
        });
      };