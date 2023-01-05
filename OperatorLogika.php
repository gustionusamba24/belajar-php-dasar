<?php 
    // Operator AND
    echo "Operator AND\n";
    var_dump(true && false);
    var_dump(false && true);
    var_dump(true && true);
    var_dump(false && false);
    
    // OPERATOR OR
    echo "Operator OR\n";
    var_dump(false || false);
    var_dump(false || true);
    var_dump(true || false);
    var_dump(true || true);
    
    // OPERATOR NEGASI
    echo "Operator NEGASI\n";
    var_dump(!true);
    var_dump(!false);
    
    // OPERATOR XOR
    echo "Operator XOR\n";
    var_dump(false xor false);
    var_dump(false xor true);
    var_dump(true xor false);
    var_dump(true xor true);
?>