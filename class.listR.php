<?
namespace listR;
/***
 *  @author MdG
 *  @param 
 * */
class ListR{

    public function __construct(){
         
    }

    public function random(){
        
        for ($i=0 ;  $i < 100 ; $i++){
            $b[$i] = "";
            for ($k=0 ;  $k < 10 ; $k++){
                $rnd = random_int(0,2);
                
                if ($rnd == 0)                    
                    $b[$i] .= (random_int(0,9));
                else if($rnd == 1)
                    $b[$i] .= chr(random_int(65,90));
                else
                    $b[$i] .= chr(random_int(97,122));

            }
        }
            
        
    return $b;

    }

    
}