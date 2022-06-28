<?php
    function nice_number($n) {
        if (!$n) return 0;

        $n = (0+str_replace(",", "", $n));

        // is this a number?
        if (!is_numeric($n)) return 0;

        // now filter it;
        if ($n > 1000000000000) return round(($n/1000000000000), 2).' T';

        if ($n > 1000000000) return round(($n/1000000000), 2) . ' B';

        if ($n > 1000000) return round(($n/1000000), 2) . ' M';

        if ($n > 1000) return round(($n/1000), 2) . ' K';

        return $n;
    }
?>