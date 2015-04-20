<?php
/**
 * @author      Fatih ÇAPAK <fatihcapak7@gmail.com>
 */

class validate {

    /**
     * @var
     */
    protected $_ssn;

    /**
     * @param mixed $ssn
     */
    public function setSsn($ssn)
    {
        $this->_ssn = $ssn;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function checkSsn()
    {
        if ($this->_ssn) {
            $digit = preg_split('//', $this->_ssn, -1, PREG_SPLIT_NO_EMPTY);

            if ($digit[0] == 0)
                throw new Exception('Invalid pattern');

            $digit10 = (10 - (3*($digit[0]+$digit[2]+$digit[4]+$digit[6]+$digit[8]) +
                        ($digit[1]+$digit[3]+$digit[5]+$digit[7]))%10 )%10;
            $digit11 = (10 - ($digit[0]+$digit[2]+$digit[4]+$digit[6]+$digit[8] +
                        3*($digit[1]+$digit[3]+$digit[5]+$digit[7]+$digit[9]))%10 )%10;

            if ($digit10 != $digit[9] || $digit11 != $digit[10])
                throw new Exception('Invalid pattern');

            return true;
        } else {
            throw new Exception('Invalid pattern');
        }
    }
}
