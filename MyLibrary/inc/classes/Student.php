<?php
  if (!define('__CONFIG__')) {
    exit('You do not have a config file');
  }

  class Student {
    private $con;

    public $student_index;
    public $student_id;
    public $reg_time;

    public function __construct(int $student_index) {
      $this->con = DB::getConnection();
      $student_index = Filter::Int($student_index);

      $student = $this->con->prepare("SELECT student_index, student_id, reg_time FROM students WHERE student_index = :student_index LIMIT 1");
      $student->bindParam(':student_index', $student_index, PDO::PARAM_INT);
      $student->execute();

      /*
       * maybe some point in the time user is deleted by admin, but user still has session in his browser
       * he will be still able to access to data
       * so we need to check is user still exist to display data, otherwise force logout
       */
      if ($student->rowCount() == 1) {
        $student = $student->fetch(PDO::FETCH_OBJ);

        $this->student_index = (string) $student->student_index;
        $this->student_id    = (string) $student->student_id;
        $this->reg_time      = (string) $student->reg_time;
      } else {
        header("Location: ./logout.php");
      }
    }

      /*
       * sanitize password
       * make sure user does not exist and LOWERCASE the email returns
       * bind parameter to pull variable outside of SQL statements, also less chance of SQL injection
       */
      public static function Find($student_id, $return_assoc = false) {
        $con = DB::getConnection();

        $student_id = (string) Filter::String($student_id);
        $findStudent = $con->prepare("SELECT student_index, password FROM students WHERE student_id = LOWER(:student_id) LIMIT 1");
        $findStudent->bindParam(':student_id', $student_id, PDO::PARAM_STR);
        $findStudent->execute();

        /* if 2nd parameter is true, return the user object instead */
        if ($return_assoc) {
          return $findStudent->fetch(PDO::FETCH_ASSOC);
        }

        /* cast result into boolean */
        $student_found = (boolean) $findStudent->rowCount();
        return $student_found;
      }
  }
?>