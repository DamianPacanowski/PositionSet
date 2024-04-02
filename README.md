simple create a .php file and enter below code

    include('../block-chain.php');
    $run = new shell_exec;
    
get string (decode):

    $string=$run->ini_set('blocks',0,0,'chain');
    
get blocks (encode):

    $block=$run->ini_set('string',0,1,'chain');
    
get block 1 (encode):

    $block=$run->ini_set('string',1,1,'chain');
    
get block 2 (encode):

    $block=$run->ini_set('string',2,1,'chain');

'blocks' 
two type of number , separated by a dot . form the coordinates of the encoded letters in chain

'chain'
a combination of characters, numbers, letters that create a chain of network stam for coding moment

'string'
any text you want to encode, no breaks, standard ro 32 string
