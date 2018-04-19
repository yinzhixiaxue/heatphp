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
//            echo $row;
            echo json_encode($row);
            //echo '1';//登录成功
        } else {
            echo '0';//登录失败
        }
    }
    public function mylogin(){
//        header('Access-Control-Allow-Origin: *');
//        header('Access-Control-Allow-Headers: X-Requested-With,Content-Type');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
//        Access-Control-Allow-Headers' 'DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type'
        $studyId=$this->input->post('studyId');
        $password=$this->input->post('password');
//        echo($studyId+$password);
        $this->load->model('user_model');
        $row=$this->user_model->check_mylogin($studyId,$password);
        $username=$this->user_model->get_username_by_studyId($studyId);
        if($row) {
//            if($username){
//                $this->load->helper('cookie');
//                $cookie = array(
//                    'studyId'   => $studyId,
//                    'username' => $username,
//                    'power'  => '0'
//                );
//                $this->input->set_cookie($cookie);
            echo '1';
//            }
        } else {
            echo '0';
        }
    }
    public function logout(){

        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        // localStorage.clear();
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
}

