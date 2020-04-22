<?php
    use \App\Auth;
    use \RedBeanPHP\R as R;
    class Courses extends Controller 
    {
    	public function create()
        {
        	$user = Auth::check();
        	if(!empty($_POST)){
        		$srch = R::exec("SELECT * FROM courses WHERE user_id = '".$user['id']."' AND name = '".$_POST['title']."'");
        		if(!empty($srch)){ die("Курс с таким названием уже есть <br> <a href='/courses/create'>Назад</a>"); }
	        	$course = R::dispense('courses');
	        	$course->user_id = $user['id'];
	        	$course->name = $_POST['title'];
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
    			<textarea placeholder="course desc" style="display: flex; width: 100%; resize: vertical;" name="desc"></textarea>
    			<button style="display: flex; width: 100%; justify-content: center;" type="submit">create course</button>
    		</form>
    		<?php }
        }
        public function index()
        {
            $user = Auth::check();
            if(!isset($_GET['id'])){ die("No course selected"); }
            $id = $_GET['id'];
            $course = R::load('courses', $id);
            $author = R::load('users', $course['user_id']); ?>
            <div style="width: 500px; position: absolute; left: 50%; top: 50%; justify-content: center; transform: translate(-50%,-50%);">
    			<h1 style="text-align: center;">Course #<?php echo $course['id']; ?>: <?php echo $course['name']; ?></h1>
    			<h3 style="display: flex; width: 100%;">Description: <?php echo $course['desc']; ?></h3>
    			<h2 style="display: flex; width: 100%;">Author: <?php echo $author['name']; ?></h2>
    			<h1>lessons:</h1>
    			<?php 
    			$srch = R::getAll("SELECT * FROM lessons WHERE course_id = '".$id."' ORDER BY seq_id");
    			if(empty($srch)){echo "no lessons yet";}
    			else{
	    			for ($i=0; $i < count($srch); $i++) { ?>
	    				<div style="width: 500px; justify-content: center;">
	    					<h1>Step/lesson №<?php echo $srch[$i]['seq_id'];?>: <?php echo $srch[$i]['title'];?></h1>
	    					<p><?php echo $srch[$i]['desc'];?></p>
	    					<p>file type: <?php echo $srch[$i]['file_type'];?></p>
	    					<p>file path: <?php echo $srch[$i]['file_path'];?></p>
	    				</div>
	    			<?php }
    			}
    			?>
    		</div>
        <?php }
    }