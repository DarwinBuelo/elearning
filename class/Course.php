<?php

class Course
{
    public $courseID;
    public $courseName;
    public $courseDesc;


    /**
     * Not tested yet
     * @param array $id
     */
    public static function LoadArray(array $id){
        if(isset($id)){
            $data = [];
            foreach($id as $item){
                $sql ="SELECT 
                            course_id,
                            course_name
                            course_desc
                        WHERE
                            course_id = '{$item}'";
                $result = Dbcon::execute($sql);
                $data[$item] = Dbcon::fetch_assoc($result);
            }
            return $data;
        }
        return false;
    }

    public function getCourseID()
    {
        return $this->courseID;
    }

    public function setCourseID($id)
    {
        $this->courseID = $id;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($name)
    {
        $this->courseName = $name;
    }
    
    public function getDesc()
    {
        return $this->courseDesc;
    }

    public function setDesc($desc)
    {
        $this->courseDesc = $desc;
    }

}