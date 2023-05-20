<?php 

class studentModel extends DB{
    public function getStudent(){
        $qr = "SELECT * FROM `student` ";
        $result = $this->conn->query($qr);

        $rows = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($rows, $row);
            }


            return $rows;
        } else {
            return "Fail";
        }
    }
}

?>