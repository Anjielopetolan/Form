<?php
   class crud{
    //private database object
    private $db;

    //constructor to intialize private variable to the databse connection
    function _construct($conn){
        $this->db = $conn;
    }
    public function insert($fname, $lname, $dateofbirth,  $specialty, $email, $contact ){
        try{
            $sql = "INSERT INTO attendee VALUE ( :fname,:lname,:dateofbirth,:specialty,:email, :contact)";
            $stml = $this->db->prepare($sql);

            $stml->bindparam( ':fname' ,$fname);
            $stml->bindparam( ':lname' ,$lname);
            $stml->bindparam( ':dateofbirth' ,$dateofbirth);
            $stml->bindparam( ':specialty' ,$specialty);
            $stml->bindparam( ':email' ,$email);
            $stml->bindparam( ':contact' ,$contact);

            $stml->execute();
            return true;

        }catch (PDOExeption $e) {
            echo $e->getMessage;
            retrun false;
        }
    }
   }
?>