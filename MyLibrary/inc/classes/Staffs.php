<?php
  if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  class Staffs {
    private $con;

    public $staff_index;
    public $staff_id;
    public $staff_name;
    public $reg_time;

    public function __construct(int $staff_index) {
      $this->con = DB::getConnection();
      $staff_index = Filter::Int($staff_index);

      $staff = $this->con->prepare("SELECT staff_index, staff_id, staff_name, reg_time FROM staffs WHERE staff_index = :staff_index LIMIT 1");
      $staff->bindParam(':staff_index', $staff_index, PDO::PARAM_INT);
      $staff->execute();

      /*
       * maybe some point in the time user is deleted by admin, but user still has session in his browser
       * he will be still able to access to data
       * so we need to check is user still exist to display data, otherwise force logout
       */
      if ($staff->rowCount() == 1) {
        $staff = $staff->fetch(PDO::FETCH_OBJ);

        $this->staff_index = (string) $staff->staff_index;
        $this->staff_id    = (string) $staff->staff_id;
        $this->staff_name  = (string) $staff->staff_name;
        $this->reg_time      = (string) $staff->reg_time;
      } else {
        header("Location: ./logout.php");
      }
    }

      /*
       * sanitize password
       * make sure user does not exist and LOWERCASE the email returns
       * bind parameter to pull variable outside of SQL statements, also less chance of SQL injection
       */
      public static function Find($staff_id, $return_assoc = false) {
        $con = DB::getConnection();

        $findStaff = $con->prepare("SELECT staff_index, staff_name, password FROM staffs WHERE staff_id = LOWER(:staff_id) LIMIT 1");
        $findStaff->bindParam(':staff_id', $staff_id, PDO::PARAM_STR);
        $findStaff->execute();

        /* if 2nd parameter is true, return the user object instead */
        if ($return_assoc) {
          return $findStaff->fetch(PDO::FETCH_ASSOC);
        }

        /* cast result into boolean */
        $staff_found = (boolean) $findStaff->rowCount();
        return $staff_found;
      }
  }
?>