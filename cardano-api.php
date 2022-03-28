<?php error_reporting(E_ALL);
ini_set('display_errors', '1');
$headers = array('http'=> array(
                     'method' => 'GET',
                     'header' => 'project_id: testnetPdN40aXDu7uSeYZXMX7G3VTPWpuf44Im'
                    )
                );



$context = stream_context_create($headers);
$json = file_get_contents('https://cardano-testnet.blockfrost.io/api/v0/pools/pool18kd2k7kqt9gje9y0azahww4dqak9azeeg8ayl0xl7dzewg70vlf', false, $context);
$parsedJson = json_decode($json);
echo $json;