# checkTCKN ( TC Kimlik No Algoritması ve hesaplaması )

use;

$validate = new validate();

$validate->setSsn('12345678910');

echo $validate->checkSsn();
