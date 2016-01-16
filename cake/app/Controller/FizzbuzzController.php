<?php
App::uses('AppController', 'Controller');
class FizzbuzzController extends AppController{
    public function index(){
        //
        $fizzbuzz = array();
        for($i = 1; $i <= 100; $i++){

            if(!($i%5)&&!($i%3)){
                $fizzbuzz[] = 'FIZZBUZZ';
            }elseif(!($i%3)){
                $fizzbuzz[] = 'FIZZ';
            }elseif(!($i%5)){
                $fizzbuzz[] = 'BUZZ';
            }else{
                $fizzbuzz[] = $i;
            }
/////////////////////////////////////////
            // $a='';
            // if($i%3 === 0  ){
            //     $a = $a.'fizz';
            // }
            // if($i%5 === 0  ){
            //     $a = $a.'buzz';
            // }
            // if(empty($a)){
            //     $a = $i;
            // }
            // $fizzbuzz[] = $a;

/////////////////////////////////////////
            //
            //     if($i%15 === 0){
            //         $fizzbuzz[] = 'FIZZBUZZ';
            //     }elseif ($i%3 === 0) {
            //         $fizzbuzz[] = 'FIZZ';
            //     }elseif ($i%5 === 0) {
            //         $fizzbuzz[] = 'BUZZ';
            //     }else{
            //         $fizzbuzz[] = $i;
            //     }

/////////////////////////////////////////
            // if(!($i%3)){
            //     echo 'fizz';
            // }
            // if(!($i%5)){
            //     echo 'buzz';
            // }
            // if($i%3&&$i%5){
            //     echo $i;
            // }
            // echo "<br/>";
            //
        }

        $this->set('fizzbuzz',$fizzbuzz);
    }

}
