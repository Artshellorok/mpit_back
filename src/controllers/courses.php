<?php
    use \App\Auth;
    use \RedBeanPHP\R as R;
    class Courses extends Controller 
    {
        protected $allowed_types = ['image', 'video'];
        public function create()
        {
        	$user = Auth::check();
        	if(!empty($_POST)){
        		$srch = R::exec("SELECT * FROM courses WHERE user_id = '".$user['id']."' AND name = '".$_POST['title']."'");
        		if(!empty($srch)){ die("Курс с таким названием уже есть <br> <a href='/courses/create'>Назад</a>"); }
	        	$course = R::dispense('courses');
	        	$course->user_id = $user['id'];
                $course->name = $_POST['title'];
                $course->category = $_POST['category'];
	        	$course->desc = $_POST['desc'];
	    		$id = R::store($course);
	    		if($id){
	    			echo "course created <a href='/courses/create'>fuck go back</a>";
	    		}
	    	}
    		else { ?>
    		<form method="post" action="/courses/create" style="width: 300px; position: absolute; left: 50%; top: 50%; justify-content: center; transform: translate(-50%,-50%);">
    			<h1 style="text-align: center;">create course</h1>
                <input type="text" placeholder="course name" style="display: flex; width: 100%;" name="title">
                <select name="category">
                    <option value="freelance">Фриланс</option>
                    <option value="new">Изучаем новое</option>
                    <option value="exp">Делимся опытом</option>
                    <option value="home">#stayathome</option>
                </select>
    			<textarea placeholder="course desc" style="display: flex; width: 100%; resize: vertical;" name="desc"></textarea>
    			<button style="display: flex; width: 100%; justify-content: center;" type="submit">create course</button>
    		</form>
    		<?php }
        }
        public function index($id = '', $stage = '')
        {
            if ($id) {
                Auth::check();
                if ($stage == 'add'){
                    $this->view('lessons_add', ['id' => $id]);
                }
                else {
                    if (isset($_POST['lessons'])) {
                        $lessons = $this->request()->all()['lessons'];
                        for ($i = 0; $i < count($lessons); $i++){
                            $file = ["name" => $_FILES['lessons']["name"][$i]["file"], "tmp_name" => $_FILES['lessons']['tmp_name'][$i]["file"], "type" => $_FILES['lessons']['type'][$i]["file"]];
                            $lesson = &$_POST['lessons'][$i];
                            if ($lesson['title'] && $lesson['desc'] && $lesson['seq_id']){
                                $dir = '/var/www/html/public/files/';
                                $name = md5($file['name'] . md5(random_int(0,1000))) . (strlen($file['name']) > 1 ? '.' . explode('.', $file['name'])[1] : '');
                                $lesson['file'] = "http://mpit.tk/files/$name";
                                $path = $dir . $name;
                                $lesson['file_type'] = explode('/', $file['type'])[0];
                                if (in_array($lesson['file_type'], $this->allowed_types)) {
                                    if (move_uploaded_file($file['tmp_name'], $path)) {
                                        R::exec("insert into lessons values(?,?,?,?,?,?)", [$id, $lesson['seq_id'], $lesson['title'], $lesson['desc'], $lesson['file_type'], $lesson['file']]);
                                    } else {
                                        exit("Недопустимый формат файла");
                                    }
                                } else {
                                    exit("Недопустимый формат файла");
                                }
                            } else {
                                exit("Не все поля заполнены");
                            }
                        }
                    }
                    else{
                        $lessons = R::getAll( 'SELECT * FROM lessons WHERE course_id = ? ORDER BY seq_id', [$id]);
                        $this->view('lessons', $lessons);
                    }
                }
                
            } else {
                header("Location: /");
            }
        }
    }