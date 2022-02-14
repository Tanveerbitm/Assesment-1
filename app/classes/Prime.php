<?php

namespace App\classes;

class Prime
{
    protected $number;
    protected $i;
    protected $startRange;
    protected $endRange;
    protected $pr;
    protected $j;
    protected $txt='';
    protected $res=0;

    public function __construct($post=null)
    {

        $this->startRange = $post['start_number'];
        $this->endRange = $post['end_number'];
    }

    public function primeConfirmation($num){
        if($num == 1 || $num == 2){return 1;}
        else {
            for ($this->i = 2; $this->i <= sqrt($num)+2; $this->i++) {
                if ($num % $this->i== 0) {
                    return 0;
                }
            }
            return 1;
        }
    }
    public function index(){

        for($this->j=$this->startRange ; $this->j<= $this->endRange; $this->j++){
           $this->pr=$this->primeConfirmation($this->j);
           if($this->pr){
               if($this->j != $this->endRange){$this->txt.=(string)$this->j.",";}
               else{$this->txt.=(string)$this->j;}

               $this->res+=$this->j;
           }
        }
        return $this->txt.=' = '.(string)$this->res;
    }


}