<?php
    use \App\Auth;
    use \RedBeanPHP\R as R;
    class Main extends Controller 
    {
        public function index()
        {
        	$data = [];
        	$data['rows'] =  R::getAll( "SELECT courses.id,courses.name,courses.desc,courses.user_id,courses.category,lessons.file_type,lessons.file_path FROM courses INNER JOIN lessons ON lessons.course_id = courses.id WHERE seq_id = '1' ORDER BY courses.id");
            $this->view('main', $data);
        }
    }