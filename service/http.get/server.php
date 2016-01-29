<?php  
	$arr = array(
		array(
			'id' => 1,
			'name' => 'Doremon',
			'chapter' => 400
	    ),
		
	    array(
			'id' => 2,
			'name' => 'Naruto',
			'chapter' => 850
	    ),
		
	    array(
			'id' => 3,
			'name' => 'Dragon Ball',
			'chapter' => 567
	    ),
		
	    array(
			'id' => 4,
			'name' => 'Pokemon',
			'chapter' => 234
	    )
	);
	
	echo json_encode($arr);
