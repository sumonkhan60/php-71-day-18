<?php
    class Demo
    {
        public function demo() {
            if (isset($_POST['btn'])) {
                $firstNumber = $_POST['first_number'];
                $lastNumber = $_POST['last_number'];
                $choice = $_POST['check'];
                $res = "";
                if ($firstNumber<$lastNumber)
                {
                    for ($i=$firstNumber; $i<=$lastNumber; $i++)
                    {
                        if ($i%2!=0 && $choice=="Odd") {
                            $res.= $i." ";
                        }
                        if ($i%2==0 && $choice=="Even") {
                            $res.= $i." ";
                        }
                    }
                    return $res;
                }
                else
                {
                    for ($i=$firstNumber; $i>=$lastNumber; $i--)
                    {
                        if ($i%2!=0 && $choice=="Odd") {
                            $res.= $i." ";
                        }
                        if ($i%2==0 && $choice=="Even") {
                            $res.= $i." ";
                        }
                    }
                    return $res;
                }
            }
        }
    }
?>