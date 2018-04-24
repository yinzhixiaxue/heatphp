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
            echo json_encode($row);//登录成功
        } else {
            echo '0';//登录失败
        }
    }
    public function logout(){

        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        echo '1';
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
        $address=$this->input->post('address');
//        $entertime=$this->input->post('entertime');
        $count=$this->input->post('balance_internet');
        $balance_state=$this->input->post('balance_state');
        $balance_style=$this->input->post('balance_style');
        date_default_timezone_set("Asia/Shanghai");
        $entertime=date('Y-m-d H:i:s');
        $this->load->model('user_model');
        $row=$this->user_model->create_user($username,$sex,$age,$telephone,$address,$entertime);
        if($row) {
            $person=$this->user_model->find_user_id($username);
            if($person) {
                if($count=='入网'){
                    $balance_money = '500';
                }
                else if($count=='退网'){
                    $balance_money = '-500';
                }
                else if($count=='拆户'){
                    $balance_money = '-600';
                }
                else if($count=='过户'){
                    $balance_money = '-700';
                }
                $this->load->model('balance_model');
                $balance=$this->balance_model->create_balance($person->user_id,$balance_money,$balance_state,$balance_style);

                if($balance)
                    echo '1';//新建用户成功
                else echo '0';
            }
            else echo '0';

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
        $address=$this->input->post('address');
        $count=$this->input->post('balance_internet');
        $balance_state=$this->input->post('balance_state');
        $balance_style=$this->input->post('balance_style');
        $this->load->model('user_model');
        $row=$this->user_model->update_user($username,$sex,$age,$telephone,$address);
        if($row) {

            $person=$this->user_model->find_user_id($username);
            if($person) {
                if($count=='入网'){
                    $balance_money = '500';
                }
                else if($count=='退网'){
                    $balance_money = '-500';
                }
                else if($count=='拆户'){
                    $balance_money = '-600';
                }
                else if($count=='过户'){
                    $balance_money = '-700';
                }
                $this->load->model('balance_model');
                $balance=$this->balance_model->update_balance($person->user_id,$balance_money,$balance_state,$balance_style);

                if($row || $balance)
                    echo '1';//更新用户成功
                else echo '0';
            }
            else echo '0';

        } else {
            echo '0';//更新用户失败
        }
    }

    public function find_user_information() {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $user_name = $this->input->post('username');
        $this->load->model('user_model');
        $row=$this->user_model->find_user_information($user_name);
        if($row) {
            echo json_encode($row);
        } else {
            echo '0';
        }

    }

    public function pay_information() {//缴费信息
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $this->load->model('balance_model');
        $row=$this->balance_model->pay_information();
        if($row) {
            echo json_encode($row);
        } else {
            echo '0';
        }

    }

    public function arrears_information() {//欠费信息
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Headers:DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Max-Age: 1728000');
        $this->load->model('balance_model');
        $row=$this->balance_model->arrears_information();
        if($row) {
            echo json_encode($row);
        } else {
            echo '0';
        }

    }
}

