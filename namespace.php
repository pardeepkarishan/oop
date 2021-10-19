<?php
// by defauld all code is in global namespace.
// namespace should be very first in the code.
// if namespace is used then "NO" code should be outside of namespace block.

namespace abc {
	class xyz{
		public function __construct($value='')
		{
			echo "xyz from ABC class";
		}
	}
}

// namespace def {
// 	class xyz{
// 		public function __construct($value='')
// 		{
// 			echo "xyz from Def class";
// 		}
// 	}
// }

namespace { //rest of the code will be here in global namespace.

	class xyz{
		public function __construct($value='')
		{
			echo "xyz from global namespace";
		}
	}

	$obj = new abc\xyz();

}