<?php

$item1 = 100;
$item2 = 200;
$item3 = 300;
	
$items = [    
        'Item 1'=> $item1,
        'Item 2'=> $item2,
        'Item 3' => $item3
];


	
	function computeStocksQty ($itm, $qty) {
	  
	    global $items;
	    
        foreach($items as $key => $value){

            if($key == $itm){
                $value -= $qty;
                if($value <= 0 ){
                    return "No more stocks";
                }
               $items[$key] = $value;
               return "$itm - ($qty) | Remaining Stocks $value";
            }
            else if($qty <= 0 ){
                return "Invalid Quantity";
            }
  
            
        }
        if(!in_array($itm, $items)){
           return "Invalid input";     
        } 
             
	}
	 
	echo "Given Quantities on example".'<br>';
    echo "\n";
	echo computeStocksQty('Item 1', 3 );
    echo "\n";
	echo computeStocksQty('Item 1', 5 );
    echo "\n";
	echo computeStocksQty('Item 2', 5 );
    echo "\n";
	echo computeStocksQty('Item 1', 50 );
    echo "\n";
	echo computeStocksQty('Item 3', 5 );
    echo "\n";


    echo "If Not enough stocks".'<br>';
    echo "\n";
	echo computeStocksQty('Item 3', 700 );
    echo "\n";
    
    
    echo "If Not valid input or Invalid Item".'<br>';
    echo "\n";
	echo computeStocksQty('Item 4', 100 );
    echo "\n";





    
    
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>