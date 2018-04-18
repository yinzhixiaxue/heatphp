 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
    public function login() {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('admin_model');
        $row=$this->admin_model->check_login($username,$password);
        if($row) {
            // localStorage.username = "$username";
            // localStorage.password = "$password";
            echo '1';//登录成功
        } else {
            echo '0';//登录失败
        }
    }
    public function logout(){

        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        localStorage.clear();
        echo '1';
        // localStorage.username = "";
        // localStorage.password = "";
    }

    public function create_user() {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $username = $this->input->post('username');
        $sex=$this->input->post('sex');
        $age=$this->input->post('age');
        $telephone=$this->input->post('telephone');
        $count=$this->input->post('count');
        $type=$this->input->post('type');
        $entertime=$this->input->post('entertime');
        $this->load->model('user_model');
        $row=$this->user_model->create_user($username,$sex,$age,$telephone,$count,$type,$entertime);
        if($row) {
            echo '1';//新建用户成功
        } else {
            echo '0';//新建用户失败
        }
    }

    public function update_user() {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $userId = $this->input->post('userId');
        $username = $this->input->post('username');
        $sex=$this->input->post('sex');
        $age=$this->input->post('age');
        $telephone=$this->input->post('telephone');
        $count=$this->input->post('count');
        $type=$this->input->post('type');
        $entertime=$this->input->post('entertime');
        $this->load->model('user_model');
        $row=$this->user_model->update_user($userId,$username,$sex,$age,$telephone,$count,$type,$entertime);
        if($row>0) {
            echo '1';// 更新用户成功
        } else {
            echo '0';// 更新用户失败
        }
    }

    public function find_user_information() {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $query = $this->input->post('query');
        $row=$this->user_model->find_user_information($query);
        if($row) {
            echo $row;
        } else {
            echo 'no';
        }

    }
    public function myreg(){
//        header('Access-Control-Allow-Origin: *');
//        header('Access-Control-Allow-Headers: X-Requested-With,Content-Type');
        header('Access-Control-Allow-Origin:*');
//        header('Access-Control-Allow-Headers:x-requested-with,content-type');
//        echo '100';
        $username = $this->input->post('username');
        $studyId=$this->input->post('studyId');
        $password=$this->input->post('password');
        $repassword=$this->input->post('repassword');
        $sex=$this->input->post('sex');
        $age=$this->input->post('age');
        $email=$this->input->post('email');
        $telephone=$this->input->post('telephone');
        $this->load->model('user_model');
        $row=$this->user_model->find_user_by_studyId($studyId);
        if($password != $repassword) {
            echo '3';//两次密码不一致，请重新注册
        }
        else if (!$row) {
            $person=$this->user_model->save_user($username,$password,$studyId,$sex,$age,$email,$telephone);
            if($person) {
                echo '1';//注册成功
            }
            else echo '2';//注册失败
        } else {
            echo '0';//学号已存在
        }
    }
    public function person(){
        if($this->session->userdata('loginedUser')){
            $user_Id=$this->session->userdata('loginedUser')->user_Id;
            $this->load->model('person_model');
            $row=$this->person_model->find_person_by_userId($user_Id);
//            echo"<pre>";
//            var_dump($user_Id);
//            var_dump($row);
//            echo"</pre>";
//            die();
            if($row){
                redirect("welcome/person_perfect");
            }
            else{
//                var_dump($user_Id);
//                die();
                redirect("welcome/person_imperfect");
            }
        }else{
            redirect("welcome/login");
        }

    }
    public function person_perfect(){
        $loginedUser = $this->session->userdata("loginedUser");
//        echo $loginedUser->user_Id;
        $this->load->model('person_model');
        $person_info = $this->person_model->get_info_by_userId($loginedUser->user_Id);
//        echo "<pre>";
//        var_dump($person_info);
//        echo "</pre>";
//        die;
        $this->load->view('person_perfect',array(
            'person_info' => $person_info
        ));
    }
    public function person_imperfect(){
        $loginedUser = $this->session->userdata("loginedUser");
        $user_Id=$loginedUser->user_Id;
        $this->load->model('user_model');
//        var_dump($loginedUser);
//        die();
        $img = $this->user_model->get_headImg_by_pictId($loginedUser->pict_Id);
        $this->load->model("person_model");
        $persons= $this->person_model->find_person_by_userId($user_Id);
//        var_dump($persons);
//        die();
//        $this->load->view('person_imperfect',array(
//            'persons'=>$persons
//        ));
        $this->load->view('person_imperfect',array(
            'img' => $img,
            'persons'=>$persons
        ));
    }
    public function do_person_imperfect(){
        if($this->session->userdata("loginedUser")){
            $loginedUser = $this->session->userdata("loginedUser");
            $user_Id= $loginedUser->user_Id;
        }


        $username=$this->input->post('username');
        $sex=$this->input->post('sex');
        $date=$this->input->post('date');
        $height=$this->input->post('height');
        $weight=$this->input->post('weight');
        $waist=$this->input->post('waist');
        $hipline=$this->input->post('hipline');
        $telephone=$this->input->post('telephone');
        $sign=$this->input->post("sign");

        $this->load->model('person_model');
        $persons=$this->person_model->find_person_by_userId($user_Id);

        if(!$waist) $waist = $height / 2 - 10;
        if(!$hipline) $hipline = $height / 2 + 10;
        if($persons){//如果当前这个人已经完善过信息，表明此人要修改信息
            $result=$this->person_model->update_person_imperfect($user_Id,$username,$sex,$date,$height,$weight,$waist,$hipline,$telephone,$sign);
//            var_dump($result);
//            die();
//            if($result){//如果修改成功了，那么跳回主页
                redirect("welcome/index");
//            }else{//否则跳回修改页面重新修改
////                $this->load->view('person_imperfect');
//                redirect("welcome/do_person_imperfect");
//            }
        }
//        $this->load->model('person_model');
        else{//如果当前这个人没有完善过信息，那么让这个人去完善信息
            $str = "";
            if($sex == 1) $str = "man";
            else if($sex == 2){
                $str = "woman";
            }else{
                $str = "default";
            }
            $this->load->model("picture_model");
            $img = $this->picture_model->get_img_by_sex($str);
            $this->load->model("user_model");
            $user_row = $this->user_model->update_pictId_by_userId($loginedUser->user_Id, $img->pict_Id);
            if($user_row){
                $row=$this->person_model->do_person_imperfect($user_Id,$username,$sex,$date,$height,$weight,$waist,$hipline,$telephone,$sign);
                if($row){//如果插入数据库成功，证明完善信息成功
                    redirect("welcome/person_perfect");
                }
            }else{
                echo "pict_Id in user update failed";
            }

        }

    }
    public function complete_person_imperfect(){
        $user_Id=$this->session->userdata("loginedUser")->user_Id;
        $this->load->model("person_model");
        $persons= $this->person_model->find_person_by_userId($user_Id);
//        var_dump($persons);
//        die();
        $this->load->view('person_imperfect',array(
            'persons'=>$persons
        ));
    }
    public function index(){
//        $sex=$this->input->get('sex');
        $this->load->model('push_model');
        $messages=$this->push_model->push_messages();
        $this->load->model("picture_model");
        $carousels=$this->picture_model->Carousel();
            $this->load->view('index',array(
                'messages'=>$messages,
                'carousels'=>$carousels
            ));


    }
    // public function login(){
    //     $this->load->view('login');
    // }
    // public function do_login(){
    //     $username=$this->input->post("username");
    //     $password=$this->input->post("password");
    //     $this -> load -> model('user_model');//加载model文件
    //     $result = $this -> user_model -> get_by_name_pwd($username, $password);

    //     if($result){//查到结果
    //         $this -> session -> set_userdata('loginedUser', $result);
    //         redirect('welcome/index');
    //     }else{//未查到结果
    //         redirect('welcome/login');
    //     }
    // }
    // public function reg(){
    //     $this->load->view('reg');
    // }
    public function check_name(){
        $name=$this->input->get('username');
        $this->load->model('user_model');
        $query=$this->user_model->get_by_name($name);
        if($query){
            echo "fail";
        }else{
            echo "success";
        }
    }
    public function article(){
		if($this->session->userdata("loginedUser")){
			$this->load->model("article_model");
			$this->load->model("user_model");
			$articles=$this->article_model->get_articles();
			$users=$this->user_model->get_users();
			$this->load->view("article",array(
				'articles'=>$articles,
				'users'=>$users
			));
		}else{
			redirect('welcome/login');
		}
    }
    public function insert_article(){
        $loginedUser=$this->session->userdata("loginedUser");
        $arti_Title=$this->input->post('title');
        $arti_Content=$this->input->post('content');
        date_default_timezone_set("Asia/Shanghai");
        $arti_Date=date('Y-m-d H:i:s');
        $this->load->model("article_model");
        $row=$this->article_model->insert_article($loginedUser->user_Id,$arti_Title,$arti_Content,$arti_Date);
        if($row>0){
            redirect('welcome/article');
        }
    }
     public function check_reg(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");
        $repassword=$this->input->post("repassword");

        $this->load->model("user_model");
        $rows=$this->user_model->save($username,$password);
        if($rows>0&&$password==$repassword){
            redirect("welcome/login");
        }else{
            $this->load->view("reg");
        }
    }
     public function forum_content(){
         $arti_Id=$this->input->get('arti_Id');
         $this->load->model('article_model');
         $this->load->model('user_model');
         $forum_content=$this->article_model->forum_content($arti_Id);
         $user=$this->user_model->user_by_article($arti_Id);
         $this->load->view('forum_content',array(
             'user'=>$user,
             'forum_content'=>$forum_content,
             'arti_Id'=>$arti_Id
         ));
     }
    public function forum_content_comments(){
        $arti_Id=$this->input->get('arti_Id');
        $user_Id=$this->input->get('user_Id');
        $comm_Content=$this->input->get('comm_Content');
        date_default_timezone_set("Asia/Shanghai");
//        $comm_Date=$this->input->get('comm_Date');
        $comm_Date=date('Y-m-d H:i:s');
        $user_Name=$this->session->userdata("loginedUser")->user_Name;
        $this->load->model('picture_model');
        $pict_Url=$this->picture_model->find_pictUrl_by_userId($user_Id);
        $this->load->model('comment_model');
        $query=$this->comment_model->forum_content_comments($user_Id,$arti_Id,$comm_Content,$comm_Date);
        $data=$this->comment_model->find_comments_by_artiId_now($arti_Id);

        if($query&&$data){
            echo json_encode($data);
        }else{
            echo 'no';
        }
//        echo('2324');
    }
    public function find_comments_by_artiId(){
        $arti_Id=$this->input->get('arti_Id');
        $this->load->model('comment_model');
        $comments=$this->comment_model->find_comments_by_artiId($arti_Id);
        if($comments){
            echo json_encode($comments);
        }
    }
     public function push_content(){
         $push_Id=$this->input->get('push_Id');
         $this->load->model('push_model');
         $push_content=$this->push_model->push_content($push_Id);
         $this->load->view('push_content',array(
             'push_content'=>$push_content
         ));
     }
     public function layout(){
         $user=$this->session->userdata("loginedUser");
         $this->session->set_userdata("loginedUser","");
//         $this->load->view("login");
         redirect("welcome/login");
     }
    public function helper()
    {
        function getWeek()
        {
            $day = date("w");
            switch ($day) {
                case 1:
                    return 1;
                    break;
                case 2:
                    return 2;
                    break;
                case 3:
                    return 3;
                    break;
                case 4:
                    return 4;
                    break;
                case 5:
                    return 5;
                    break;
                case 6:
                    return 6;
                    break;
                case 0:
                    return 7;
                    break;
            }
        }

        $week = getWeek();
        $this->load->model('food_model');
        $foods = $this->food_model->select_foods_by_week($week);
        $user = $this->session->userdata("loginedUser");
        $this->load->view('helper', array(
            'foods' => $foods,
            'user' => $user
        ));
    }
    public function stepsSubmit(){
        $value=$this->input->get('value');
        echo $value/10000*300;
    }
    public function video(){
        $this->load->view("video");
    }
    public function freshvideo(){
         $user=$this->session->userdata("loginedUser");
//        var_dump($user);
         $calorie=$this->input->get('calorie');
        if(isset($user->calorie)){
            $user->calorie=$user->calorie+$calorie;
        }else{
            $user->calorie=$calorie;
        }
         $this->session->set_userdata("loginedUser",$user);
//        var_dump(123);
//         var_dump($query);
//         die();
//         if($query){
//             echo "yes";
//         }
        echo $user->calorie;
    }
}

