<?php
	
	$item1 = 100;
	$item2 = 200;
	$item3 = 300;

	function isGreaterThanZero ($item, $qty, $itemG){
		return $itemG > 0 ? "Item $item - ($qty) qty | Remaining Stocks = $itemG".'<br>' :  "No more stocks".'<br>';
	}
	
	function computeStocksQty ($itm, $qty) {
	  
	    global $item1, $item2, $item3;
	    
        if($qty <= 0){
            return "Invalid Quantity".'<br>';
        }
	    switch($itm){
	      case 1:
	        $item1 -= $qty;
			return isGreaterThanZero($itm, $qty, $item1);       
	        break;
	     case 2:
	        $item2 -= $qty;
			return isGreaterThanZero($itm, $qty, $item2);       
	        break;
        case 3:
            $item3 -= $qty;       
			return isGreaterThanZero($itm, $qty, $item3);       
            break;

	    default:
	        return "Invalid input: Item $itm".'<br>';
	    }

	}
	 
	echo "Given Quantities on example".'<br>';
    echo "\n";
	echo computeStocksQty(1, 3 );
    echo "\n";
	echo computeStocksQty(1, 5 );
    echo "\n";
	echo computeStocksQty(2, 5 );
    echo "\n";
	echo computeStocksQty(1, 50 );
    echo "\n";
	echo computeStocksQty(3, 5 );
    echo "\n";
    echo "\n";
    echo "\n";
   

	

    echo "Sample quantities from Invalid inputs to No stocks".'<br>'; 
	echo computeStocksQty(6, 5 );
    echo "\n";
	echo computeStocksQty(1, 100 );
    echo "\n";
	echo computeStocksQty(7, 7 );
    echo "\n";
	echo computeStocksQty(2, 95 );
    echo "\n";
	echo computeStocksQty(2, 195 );

    
    
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>