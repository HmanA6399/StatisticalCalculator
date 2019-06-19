<?php
    function findMaxInfo($arr) {
        $mx = 0; $idx = 0; $i = 0;
        foreach ($arr as $el) {
            if ($el > $mx) {
                $mx = $el;
                $idx = $i;
            }
            $i++;
        }
        return array($idx, $mx);
    }
    function findMode($arr)
    {
        $freq = array_fill(0, 1000, 0);
        foreach ($arr as $el) {
            $freq[$el]+=1;
        }
        return findMaxInfo($freq)[0];
    }
    function getSum($arr) {
        $sum = 0;
        foreach ($arr as $el) {
            $sum += $el;
        }
        return $sum;
    }

    function getMean($arr) {
        $sum = getSum($arr);
        return (float) $sum / sizeof($arr);
    }

    function findSigma($arr) {
        $xbar = getMean($arr);
        (float) $sm = 0;
        foreach ($arr as $el) {
            $sm += ($el - $xbar) ** 2;
        }
        return sqrt($sm / count($arr));
    }

    function printStats($arr) {
        foreach ($arr as $k => $v) {
            echo $k . " : " . $v . "<br>";
        }
        return 0;
    }

    $data = array(10, 20, 30, 30, 40);
    $stats = array('Mean'=>15.6 , 'Std. Deviation'=>3.33);
?>

<h1>
    <?php
        $mxinfo = findMaxInfo($data);
        echo "Max = " . $mxinfo[1] . " at idx ". $mxinfo[0] . "<br>"
    ?>
    <?php echo "Mode = ". findMode($data) . "<br>" ?>
    <?php echo "Mean = ". getMean($data) . "<br>" ?>
    <?php echo "Sigma = ". findSigma($data) . "<br>" ?>
</h1>