# block-chain.php
# for any securities coding
# to use:


    include('../block-chain.php');
    $run = new shell_exec;
# get string (decode):
    $string=$run->ini_set('block_chain',0,0,'string');
# get block-chain (encode):
    $block_chain=$run->ini_set('string',0,1,'string');
# get block 1 (encode):
    $block_chain=$run->ini_set('string',1,1,'string');
# get block 2 (encode):
    $block_chain=$run->ini_set('string',2,1,'string');
