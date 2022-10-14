<?php 
require_once("modal/modal.php");
class controller extends modal{
    public function __construct()
    {
        parent::__construct();

        if(isset($_POST['reg'])){
            date_default_timezone_set("Asia/calcutta");
            $fname=$_POST['txt_fname'];
            $lname=$_POST['txt_lname'];
            $email=$_POST['txt_email'];
            $pass=$_POST['txt_pass'];
            $cpass=$_POST['txt_cpass'];
            $gander=$_POST['gander'];
            $tname=$_FILES['img']['tmp_name'];
            $path="uploads/".$_FILES['img']['name'];
            move_uploaded_file($tname,$path);
            $rdatetime=date("d-m-Y h:i:s A");
            $state=$_POST['state'];
            $city=$_POST['city'];
            $data=array("text_fname"=>$fname,"text_lname"=>$lname,"text_email"=>$email,"text_password"=>$pass,"text_gander"=>$gander,"sid"=>$state,"ctid"=>$city,
            "emp_photo"=>$path,"rdatetime"=>$rdatetime,);
            if($pass==$cpass){
                $chk=$this->insert_data('tbl_employee',$data);
                if($chk){
                    echo "<script>
                    alert('you are register successfully')
                    window.location='emp_table'
                    </script>";
                }
            }else
            {
                echo "<script>
                alert('you are password does not match try again')
                window.location='./'
                </script>";
            }
             }
             //delete employee data here 
             if(isset($_GET['emp_id']))
             {
                $eid=$_GET['emp_id'];
                $data=array("eid"=>$eid);
                $chk=$this->delete_employee('tbl_employee',$data);
                if($chk){
                    echo "<script>
                    alert('you are data successfully deleted')
                    window.location='emp_table'
                    </script>";
                }
             }
             //fetch data from table here
             $chk=$this->select_data("tbl_employee","tbl_state", "tbl_city","tbl_employee.sid=tbl_state.sid","tbl_employee.ctid=tbl_city.ctid");
             //select data from table here
             $st=$this->fetch_data('tbl_state');
             $ct=$this->fetch_data('tbl_city');

            

        if(isset($_SERVER['PATH_INFO'])){
            switch($_SERVER['PATH_INFO']){

                    case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("content.php");
                    require_once("emp_data.php");
                    break;
                    
                    case '/emp_table':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("content.php");
                        require_once("emp_data.php");
                        break;
                        
                    default:
                    require_once("index.php");
                    require_once("header.php");
                    //require_once("footer.php");
                    break;
            }
        }

    }
}
$obj=new controller();
?>