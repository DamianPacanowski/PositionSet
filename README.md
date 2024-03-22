simple create a .js file and enter below code

in code downloading values is "blocks" and chain


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
