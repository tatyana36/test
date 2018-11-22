<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.08.2018
 * Time: 15:32
 */

class Student extends \base\Model
{
	
	
    public function getAllStudents()
    {
		
	 $sql = 'SELECT * FROM students';
 	 $stmt=VIVT::$db->getPDO()->query($sql);

        $students = [];
        while ($row = $stmt->fetch())
        {
            $students[] = $row['name'];
         //  $students[] = $row['lastname'];
        }
print_r($students);
        return $students;

    }

    public function getMenu()
    { //echo "test";
        $students = $this->getAllStudents();
        ob_start();
        echo '<ul>';
        foreach ($students as $student) {
            echo '<li>' . $student . '</li>';
        }
        echo '</ul>';
        return $content = ob_get_clean();
    }

}