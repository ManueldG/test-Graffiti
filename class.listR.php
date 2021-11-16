<?
namespace listR;
/***
 *  @author MdG
 *  
 * */
class ListR{

    public function __construct(){
         
    }

    public function random(){ //genero stringa random [1-9] [a-z] [A-Z] 
        
        for ($i=0 ;  $i < 100 ; $i++){
            $lista[$i] = "";
            for ($k=0 ;  $k < 10 ; $k++){
                do{

                    $rnd = random_int(0,2); // sceglie a caso se numero o stringa 

                    if ($rnd == 0)                    
                        $lista[$i] .= (random_int(0,9));
                    else if($rnd == 1)
                        $lista[$i] .= chr(random_int(65,90));
                    else
                        $lista[$i] .= chr(random_int(97,122));

                }while(!in_array($lista[$i], $lista));                               

            }
        }
    return $lista;
    }

    
}