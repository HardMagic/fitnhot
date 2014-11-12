{"filter":false,"title":"functions.php","tooltip":"/functions.php","undoManager":{"mark":49,"position":49,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":21,"column":52},"end":{"row":22,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":22,"column":0},"end":{"row":23,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":23,"column":0},"end":{"row":24,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":0},"end":{"row":24,"column":68}},"text":"function get_the_category_bytax( $id = false, $tcat = 'category' ) {"},{"action":"insertText","range":{"start":{"row":24,"column":68},"end":{"row":25,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":25,"column":0},"end":{"row":37,"column":0}},"lines":["    $categories = get_the_terms( $id, $tcat );","    if ( ! $categories )","        $categories = array();","","    $categories = array_values( $categories );","","    foreach ( array_keys( $categories ) as $key ) {","        _make_cat_compat( $categories[$key] );","    }","","    // Filter name is plural because we return alot of categories (possibly more than #13237) not just one","    return apply_filters( 'get_the_categories', $categories );"]},{"action":"insertText","range":{"start":{"row":37,"column":0},"end":{"row":37,"column":1}},"text":"}"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":23,"column":0},"end":{"row":24,"column":0}},"text":"\n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":0},"end":{"row":24,"column":1}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":1},"end":{"row":24,"column":2}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":2},"end":{"row":24,"column":3}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":3},"end":{"row":24,"column":4}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":24,"column":3},"end":{"row":24,"column":4}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":24,"column":2},"end":{"row":24,"column":3}},"text":"/"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":2},"end":{"row":24,"column":3}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":3},"end":{"row":24,"column":4}},"text":"M"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":4},"end":{"row":24,"column":5}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":5},"end":{"row":24,"column":6}},"text":"D"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":6},"end":{"row":24,"column":7}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":7},"end":{"row":24,"column":8}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":8},"end":{"row":24,"column":9}},"text":"F"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":9},"end":{"row":24,"column":10}},"text":"O"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":10},"end":{"row":24,"column":11}},"text":"R"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":11},"end":{"row":24,"column":12}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":12},"end":{"row":24,"column":13}},"text":"C"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":13},"end":{"row":24,"column":14}},"text":"U"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":14},"end":{"row":24,"column":15}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":15},"end":{"row":24,"column":16}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":16},"end":{"row":24,"column":17}},"text":"O"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":17},"end":{"row":24,"column":18}},"text":"M"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":18},"end":{"row":24,"column":19}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":19},"end":{"row":24,"column":20}},"text":"P"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":20},"end":{"row":24,"column":21}},"text":"O"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":21},"end":{"row":24,"column":22}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":22},"end":{"row":24,"column":23}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":23},"end":{"row":24,"column":24}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":24},"end":{"row":24,"column":25}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":25},"end":{"row":24,"column":26}},"text":"Y"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":26},"end":{"row":24,"column":27}},"text":"P"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":27},"end":{"row":24,"column":28}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":28},"end":{"row":24,"column":29}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":29},"end":{"row":24,"column":30}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":30},"end":{"row":24,"column":31}},"text":"C"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":31},"end":{"row":24,"column":32}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":32},"end":{"row":24,"column":33}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":33},"end":{"row":24,"column":34}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":34},"end":{"row":24,"column":35}},"text":"G"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":35},"end":{"row":24,"column":36}},"text":"O"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":36},"end":{"row":24,"column":37}},"text":"R"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":37},"end":{"row":24,"column":38}},"text":"I"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":38},"end":{"row":24,"column":39}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":24,"column":39},"end":{"row":24,"column":40}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":2,"column":35},"end":{"row":3,"column":0}},"text":"\n"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":37,"column":1},"end":{"row":37,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":463,"mode":"ace/mode/php"}},"timestamp":1415810652872,"hash":"e09bfb35ea96612febe19ad78a2434431649e714"}